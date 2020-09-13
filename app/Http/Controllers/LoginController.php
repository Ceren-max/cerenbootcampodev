<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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

=======
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('users.login');
    }

    public function login(Request $request)
    {
        $users = User::all();
        $email = $request->get('email');
        $password = $request->get('password');
        //$hashedPassword = Hash::make($password); Daha sonra anlatılacak
        $user = User::where('email',$email)->where('password', $password)->first();

        if (isset($user))
        {
            return view('users.index',compact('users'));
        }
        else {
            return 'Böyle bir kullanıcı bulunamadı!';
        }
    }
>>>>>>> 373d37e3791dae0e0379ad040a688e9264169e32
}
