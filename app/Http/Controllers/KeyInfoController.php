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
    	$lockinfo = LockInfo::query()->where('enabled', '=', 1)->get();
    	
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
    	$inputs = \Request::only('enabled','keyid','keyname','username','lockinfoid','start_service_date','end_service_date');
		$keyinf = new KeyInfo;
    	if( !$inputs["enabled"] ){
			$keyinf->enabled = 0;
    	}
    	else{
			$keyinf->enabled = 1;
    	}
		$keyinf->keyid = $inputs["keyid"];
		$keyinf->keyname = $inputs["keyname"];
		$keyinf->username = $inputs["username"];
		$keyinf->lockinfoid = $inputs["lockinfoid"];
		$keyinf->start_service_date = $inputs["start_service_date"];
		$keyinf->end_service_date = $inputs["end_service_date"];
		$keyinf->save();

		return redirect('/keyinfo/');
    }
    public function edit($id)
    {
        $keyinf = KeyInfo::find($id);
    	$lockinfo = LockInfo::query()->where('enabled', '=', 1)->get();
        //
		return view('keyinfo.edit')->with(['keyinfo'=>$keyinf,'lockinfo'=>$lockinfo]);
    }
    public function postedit($id)
    {
    	$inputs = \Request::only('id','enabled','keyid','keyname','username','lockinfoid','start_service_date','end_service_date');
        $keyinf = KeyInfo::find($id);
    	if( !$inputs["enabled"] ){
			$keyinf->enabled = 0;
    	}
    	else{
			$keyinf->enabled = 1;
    	}
		$keyinf->keyid = $inputs["keyid"];
		$keyinf->keyname = $inputs["keyname"];
		$keyinf->username = $inputs["username"];
		$keyinf->lockinfoid = $inputs["lockinfoid"];
		$keyinf->start_service_date = $inputs["start_service_date"];
		$keyinf->end_service_date = $inputs["end_service_date"];
		$keyinf->save();
    	$lockinfo = LockInfo::all();

		return view('keyinfo.edit')->with(['keyinfo'=>$keyinf,'lockinfo'=>$lockinfo]);
    }
    public function delete($id)
    {
        $keyinf = KeyInfo::find($id);
        $keyinf->delete();
		return redirect('/keyinfo/');
    }


}
