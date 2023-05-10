<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    public function index(Request $request)
    {
        $data = array(
            'tiket' => DB::table('ticket_price')->get()
        );
        return view('public.index',$data);
    }

    public function my_ticket(Type $var = null)
    {
        # code...
    }
}
