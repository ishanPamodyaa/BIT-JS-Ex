<?php

$name = $_GET['name'];
$nic = $_GET['nic'];
$city = $_GET['city'];

$localhost = "localhost";
$user = "root";
$pass = "root";
$db = "online";

$con = mysqli_connect($localhost,$user,$pass,$db);

$sql = "insert into student (name,nic,city) values ('$name','$nic','$city')";

$rs = mysqli_query($con,$sql);

mysqli_close($con);


?>