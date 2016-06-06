<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\KeyLog;
	
class KeyLogController extends Controller
{
    //
    public function index()
    {
        //
        $loglist = KeyLog::all();
		return view('keylog.index')->with('loglist',$loglist);
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
