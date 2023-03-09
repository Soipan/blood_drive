<?php 
@Include 'inc/config.php'; 
	session_start();

	if (isset($_SESSION['email'])) {
		
	}
	else{
		header('location:login_form.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Blood Management</title>
  <!-- Designed and developed by Habibur Rahman Mahid 01845635308 -->
</head>

<body>
	<!-- Designed and developed by Habibur Rahman Mahid -->
	<nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse p-0">
		<div class="container">
			<button class="navbar-toggler toggler-right" data-target="#mynavbar" data-toggle="collapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a href="#" class="navbar-brand mr-3">Blood Donation and Supply Management</a>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="navbar-nav">
					<li class="nav-item px-2"><a href="#" class="nav-link active">Logged in <!---<?php echo $_SESSION['email']?>---></a></li>
					
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown mr-3">
						
						<li class="nav-item">
							<a href="client/logout.php" class="nav-link"><i class="fa fa-power-off"></i> Logout</a>
						</li>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--This Is Header-->
	<!-- Designed and developed by Habibur Rahman Mahid -->
	<header id="main-header" class="bg-primary py-2 text-white">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1><i class="fa fa-tachometer"></i> Dashboard</h1>
				</div>
			</div>
		</div>
	</header>
	<!--This is section-->
	<!-- Designed and developed by Habibur Rahman Mahid -->
	<section id="sections" class="py-4 mb-4 bg-faded">
		<div class="container">
			<div class="row">
				<div class="col-md"></div>
				<div class="col-md-3">
					<a href="#" class="btn btn-primary btn-block" style="border-radius:0%;" data-toggle="modal" data-target="#addPostModal"><i class="fa fa-plus"></i> Request Blood</a>
				</div>
				<div class="col-md-3">
					<a href="#" class="btn btn-warning btn-block" style="border-radius:0%;" data-toggle="modal" data-target="#addCateModal"><i class="fa fa-spinner"></i> Pendings</a>
				</div>
				<div class="col-md-3">
					<a href="#" class="btn btn-success btn-block" style="border-radius:0%;" data-toggle="modal" data-target="#addUsertModal"><i class="fa fa-check"></i> Approved Request</a>
				</div>
				<div class="col-md"></div>
			</div>
		</div>
	
	</section>
	<!----Section2 for showing Post Model ---->
	<!-- Designed and developed by Habibur Rahman Mahid -->
	<section id="post">
		<div class="container">
			<div class="row">
			<table class="table table-bordered table-hover table-striped">
							<thead>
								<th>#</th>
								<th>Hospital Name</th>
								<th>Staff Name</th>
								<th>Staff Position</th>
								<th>Email</th>
								<th>Blood type </th>
								<th>Amount Required</th>
								<th>Status</th>
							</thead>
							 <tbody>
							 	<?php 
									$sql = "SELECT * FROM blood_request WHERE email='".$_SESSION['email']."'";
									$que = mysqli_query($con,$sql);
									$cnt=1;
									while ($result = mysqli_fetch_assoc($que)) {
									?>

									
							 	<tr>
									<td><?php echo $cnt;?></td>
							 		<td><?php echo $result['hospital_name']; ?></td>
							 		<td><?php echo $result['official_name']; ?></td>				 
							 		<td><?php echo $result['official_position']; ?></td>
									 <td><?php echo $result['email']; ?></td>
									<td><?php echo $result['blood_type']; ?></td>
									<td><?php echo $result['blood_amount']; ?></td>
							 		<td>
							 			<?php 
							 			if ($result['status'] == 0) {
							 				echo "<span class='badge badge-warning'>Pending</span>";
							 			}
							 			else{
							 				echo "<span class='badge badge-success'>Approved</span>";
							 			}
							 	$cnt++;	}
							 		 ?>
							 		</td>
							 	</tr>

							 </tbody>
						</table>
			</div>
		</div>
	</section>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<!----Section3 footer ---->
	<section id="main-footer" class="text-center text-white bg-inverse mt-4 p-4">
		<div class="container">
			<div class="row">
				<div class="col">
				<p class="lead">&copy; <?php echo date("Y")?> SOLM</p>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Creating Modal -->
    <!-- Header Post -->
	<div class="modal fade" id="addPostModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-primary text-white">
					<div class="modal-title">
						<h5>Apply Leave</h5>
					</div>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
					<form action="" method="post">
						<div class="form-group">
							<label class="form-control-label">Hospital Name</label>
							<input type="text" name="hospital_name" class="form-control"/>
							<label class="form-control-label">Staff Name</label>
							<input type="text" name="official_name" class="form-control"/>
							<!----<select name="department" class="form-control" >
								<option value="HR">HR</option>
								<option value="Marketing">Marketing</option>
								<option value="Development">Development</option>
								<option value="UX">UX</option>
								<option value="Test Team">Test Team</option>
								<option value="Finance">Finance</option>
								<option value="Customer Support">Customer Support</option>
							</select> ----->
						
						
						
							<label class="form-control-label">Staff Position</label>
							<input type="text" name="official_position" class="form-control"/>
							<input type="hidden" name="email" value="<?php echo $_SESSION['email']?>">
							<label class="form-control-label">Blood type</label>
							<input type="text" name="blood_type" class="form-control"/>
							<label class="form-control-label">Blood amount</label>
							<input type="text" name="blood_amount" class="form-control"/>
						</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-danger" style="border-radius:0%;" data-dismiss="modal">Close</button>
					<input type="hidden" name="status" value="0">
					<input type="submit" class="btn btn-success" style="border-radius:0%;" name="apply"  value="Apply">
				</div>
			</form>
			</div>
		</div>
	</div>
	<!--Modal Category-->
	<div class="modal fade" id="addCateModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-warning text-white">
					<div class="modal-title">
						<h5>Pending Approvals</h5>
					</div>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
				<table class="table table-bordered table-hover table-striped">
							<thead>
								<th>#</th>
			
								<th>Hospital Name</th>
								<th>Staff Name</th>
								<th>Staff Position</th>
								<th>Email</th>
								<th>Blood type </th>
								<th>Amount Required</th>
								<th>Status</th>

							</thead>
							 <tbody>
							 	<?php 
									$sql = "SELECT * FROM blood_request WHERE status = 0 && email='".$_SESSION['email']."'";
									$que = mysqli_query($con,$sql);
									$cnt=1;
									while ($result = mysqli_fetch_assoc($que)) {
									?>

									
							 	<tr>
									<td><?php echo $cnt;?></td>
									<td><?php echo $result['hospital_name']; ?></td>
							 		<td><?php echo $result['official_name']; ?></td>
							 		<td><?php echo $result['official_position']; ?></td>
									 <td><?php echo $result['email']; ?></td>
									<td><?php echo $result['blood_type']; ?></td>
									<td><?php echo $result['blood_amount']; ?></td>
							 		<td>
							 			<?php 
							 			if ($result['status'] == 0) {
											echo "<span class='badge badge-warning'>Pending</span>";
							 			}
							 			else{
											echo "<span class='badge badge-success'>Approved</span>";
							 			}
							 	$cnt++;	}
							 		 ?>
							 		</td>
							 	</tr>

							 </tbody>
						</table>
					
				</div>
				
			</div>
		</div>
	</div>
	<!-- User Modal -->
	<div class="modal fade" id="addUsertModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-success text-white">
					<div class="modal-title">
						<h5>Total Approved Requests</h5>
					</div>
					<button class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
				<table class="table table-bordered table-hover table-striped">
							<thead>
								<th>#</th>
								<th>Hospital Name</th>
								<th>Staff Name</th>
								<th>Staff Position</th>
								<th>Email</th>
								<th>Blood type </th>
								<th>Amount Required</th>
								<th>Status</th>
							</thead>
							 <tbody>
							 	<?php 
									$sql = "SELECT * FROM blood_request WHERE status = 1 AND email='".$_SESSION['email']."'";
									$que = mysqli_query($con,$sql);
									$cnt=1;
									while ($result = mysqli_fetch_assoc($que)) {
									?>

									
							 	<tr>
									<td><?php echo $cnt;?></td>
									<td><?php echo $result['hospital_name']; ?></td>
							 		<td><?php echo $result['official_name']; ?></td>
							 		<td><?php echo $result['official_position']; ?></td>
									 <td><?php echo $result['email']; ?></td>
									<td><?php echo $result['blood_type']; ?></td>
									<td><?php echo $result['blood_amount']; ?></td>
							 		<td>
							 			<?php 
							 			if ($result['status'] == 0) {
											echo "<span class='badge badge-warning'>Pending</span>";
							 			}
							 			else{
											echo "<span class='badge badge-success'>Approved</span>";
							 			}
							 	$cnt++;	}
							 		 ?>
							 		</td>
							 	</tr>

							 </tbody>
						</table>
				</div>
				
			</div>
		</div>
	</div>
  
  
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
  <script>
	CKEDITOR.replace('editor1');
  </script>
</body>
</html>
<?php 
	if (isset($_POST['apply'])){
		$hospital=$_POST['hospital_name'];
		$name = $_POST['official_name'];
		$position = $_POST['official_position'];
		$email = $_POST['email'];
		$type = $_POST['blood_type'];
		$amount = $_POST['blood_amount'];
		$status = $_POST['status'];

		$sql = "INSERT INTO blood_request(hospital_name,official_name,official_position,email,blood_type,blood_amount,status)VALUES('$hospital','$name','$position','$email','$type','$amount','$status')";

		$run = mysqli_query($con,$sql);

		if($run == true){
			
			echo "<script> 
					alert('Supply Requested, Please wait for approval status');
					window.open('dashboard.php','_self');
				  </script>";
		}else{
			echo "<script> 
			alert('Failed To Apply');
			</script>";
		}
	}
	
 ?>