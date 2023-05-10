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
            if (Session::get('level')==1) {
                return redirect(url('/admin/scan'));
            }else{

                return redirect(url('/my-ticket'));
            }
          }
        return view('public.sign-in');
    }

    public function signup(Request $request)
    {
        if ($request->ajax()) {
            $req = json_decode($request->data);
            $data=array(
                'name'=>$req->name,
                'phone'=>$req->phone,
                'email'=>$req->email,
                'level'=>'2',
                'password'=> password_hash($req->password, PASSWORD_ARGON2ID),
                'created_at' => date('Y-m-d H:i:s')
            );
            $insert = DB::table('users')->insertGetId($data);
            if ($insert) {
                return response()->json(['message'=>'Success creating user.','status'=>true], 200); 
            }else{
                return response()->json(['message'=>'Error! Something went wrong','status'=>false], 200); 
            }
        }
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
                if ($dt->level==1) {
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
        if ($dt->level==1) {
            $session['is_admin'] = true;
        }else {
            $session['is_user'] = true;
        }
        Session::put($session);
    }

    public function logOut(Request $request){
        $request->session()->flush();
        return redirect(url('/auth'));
    }
}
