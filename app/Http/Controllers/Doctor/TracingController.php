<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tracing;

class TracingController extends Controller
{
    public function index()
    {
        $tracings = Tracing::orderBy('id', 'desc')->paginate(30);
        return view('tracings.index', compact('tracings'));
    }
}
