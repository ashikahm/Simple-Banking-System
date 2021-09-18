
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
             background-color: #DF5E5E;
             color: white;
             }
             tr:nth-child(odd) {
               background-color:#EEEEEE;}
             tr:nth-child(even) {
               background-color:#FCD8D4;}
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
            <th>Account Number</th>
            <th>Name of Account Holder</th>
            <th>City</th>
            <th>Account Type</th>
            <th>Email</th>
            <th>Date</th>
        </tr>
  <?php
   require 'assets/connection.php';
  $result = $con->query("select * from useraccounts");
  if ($result->num_rows > 0) {
  // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["accountNo"]. "</td><td>" . $row["name"] . "</td><td>". $row["city"]. "</td><td>" . $row["accountType"] . "</td><td>" . $row["email"] . "</td><td>" . $row["date"] . "</td></tr>";
      }
  echo "</table>";
  } else { echo "0 results"; }
  $con->close();
  ?>
  </table>
  </div>

</body>
</html>
