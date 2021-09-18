<?php
session_start();
if(!isset($_SESSION['userId'])){ header('location:index.php');}
$con = new mysqli('localhost','root','','Accibank');
$userData=$_SESSION['user'];
?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>Welcome to ACCI Bank</title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="images/favicon.ico" rel="icon">
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
   <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="assets/css/style.css" rel="stylesheet">
   <link href="assets/css/slidr.css" rel="stylesheet">

 </head>
 <body>
   <?php
     include("assets/headAndFoot/header.html");
    ?>
    <br><br><br><br>
    <div class="container">
  <div class="card  w-75 mx-auto">
  <div class="card-header text-center">
    Your account Summary
  </div>
  <div class="card-body">
    <table class="table table-striped table-dark w-75 mx-auto">
  <thead>
    <tr>
      <td scope="col">Account No.</td>
      <th scope="col"><?php echo $userData['accountNo']; ?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Name</th>
      <td><?php echo $userData['name']; ?></td>
    </tr>
    <tr>
      <th scope="row">Branch</th>
      <td><?php echo $userData['branch']; ?></td>
    </tr>
    <tr>
      <th scope="row">city</th>
      <td><?php echo $userData['city']; ?></td>
    </tr>
    <tr>
      <th scope="row">address</th>
      <td><?php echo $userData['address']; ?></td>
    </tr>
    <tr>
      <th scope="row">Account Type</th>
      <td><?php echo $userData['accountType']; ?></td>
    </tr>
    <tr>
      <th scope="row">Account Created</th>
      <td><?php echo $userData['date']; ?></td>
    </tr>
    <tr>
      <th scope="row">Current Balance</th>
      <td><?php echo $userData['balance']; ?></td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
<div class="box-icon-product">
  <div class="container">
    <div class="row">
      <div class="col1">
        <h3 style="margin-top:50px;">WHAT WOULD YOU LIKE TO DO?</h3>
      </div>
    </div>
    <div class="row">
      <div class="COL2">
          <div class="product-list">
              <div style="margin-left:400px;" class="item">
                  <a href="transfer.php", rel="internal", title="TRANSFER AMOUNT" onclick data-wpel-link="internal">
                      <div class="image">
                        <img  src="images/2.png" alt="icon 2", title="home">
                      </div>
                      <div class="name">TRANSFER AMOUNT</div>
                  </a>
              </div>
            <div class="item">
              <a href="viewTransaction.php", rel="internal", title="VIEW TRANSACTIONS" onclick data-wpel-link="internal">
                <div class="image">
                  <img  src="images/3.png" alt="icon 4", title="home">
                </div>
                <div  class="name">VIEW TRANSACTIONS</div>
              </a>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<?php include("assets/headAndFoot/footer.html"); ?>
</body>
</html>
