<?php
include "db.php";

$sql = "SELECT id, nometprenom, valeur , type , date , capteur FROM arduino";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table border='1'><tr><td>ID</td><td>Nometprenom</td><td>valeur</td><td>type</td><td>date</td><td>capteur</td></tr>";
  
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. " </td><td>" . $row["nometprenom"]. " </td><td>"  . $row["valeur"]. " </td><td>" . $row["type"]. "</td><td>" . $row["date"]. "</td><td>" . $row["capteur"]. "</td></tr>";
  }
    echo "</table>";

} else {
  echo "0 results";
}
$mysqli->close();
?>