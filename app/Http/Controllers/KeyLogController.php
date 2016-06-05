<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KeyLogController extends Controller
{
    //
    public function index()
    {
        //
	return view('keylog.index');
    }
    public function create()
    {
        //
	return view('keylog.create');
    }
    public function edit()
    {
        //
	return view('keylog.edit');
    }
    public function delete()
    {
        //
	return view('keylog.delete');
    }


}
