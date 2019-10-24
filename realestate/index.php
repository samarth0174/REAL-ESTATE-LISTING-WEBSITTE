<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>

    <title>VIT ESTATES</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!------------------------------------------------------ FONTS ------------------------------------------>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">


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
                <li>
                    <img src="./static/icons/icon-edit-user.png" alt="user" class="header-icon"/>
                </li>
            </ul>
            </td>
        </tr>
    </table>
</header>

<!-------------------------------------------------  CONTENT --------------------------------------------->


<div id="intro_image">
    <img src="./svgs/city-illustrated.svg">
</div>


<!---- DISPLAYING FILTER FORM ---->

<section class="fdb-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8 text-center">
            <div class="row">
              <div class="col">
                <h1 style="font-size: 2.75rem;font-weight: 600;line-height: 1.5;">FIND YOUR HOUSE</h1>
                <p class="lead">We have the most listings and constant updates. So you’ll never miss out..</p>
              </div>
            </div>
            <form name="form1" method="post" action="property_success.php">
            <div class="row align-items-center">
              <div class="col-12 col-md-5 mt-4">
                  <select name="search" id="select" class="form-control">
                     <option>Property Type</option>
                     <option>Condominium</option>
                     <option>Terraced House</option>
                     <option>Shop / Office</option>
                     <option>Bungalow House</option>
                     <option>Hotel / Resort</option>
                     <option>Semi-Detached House</option>
                     <option>Penthouse</option>
                  </select>
              </div>
              <div class="col-12 col-md-5 mt-4">
                <select name="search" id="select" class="form-control">
                      <option>Beds</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      </select>
              </div>
              <div class="col-12 col-md-5 mt-4">
                <select name="search" id="select" class="form-control">
                      <option>Baths</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                </select>
              </div>
              <div class="col-12 col-md-2 mt-4">
                <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded" style="border: 0;height: calc(2.1rem + 0.25rem);" method="post" onclick="/property_success.php">
                  Find proposals
                </button>
              </div>
            </form>
            </div>
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
