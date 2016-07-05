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
        $keyname = "";
        $keyid = "";
        $username = "";
        $lock_status = "";
		return view('keylog.index')->with('loglist',$loglist);
    }
    public function search(Request $request)
    {
        //
    	$inputs = \Request::only('enabled','keyid','keyname','username','lockinfoid','start_service_date','end_service_date');


        $keyname = $request->input('keyname');
        $keyid = $request->input('keyid');
        $username = $request->input('username');
        $lock_status = $request->input('lock_status');

		logger($lock_status);

		$query = KeyLog::query();
		if( $keyname ){
			$query->where('keyname','like','%'.$keyname.'%');
		}
		if( $keyid ){
			$query->where('keyid','like','%'.$keyid.'%');
		}
		if( $username ){
			$query->where('username','like','%'.$username.'%');
		}
		if( $lock_status ){
			$query->where('lock_status',$lock_status);
		}

		$loglist = $query->paginate(30);
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
    public function delete($id)
    {
        //
        
        KeyLog::destroy($id);

		$query = KeyLog::query();
		$loglist = $query->paginate(30);

        $keyname = "";
        $keyid = "";
        $username = "";
        $lock_status = "";
		return view('keylog.index')->with('loglist',$loglist);
    }


}
