<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class FundsTransferController extends Controller
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
    public function individual_topup()
    {
        return view('pages.funds_transfer.individual-topup');
    }

    public function bulk_topup()
    {
        return view('pages.funds_transfer.bulk-topup');
    }

    public function company_topup()
    {
        return view('pages.funds_transfer.company-topup');
    }

    public function pending_topup()
    {
        return view('pages.funds_transfer.pending-topup');
    }

}
