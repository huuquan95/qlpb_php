<?php
	$conn= mysqli_connect('localhost','root','','qlpb') 
	or
	die("No connect!");
	mysqli_query($conn,"SET character_set_results=utf8");
?>