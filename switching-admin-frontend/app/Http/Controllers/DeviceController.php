<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Merchant;
use App\Models\Device;

class DeviceController extends Controller
{
    //create device
    public function create($id){
        $merchant=Merchant::where('id','=',$id)->first();
        return view('devices.create',compact('merchant'));
    }

    //add devices
    public function store(Request $request){
        $device = new Device();
        $device->imei=$request->imei;
        $device->status=$request->status;
        $device->name=$request->name;
        $device->pos_sim_number=$request->pos_sim_number;
        $device->agent_id=$request->agent_id;
        $device->terminal_id=$request->terminal_id;
        $device->serial_number=$request->serial_number;
        $device->pos_type=$request->pos_type;
        $device->save();

        return redirect()->route('device.index')
                        ->with('success','Device added successfully.');
    }

    //show devices
    public function show(){
        $records=Device::all();
        return view('devices.index',compact('records'));
    }

    public function edit($id)
    {
        $record=Device::find($id);
        return view('devices.edit',compact('record'));
    }

    //update device
    public function update(Request $request, $id)
      {
            $device = Device::find($id);
            $device->imei=$request->imei;
            $device->name=$request->name;
            $device->serial_number=$request->serial_number;
            $device->status=$request->status;
            $device->terminal_id=$request->terminal_id;
            $device->pos_type=$request->pos_type;
            $device->update();
            return redirect()->route('device.index')
                        ->with('success','Device details updated successfully');
      }

    //delete device
    public function remove($id){
        $record= Device::find($id);
        $record->status='DELETED'; 
        $record->update();
        return redirect()->route('device.index')
                    ->with('success','Device deleted successfully');
    }
    
}