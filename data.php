<?php
header('Content-Type: application/json');

include('db_connection.php');
$sqlQuery = mysqli_query($conn,"SELECT device, temperature FROM nelly_sensordata");
$data = array();

while ($row = mysqli_fetch_assoc($sqlQuery)) {
	$data[] = $row;
}
echo json_encode($data);
?>