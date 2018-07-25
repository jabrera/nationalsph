
<head>
	<title><?php
	if($pageTitle != "") 
		echo $pageTitle.' | '; 
	echo $websiteTitle;
	?></title>
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="1 month" />
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<meta charset="utf-8">
	<meta name="google" content="notranslate" />
	<link rel="stylesheet" media="all" href="<?php echo $backDir; ?>styles/style.php" type="text/css">

	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>

	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
	</script>
</head>
<body>