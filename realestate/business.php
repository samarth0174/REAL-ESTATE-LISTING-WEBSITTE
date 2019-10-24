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
                    <b><a href="business.php">SELL</a></b>
                </li>
                <li>
                    <img src="./static/icons/icon-edit-user.png" alt="user" class="header-icon"/>
                </li>
            </ul>
            </td>
        </tr>
    </table>
</header>




<body>
<div class="one" style="margin:100px" >
<h1>Please Fill the Details of Property along with your contact details.</h1>
<h1>We will contact you shortly.</h1>
<div class="two" style="padding:50px">

<table border="0" style="border-style:single">
<form method="post" action="business_success.php">	


    <tr>	<td width="105">Full Name :</td>
        <td width="200"><input type="text"  name="name_user"> </td>
    </tr>
    <tr>
    	<td width="105">email :</td>
        <td width="200"><input type="email"  name="email"> </td>
    </tr>
    <tr>
    	<td width="105">contact_no :</td>
        <td width="200"><input type="text"  name="phone"> </td>
    </tr>   
        <tr>   	<td width="105">Name Property:</td>
        <td width="200"><input type="text"  name="name_property"> </td>
    	<td width="73">Type Property:</td>
        <td width="169"><select name="type_property"  id="room" type="text" />
                    <option>Condominium</option>
                    <option>Terraced House</option>
                    <option>Shop / Office</option>
                    <option>Bungalow House</option>
                    <option>Hotel / Resort</option>
                    <option>Semi-Detached House</option>
                    <option>Penthouse</option>
                  </select></td>
    </tr>
    <tr>
    	<td>Address:</td>
        <td><input type="text"  name="add1"></td>
    	<td>Postcode:</td>
        <td><input type="text"  name="add2"></td>
    </tr>
    <tr>
    	<td>Price:</td>
        <td><input type="text"  name="price"></td>
		<td>Price Type:</td>
		<td><select name="price_type"  id="room" type="text" />
        	<option>....</option>
            <option>Guide Price</option>
            <option>Negotiable</option>
            </select></td>
    </tr>
    <tr>
    	<td>Land Area:</td>
        <td><input type="text"  name="land_area"></td></tr>
        <tr>
		<td>Groos Floor Area:</td>
		<td><input type="text"  name="groos_floor_area"></td>
    </tr>
    <tr>
    	<td>Leasehold:</td>
        <td><input type="text"  name="leasehold"></td></tr>
        <tr>
		<td>Bedrooms:</td>
		<td><select type="text"  name="beds">
        	
            <option>1</option>
            <option>2</option>
        	<option>3</option>
            <option>4</option>
            <option>5</option>
        	<option>6</option>
            <option>7</option>
            <option>8</option>
        	<option>9</option>
            <option>10</option>
        </select></td>
		<td>Bathrooms:</td>
		<td><SELECT  type="text" name="baths">
                	
            <option>1</option>
            <option>2</option>
        	<option>3</option>
            <option>4</option>
            <option>5</option>
        	<option>6</option>
            <option>7</option>
            <option>8</option>
        	<option>9</option>
            <option>10</option>

        </SELECT></td>
    </tr>
    <tr>
        
        <tr>
		<td>Per Square Feet:</td>
		<td><input type="text"  name="per_square_feet"></td>
    </tr>
            <tr>
		<td>Square Feet:</td>
		<td><input type="text"  name="square_feet"></td>
    </tr>
        <tr>
		<td height="103">Text:</td>
		<td><label for="textarea"></label>
		  <textarea name="text"  id="textarea" cols="45" rows="5"></textarea></td>
    </tr>
	<tr>
    <td>&nbsp;</td>
        <td><input type="submit" name="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded"
                            style="border: 0;height: calc(2.1rem + 0.25rem);" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" class="bg-blue-500 text-white font-bold py-2 px-4 rounded"
                            style="border: 0;height: calc(2.1rem + 0.25rem);" value="Reset"></td>
    </tr>
    
</form>
</table>
</div>

</div>

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
