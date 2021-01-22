<?php
include_once('db.php');
session_start();
$message = '';

// if(isset($_SESSION['username'])){
// 	header("Location: index.php");
// }


if($_SERVER["REQUEST_METHOD"] == "POST"){

	$username = $_POST['username'];
	$password = $_POST['password'];

	// $pre_stmt = $con->prepare("SELECT * FROM login WHERE username = ?");
	// $pre_stmt->bind_param("s",$username);
	$pre_stmt = "SELECT * FROM login WHERE username  = '$username'";

	if($pre_stmt = $con->query($pre_stmt)){
		// $pre_stmt->get_result();

	if($pre_stmt->num_rows > 0){

		$row = $pre_stmt->fetch_assoc();
		if($row['password'] === $password){

			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['username'] = $row['username'];

		   $pre_stmt = $con->prepare("INSERT INTO login_details (user_id) VALUES (?)");

			$pre_stmt->bind_param("i",$row['user_id']);
			if($pre_stmt->execute()){

			$_SESSION['login_details_id'] = $con->insert_id;
			header("Location: admin.php");
			}else{
				$message = 'Something went wrong';
			}
			


		}else{

			$message = 'Crudential error';
		}
	}else{
		$message = 'No record found';
	}
}else{
	$message = 'Database error!';
}
	
}
include_once('header.php');
?>


		<!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<h2>TAAP admin login</h2>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

<div class="row justify-content-center mt-5">
	<div class="col-md-4 m-5 card p-3">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<h5 class="text-danger text-center"><?php echo $message; ?></h5>
  <div class="form-group">
    <label for="">Username</label>
    <input type="text" name="username" required class="form-control">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="password" required class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
	</div>
</div>


<?php
include_once('footer.php');
?>