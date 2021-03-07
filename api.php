<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
include "db.php";

$sql = "SELECT id, nometprenom,cin,age, valeur , type , date , capteur FROM arduino order by id desc";
$result = $mysqli->query($sql);



$rows = array();
while($row = $result->fetch_assoc() ) {
    $rows[] = $row;
}
  
  echo json_encode($rows);

$mysqli->close();
?>