
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - スマート京とびら</title>
    <link href="/content/bootstrap.css" rel="stylesheet"/>
    <link href="/content/site.css" rel="stylesheet"/>
    <script src="/scripts/modernizr-2.6.2.js"></script>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">スマート京とびら</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/LockInfoes">錠管理</a></li>
                    <li><a href="/KeyInfoes2">鍵管理</a></li>
                    <li><a href="/KeyLogs">ログ</a></li>
                </ul>
                    <ul class="nav navbar-nav navbar-right">
        <li><a href="/Account/Register" id="registerLink">登録</a></li>
        <li><a href="/Account/Login" id="loginLink">ログイン</a></li>
    </ul>

            </div>
        </div>
    </div>
    <div class="container body-content">
        


<h2>ログ管理 - 一覧</h2>

<form action="/keylog/" class="well form-inline" method="post"><input name="__RequestVerificationToken" type="hidden" value="<?php echo csrf_token(); ?>" />
    <input type="text" name="keyname" class="form-control" placeholder="名前" value="<?php print $keyname; ?>" />
    <input type="text" name="keyid" class="form-control" placeholder="鍵ID" value="<?php print $keyid; ?>" />
    <input type="text" name="username" class="form-control" placeholder="使用者名" value="<?php print $username; ?>" />
    <label class="control-label" for="MaterialClassificationId">鍵の状態</label>
    <select class="form-control" id="MaterialClassificationId" name="lock_status"><option value=""></option>
        <option value="1" <?php if( $lock_status===1 ): ?>selected=""<?php endif; ?>>開</option>
        <option value="0" <?php if( $lock_status===0 ): ?>selected=""<?php endif; ?>>閉</option>
    </select>
    <input type="submit" value="検索" />
</form>


<table class="table">
    <tr>
        <th>
            名前
        </th>
        <th>
            鍵ID
        </th>
        <th>
            使用者名
        </th>
        <th>
            鍵の状態
        </th>
        <th>
            場所
        </th>
        <th>
            更新日
        </th>
        <th>
            登録日
        </th>
        <th>
            更新者
        </th>
        <th>
            登録者
        </th>
        <th></th>
    </tr>
<?php
	foreach($loglist as $log){
?>
    <tr>
        <td>
            <?php print $log["keyname"]; ?>
        </td>
        <td>
            <?php print $log["keyid"]; ?>
        </td>
        <td>
            <?php print $log["username"]; ?>
        </td>
        <td>
            <?php print ( $log["lock_status"]==1 ? "開" : "閉"); ?>
        </td>
        <td>
            <?php print $log["place"]; ?>
        </td>
        <td>
            <?php print $log["regdate"]; ?>
        </td>
        <td>
            <?php print $log["upddate"]; ?>
        </td>
        <td>
            <?php print $log["reg_person"]; ?>
        </td>
        <td>
            <?php print $log["upd_person"]; ?>
        </td>
        <td>
            <a class="dellink" href="/keylog/delete/1">Delete</a>
        </td>
    </tr>
<?php
	}
?>
</table>

        <hr />
        <footer>
            <p>&copy; 2016 - スマート京とびら</p>
        </footer>
    </div>
    <script src="/scripts/jquery-1.10.2.js"></script>
    <script src="/scripts/bootstrap.js"></script>
    <script src="/scripts/bootstrap-datepicker.js"></script>
    <script src="/scripts/respond.js"></script>
    <script src="/scripts/app.js"></script>
    <script>
		$(document).ready(function(){
			$('.dellink').click(function(){
				if( confirm('削除します。よろしいでしょうか？')==false ){
					return false;
				}
				
			});
			
		});
    </script>
</body>
</html>
