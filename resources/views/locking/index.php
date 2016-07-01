<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スマート京とびら</title>
    <link href="/content/bootstrap.css" rel="stylesheet"/>
    <link href="/content/site.css" rel="stylesheet"/>
    <script src="/scripts/jquery-1.10.2.js"></script>
    <script src="/scripts/modernizr-2.6.2.js"></script>
    <meta name="viewport" content="width=device-width" />
    <title>Button</title>
    <style>
        body {
            background-image: url(images/bg.png);
        }
		.block-center {
			display: inline-block;
			text-align: center;
		}		
    </style>
</head>
<body style="background-image: url('images/bg.png')">
<form action="/locking/<?php if( $lock_status==1 ){print "on";} else{print "off";}?>" method="POST">
	<input name="_token" type="hidden" value="<?php echo csrf_token(); ?>" />
	<input type="hidden" id="flg" name="flg" value="<?php print $lock_status; ?>">
	<div class="text-center">
		<p class="resizeimage">
			<img id="btn-img" src="images/btn-close.png" onclick="submit()" />
		</p>
	</div>
	<div class="text-center">
		<div class="block-center">
			<input type="text" name="key-no" class="form-control text-box single-line" placeholder="鍵Noを入力" />
			<input type="submit" value="使う" class="btn btn-info" />
		</div>
	</div>
</form>

<script type="text/javascript">
$(document).ready(function(){
	if( $('#flg').val()=="1" ){
		$('#submit-btn').val("ON");
		$('#btn-img').attr("src","/images/btn-open.png");
	}
	else{
		$('#submit-btn').val("OFF");
		$('#btn-img').attr("src","/images/btn-close.png");
	}
});

</script>

</script>
</body>
</html>
