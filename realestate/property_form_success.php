<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>

    <title>VIT ESTATES</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!------------------------------------------------------ FONTS ------------------------------------------>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <! ------------------------------------------------------ CSS  ----------------------------------------->
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link href="./css/content.css" rel='stylesheet' type='text/css'>
    <link href="./css/footer.css" rel="stylesheet" type="text/css">
    <link href="./css/main_sidebar.css" rel="stylesheet" type="text/css">
    <link href="./css/gallery_style.css" rel="stylesheet" type="text/css">
    
    <!---------------------------------------------------------- ICONS ------------------------------------->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>



<body>

<!------------------------------------------------- HEADER -------------------------------------------------------->

<header>
    <table>
        <tr>
        <td><h3 style="margin-left:8px;">VIT<span>ESTATES</span></h3></td>

           <td colspan="2px" rowspan="">
            <ul>
                <li><a href="index.php">HOME</a></b></li>
                <li>
                    <b><a href="property_listing.php">LISTINGS</a></b>
                </li>
                <li>
                    <b><a href="about.php">ABOUT US</a></b>
                </li>
                <li>
                <b><a href="business.php">SELL</a></b>                </li>
                </li>
                <li>
                    <img src="./static/icons/icon-edit-user.png" alt="user" class="header-icon"/>
                </li>
            </ul>
            </td>
        </tr>
    </table>
</header>

<!------------------------------------------ SEPARATOR HEADER AND CONTENT ---------------------------->

<div class='separator'></div>


<!-------------------------------- SUCCESS MESSAGE ------------------------------------------------!>

<?php
$host="localhost:3306";
$user="root";
$password="";
$tbl_name="customer";
$db=mysqli_connect("localhost:3306","root","","property") or die(mysql_error());

$name = $_POST['name'];
$mobile_phone = $_POST['mobile_phone'];
$cus_email = $_POST ['cus_email'];
$reason = $_POST['reason'];
$id_property = $_POST['id_property'];


//echo 
$sql = "INSERT INTO $tbl_name(id_property, name, mobile_phone, cus_email, reason) VALUE('$id_property','$name', '$mobile_phone', '$cus_email','$reason')";
//die();
$result=mysqli_query($db,$sql) or die("Error in inserting data due to
".mysqli_error($db));



if($result){
  echo "<section class='fdb-block'>";
      echo "<div class='container'>";
          echo "<div class='row align-items-center justify-content-center'>";
              echo"<div class='col-auto'  style='margin-top: 1.5em;margin-right: 1.3rem;'>";
              echo"<h2 style='font-size: 2rem; color:#25ae88'>We will contact you soon!</h2>";
              echo"</div>";
              echo"<div class='col-auto mt-4 mt-sm-0'>";
              echo "<a href='index.php' class='bg-blue-500 text-white font-bold py-2 px-4 rounded'>HOME</a>";
              echo"</div>";
      echo"</div>";
      echo"</div>";

  echo"</section>";
}
else
echo mysqli_error($db);
?>
<!----------------------------------------------- SECTION ABOUT US ------------------------------------>
    <section class="fdb-block" style="background-image: url(./images/blocks/8.svg)">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 col-lg-5" style="margin-left: 50px;">
            <h3 class='logo-text'>VIT<span>ESTATES</span></h3>
            <p class="lead">THANK YOU
                             for taking interests in our Listings.
                             <br><br>
                             We value your business, and would like to address your concerns as quickly as possible
                             Your continued patronage and suggestions are a vital part of our growth.
                              And for that, we are most grateful.
                             <br><br>
                             Thanks again! We look forward to serving you for many years to come.
                              <br><br>
                             Best regards,
            </p>
          </div>
          <div class="col-10 col-sm-6 m-auto col-md-4 pt-4 pt-md-0">
            <img alt="image" class="img-fluid rounded-0" src="./images/draws/chat.svg">
          </div>
        </div>
      </div>
    </section>


<!---------------------------------------------- FOOTER ------------------------------------------------->
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>VIT<span>ESTATES</span></h3>

				<p class="footer-links">
					<a href="index.php">Home</a>
					·
					<a href="property_listing.php">Properties</a>
					·
					<a href="feedback.php">Feedback</a>
					·
					<a href="about.php">About US</a>
					·
                    <a href="contact.php">Contact US</a>
				</p>

				<p class="footer-company-name">VIT ESTATES &copy; 2019</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>123 Chennai Street</span> Vellore, Tamilnadu</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 111 222 3333</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@vitestates.com">Email us</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the VIT ESTATES</span>
					This Company focuses on bringing the best experience when shopping for a new house &amp; you won't regret.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

</footer>


</body>
</html>
