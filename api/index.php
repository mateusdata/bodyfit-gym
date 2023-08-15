<?php
include("./databases/database.php");
$resultado = $db->query("SELECT * FROM `new_table`");
$row  =  $resultado->fetchAll(PDO::FETCH_ASSOC);
$row   =  json_encode($row);
header("Content-Type: application/json");
echo $row;
print($row)
?>