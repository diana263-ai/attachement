<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Merchant;
use App\Models\Device;
use Illuminate\Support\Facades\Validator;

class MerchantController extends Controller
{
    public function index()
    {
        $records=Merchant::all();
        return view('merchants.index',compact('records'));
    }

    public function create()
    {
        return view('merchants.create');
    }
    public function store(Request $request)
    {

        $validator=Validator::make($request->all(),[
            'name' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'account' => 'required|numeric|digits:16',
            'email' => 'required',
            'cellphone' => 'required|numeric|digits:10',
        ]);
        if ($validator->fails()) {
            return redirect()->route('merchants.create')->with('error','Account Number Must be 16 digits, 
            Cellphone Must Be 10 digits');
        }
      
        $merchant = new Merchant();
        $merchant->name=$request->name;
        $merchant->firstname=$request->firstname;
        $merchant->lastname=$request->lastname;
        $merchant->account=$request->account;
        $merchant->email=$request->email;
        $merchant->cellphone=$request->cellphone;
        $merchant->company_name=$request->company_name;
        $merchant->registration_date=$request->registration_date;
        $merchant->bank_name=$request->bank_name;
        $merchant->address=$request->address;
        $merchant->save();

        return redirect()->route('merchants.index')
                        ->with('success','Merchant created successfully.');
    }
    public function show($id)
    {
        $devicez=Device::where('id','=',$id)->get();
        $merchant=Merchant::where('id','=',$id)->first();
        return view('merchants.index',compact('merchant','devicez'));
    }

    public function edit($id)
    {
        $record=Merchant::find($id);
        return view('merchants.edit',compact('record'));
    }
    public function update(Request $request, $id)
    {
        
        $merchant =Merchant::find($id);
        $merchant->name=$request->name;
        $merchant->firstname=$request->firstname;
        $merchant->lastname=$request->lastname;
        $merchant->account=$request->account;
        $merchant->email=$request->email;
        $merchant->cellphone=$request->cellphone;
        $merchant->company_name=$request->company_name;
        $merchant->registration_date=$request->registration_date;
        $merchant->bank_name=$request->bank_name;
        $merchant->address=$request->address;
        $merchant->update();

        return redirect()->route('merchants.index')
                        ->with('success','Merchant updated successfully.');
    }

    public function destroy($id)
    {
        $records=Merchant::findorFail($id)
                 ->delete();
                 return view('merchants.index', ['records' => $records])
                     ->with('success','Merchant deleted successfully');
    }
}
