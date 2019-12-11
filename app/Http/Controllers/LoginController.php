<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function proses(Request $request)
    {
    	// $data = new User;
    	// $data->name='idham';
    	// $data->email='idham@gmail.com';
    	// $data->level='operator';
    	// $data->password=Hash::make('123456');
    	// $data->save();
    	$name = $request->name;
    	$password = $request->password;
    	if (Auth::attempt(["name"=>$name,"password"=>$password])) {
    		// return redirect("/home");
            return redirect("/home/home");
    	}else {
    		return redirect("/login");
    	}
    }

    public function home()
    {

    	// return view('home');
        return view('/home/home');
    }

    public function logout()
    {
    	Auth::logout();
  		return redirect("/login");
    }
    
}
