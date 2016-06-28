
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>鍵管理 - 新規登録 - スマート京とびら</title>
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
        


<h2>鍵管理 - 新規登録</h2>

<form action="/keyinfo/create" method="post">
		<input name="_token" type="hidden" value="<?php echo csrf_token(); ?>" />
	    <div class="form-horizontal">
        <hr />
        
        <div class="form-group">
            <label class="control-label col-md-2" for="Enable">有効</label>
            <div class="col-md-10">
                <div class="checkbox">
                    <input class="check-box" data-val="true" data-val-required="有効 フィールドが必要です。" id="Enable" name="enabled" type="checkbox" value="1" />
                    <span class="field-validation-valid text-danger" data-valmsg-for="Enable" data-valmsg-replace="true"></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="KeyCode">鍵名前</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-required="鍵名前は必須です。" id="keyname" name="keyname" type="text" value="" />
                <span class="field-validation-valid text-danger" data-valmsg-for="KeyCode" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="KeyCode">鍵ID</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-required="鍵IDは必須です。" id="keyid" name="keyid" type="text" value="" />
                <span class="field-validation-valid text-danger" data-valmsg-for="KeyCode" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="UserName">使用者名</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-required="使用者名は必須です。" id="username" name="username" type="text" value="" />
                <span class="field-validation-valid text-danger" data-valmsg-for="UserName" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2 datepicker" for="StartDate">使用開始日</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-date="フィールド 使用開始日 は日付である必要があります。" data-val-required="使用開始日は必須です。" id="StartDate" name="start_service_date" type="datetime" value="" />
                <span class="field-validation-valid text-danger" data-valmsg-for="StartDate" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2 datepicker" for="EndDate">使用終了日</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-date="フィールド 使用終了日 は日付である必要があります。" data-val-required="使用終了日は必須です。" id="EndDate" name="end_service_date" type="datetime" value="" />
                <span class="field-validation-valid text-danger" data-valmsg-for="EndDate" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="LockInfoId">LockInfoId</label>
            <div class="col-md-10">
                <select class="form-control" id="LockInfoId" name="lockinfoid">
            	<?php foreach( $lockinfo as $info ){ ?>
            	<option value="<?php echo $info["id"] ?>"><?php echo $info["lockname"] ?></option>
            	<?php } ?>
				</select>
                <span class="field-validation-valid text-danger" data-valmsg-for="LockInfoId" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="Create" class="btn btn-default" />
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
</body>
</html>
