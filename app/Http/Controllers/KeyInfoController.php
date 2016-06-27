<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\KeyInfo;
use App\LockInfo;

class KeyInfoController extends Controller
{
    //
    public function index()
    {
        //
		$query = KeyInfo::query();
		$keyinfolist = $query->paginate(30);
		return view('keyinfo.index')->with('keyinfolist',$keyinfolist);
    }
    public function create()
    {
    	$lockinfo = LockInfo::all();
    	
		return view('keyinfo.create')->with('lockinfo',$lockinfo);
	}
    public function postcreate()
    {
		$val=\Validator::make($request->all(),[
			'keyid'=>'required',
			'username'=>'required',
		]);
		if($val->fails()){
			return redirect()->back()->withErrors($val->errors());
		}


	        //
		return view('keyinfo.create');
    }
    public function edit($id)
    {
        //
	return view('keyinfo.edit');
    }
    public function delete($id)
    {
        //
	return view('keyinfo.delete');
    }


}
