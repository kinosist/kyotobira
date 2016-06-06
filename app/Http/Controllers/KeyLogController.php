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
    public function search()
    {
        //
        $keyname = Input::get('keyname');
        $keyid = Input::get('keyid');
        $username = Input::get('username');
        $lock_status = Input::get('lock_status');

		$query = KeyLog::query();
		$query->where('keyname',$keyname);
		$query->where('keyid',$keyid);
		$query->where('username',$username);
		$query->where('lock_status',$lock_status);

		$members = $query->paginate(30);
		return view('keylog.index')->with('loglist',$loglist)->with('keyname',$keyname)->with('keyid',$keyid)
		->with('username',$username)->with('lock_status',$lock_status);
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
