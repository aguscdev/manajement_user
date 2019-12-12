<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajementController extends Controller
{
    //
    public function project()
    {
    	return view('manajement.project');
    }
    public function partner()
    {
    	return view('manajement.partner');
    }
    public function modul()
    {
    	return view('manajement.modul');
    }
    public function customer()
    {
    	return view('manajement.customer');
    }
    public function user()
    {
    	return view('manajement.user');
    }
    public function master_data()
    {
    	return view('manajement.master-data');
    }
}
