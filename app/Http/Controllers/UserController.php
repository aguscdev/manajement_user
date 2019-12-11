<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
     public function index()
    {
        $users=\App\User::all();
        return view('admin.index',compact('users'));
    }
    public function store(Request $request)
    {
    	   $data = new User();
           $data->name = $request->name;
           $data->alamat = $request->alamat;
           $data->usia = $request->usia;
           $data->no_telepon = $request->no_telepon;
           $data->email = $request->email;
           $data->user_role = $request->user_role;
           $data->password = $request->password;
           $data->save();
           return redirect("admin/index");
    }
    public function create(Request $request)
    {
    	return view('admin.create');
    }

    public function edit($id)
    {
        
        $users = \App\User::find($id);
        return view('admin.edit',['users' => $users]);
        // dd($users);
    }

    public function update(Request $request, $id)
    {
       $users = \App\User::find($id);
       $users ->update($request->all());
       return redirect("admin/index");
       
    }
    public function delete($id)
    {
        $users = \App\User::find($id);
        $users->delete();
        return redirect("admin/index");
    }
}

