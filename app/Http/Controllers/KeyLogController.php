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
//        $loglist = KeyLog::all();
		$query = KeyLog::query();
		$loglist = $query->paginate(30);
        $inputs["keyname"] = "";
        $inputs["keyid"] = "";
        $inputs["username"] = "";
        $inputs["lock_status"] = "";
		return view('keylog.index')->with(['loglist'=>$loglist,'inputs'=>$inputs]);
    }
    public function search(Request $request)
    {
        //
    	$inputs = \Request::only('enabled','keyid','keyname','username','lockinfoid','start_service_date','end_service_date');


        $keyname = $inputs['keyname'];
        $keyid = $request->input('keyid');
        $username = $request->input('username');
        $lock_status = $request->input('lock_status');

		logger($lock_status);

		$query = KeyLog::query();
		if( $inputs['keyname'] ){
			$query->where('keyname','like','%'.$inputs['keyname'].'%');
		}
		if( $inputs['keyid'] ){
			$query->where('keyid','like','%'.$inputs['keyid'].'%');
		}
		if( $inputs['username'] ){
			$query->where('username','like','%'.$inputs['username'].'%');
		}
		if( $inputs['lock_status'] ){
			$query->where('lock_status',$inputs['lock_status']);
		}

		$loglist = $query->paginate(30);
		return view('keylog.index')->with(['loglist'=>$loglist,'inputs'=>$inputs]);
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
    public function delete($id)
    {
        //
        
        KeyLog::destroy($id);

		$query = KeyLog::query();
		$loglist = $query->paginate(30);

        $inputs["keyname"] = "";
        $inputs["keyid"] = "";
        $inputs["username"] = "";
        $inputs["lock_status"] = "";
		return view('keylog.index')->with(['loglist'=>$loglist,'inputs'=>$inputs]);
    }


}
