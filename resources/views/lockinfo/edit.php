
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>錠管理 - 編集 - スマート京とびら</title>
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
        


<h2>錠管理 - 編集</h2>

<form action="/lockinfo/edit/<?php echo $lockinfo["id"]; ?>" method="post"><input name="_token" type="hidden" value="<?php echo csrf_token(); ?>" />    <div class="form-horizontal">
        <hr />
        
        <input data-val="true" data-val-number="フィールド Id には数字を指定してください。" data-val-required="Id フィールドが必要です。" id="Id" name="id" type="hidden" value="<?php echo $lockinfo["id"]; ?>" />
        <input data-val="true" data-val-date="フィールド 更新日 は日付である必要があります。" data-val-required="更新日 フィールドが必要です。" id="UpdateDateTime" name="UpdateDateTime" type="hidden" value="<?php echo $lockinfo["created_at"]; ?>" />
        <input data-val="true" data-val-date="フィールド 登録日 は日付である必要があります。" data-val-required="登録日 フィールドが必要です。" id="CreateDateTime" name="CreateDateTime" type="hidden" value="<?php echo $lockinfo["updated_at"]; ?>" />
        <input id="UpdateUser" name="UpdateUser" type="hidden" value="" />
        <input id="CreateUser" name="CreateUser" type="hidden" value="" />

        <div class="form-group">
            <label class="control-label col-md-2" for="Enable">有効</label>
            <div class="col-md-10">
                <div class="checkbox">
                    <input checked="checked" class="check-box" data-val="true" data-val-required="有効 フィールドが必要です。" id="Enable" name="enabled" type="checkbox" value="1" <?php if($lockinfo["enabled"]){ ?>checked=""<?php } ?>/>
                    <span class="field-validation-valid text-danger" data-valmsg-for="Enable" data-valmsg-replace="true"></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="Name">名前</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-required="名前は必須です。" id="Name" name="lockname" type="text" value="<?php echo $lockinfo["lockname"]; ?>" />
                <span class="field-validation-valid text-danger" data-valmsg-for="Name" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="PlaceName">場所/建物名</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="PlaceName" name="place" type="text" value="<?php echo $lockinfo["place"]; ?>" />
                <span class="field-validation-valid text-danger" data-valmsg-for="PlaceName" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="Status">鍵の状態</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-number="フィールド 鍵の状態 には数字を指定してください。" data-val-required="鍵の状態は必須です。" id="Status" name="Status" type="number" value="0" />
                <span class="field-validation-valid text-danger" data-valmsg-for="Status" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="StartDate">使用開始日</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-date="フィールド 使用開始日 は日付である必要があります。" id="StartDate" name="start_use_date" type="datetime" value="<?php echo $lockinfo["start_use_date"]; ?>" />
                <span class="field-validation-valid text-danger" data-valmsg-for="StartDate" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="EndDate">使用終了日</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-date="フィールド 使用終了日 は日付である必要があります。" id="EndDate" name="end_use_date" type="datetime" value="<?php echo $lockinfo["end_use_date"]; ?>" />
                <span class="field-validation-valid text-danger" data-valmsg-for="EndDate" data-valmsg-replace="true"></span>
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
    <a href="/lockinfo">Back to List</a>
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
