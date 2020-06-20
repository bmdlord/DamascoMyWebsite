<?php
	date_default_timezone_set('Singapore');
	include 'comments.php';
	include 'dbcomments.php';
	
?>
<div id="wrd">
	<h1><center>WELCOME TO JULSHAKE's ONLINE SISIG EXPRESS</center></h1>
		<h2><center>
		Craving for some delicious sisig? Say no more because Julshake's online home delivery sisig express got you covered.
		We prepared the best sisig for you to deliver at your doorstep just contact us via online or mobile, so? what are you waiting for come and try now! 
		
		</center></h2>
</div>
<div id="pic">	
	<img src="images/sisig1.jpg" width="280" height="350">
	<img src="images/jshake.png" width="280" height="350">
	<img src="images/sisig3.jpg" width="280" height="350">
	
</div>
<html>
<head>
<link rel="stylesheet" type="text/css" href="commentstyle.css">

</head>

<?php
echo "<form method='POST' action='".setComments($conn)."'>
	<input type='hidden' name='stu_id' value='1421168'>
	<input type='hidden' name='com_date_added' value='".date('Y-m-md')."'>
	<input type='hidden' name='com_time_added' value='".date('H-i-s')."'>
	<input type='hidden' name='com_status' value='1'>
	<textarea name='message'></textarea><br>
	<button type='submit' name='commentsubmit'>COMMENT</button>
	</form>";
	
	?>
	
	
	
	</html>
	