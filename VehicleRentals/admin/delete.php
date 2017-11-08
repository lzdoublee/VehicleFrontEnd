<?php
	include '../config.php';
	$id = $_REQUEST['customerID'];
		$query = "DELETE FROM customer WHERE customerID = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Request has Successfully been Deleted';
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
