<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;

use App\Room;

use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
    	return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
    	return view('rooms.create');
    }

    private function performValidation(Request $request)
    {
        $rules = [
            'name' => 'required|min:4',
            'description' => 'min:10'
        ];

        $messages = [
            'name.required' => 'Es necesario ingresar un nombre.',
            'name.min' => 'El nombre de la Sala tener como mínimo 4 carácteres',
            'description.min' => 'La descripción debe tener como mínimo 10 carácteres.'
        ];

        $this->validate($request, $rules, $messages);  
    }

    public function store(Request $request)
    {
    	//dd($request->all());

        $this->performValidation($request);

    	$room = new Room();
    	$room->name = $request->input('name');
    	$room->description = $request->input('description');
    	$room->save();

        $notification = 'La sala se a registrado correctamente.';

    	return redirect('/rooms')->with(compact('notification'));
    }

    public function edit (Room $room)
    {

        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        //dd($request->all());
        $this->performValidation($request); 

        $room->name = $request->input('name');
        $room->description = $request->input('description');
        $room->save();

        $notification = 'La sala se a actualizado correctamente.';

        return redirect('/rooms')->with(compact('notification'));
    }

    public function destroy(Room $room)
    {
        $deleteRoom = $room->name;
        $room->delete();

        $notification = 'La sala '.$deleteRoom .' se a eliminado correctamente.';
        return redirect('/rooms')->with(compact('notification'));
    }
}
