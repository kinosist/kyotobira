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
    	
if($_GET["flg"] == '1') {
	if( !($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP )) ){
		print "socket create error";
		exit;
	}
	if(!socket_connect($sock, "192.168.201.13", 60431)){
		print "socket connect error";
		exit;
	}
	//socket_set_option($sock, getprotobyname('tcp'), SO_BROADCAST, 1);
	$buf = "cmd1\n";
	socket_write($sock,$buf,strlen($buf));
	$buf = "quit\n";
	socket_write($sock,$buf,strlen($buf));
	socket_close($sock);
	recordLog("12345","ハウス",1,"00002","test1","35.009983、135.759547","木下");
	echo "test1";
}else{
	$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP );
	socket_connect($sock, "192.168.201.13", 60431);
	//socket_set_option($sock, getprotobyname('tcp'), SO_BROADCAST, 1);
	$buf = "cmd2\n";
	socket_write($sock,$buf,strlen($buf));
	$buf = "quit\n";
	socket_write($sock,$buf,strlen($buf));
	socket_close($sock);
	recordLog("12345","ハウス",0,"00002","test1","35.009983、135.759547","木下");
	echo "test2";
}
    	
    	
    	
    	
        return view('locking.index')->with('lockstatus' => $lockstatus);
    }

	


    public function destroy($id)
    {
        $lockinfo = LockInfo::find($id);
        $lockinfo->delete();
    }
}
