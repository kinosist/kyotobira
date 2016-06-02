<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class KeyInfoController extends Controller
{
    public function index()
    {
        $keyinfoss = KeyInfo::all();
        return view('keyinfo.index', ['articles' => $articles]);
    }

    public function destroy($id)
    {
        $keyinfo = KeyInfo::find($id);
        $keyinfo->delete();
    }
}
