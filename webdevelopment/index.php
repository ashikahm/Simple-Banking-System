
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
  <div id="bgslider">
    <figure>
        <img src="images/image1.jpg" alt="Slider">
        <img src="images/image2.jpg" alt="Slider">
        <img src="images/image3.jpg" alt="Slider">
        <img src="images/image4.jpg" alt="Slider">
    </figure>
    <div class="center"><h2>BIG DREAM STARTS WITH SMALL PLAN!</h2></br><h3> We are here for your help.</h3></div>
  </div>
  <div class="box-icon-product">
    <div class="container">
      <div class="row">
        <div class="col1">
          <h3>WHAT WOULD YOU LIKE TO DO?</h3>
        </div>
      </div>
      <div class="row">
        <div class="COL2">
          <div class="product-list">

            <div class="item">
              <a href="loginToAccount.php", rel="internal", title="ACCOUNT SUMMARY" onclick data-wpel-link="internal">
                <div class="image">
                  <img src="images/1.png" alt="icon 1", title="home">
                </div>
                <div class="name">ACCOUNT SUMMARY</div>
              </a>
            </div>

            <div class="item">
              <a href="loginToAccount.php", rel="internal", title="TRANSFER AMOUNT" onclick data-wpel-link="internal">
                <div class="image">
                  <img src="images/2.png" alt="icon 2", title="home">
                </div>
                <div class="name">TRANSFER AMOUNT</div>
              </a>
            </div>

            <div class="item">
              <a href="customerDisplay.php", rel="internal", title="DISPLAY ALL CUSTOMER" onclick data-wpel-link="internal">
                <div class="image">
                  <img src="images/3.png" alt="icon 3", title="home">
                </div>
                <div class="name">DISPLAY ALL CUSTOMER</div>
              </a>
            </div>

            <div class="item">
              <a href="loginToAccount.php", rel="internal", title="VIEW TRANSACTIONS" onclick data-wpel-link="internal">
                <div class="image">
                  <img src="images/3.png" alt="icon 4", title="home">
                </div>
                <div class="name">VIEW TRANSACTIONS</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
    include("assets/headAndFoot/footer.html");
   ?>


</body>
</html>
