<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Medical;
use App\Order;
use App\Room;
use App\Shift;

use App\Http\Controllers\Controller;

class MedicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order = Order::all();
        $rooms = Room::all();
        $shifts = Shift::all();

        $patient = $request->get('patient');
        $room = $request->get('room');
        $shift = $request->get('shift');
        $created_at = $request->get('created_at');

        $medicals = Medical::orderBy('created_at', 'desc')
            ->room($room)
            ->shift($shift)
            ->created_at($created_at)
            ->paginate(50);
        return view('medicals.index', compact('medicals', 'order', 'rooms', 'shifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        return view('medicals.create');
    }*/

    public function performValidation (Request $request) {

        $rules = [
            'start_weight' => 'required|min:2',
            'start_pa' => 'required|min:2',
            'fc' => 'required|min:2',
            'clinical_trouble' => 'min:5',
            'evaluation' => 'min:10',
            'indications' => 'min:10',
            'hour_hd' => 'required|min:2',
            'heparin' => 'required|min:2',
            'dry_weight' => 'required|min:2',
            'uf' => 'required|min:4',
            'qb' => 'required|min:2',
            'qd' => 'required|min:2',
            'bathroom' => 'required|min:2',
            'temperature' => 'required|min:2',
            'cnd' => 'required|min:1',
            'start_na' => 'required|min:2',
            'end_na' => 'required|min:2',
            'area_filter' => 'required|min:2',
            'membrane' => 'required|min:2',
            'serological' => 'required|min:2',


        ];

        $messages = [

            'start_weight.required' => 'Es necesario ingresar el peso.',
            'start_pa.required' => 'Es necesario la presión inicial',
            'fc.required' => 'Es necesaria la frecuencia cardiaca',
            'clinical_trouble.min' => 'Los problemas clínicos deben tener mínimo 5 caracteres.',
            'evaluation.min' => 'La evaluación de tener mínimo 10 caracteres.',
            'indications.min' => 'La evaluación de tener mínimo 10 caracteres.',
            'hour_hd.required' => 'Las horas de HD son requeridas',
            'heparin.required' => 'La dosis de Heparina es requerida',

            'dry_weight.min' => 'el Peso seco debe tener minimo 2 caracteres.',
            'dry_weight.required' => 'el Peso seco es requerido.',

            'uf.min' => 'el Utra Filtrado debe tener minimo 4 caracteres.',
            'qb.min' => 'EL QB debe tener minimo 2 caracteres.',
            'qd.min' => 'El QD debe tener minimo 2 caracteres.',
            'bathroom.min' => 'El Baño debe tener minimo 2 caracteres.',
            'temperature.min' => 'La Temperatura debe tener minimo 2 caracteres.',
            'cnd.min' => 'El CND debe tener minimo 1 caracter.',
            'start_na.min' => 'La NA Inicial debe tener minimo 2 caracteres.',
            'end_na.min' => 'La NA Final debe tener minimo 2 caracteres.',
            'area_filter.min' => 'El Área / Filtro debe tener minimo 2 caracteres.',
            'membrane.min' => 'La membrana debe tener minimo 2 caracteres.',
            'serological.min' => 'La condición Serologica debe tener minimo 8 caracteres.',

            'uf.required' => 'el Utra Filtrado es requerido.',
            'qb.required' => 'EL QB es requerido.',
            'qd.required' => 'El QD es requerido.',
            'bathroom.required' => 'El Baño es requerido.',
            'temperature.required' => 'La Temperatura es requerido.',
            'cnd.required' => 'El CND es requerido.',
            'start_na.required' => 'La NA Inicial es requerido.',
            'end_na.required' => 'La NA Final es requerido.',
            'area_filter.required' => 'El Área / Filtro es requerido.',
            'membrane.required' => 'La membrana es requerida.',
            'serological.required' => 'La condición Serologica es requerida.',
        ];

        $this->validate($request, $rules, $messages);  

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        //$this->performValidation($request);
        $existsMedicalsToday = Medical::where('patient', $request->input('patient'))
            ->whereDate('created_at', date('Y-m-d'))->exists();

        // $from = '2019-08-01';
        // $to = $request->input();
        // ->whereBetween('created_at', [$from, $to])

        if ($existsMedicalsToday) {
            $notification = 'Este paciente ya tiene un parte medico registrada hoy. Intente nuevamente mañana.';
            return redirect('/medicals/')->with(compact('notification'));            
        }

        Medical::create($request->all());

        $notification = 'El Parte médico se ha registrado correctamente.';
        return redirect('/medicals')->with(compact('notification'));
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medical = Medical::findOrFail($id);
        return view('medicals.edit', compact('medical'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->performValidation($request);
        $medical = Medical::findOrFail($id);

        $data = $request->all();

        $medical->fill($data);
        $medical->save();

        $notification = 'El Parte Médico se ha actualizado correctamente.';
        return redirect('/medicals')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy(Medical $medical)
    {
        $medicalId = $medical->id;
        $medical->delete();

        $notification = "El parte medico N° $medicalId se ha eliminado correctamente.";
        return redirect('/medicals')->with(compact('notification'));
    }*/
}
