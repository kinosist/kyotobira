
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - スマート京とびら</title>
    <link href="Content/bootstrap.css" rel="stylesheet"/>
    <link href="Content/site.css" rel="stylesheet"/>
    <script src="Scripts/modernizr-2.6.2.js"></script>
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

<form action="/Materials/Search" class="well form-inline" method="post"><input name="__RequestVerificationToken" type="hidden" value="WeKONrhe4Bcy_PcuI8l7Xbm1UnB3_FKllpf4DQe1NCl21E96CVxvisJ54ln_Qh5fxBJbaBE1z2_Jh5-vrYp-I8ZBBFBHpomfcrnjjYvxQVAB1QB6Qp6bI-V0pgsiIkwVkZlcX_ZMqUEuLhi6D_W4BQ2" />
    <input type="text" name="Name" class="form-control" placeholder="名前" />
    <input type="text" name="KeyCode" class="form-control" placeholder="鍵ID" />
    <input type="text" name="UserName" class="form-control" placeholder="使用者名" />
    <label class="control-label" for="MaterialClassificationId">鍵の状態</label>
    <select class="form-control" id="MaterialClassificationId" name="MaterialClassificationId"><option value=""></option>
        <option value="1">開けた</option>
        <option value="0">閉めた</option>
    </select>
    <input type="submit" value="検索" />
</form>

<p>
    <a href="/KeyLogs/Create">Create New</a>
</p>
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

    <tr>
        <td>
            川沿いリバーサイド玄関
        </td>
        <td>
            qwerty
        </td>
        <td>
            kinomaster
        </td>
        <td>
            1
        </td>
        <td>
            35.009983、135.759547
        </td>
        <td>
            2016/05/19 00:00
        </td>
        <td>
            2016/05/19 00:00
        </td>
        <td>
            kino
        </td>
        <td>
            kino
        </td>
        <td>
            <a href="/KeyLogs/Edit/1">Edit</a> |
            <a href="/KeyLogs/Details/1">Details</a> |
            <a href="/KeyLogs/Delete/1">Delete</a>
        </td>
    </tr>
    <tr>
        <td>
            ハウス
        </td>
        <td>
            12345
        </td>
        <td>
            test1
        </td>
        <td>
            0
        </td>
        <td>
            35.009983、135.759547
        </td>
        <td>
            2016/05/19 00:00
        </td>
        <td>
            2016/05/19 00:00
        </td>
        <td>
            kino
        </td>
        <td>
            kino
        </td>
        <td>
            <a href="/KeyLogs/Edit/2">Edit</a> |
            <a href="/KeyLogs/Details/2">Details</a> |
            <a href="/KeyLogs/Delete/2">Delete</a>
        </td>
    </tr>

</table>

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
