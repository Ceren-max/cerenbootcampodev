<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function  loginView()
    {
     return view('users.login');
    }

    public function  login(Request $request)

    { //$data =$request->all(); tüm verileri aynı anda alırken
        $users=User::all();
        $email=$request->get('email');//verileri almak için
        $password=$request->get('password');
        //$hashedPassword=Hash::make($password);daha sonra anlatılıcak
        $user=User::where('email',$email)->where('password',$password)->first();


        if(isset($user))//değişken dolu mu diye bakıor
        {
            return view('users.index',compact('users'));
        }
        else{
            return'böyle bir kullanıcı bulunamadı';
        }
    }

}
