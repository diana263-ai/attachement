<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Merchant;
use App\Models\Device;
use App\Models\Transaction;
use Carbon\Carbon;

class TransactionController extends Controller
{
    //view all transactions
    public function show(){
        $transactions=Transaction::all();
        return view('transactions.view',compact('transactions'));
    }

    //filter by date
    public function filter(Request $request){
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $transactions = Transaction::whereBetween('transaction_date',[$start_date,$end_date])->get();
        } else {
            $transactions  =Transaction::latest()->get();
        }
        return view('transactions.view', compact('transactions'));
    }

    //show today 's transactions for specific merchant
    public function view($id){
        $merchant=Merchant::where('id','=',$id)->get();
        $transactions=Transaction::where('agent_id','=',$id)->get();
        $transactions = Transaction::whereDate('transaction_date', Carbon::today())->get();
        return view('transactions.show',compact('merchant','transactions'))->with([
            'id' => $id
        ]);

    }

    //filter 20 records for specific merchant
    public function transactionsView($id) {
         $transactions=Transaction::where('agent_id','=',$id)->take(20)->get();
        return view('transactions.show',compact('transactions'))->with([
            'id' => $id
        ]);

    }
    //filter by terminal_id
    public function filterByTerminalId(Request $request){
        $terminal_id = $request->input('terminal_id');
        $transactions = Transaction::where('terminal_id', $terminal_id )->get();
            return view('transactions.view', compact('transactions'));
    }
    //filter by agent_id
    public function filterByAgentId(Request $request){
        $agent_id = $request->input('agent_id');
        $transactions = Transaction::where('agent_id', $agent_id )->get();
            return view('transactions.view', compact('transactions'));
    }
}