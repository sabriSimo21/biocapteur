<?php


include "db.php";


$v=$_GET['v'];
$id=$_GET['id'];

$sql = "UPDATE arduino SET valeur =".$v." WHERE id =".$id;
$mysqli -> query($sql);



$mysqli -> close();


?>