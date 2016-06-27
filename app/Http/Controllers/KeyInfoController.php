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
/*
		$val=\Validator::make($request->all(),[
			'keyid'=>'required',
			'username'=>'required',
		]);
		if($val->fails()){
			return redirect()->back()->withErrors($val->errors());
		}
*/
    	$inputs = \Request::only('enabled','keyid','username','lockinfoid','start_use_date','end_use_date');
		$keyinf = new KeyInfo;
    	if( !$inputs["enabled"] ){
			$keyinf->enabled = 0;
    	}
    	else{
			$keyinf->enabled = 1;
    	}
		$keyinf->keyid = $inputs["keyid"];
		$keyinf->username = $inputs["username"];
		$keyinf->lockinfoid = $inputs["lockinfoid"];
		$keyinf->start_use_date = $inputs["start_use_date"];
		$keyinf->end_use_date = $inputs["end_use_date"];
		$keyinf->save();

		return redirect('/keyinfo/');

    }
    public function edit($id)
    {
        $keyinf = KeyInfo::find($id);
    	$lockinfo = LockInfo::all();
        //
		return view('keyinfo.edit')->with(['keyinfo'=>$keyinf,'lockinfo'=>$lockinfo]);
    }
    public function postedit($id)
    {
    	$inputs = \Request::only('enabled','keyid','username','lockinfoid','start_use_date','end_use_date');
        $keyinf = KeyInfo::find($id);
    	if( !$inputs["enabled"] ){
			$keyinf->enabled = 0;
    	}
    	else{
			$keyinf->enabled = 1;
    	}
		$keyinf->keyid = $inputs["keyid"];
		$keyinf->username = $inputs["username"];
		$keyinf->lockinfoid = $inputs["lockinfoid"];
		$keyinf->start_use_date = $inputs["start_use_date"];
		$keyinf->end_use_date = $inputs["end_use_date"];
		$keyinf->save();

		return view('lockinfo.edit')->with('lockinfo',$lockinf);
    }
    public function delete($id)
    {
        $keyinf = KeyInfo::find($id);
        $keyinf->delete();
		return redirect('/keyinfo/');
    }


}
