<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

include "db.php";


$cin=$_GET['cin'];

$sqlid = "SELECT max(id) as id, valeur FROM arduino WHERE cin='".$cin."'";
$result =$mysqli -> query($sqlid);

$row = $result->fetch_assoc();
$x=$row['valeur'];

echo json_encode($x);



?>