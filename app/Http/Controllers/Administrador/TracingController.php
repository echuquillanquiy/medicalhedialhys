<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tracing;
use App\Patient;
use App\Room;
use App\Shift;

class TracingController extends Controller
{
    public function index()
    {
        $tracings = Tracing::orderBy('id', 'desc')->paginate(50);
        return view('tracings.index', compact('tracings'));
    }

    public function create()
    {
        $patients = Patient::all();
        $rooms = Room::all();
        $shifts = Shift::all();
        
        return view('tracings.create', compact('patients', 'rooms', 'shifts'));
    }

    private function performValidation(Request $request)
    {
        $rules = [
           'patient_id' => 'required',
           'room_id' => 'required',
           'shift_id' => 'required'
        ];

        $messages = [
            'patient_id.required' => 'Por favor seleccionar un paciente.',
            'room_id.required' => 'Por favor seleccionar una Sala.',
            'shift_id.required' => 'Por favor seleccionar un Turno.'
        ];

        $this->validate($request, $rules, $messages);  
    }

    public function store(Request $request)
    {   
        $this->performValidation($request);
        $existsOrdersToday = Tracing::where('patient_id', $request->input('patient_id'))
            ->whereDate('created_at', date('Y-m-d'))->exists();
        if ($existsOrdersToday) {
            $notification = 'Este paciente ya tiene un seguimiento registrado hoy. Intente nuevamente mañana.';
            return redirect('/tracings')->with(compact('notification'));            
        }

        $tracing = Tracing::create($request->all());
        $tracings_data = [
            'tracing_id' => $tracing->id,
            'patient' => $tracing->patient->name,
            'room' => $tracing->room->name,
            'shift' => $tracing->shift->name
        ];

        $format006s = $tracing->format006()->create($tracings_data);
        $notification = 'Se registro el seguimiento correctamente.';
        return redirect('/tracings')->with(compact('notification'));
    }

    public function edit ($id)
    {
        $patients = Patient::all();
        $rooms = Room::all();
        $shifts = Shift::all();
        $tracing = Tracing::findOrFail($id);

        return view('tracings.edit', compact('tracing','patients', 'rooms', 'shifts'));
    }

    public function update (Request $request, $id)
    {
        $tracing = Tracing::findOrFail($id);

        $data = $request->only([
            'room_id',
            'shift_id'
        ]);

        $tracing->fill($data);
        $tracing->save();

        $notification = 'El seguimiento se ha actualizado correctamente.';
        return redirect('/tracings')->with(compact('notification'));

    }

    public function showPdf($tracing)
    {
        $tracing = Tracing::findOrFail($tracing);

        $pdf = PDF::loadView('tracings.impresion', compact('tracing'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream();
    }

    public function destroy(Tracing $tracing)
    {
        $tracingName = $tracing->patient->name;
        $tracing->format006->delete();
        $tracing->delete();

        $notification = "El seguimiento del paciente: $tracingName se ha eliminado correctamente.";
        return redirect('/tracings')->with(compact('notification'));
    }
}
