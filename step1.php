<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

include "db.php";




$sqlid = "SELECT max(id) as id, capteur FROM arduino WHERE valeur=-1";
$result =$mysqli -> query($sqlid);

$row = $result->fetch_assoc();
$x= $row['id'];	
$x=$x.";";
$x=$x.$row['capteur'];

echo $x;



?>