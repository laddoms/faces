<body>
<div id="wrapper">
	<div id="creativestories">
		<h1>This will be the creative stories home page</h1>
	
	
	
	
	
	
	
	
	
	
	
	
</div>
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