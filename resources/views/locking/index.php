<html>
<head>
<script type="text/javascript" src="/scripts/jquery-1.10.2.js"></script>
</head>
<body>
<form action="/locking/<?php if( $lock_status==1 ){print "on";} else{print "off";}?>" method="POST">
鍵ID<input type="text" name="keyid" value="" />
<input name="_token" type="hidden" value="<?php echo csrf_token(); ?>" />
<input type="hidden" id="flg" name="flg" value="<?php print $lock_status; ?>">
<input type="submit" id="submit-btn" value="ON">
</form>

<script type="text/javascript">
$(document).ready(function(){
	if( $('#flg').val()=="1" ){
		$('#submit-btn').val("ON");
	}
	else{
		$('#submit-btn').val("OFF");
	}
});

</script>

</body>
</html>

