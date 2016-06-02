<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\KeyLog;

class KeyLog extends Controller
{
    //
    public function index()
    {
        $keylogs = KeyLog::all();
        return view('keylog.index')->with('keylog_list' => $keylogs);
    }
}
