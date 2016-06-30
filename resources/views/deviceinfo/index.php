
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>デバイス管理 - 一覧 - スマート京とびら</title>
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
        


<h2>デバイス管理 - 一覧</h2>

<p>
    <a href="/deviceinfo/create">Create New</a>
</p>
<table class="table">
    <tr>
        <th>
            有効
        </th>
        <th>
            名前
        </th>
        <th>
            IPアドレス
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
	foreach($deviceinfolist as $info){
?>
    <tr>
        <td>
            <input class="check-box" disabled="disabled" type="checkbox" <?php if($info["enabled"]==1){ ?>checked="checked"<?php } ?> />
        </td>
        <td>
            <?php print $info["devicename"]; ?>
        </td>
        <td>
            <?php print $info["deviceip"]; ?>
        </td>
        <td>
            <?php print $info["created_at"]->format('Y/m/d'); ?>
        </td>
        <td>
            <?php print $info["updated_at"]->format('Y/m/d'); ?>
        </td>
        <td>
            
        </td>
        <td>
            
        </td>
        <td>
            <a href="/deviceinfo/edit/<?php print $info["id"]; ?>">Edit</a> |
            <a href="/deviceinfo/delete/<?php print $info["id"]; ?>">Delete</a>
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

</body>
</html>
