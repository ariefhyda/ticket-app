<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Auth extends Controller
{
    public function index(Request $request)
    {
        if (Session::has('login')){
            return redirect(url('/buy-ticket'));
          }
        return view('public.sign-in');
    }

    public function sign_up(Request $request)
    {
        return view('public.sign-up');
    }

    public function login(Request $request)
    {
        $req = json_decode($request->data);
        $where['email'] = $req->email;
        $stmt = DB::table('users')->where($where);

        if ($stmt->count() > 0) {
            $dt = $stmt->first();            
              // Checking Username Password
            if (password_verify($req->password, $dt->password)) {
                $this->createSession($dt); 
                $data['message'] = 'Login success! Have nice day :)';
                $data['status'] = true;
                if ($dt->level=='1') {
                    $data['link'] = url('/admin');
                }else {
                    $data['link'] = url('/my-ticket');
                }
                return response()->json($data, 200);             
            }else {            
                //user tidak ada
                return response()->json(['message'=>'Login error! Password not valid','status'=>false], 200);                 
                
            }
        }else {            
            //user tidak ada
            return response()->json(['message'=>'Login error! Email not found','status'=>false], 200);                 
            
        }

    }

    public function createSession($dt)
    {
		Session::flush();
        $session['id'] = $dt->id;
        $session['name'] = $dt->name;
        $session['email'] = $dt->email;
        $session['phone'] = $dt->phone;
        $session['level'] = $dt->level;
        $session['login'] = true;
        if ($dt->level=='1') {
            $data['is_admin'] = true;
        }else {
            $data['is_user'] = true;
        }
        Session::put($session);
    }

    public function logOut(Request $request){
        $request->session()->flush();
        return redirect(url('/auth'));
    }
}
