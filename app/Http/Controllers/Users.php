<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;

class Users extends Controller
{
    public function index(Request $request)
    {
        $data = array(
            'tiket' => DB::table('ticket_price')->get()
        );
        return view('public.index',$data);
    }

    public function my_ticket(Request $request)
    {
        $data = array(
            'ticket' => DB::table('ticket')
            ->join('transaction', 'ticket.transaction_id', '=', 'transaction.id')
            ->join('ticket_price', 'ticket_price.id', '=', 'transaction.ticket_price_id')
            ->where('user_id',Session::get('id'))->get()
        );
        return view('user.my-ticket',$data);
    }

    public function buy_ticket(Request $request)
    {
        $data = array(
            'ticket' => DB::table('ticket_price')->where('id',$request->id)->first(),            
            'bank' => DB::table('bank')->get()
        );
        return view('user.buy-ticket',$data);
    }

    public function act_buy_ticket(Request $request)
    {
        $req = json_decode($request->data);
        $transaction_code = Str::random(8);
        $data=array(
            'user_id'=>Session::get('id'),
            'transaction_code'=>$transaction_code,
            'bank_id'=>$req->bank,
            'ticket_price_id'=>$req->ticket,
            'quantity'=>$req->qty,
            'price'=>$req->price,
            'total'=>$req->total,
            'created_at' => date('Y-m-d H:i:s')
        );

        $insert = DB::table('transaction')->insertGetId($data);
        if ($insert) {
            return response()->json(['message'=>'Success','id'=>$insert,'status'=>true], 200); 
        }else{
            return response()->json(['message'=>'Error! Something went wrong','status'=>false], 200); 
        }
    }

    public function payment_verification(Request $request)
    {
        $data=array(
            'transaction'=>DB::table('transaction')->where('user_id',Session::get('id'))->get(),           
        );
        return view('user.payment-verification',$data);
    }


    public function upload_proof(Request $request)
    {
        $file = $request->file('file');
        $ext = strtolower($file->getClientOriginalExtension());
        $nama_file = "upload_".time().'.'.$ext;
        $tujuan_upload = './uploads/';
        $file->move($tujuan_upload,$nama_file);
        
        $data = array(
            'updated_at'=>date('Y-m-d H:i:s'),
            'proof_of_payment' => $nama_file 
        );
        
        $in =DB::table('transaction')->where('id',$request->id)->update($data);
        
        if ($in) {
            return redirect('/payment-verification');
        }else {
            return redirect('/payment-verification');
        }  
        
    }
}
