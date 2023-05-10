<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

        // $data=array(
        //     'user_id'=>
        // );
    }
}
