<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LockInfoController extends Controller
{
    //
    public function index()
    {
        //
	return view('lockinfo.index');
    }
    public function create()
    {
        //
	return view('lockinfo.create');
    }
    public function edit()
    {
        //
	return view('lockinfo.edit');
    }
    public function delete()
    {
        //
	return view('lockinfo.index');
    }
}
