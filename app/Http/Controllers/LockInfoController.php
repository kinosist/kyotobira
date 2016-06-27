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
    	
    	//$inputs = \Request::all();
    	$inputs = \Request::only('enabled','lockname','place','start_use_date','end_use_date');
		$lockinf = new LockInfo;
    	if( !$inputs["enabled"] ){
			$lockinf->enabled = 0;
    	}
    	else{
			$lockinf->enabled = 0;
    	}
		$lockinf->lockname = $inputs["lockname"];
		$lockinf->place = $inputs["place"];
		$lockinf->start_use_date = $inputs["start_use_date"];
		$lockinf->end_use_date = $inputs["end_use_date"];
		$lockinf->save();

//    	LockInfo::create($inputs);
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
