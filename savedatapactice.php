<?php
$id = $_POST["id"];
$cloth = $_POST["cloth"];
$color = $_POST["color"];
$meter = $_POST["meter"];
$rate = $_POST["rate"];


$conn = mysqli_connect("localhost","root","","prabhakar")or die("not coonect");
$query ="INSERT INTO utc(id,cloth,color,meter,rate) VALUES('{$id}','{$cloth}','{$color}','{$meter}','{$rate}')";
$result = mysqli_query($conn,$query) or die("faild to load");
mysqli_close($conn);



?>