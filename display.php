<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json");

    include "config.php";
    
    $sql = "SELECT * FROM tasks";
		$result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
		$tasks = array();
		while($row = $result->fetch_assoc()) {
			$tasks[] = $row;
		}
    } 
	else {
		echo "0 results";
    }
    echo json_encode($tasks);
    $conn->close();
?>