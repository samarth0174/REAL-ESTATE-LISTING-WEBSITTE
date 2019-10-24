<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>

    <title>VIT ESTATES</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!------------------------------------------------------ FONTS ------------------------------------------>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">


    <! ------------------------------------------------------ CSS  ----------------------------------------->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link href="./css/content.css" rel='stylesheet' type='text/css'>
    <link href="./css/footer.css" rel="stylesheet" type="text/css">
    <link href="./css/main_sidebar.css" rel="stylesheet" type="text/css">
    <link href="./css/gallery_style.css" rel="stylesheet" type="text/css">
    <link href="./css/table.css" rel="stylesheet" type="text/css">
    
    <!---------------------------------------------------------- ICONS ------------------------------------->
    
</head>
<body>
<?php include('./admin/connection.php'); ?>
<?php
  $get_id_property=($_POST['post_item']);
  $id_property_sql="SELECT * FROM property WHERE id_property='$get_id_property'";
  $id_property_result=mysqli_query($db,$id_property_sql) or die(mysqli_error());

  $id_pro = $_POST['post_item'];


  while($row_id_property=mysqli_fetch_array($id_property_result)){
    $name_property=$row_id_property["name_property"];
    $price=$row_id_property["price"];
    $type_property=$row_id_property["type_property"];
    $beds=$row_id_property["beds"];
    $baths=$row_id_property["baths"];
    $text=$row_id_property["text"];
    $land_area=$row_id_property["land_area"];
    $groos_floor_area=$row_id_property["groos_floor_area"];
    $image=$row_id_property["name_property"];
    $filename = "admin/images/$name_property.jpg";

    if (!file_exists($filename)) {
      $filename="images/default.png"; 
    }
    if ($image==null) {
      $filename="images/$name_property.jpg"; 
    }
  }
?>

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


<!------------------------------------------ SEPARATOR HEADER AND CONTENT ---------------------------->

<div class='separator'></div>


<!------------------------------------------ CONTENT -------------------------------------------------->

<section class="fdb-block" style="background-image: url(./images/blocks/8.svg)">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 col-lg-5" style="margin-left: 50px;">
            <div class="table100 ver6 m-b-110">
					    <table data-vertable="ver6">
                <tbody>
							    <tr class="row100">
								    <td class="column100 column1" data-column="column1">Item code :</td>
								    <td class="column100 column2" data-column="column2"><?php echo " MO ".$get_id_property ?></td>
                  </tr>
                  <tr class="row100">
								    <td class="column100 column1" data-column="column1">Item Name :</td>
								    <td class="column100 column2" data-column="column2"><?php echo $name_property ?></td>
                  </tr>
                  <tr class="row100">
								    <td class="column100 column1" data-column="column1">Item Price :</td>
								    <td class="column100 column2" data-column="column2"><?php echo $price ?></td>
                  </tr>
                  <tr class="row100">
								    <td class="column100 column1" data-column="column1">Land Area :</td>
								    <td class="column100 column2" data-column="column2"><?php echo $land_area ?></td>
                  </tr>
                  <tr class="row100"></tr>

                  <tr class="row100">
								    <td class="column100 column1" data-column="column1">type :</td>
								    <td class="column100 column2" data-column="column2"><?php echo $type_property ?></td>
                  </tr>
                  <tr class="row100">
								    <td class="column100 column1" data-column="column1">Land area :</td>
								    <td class="column100 column2" data-column="column2"><?php echo $land_area ?></td>
                  </tr>
                  <tr class="row100">
								    <td class="column100 column1" data-column="column1">Groos Floor :</td>
								    <td class="column100 column2" data-column="column2"><?php echo $groos_floor_area ?></td>
                  </tr>
                  <tr class="row100">
								    <td class="column100 column1" data-column="column1">Bedrooms :</td>
								    <td class="column100 column2" data-column="column2"><?php echo $beds ?></td>
                  </tr>
                  <tr class="row100">
								    <td class="column100 column1" data-column="column1">Bathrooms :</td>
								    <td class="column100 column2" data-column="column2"><?php echo $baths ?></td>
                  </tr>
                  <tr class="row100">
								    <td class="column100 column1" data-column="column1">Additional :</td>
								    <td class="column100 column2" data-column="column2"><?php echo $text ?></td>
                  </tr>
                  <tr><td><div style="margin-right: 2px;text-align:center;">
               <input type="button" name="Form" value="ENQUIRE ABOUT THIS LISTING" class="bg-blue-500 text-white font-bold py-2 px-4 rounded" style="border: 0;height: calc(2.1rem + 0.25rem);" onClick="location.href='property_form.php?id_property=<?php echo $id_pro ?>'" /><input type="hidden" value="<?php echo $id_pro ?>" >
             </div></td></tr>
    

                </tbody>
              </table>
            </div>
          </div>
            
          <div class="col-10 col-sm-6 m-auto col-md-4 pt-4 pt-md-0">
            <img alt="image" class="img-fluid rounded-0" src="<?php echo $filename ?>">
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
