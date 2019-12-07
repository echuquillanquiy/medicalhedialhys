<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use DB;

class ChartController extends Controller
{
    public function orders()
    {
    	$monthlyCounts = Order::select(
    			DB::raw('MONTH(created_at) as month'), 
    			DB::raw('COUNT(1) as count'))
    		->groupBy('month')
    		->get()
    		->toArray();

    		$counts = array_fill(0,12,0);
    		foreach ($monthlyCounts as $monthlyCount) {
    			$index = $monthlyCount['month']-1;
    			$counts[$index] = $monthlyCount['count'];
    		}

    	return view('charts.orders', compact('counts'));
    }

}
