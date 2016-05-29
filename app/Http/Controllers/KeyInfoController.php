<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KeyInfoController extends Controller
{
    //
    public function index()
    {
        //
	return view('keyinfo.index');
    }
    public function create()
    {
        //
	return view('keyinfo.create');
    }
    public function edit()
    {
        //
	return view('keyinfo.edit');
    }
    public function delete()
    {
        //
	return view('keyinfo.delete');
    }


}
