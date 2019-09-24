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
    <style>
		  .error {color:Red;}
		</style>
    
    <!--------------------------------- ICONS ------------------------------------->
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
                    <b><a href="feedback.php">FEEDBACK</a></b>
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


<?php  
      $nameErr = $phoneErr= $emailErr="";
      
      $result = 1;
      if($_SERVER["REQUEST_METHOD"]== "POST")
				{
					$name = test_input($_POST["name"]);
					if(empty($_POST["name"])) {
						$nameErr  =  "Name Required";
            $result  = 1;
          }
					else if(!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])){
						$nameErr  =  "Only alphabets Required";
						
					}
					$email = test_input($_POST["email"]);
					if(empty($_POST["email"])) {
						$emailErr  =  "Email Required";
            $result  = 1;
          }		
          
          else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
						$emailErr  =  "Please enter a valid email Id";
            $result  = 1;
					}
					
					if(empty($_POST["no_fon"])) {
						$phoneErr  =  "Phone No Required";
            $result  = 1;
          }		
					
					
					else if(!preg_match("/^[1-9][0-9]{10}$/",$_POST["no_fon"])){
						$phoneErr  =  "Please enter a valid Mobile No";
            $result  = 1;
					}
					
					
					
							
				}
        

        if($result==0){
          echo "<script> location.href='feedback_success.php'; </script>";
          exit;
          }
        
        
				function test_input($data) {
							$data = trim($data);
							$data = stripslashes($data);
							$data = htmlspecialchars($data);
							return $data;
							}
			?>
		
<!---------------------------------------- FEEDBACK FORM -------------------------------------------->

    <section class="fdb-block py-0">
      <div class="container py-5 my-5" style="background-image: url(./images/shapes/4.svg);">
        <div class=" row justify-content-end">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5 text-left">
            <div class="fdb-box" style="width: 80%";>
              <div class="row">
                <div class="col">
                  <h3 class="logo-text">VIT<span>ESTATES</span> FEEDBACK</h3>
                  <p class="lead">We truly appreciate your feedback.</p>
                </div>
              </div>

              <!-- FORM -->
              <form id="form1" name="form1" method="post" action="feedback_success.php">
                  <div class="row">
                    <div class="col mt-4">
                        <select name="reason" type="text"  class="form-control" style="width: 330px">
                           <option>I am looking to sell a Property</option>
                           <option>I am looking to rent a Property</option>
                           <option>I am looking to let a Property</option>
                           <option>I have another enquiry</option>
                        </select>
                    </div>
                  </div>
                  


                  <div class="row mt-4">
                    <div class="col">
                        <input name="name" class="form-control custom-hw" type="text" width="333" placeholder="Full name" required>
                        <span class="error">* <?php echo $nameErr;?> </span><br>
                      </div>
                  </div>

                   <div class="row mt-4">
                      <div class="col">
                        <input name="no_fon" type="text" class="form-control custom-hw" type="text"  placeholder="Phone number" required>
                        <span class="error">* <?php echo $phoneErr;?></span><br>
		 
                        </div>
                   </div>

                   <div class="row mt-4">
                      <div class="col">
                          <input name="email" type="email" class="form-control custom-hw" type="text"  placeholder="Email" required>
                          <span class="error">* <?php echo $emailErr;?></span><br>
		
                        </div>
                   </div>
                   <div class="row mt-4">
                       <div class="col">
                           <textarea name="message" style="width: 305px;height: 100px;" class="form-control" type="text" placeholder="Your message" ></textarea>
                       </div>
                   </div>

                  <div class="row mt-4">
                    <div class="col">
                       <button type ="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded"
                            style="border: 0;height: calc(2.1rem + 0.25rem);" value = "submit" >
                                        Submit Feedback
                       </button>
                    </div>
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
