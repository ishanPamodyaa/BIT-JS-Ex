<?php

// $name = $_GET['name'];
// $nic = $_GET['nic'];
// $city = $_GET['city'];

$localhost = "localhost";
$user = "root";
$pass = "root";
$db = "online";

$con = mysqli_connect($localhost,$user,$pass,$db);

$sql = "select * from student";

$rs = mysqli_query($con,$sql);

$str = "[";

$comma = true;

while($row=mysqli_fetch_assoc($rs)){

    if(!$comma){
        $str .=',';
    }
    $comma = false;

// var_dump($row);
$str .= '{';
$str .= '"id":"'.$row['idstudent'].'",';
$str .= '"name":"'.$row['name'].'",';
$str .= '"nic":"'.$row['nic'].'",';
$str .= '"city":"'.$row['city'].'"';
$str .='}';



}
$str .=']';

echo $str;




mysqli_close($con);


?>