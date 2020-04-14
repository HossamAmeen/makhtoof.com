<?php

$id=$_GET['id'];

$con=mysqli_connect('localhost','root','','mkhtof');
$q="select * from kid_posts  where id=('$id')";

$arr=mysqli_query($q,$con);

echo json_encode($arr);



?>
