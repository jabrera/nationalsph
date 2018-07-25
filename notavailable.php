<?php 
	$backDir = '';
	$pageTitle = 'Unavailable';
	$status = file_get_contents('status.txt');
	if($status == "1") {
		header("Location: index.php");
	}
?>
<?php include('includes/html_doctype.inc'); ?>
<?php include('includes/html_head.inc'); ?>
<div id="container">
	<div id="photo_cover" name="top">
		<div class="filter-trans"></div>
	</div>
	<div class="page">
		<h1>Unavailable<a name="home1" class="scroll-name"></a></h1>
		<p>This website is current unavailable.</p>
	</div>
	<div id="footer">
		<div class="wrap">
			<table>
				<tr>
					<td>National Collegiate Model United Nations &copy; 2015. All Rights Reserved.</td>
					<td align="right">Web designed and developed by Juvar Abrera</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
$(window).scroll(function(){ 
	var x = 400;
	var pos = $(window).scrollTop();
	if(pos > x) {
		$("#ftop").css({
			"height": "50px"
		});
		$("#ftop a.logo").css({
			"font-size": "12px"
		});
		$("#ftop ul.nav>li>a").css({
			"padding": "15px 20px",
			"height": "50px"
		});
		$("#ftop ul.sub").css({
			"top": "50px"
		});
		$("#ftop ul.nav>li").css({
			"height": "50px"
		});
	}
	if(pos < x) {
		$("#ftop").css({
			"height": "100px"
		});
		$("#ftop a.logo").css({
			"font-size": "30px"
		});
		$("#ftop ul.nav>li>a").css({
			"padding": "40px 25px",
			"height": "100px"
		});
		$("#ftop ul.sub").css({
			"top": "100px"
		});
		$("#ftop ul.nav>li").css({
			"height": "100px"
		});
	}
});
</script>
<?php include('includes/html_end.inc'); ?>