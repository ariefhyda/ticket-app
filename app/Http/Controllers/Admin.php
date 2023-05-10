<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;

class Admin extends Controller
{
    public function scan(Request $request)
    {   
        if ($request->ajax()) {
            $in =DB::table('ticket')->where('code',$request->code)->update(['check_in'=>true]);
            if ($in) {
                return response()->json(['message'=>'Success checkin!','status'=>true], 200); 
            }else{
                return response()->json(['message'=>'Error! Something went wrong','status'=>false], 200); 
            }
        }
        return view('admin.scan');
    }

    public function payment_verification(Request $request)
    {
        if ($request->ajax()) {
            $in = DB::table('transaction')->where('id',$request->id)->update(['payment_status'=>true]);
            $this->create_ticket($request->id);
            if ($in) {
                return response()->json(['message'=>'Success','status'=>true], 200); 
            }else{
                return response()->json(['message'=>'Error! Something went wrong','status'=>false], 200); 
            }
        }

        $data=array(
            'transaction'=>DB::table('transaction')->get(),           
        );
        return view('admin.payment-verification',$data);
    }


    public function create_ticket($id)
    {
        $get = DB::table('transaction')->where('id',$id)->first();

        for ($i=0; $i < $get->quantity; $i++) {  
            $data['code'] = Str::random(10); 
            $data['transaction_id'] = $id;
            DB::table('ticket')->insert($data);
        }

    }

    public function users(Request $request)
    {
        $data=array(
            'users'=>DB::table('users')->get(),           
        );
        return view('admin.users',$data);
    }

    public function ticket(Request $request)
    {
        if ($request->ajax()) {
            $in =DB::table('ticket')->where('id',$request->id)->update(['check_in'=>true]);
            if ($in) {
                return response()->json(['message'=>'Success','status'=>true], 200); 
            }else{
                return response()->json(['message'=>'Error! Something went wrong','status'=>false], 200); 
            }
        }

        $data=array(
            'ticket'=> DB::table('ticket')->get(), 
            'checked'=> DB::table('ticket')->where('check_in',true)->count(),
            'not_checked'=> DB::table('ticket')->where('check_in',false)->count(),

        );
        return view('admin.ticket',$data);
    }

    
}
