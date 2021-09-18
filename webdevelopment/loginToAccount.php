<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>USER ACCOUNT SUMMARY</title>
		 <link href="images/favicon.ico" rel="icon">
		 <?php
		  	$con = new mysqli('localhost','root','','Accibank');
				$error = "";
		if (isset($_POST['AccountSummary']))
		{
			$error = "";
  			$user = $_POST['AccountNumber'];
		    $pass = $_POST['AccountPassword'];
		    $result = $con->query("select * from useraccounts where accountNo='$user' AND password='$pass'");
		    if($result->num_rows>0)
		    {
		      session_start();
		      $data = $result->fetch_assoc();
		      $_SESSION['userId']=$data['id'];
		      $_SESSION['user'] = $data;
		      header('location:accountDetails.php');
		     }
		    else
		    {
		      $error = "<div class='alert alert-warning text-center rounded-0'>Username or password wrong try again!</div>";
		    }
			}
		  ?>

		   <!-- Google Fonts -->
		   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

		   <!-- Vendor CSS Files -->
		   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
		   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		   <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
		   <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
		   <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

		   <!-- Template Main CSS File -->
			 <link href="assets/css/AccountSummary.css" rel="stylesheet">
	</head>
	<body>
			<div class="logo">
				<img src="images/logo.png" alt="logo">
				<h2>ACCI BANK</h2>
			</div>
			<div class="container">
					<h3> Enter your Account Number</h3>
					<form method="POST">
					<input type="text" name="AccountNumber" value="" placeholder="Enter Account Number">
					<input type="password" name="AccountPassword" value="" placeholder="Enter Account Password">
					<button type="submit" name="AccountSummary">SUBMIT</button>
					</form>
			</div>


	</body>
</html>
