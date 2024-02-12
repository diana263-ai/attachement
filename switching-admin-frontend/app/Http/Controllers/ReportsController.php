<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class ReportsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view_all()
    {
        return view('pages.reports.view-all');
    }

    public function employees_consumption_report()
    {
        return view('pages.reports.employees-consumption-report');
    }

    public function erp_transaction_report()
    {
        return view('pages.reports.erp-transaction-report');
    }

    public function mileage_report()
    {
        return view('pages.reports.mileage-report');
    }

    public function service_stations_transaction_report()
    {
        return view('pages.reports.service-stations-transaction-report');
    }

}
