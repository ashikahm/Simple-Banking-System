<?php
session_start();
if(!isset($_SESSION['userId'])){ header('location:index.php');}?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to ACCI Bank</title>

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
   <style>
              table {
              border-collapse: collapse;
              width: 100%;
              margin-top: 100px;
              color: #588c7e;
              font-family: monospace;
              font-size: 25px;
              text-align: center;
              }
              th {
              background-color: #588c7e;
              color: white;
              }
              tr:nth-child(even) {
                background-color: #f2f2f2;}
    </style>
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
    <?php   include("assets/headAndFoot/header.html"); ?>
  <div class="centre">
    <table >
        <tr>
            <th>action</th>
            <th>credit</th>
            <th>debit</th>
            <th>Receiver Account Number</th>
            <th>Date</th>
        </tr>
  <?php
   require 'assets/connection.php';
  $result = $con->query("select * from transaction where userId = '$userData[id]' AND action = 'transfer' order by date desc");

  if ($result->num_rows > 0) {
  // output data of each row
      while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["action"]. "</td><td>" . $row["credit"] . "</td><td>"
  . $row["debit"]. "</td><td>" . $row["other"] . "</td><td>" . $row["date"] . "</td></tr>";
  }
  echo "</table>";
  } else { echo "0 results"; }
  $con->close();
  ?>
  </table>
  </div>

</body>
</html>
