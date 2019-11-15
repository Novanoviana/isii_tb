<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "seia";
	$port = "5432";
	$dbname = "test";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>