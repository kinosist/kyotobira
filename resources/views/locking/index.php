<html>
<head>
</head>
<body>
<form action="/locking/" method="POST">
<input type="hidden" id="flg" name="flg" value="1">
<input type="submit" id="submit-btn" value="ON">
</form>

<script>
function GetQueryString() {
  if (1 < document.location.search.length) {
    // 最初の1文字 (?記号) を除いた文字列を取得する
     var query = document.location.search.substring(1);

    // クエリの区切り記号 (&) で文字列を配列に分割する
     var parameters = query.split('&');

    var result = new Object();
    for (var i = 0; i < parameters.length; i++) {
      // パラメータ名とパラメータ値に分割する
       var element = parameters[i].split('=');

      var paramName = decodeURIComponent(element[0]);
      var paramValue = decodeURIComponent(element[1]);

      // パラメータ名をキーとして連想配列に追加する
       result[paramName] = decodeURIComponent(paramValue);
    }
    return result;
  }
  return null;
}

//function OnSubmits() {
	if (GetQueryString() != null){
		if (GetQueryString()["flg"] == "1"){
			document.getElementById("flg").value = "2";
			document.getElementById("submit-btn").value = "OFF";
		}else{
			document.getElementById("flg").value = "1";
			document.getElementById("submit-btn").value = "ON";
		}	
	}
//}
</script>
</body>
</html>

