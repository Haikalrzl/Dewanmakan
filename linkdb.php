<?php
$host='localhost';
$user='root';
$password='webcam';
$dbname='pengurusan_asrama';

$con=mysqli_connect($host,$user,$password,$dbname);

if (!$con) {
	echo "Capaian Gagal";
}
else{
	echo "Databases in Connected";
}
?>