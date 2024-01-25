<?php

require '../conf/conf.php';

$sSQL = "SELECT Code, Name, Continent, Region, SurfaceArea FROM country";
$result = $mysqli->query($sSQL);

$row = $result->fetch_all(MYSQLI_ASSOC);
$dataFinal = [
    'datos' => $row
];
$mysqli->close();

header('Content-type: application/json; charset=utf-8');
echo json_encode($dataFinal);
exit();
