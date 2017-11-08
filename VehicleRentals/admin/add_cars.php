<?php
	include '../config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Add New Vehicles
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Add New Vehicles</h2>
					</div>
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									<span class="req">max 100 symbols</span>
									<label>Vehicle ID <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_name" required />
								</p>
<p>
									<span class="req">max 20 symbols</span>
									<label>Vehicle RegNum <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="vehicle_regNum" required />
								</p>								
								<p>
									<span class="req">max 20 symbols</span>
									<label>Vehicle Make <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="vehicle_type" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>Vehicle Model <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="vehicle_model" required />
								</p>
								<p>
									<span class="req"></span>
									<label>Availability <span>(Required Field)</span></label>
									<input type="checkbox" class="field size1" name="availability" required />
								</p>	
							
						</div>
						
						<div class="buttons">
							<input type="button" class="button" value="preview" />
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$vehicleID = $_POST['vehicleID'];
								$vehicleRegNum = $_POST['vehicleRegNum'];
								$vehicleMake = $_POST['vehicleMake'];
								$vehicleModel = $_POST['vehicleModel'];
								$availability = $_POST['availability'];
								
								$qr = "INSERT INTO vehicles (vehicleID,vehicleRegNum,vehicleMake,vehicleModel,availability) 
													VALUES ('$vehicleID','$vehicleRegNum','$vehicleMake','$vehicleModel','$availability')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_vehicles.php\")
											</script>";
									}
								}
								else 'Failed';
						?>
				</div>

			</div>
			
			<div id="sidebar">
				
				<div class="box">
					
					<div class="box-head">
						<h2>Management</h2>
					</div>
					
					<div class="box-content">
						<a href="add_vehicles.php" class="add-button"><span>View Our Vehicles</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>select all</label></p>
						<p><a href="#">Delete Selected</a></p>
						
						<!-- Sort -->
						<div class="sort">
							<label>Sort by</label>
							<select class="field">
								<option value="">Car Type</option>
							</select>
							<select class="field">
								<option value="">Car Name</option>
							</select>
							<select class="field">
								<option value="">Hire Price</option>
							</select>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>

<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> - Sonko Rescue Team</span>
		<span class="right">
			Design by Consi</a>
		</span>
	</div>
</div>
	
</body>
</html>