<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "athifah01";
	$port = "5432";
	$dbname = "tourism_bkt";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
