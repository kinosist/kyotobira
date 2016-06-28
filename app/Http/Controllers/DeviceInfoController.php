<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DeviceInfo;
use App\KeyInfo;

class DeviceInfoController extends Controller
{
    public function index()
    {
		$query = DeviceInfo::query();
		$deviceinfolist = $query->paginate(30);
		return view('deviceinfo.index')->with('deviceinfolist',$deviceinfolist);
    }
    public function create()
    {
    	$keyinfo = KeyInfo::query()->where('enabled', '=', 1)->get();
		return view('deviceinfo.create')->with('keyinfo',$keyinfo);
    }
    public function postcreate()
    {
    	$inputs = \Request::only('enabled','devicename','deviceip','keyinfoid');
		$deviceinf = new DeviceInfo;
    	if( !$inputs["enabled"] ){
			$deviceinf->enabled = 0;
    	}
    	else{
			$deviceinf->enabled = 1;
    	}
		$deviceinf->devicename = $inputs["devicename"];
		$deviceinf->deviceip = $inputs["deviceip"];
		$deviceinf->keyinfoid = $inputs["keyinfoid"];
		$deviceinf->save();


		return redirect('/deviceinfo/');
    }
    public function edit($id)
    {
    	$keyinfo = KeyInfo::query()->where('enabled', '=', 1)->orderby("id","asc")->get();
        $deviceinf = DeviceInfo::find($id);
		return view('deviceinfo.edit')->with(['deviceinfo'=>$deviceinf,'keyinfo'=>$keyinfo]);
    }
    public function postedit($id)
    {
    	$inputs = \Request::only('enabled','devicename','deviceip','keyinfoid');
        $deviceinf = DeviceInfo::find($id);
    	if( !$inputs["enabled"] ){
			$deviceinf->enabled = 0;
    	}
    	else{
			$deviceinf->enabled = 1;
    	}
		$deviceinf->devicename = $inputs["devicename"];
		$deviceinf->deviceip = $inputs["deviceip"];
		$deviceinf->keyinfoid = $inputs["keyinfoid"];
		$deviceinf->save();
    	$keyinfo = KeyInfo::query()->where('enabled', '=', 1)->get();
		return view('deviceinfo.edit')->with(['deviceinfo'=>$deviceinf,'keyinfo'=>$keyinfo]);
    }
    public function delete($id)
    {
        $deviceinf = DeviceInfo::find($id);
        $deviceinf->delete();
		return redirect('/deviceinfo/');
    }
    //
}
