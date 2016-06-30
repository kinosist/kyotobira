<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LockInfo;
use App\DeviceInfo;

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
        $devlist = DeviceInfo::getUnused();
		return view('lockinfo.create')->with('device_list',$devlist);
    }
    public function postcreate()
    {
    	
    	//$inputs = \Request::all();
    	$inputs = \Request::only('enabled','lockname','place','lockstatus','start_use_date','end_use_date');
		$lockinf = new LockInfo;
    	if( !$inputs["enabled"] ){
			$lockinf->enabled = 0;
    	}
    	else{
			$lockinf->enabled = 1;
    	}
		$lockinf->lockname = $inputs["lockname"];
		$lockinf->place = $inputs["place"];
		$lockinf->lockstatus = $inputs["lockstatus"];
		$lockinf->start_use_date = $inputs["start_use_date"];
		$lockinf->end_use_date = $inputs["end_use_date"];
		$lockinf->save();

		return redirect('/lockinfo/');
    }
    public function edit($id)
    {
        //
        $lockinf = LockInfo::find($id);
		return view('lockinfo.edit')->with('lockinfo',$lockinf);
    }
    public function postedit($id)
    {
        //
    	$inputs = \Request::only('id','enabled','lockname','place','lockstatus','start_use_date','end_use_date');
        $lockinf = LockInfo::find($id);
    	if( !$inputs["enabled"] ){
			$lockinf->enabled = 0;
    	}
    	else{
			$lockinf->enabled = 1;
    	}
		$lockinf->lockname = $inputs["lockname"];
		$lockinf->place = $inputs["place"];
		$lockinf->lockstatus = $inputs["lockstatus"];
		$lockinf->start_use_date = $inputs["start_use_date"];
		$lockinf->end_use_date = $inputs["end_use_date"];
		$lockinf->save();

		return view('lockinfo.edit')->with('lockinfo',$lockinf);
    }
    public function delete($id)
    {
        //
        $lockinf = LockInfo::find($id);
        $lockinf->delete();
		return redirect('/lockinfo/');
    }
}
