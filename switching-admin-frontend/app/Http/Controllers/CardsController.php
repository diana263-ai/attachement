<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class CardsController extends Controller
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
        return view('pages.cards.view-all');
    }

    public function add_new_card()
    {
        return view('pages.cards.add-new-card');
    }

    public function pending_transfer()
    {
        return view('pages.cards.pending-transfer');
    }
}
