<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class LockInfoController extends Controller
{
    public function index()
    {
        $lockinfos = LockInfo::all();
        return view('lockinfo.index', ['articles' => $articles];
    }
...
    public function destroy($id)
    {
        $lockinfo = LockInfo::find($id);
        $lockinfo->delete();
    }
}
