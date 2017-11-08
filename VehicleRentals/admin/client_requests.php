<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to Approve this request?")){
				window.location.href ='approve.php?id='+id;
			}
		}
	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Client Requests
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Bookings</h2>
						<div class="right">
							<label>search bookings</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Customer ID</th>
								<th>Customer FirstName</th>
								<th>Customer LastName</th>
								<th>Customer Address Street</th>
								<th>Customer Address Area</th>
								<th>Customer Address City</th>
								<th>Customer Address Code</th>
								<th>Customer Contact_no.</th>
								<th>Customer Email</th>
								<th>Customer Password</th>
			
								<th width="110" class="ac">Content Control</th>
							</tr>
							<?php
								include '../config.php';
								$select = "SELECT * FROM customer";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#"><?php echo $row['customerID'] ?></a></h3></td>
								<td><?php echo $row['customerFirstName'] ?></td>
								<td><a href="#"><?php echo $row['customerLastName'] ?></a></td>
								<td><a href="#"><?php echo $row['customerAddressStreet'] ?></a></td>
								<td><a href="#"><?php echo $row['customerAddressArea'] ?></a></td>
								<td><a href="#"><?php echo $row['customerAddressCity'] ?></a></td>
								<td><a href="#"><?php echo $row['customerAddressCode'] ?></a></td>
								<td><a href="#"><?php echo $row['customerContactNumber'] ?></a></td>
								<td><a href="#"><?php echo $row['customerEmail'] ?></a></td>
								<td><a href="#"><?php echo $row['customerAccPassword'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['customerID'];?>)" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<h2><input type="submit" onclick="window.print()" value="Print Here" /></h2>
					
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> - Vehicle Rental System</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>