<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {


        return view('Customer.loginUser');
    }

    public function loginTS()
    {


        return view('Admin.loginTS');
    }

    public function register()
    {


        return view('Customer.registerUser');
    }

    public function prosesLogin(Request $request)
    {
        $credentials = $request->validate([

            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        Session::flash('status','failed');
        Session::flash('msg','Email/Password Salah!');
        // return redirect('/login');
        return redirect()->back();
    }

    public function prosesLoginTS(Request $request)
    {
        $credentials = $request->validate([

            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/ts');
        }

        Session::flash('status','failed');
        Session::flash('msg','Email/Password Salah!');
        // return redirect('/login');
        return redirect()->back();
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function prosesRegister(Request $request)
    {

        $user = new User();

        $user->email = $request->email;

        $pw = $request->password;
        $confirm = $request->confirm_password;
        if ($pw == $confirm) {
            $user->password = Hash::make($request->password);
            $user->role = 'customer';
            $user->save();
            return redirect()->to('/login');


        }
        // $user->password = $request->password;
        else if($pw != $confirm){
            Session::flash('status','failed');
            Session::flash('msg','Password tidak sama');

            return redirect()->back();

        }


        //Atur di Model Table mana yang bisa diisi supaya gak error $fillable
        // $DataMobilBaru=DataMobilBaru::create($request->all());




    }
}
