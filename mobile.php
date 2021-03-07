<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

include "db.php";


$nom=$_GET['nom'];
$age=$_GET['age'];
$cin=$_GET['cin'];
$type=$_GET['type'];
$numcap=$_GET['capteur'];

//http://localhost/capteur/mobile.php?nom=simo&cin=M123&age=21&type=COV22&numcap=4

$sql = "INSERT INTO `arduino` (`id`, `nometprenom`, `age`, `cin`, `valeur`, `type`, `date`, `capteur`) VALUES (NULL, '".$nom."', '".$age."', '".$cin."', '-1', '".$type."', CURRENT_TIMESTAMP, '".$numcap."');";

if($mysqli -> query($sql)){
	
	echo json_encode("ok");
}else echo json_encode("machi ok");



$mysqli -> close();


?>