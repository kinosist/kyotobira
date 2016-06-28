<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DeviceInfo;

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
		return view('deviceinfo.create');
    }
    public function postcreate()
    {
		return redirect('/deviceinfo/');
    }
    public function edit($id)
    {
    }
    public function postedit($id)
    {
		return redirect('/deviceinfo/');
    }
    public function delete($id)
    {
        $deviceinf = DeviceInfo::find($id);
        $deviceinf->delete();
		return redirect('/deviceinfo/');
    }
    //
}
