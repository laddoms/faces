<body>
<div id="wrapper">
	<?php include('header.inc.php'); ?>
	<div id="wendy">
		<img src="greenlake.jpg">
	</div>
	<?php include('nav.inc.php'); ?>
	<div id="wendystory">
	
	
	
	</body>
<?php include('footer.inc.php'); ?>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script>
	$(function(){
	  $('a').each(function() {
		if ($(this).prop('href') == window.location.href) {
		  $(this).addClass('current');
		}
	  });
	});
</script>
