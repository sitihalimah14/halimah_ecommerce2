<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Product;
use App\Order;
use Illuminate\Support\Carbon;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $productCount = Product::count();
        $shippingCount = Order::where('status','2')->count();
        $currentDate = Carbon::now()->toDateString();
        $totalRevenue = Order::whereDate('Created_at', $currentDate)->sum('subtotal');

        $startDate = Carbon::now()->subDays(7); //tanggal 7 hari yang lalu
        $endDate = Carbon::now(); //tanggalhariini

        $registeredUsersCount = Customer::whereBetween('Created_at',[$startDate, $endDate])->count();
        return view('home',  compact('productCount', 'shippingCount', 'totalRevenue', 'registeredUsersCount'));
    }
}
