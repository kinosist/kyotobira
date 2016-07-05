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
		$device = KeyInfo::getDeviceIp($inputs["keyid"]);
		if($device){
	    	$this->lockingRaspberryPI($device[0]->deviceip,1);
			$keylog = new KeyLog;
			$keylog->keyid = $inputs["keyid"];
			$keylog->lock_status = 1;
			$keylog->save();
		}
		else{
			$error["message"] = "有効なkeyidじゃないよ";
		}
        return view('locking.index')->with('lock_status',"2");
    }

    public function unlocking()
    {
    	$inputs = \Request::only('keyid');
    	// 設定された鍵情報とkeyidが一致してるかの確認
		$device = KeyInfo::getDeviceIp($inputs["keyid"]);
		if($device){
	    	$this->lockingRaspberryPI($device[0]->deviceip,2);
			$keylog = new KeyLog;
			$keylog->keyid = $inputs["keyid"];
			$keylog->lock_status = 2;
			$keylog->save();
		}
		else{
			$error["message"] = "有効なkeyidじゃないよ";
		}
        return view('locking.index')->with('lock_status',"1");
    }

	private function lockingRaspberryPI($deviceip,$lock){
		if( !($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP )) ){
			print "socket create error";
			exit;
		}
		if(!socket_connect($sock, $deviceip, 60431)){
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
