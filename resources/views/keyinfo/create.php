
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
        


<h2>鍵管理 - 新規登録</h2>

<form action="/KeyInfoes2/Create" method="post"><input name="__RequestVerificationToken" type="hidden" value="WOdtim6xiPTKdpv0K9iNsSQy94H2ge-QhZIBzEuQxDopjw52gsaMPwUvUWD7XilWVA8cMq4qjgsk9OLXM4Q1GJDiB72goOdefp1OoW7cQSE1" />    <div class="form-horizontal">
        <hr />
        
        <div class="form-group">
            <label class="control-label col-md-2" for="Enable">有効</label>
            <div class="col-md-10">
                <div class="checkbox">
                    <input class="check-box" data-val="true" data-val-required="有効 フィールドが必要です。" id="Enable" name="Enable" type="checkbox" value="true" /><input name="Enable" type="hidden" value="false" />
                    <span class="field-validation-valid text-danger" data-valmsg-for="Enable" data-valmsg-replace="true"></span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="KeyCode">鍵ID</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-required="鍵IDは必須です。" id="KeyCode" name="KeyCode" type="text" value="" />
                <span class="field-validation-valid text-danger" data-valmsg-for="KeyCode" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="UserName">使用者名</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-required="使用者名は必須です。" id="UserName" name="UserName" type="text" value="" />
                <span class="field-validation-valid text-danger" data-valmsg-for="UserName" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="StartDate">使用開始日</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-date="フィールド 使用開始日 は日付である必要があります。" data-val-required="使用開始日は必須です。" id="StartDate" name="StartDate" type="datetime" value="" />
                <span class="field-validation-valid text-danger" data-valmsg-for="StartDate" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="EndDate">使用終了日</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-date="フィールド 使用終了日 は日付である必要があります。" data-val-required="使用終了日は必須です。" id="EndDate" name="EndDate" type="datetime" value="" />
                <span class="field-validation-valid text-danger" data-valmsg-for="EndDate" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="LockInfoId">LockInfoId</label>
            <div class="col-md-10">
                <select class="form-control" id="LockInfoId" name="LockInfoId"><option value="1">川沿いリバーサイド玄関</option>
<option value="2">ハウス</option>
<option value="3">川沿いリバーサイド裏口</option>
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
    <a href="/KeyInfoes2">Back to List</a>
</div>

        <hr />
        <footer>
            <p>&copy; 2016 - スマート京とびら</p>
        </footer>
    </div>

    <script src="Scripts/jquery-1.10.2.js"></script>
    <script src="Scripts/bootstrap.js"></script>
    <script src="Scripts/bootstrap-datepicker.js"></script>
    <script src="Scripts/respond.js"></script>
    <script src="Scripts/app.js"></script>
</body>
</html>