<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LockInfo;

class LockInfoController extends Controller
{
    //
    public function index()
    {
        //
		$query = LockInfo::query();
		$lockinfolist = $query->paginate(30);
		return view('lockinfo.index')->with('lockinfolist',$lockinfolist);
    }
    public function create()
    {
        //
		return view('lockinfo.create');
    }
    public function postcreate()
    {
    	
    	$inputs = \Request::all();
    	LockInfo::create($inputs);
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
