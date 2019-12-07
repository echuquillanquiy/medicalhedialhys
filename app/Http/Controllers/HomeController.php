<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use App\Patient;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $date = date('Y-m-d');
        $total_users = User::all()->count();
        $total_patients = Patient::all()->count();
        $total_orders = Order::all()->count();       

        $room_yellow = Order::where('room_id', '1')->whereDate('created_at', $date)->count();
        $room_green = Order::where('room_id', '2')->whereDate('created_at', $date)->count();
        $room_blue = Order::where('room_id', '3')->whereDate('created_at', $date)->count();

        return view('home', compact('room_green', 'room_yellow', 'room_blue', 'total_users','total_patients', 'total_orders'));
    }
}
