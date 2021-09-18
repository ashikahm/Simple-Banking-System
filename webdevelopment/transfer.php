
<?php
session_start();
if(!isset($_SESSION['userId'])){ header('location:index.php');}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to ACCI Bank</title>
  <?php  require 'assets/connection.php';  ?>
  <?php  require 'assets/function.php';  ?>
  <?php
    $error = "";
    if (isset($_POST['userLogin']))
    {
      $error = "";
        $user = $_POST['email'];
        $pass = $_POST['password'];

        $result = $con->query("select * from userAccounts where email='$user' AND password='$pass'");
        if($result->num_rows>0)
        {
          session_start();
          $data = $result->fetch_assoc();
          $_SESSION['userId']=$data['id'];
          $_SESSION['user'] = $data;
          header('location:index.php');
         }
        else
        {
          $error = "<div class='alert alert-warning text-center rounded-0'>Username or password wrong try again!</div>";
        }
    }

   ?>
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
    TRANSFER AMOUNT
  </div>
  <div class="card-body">
      <form method="POST">
          <div class="alert alert-success w-50 mx-auto">
            <h5>New transaction</h5>
            <input type="text" name="accNum" class="form-control " placeholder="Enter Account number of recepient" required>
            <button type="submit" name="get" class="btn btn-primary btn-bloc btn-sm my-1">TRANSFER</button>
          </div>
      </form>
      <?php if (isset($_POST['get']))
      {
       $array = $con->query("select * from userAccounts where accountNo = '$_POST[accNum]'");

          if ($array->num_rows > 0) {
           $row = $array->fetch_assoc();
            echo "<div class='alert alert-success w-50 mx-auto'>
                  <form method='POST'>
                    Account No.
                    <input type='text' value='$row[accountNo]' name='accNum' class='form-control ' readonly required>
                    Account Holder Name.
                    <input type='text' class='form-control' value='$row[name]' readonly required>
                    Account Holder Bank Name.
                    <input type='text' class='form-control' value='ACCI BANK' readonly required>
                    Enter Amount for tranfer.
                    <input type='number' name='amount' class='form-control' min='1' max='$userData[balance]' required>
                    <button type='submit' name='transfer' class='btn btn-primary btn-bloc btn-sm my-1'>Tranfer</button>
                  </form>
                </div>";
          }
          else
            echo "<div class='alert alert-success w-50 mx-auto'>Account No. $_POST[accNum] Does not exist</div>";
        }
      ?>
      <br><br>
      <?php
        if (isset($_POST['transfer']))
        {
              $amount = $_POST['amount'];
              setBalance($amount,'debit',$userData['accountNo']);
              setBalance($amount,'credit',$_POST['accNum']);
              makeTransaction('transfer',$amount,$_POST['accNum']);
              echo "<script>alert('Transfer Successfull');window.location.href='transfer.php'</script>";
        }
        ?>
         </div>
       </div>

     </div>

  </body>
</html>
