<?php
	$connection = mysqli_connect("localhost","root","","reg");
	$db = mysqli_select_db($connection,"gym");
	$query = "insert into users values('$_POST[Name]',$_POST[Age],'$_POST[Gender]','$_POST[Locality]','$_POST[Email]',$_POST[Phone])";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration Successfully.....")
	window.location.href = "index.html";
</script>

	