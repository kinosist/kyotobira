<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\KeyLog;
use App\KeyInfo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class LockingController extends Controller
{
    public function index()
    {
    	$lock_status = 1;
        return view('locking.index')->with('lock_status',$lock_status);
    }

    public function locking()
    {
    	
    	$inputs = \Request::only('keyid');
    	// 設定された鍵情報とkeyidが一致してるかの確認
		$key = KeyInfo::query()->where('keyid',$inputs["keyid"])->get();
    	var_dump($key["deviceinf"]);exit;
    	
    	$this->lockingRaspberryPI(1);
    	
    	
        return view('locking.index')->with('lock_status',"2");
    }

    public function unlocking()
    {
    	$inputs = \Request::only('keyid');
    	// 設定された鍵情報とkeyidが一致してるかの確認
		
		
    	$this->lockingRaspberryPI(2);
    	
    	
        return view('locking.index')->with('lock_status',"1");
    }

	private function lockingRaspberryPI($lock){
		if( !($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP )) ){
			print "socket create error";
			exit;
		}
		if(!socket_connect($sock, "192.168.201.13", 60431)){
			print "socket connect error";
			exit;
		}
		if( $lock==1 ){
			$buf = "cmd1\n";
		}
		else{
			$buf = "cmd2\n";
		}
		socket_write($sock,$buf,strlen($buf));
		$buf = "quit\n";
		socket_write($sock,$buf,strlen($buf));
		socket_close($sock);
		//recordLog("12345","ハウス",1,"00002","test1","35.009983、135.759547","木下");
	}

    public function destroy($id)
    {
        $lockinfo = LockInfo::find($id);
        $lockinfo->delete();
    }
}
