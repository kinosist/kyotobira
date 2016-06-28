
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>鍵管理 - 編集 - スマート京とびら</title>
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
        <li><a href="/Account/Register" id="registerLink">登録</a></li>
        <li><a href="/Account/Login" id="loginLink">ログイン</a></li>
    </ul>

            </div>
        </div>
    </div>
    <div class="container body-content">
        


<h2>鍵管理 - 編集</h2>

<form action="/keyinfo/edit/<?php echo $keyinfo["id"]; ?>" method="post" name="form">
	<input name="id" type="hidden" value="<?php echo $keyinfo["id"]; ?>" />
	<input name="_token" type="hidden" value="<?php echo csrf_token(); ?>" />    <div class="form-horizontal">
        <h4>KeyInfo</h4>
        <hr />
        
        <input data-val="true" data-val-number="フィールド Id には数字を指定してください。" data-val-required="Id フィールドが必要です。" id="Id" name="Id" type="hidden" value="1" />
        <input data-val="true" data-val-date="フィールド 更新日 は日付である必要があります。" data-val-required="更新日 フィールドが必要です。" id="UpdateDateTime" name="UpdateDateTime" type="hidden" value="2016/05/18 8:54:47" />
        <input data-val="true" data-val-date="フィールド 登録日 は日付である必要があります。" data-val-required="登録日 フィールドが必要です。" id="CreateDateTime" name="CreateDateTime" type="hidden" value="2016/05/18 8:54:47" />
        <input id="UpdateUser" name="UpdateUser" type="hidden" value="" />
        <input id="CreateUser" name="CreateUser" type="hidden" value="" />

        <div class="form-group">
            <label class="control-label col-md-2" for="Enable">有効</label>
            <div class="col-md-10">
                <div class="checkbox">
                    <input class="check-box" data-val="true" data-val-required="有効 フィールドが必要です。" id="Enable" name="enabled" type="checkbox" value="1" <?php if($keyinfo["enabled"]){ ?>checked="checked" <?php } ?> />
                    <span class="field-validation-valid text-danger" data-valmsg-for="Enable" data-valmsg-replace="true"></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="KeyCode">鍵名前</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-required="鍵名前は必須です。" id="keyname" name="keyname" type="text" value="<?php echo $keyinfo["keyname"]; ?>" />
                <span class="field-validation-valid text-danger" data-valmsg-for="KeyCode" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="KeyCode">鍵ID</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-required="鍵IDは必須です。" id="KeyCode" name="keyid" type="text" value="<?php echo $keyinfo["keyid"]; ?>" />
                <span class="field-validation-valid text-danger" data-valmsg-for="KeyCode" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="UserName">使用者名</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-required="使用者名は必須です。" id="UserName" name="username" type="text" value="<?php echo $keyinfo["username"]; ?>" />
                <span class="field-validation-valid text-danger" data-valmsg-for="UserName" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="StartDate">使用開始日</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line cal" data-val="true" data-val-date="フィールド 使用開始日 は日付である必要があります。" data-val-required="使用開始日は必須です。" id="StartDate" name="start_service_date" type="datetime" value="<?php echo $keyinfo["start_service_date"]; ?>" />
                <span class="field-validation-valid text-danger" data-valmsg-for="StartDate" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="EndDate">使用終了日</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line cal" data-val="true" data-val-date="フィールド 使用終了日 は日付である必要があります。" data-val-required="使用終了日は必須です。" id="EndDate" name="end_service_date" type="datetime" value="<?php echo $keyinfo["end_service_date"]; ?>" />
                <span class="field-validation-valid text-danger" data-valmsg-for="EndDate" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="LockInfoId">LockInfoId</label>
            <div class="col-md-10">
                <select class="form-control" id="LockInfoId" name="lockinfoid">
            	<?php foreach( $lockinfo as $info ){ ?>
            	<option value="<?php echo $info["id"] ?>" <?php if($info["id"]==$keyinfo["lockinfoid"]){?>selected=""<?php } ?>><?php echo $info["lockname"] ?></option>
            	<?php } ?>
				</select>
                <span class="field-validation-valid text-danger" data-valmsg-for="LockInfoId" data-valmsg-replace="true"></span>
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
    <a href="/keyinfo">Back to List</a>
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
