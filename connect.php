<?php
	$host = "ec2-50-19-247-157.compute-1.amazonaws.com";
	$user = "zjxoqslzlydifd";
	$pass = "fe8e480b7436f8ab284ec79cd8d57e2d39d2d09731d419573b76b8acbd1ce589";
	$port = "5432";
	$dbname = "d9tldco333afrj";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
