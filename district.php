<?php
require 'connect.php';
$district_id = $_GET['district'];
$q = "SELECT 
culinary_place.id, 
culinary_place.name,
culinary_place.geom, 
st_x(st_centroid(culinary_place.geom)) as longitude, 
st_y(st_centroid(culinary_place.geom)) as latitude 
from culinary_place, district 
WHERE st_contains(district.geom, st_centroid(culinary_place.geom)) and district.id='$district_id'";
// var_dump($q);
// die();
$querysearch	= pg_query($q); 
while($row = pg_fetch_assoc($querysearch))
	$data[]=$row;
	echo json_encode ($data);

?>