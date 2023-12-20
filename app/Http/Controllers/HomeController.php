<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(Request $request)
    {
        $today_sale = DB::table('sales')
            ->whereDate('created_at', date('Y-m-d'))->sum('amount');
        $yesterday_sale = DB::table('sales')
            ->whereDate('created_at', Carbon::yesterday())->sum('amount');
        $thismonth_sale = DB::table('sales')
            ->whereMonth('created_at', Carbon::now()->month)
            ->sum('amount');
        ;
        $lastmonth_sale = DB::table('sales')
            ->whereMonth('created_at', '=', Carbon::now()->subMonth()->month)
            ->sum('amount');
        
        $data = array(
            ['title' => 'Today Sale', 'sale' => $today_sale],
            ['title' => 'Yesterday Sale', 'sale' => $yesterday_sale],
            ['title' => 'This Month Sale', 'sale' => $thismonth_sale],
            ['title' => 'Last Month Sale', 'sale' => $lastmonth_sale],
        );

       // return $lastmonth_sale;

        return view('pages.home', compact('data'));

        //return view('pages.order', compact(''));
    }
}
