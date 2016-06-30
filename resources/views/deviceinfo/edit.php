<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>デバイス管理 - 登録 - スマート京とびら</title>
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
                    <li><a href="/deviceinfo">デバイス管理</a></li>
                    <li><a href="/lockinfo">錠管理</a></li>
                    <li><a href="/keyinfo">鍵管理</a></li>
                    <li><a href="/keylog">ログ</a></li>
                </ul>
                    <ul class="nav navbar-nav navbar-right">
        <li><a href="/account/register" id="registerLink">登録</a></li>
        <li><a href="/account/login" id="loginLink">ログイン</a></li>
    </ul>

            </div>
        </div>
    </div>
    <div class="container body-content">
        


<h2>デバイス管理 - 編集</h2>

<form action="/deviceinfo/edit/<?php echo $deviceinfo["id"]; ?>" method="post" name="form">
	<input name="_token" type="hidden" value="<?php echo csrf_token(); ?>" />    <div class="form-horizontal">
        <hr />
        
        <div class="form-group">
            <label class="control-label col-md-2" for="Enable">有効</label>
            <div class="col-md-10">
                <div class="checkbox">
                    <input class="check-box" data-val="true" data-val-required="有効 フィールドが必要です。" id="Enable" name="enabled" type="checkbox" value="1" <?php if($deviceinfo["enabled"]){ ?>checked="checked" <?php } ?> />
                    <span class="field-validation-valid text-danger" data-valmsg-for="Enable" data-valmsg-replace="true"></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="Name">名前</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-required="名前は必須です。" id="Name" name="devicename" type="text" value="<?php echo $deviceinfo["devicename"]; ?>" />
                <span class="field-validation-valid text-danger" data-valmsg-for="Name" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="PlaceName">IPアドレス</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="deviceip" name="deviceip" type="text" value="<?php echo $deviceinfo["deviceip"]; ?>" />
                <span class="field-validation-valid text-danger" data-valmsg-for="PlaceName" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="Save" class="btn btn-default" />
            </div>
        </div>
    </div>
</form>
<div>
    <a href="/deviceinfo/">Back to List</a>
</div>

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
    <script src="/scripts/warn_unload.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('form').watchInputChange();
	});
</script>

</body>
</html>
