<html>
<head>
	
	
	
<script type="text/javascript" src="/scripts/jquery-1.10.2.js"></script>

</head>
<body>
<form action="/locking/" method="POST">
<input type="hidden" id="flg" name="flg" value="<?php print $lockstatus; ?>">
<input type="submit" id="submit-btn" value="ON">
</form>

<script type="text/javascript">
$(document).ready(function(){
	if( ('#flg').val()=="1" ){
		('#submit-btn').val("OFF");
		document.getElementById("submit-btn").value = "OFF";
	}
	else{
		('#submit-btn').val("ON");
	}
});

</script>

</body>
</html>

