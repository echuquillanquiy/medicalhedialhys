<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Format006;

use App\Http\Controllers\Controller;

class Format006Controller extends Controller
{
    public function index()
    {
        $format006s = Format006::orderBy('tracing_id','desc')->paginate(50);
        return view('format006s.index', compact('format006s'));
    }

    public function edit($id)
    {
        $format006 = Format006::findOrFail($id);
        return view('format006s.edit', compact('format006'));
    }

    public function update(Request $request, $id)
    {
        $format006 = Format006::findOrFail($id);

        $data = $request->all();

        $format006->fill($data);
        $format006->save();

        $notification = 'La información fue establecida correctamente.';
        return redirect('/format006s')->with(compact('notification'));
    }
}
