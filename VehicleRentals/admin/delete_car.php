<?php
	include '../config.php';
	$id = $_POST['vehicleID'];
		$query = "DELETE FROM vehicles WHERE vehicleID = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Car Successfully Deleted\");
					window.location = (\"add_vehicles.php\")
				</script>";
	}
?>
