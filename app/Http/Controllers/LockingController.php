<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class LockingController extends Controller
{
    public function index()
    {
    	
    	
    	
    	
    	
        return view('locking.index');
    }

    public function locking()
    {
    	
    	
    	
    	
    	
        return view('locking.index');
    }

	


    public function destroy($id)
    {
        $lockinfo = LockInfo::find($id);
        $lockinfo->delete();
    }
}
