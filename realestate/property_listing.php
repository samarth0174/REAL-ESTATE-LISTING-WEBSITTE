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
                </li>
                <li>
                    <img src="./static/icons/icon-edit-user.png" alt="user" class="header-icon"/>
                </li>
            </ul>
            </td>
        </tr>
    </table>
</header>


<!-------------------------------------------------  CONTENT --------------------------------------------->
<!---- DISPLAYING FILTER FORM ---->

<section class="fdb-block" style="margin-top:50px;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8 text-center">
            <div class="row">
              <div class="col">
                <h1 style="font-size: 2.75rem;font-weight: 600;line-height: 1.5;">CHECK OUR LISTINGS</h1>
                <p class="lead">We have the most listings and constant updates. So you’ll never miss out..</p>
              </div>
            </div>
            <form name="form1" method="post" action="property_success.php">
            <div class="row align-items-center">
              <div class="col-12 col-md-5 mt-4">
                  <select name="search" id="select" class="form-control" required>
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
                <select name="search" id="select" class="form-control" required>
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
                <select name="search" id="select" class="form-control" required>
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
    

 <?php include('admin/connection.php'); ?>
<div id="house_sales">
<?php  
$sql="SELECT * FROM property ORDER BY id_property DESC";
$result=mysqli_query($db,$sql) or die("Cannot execute sql.");

$i=0;
$items=mysqli_num_rows($result);
//traverse through no of fetched it
while(($data=mysqli_fetch_array($result))&&($i<$items)) {
$id_property=$data["id_property"];
$name_property=$data["name_property"];
$price=$data["price"];
$image=$data["name_property"];
$filename = "admin/images/$name_property.jpg";


if (!file_exists($filename)) {
$filename="images/default.png"; 
}
if ($image==null) {
$filename="images/$name_property.jpg"; 
}


print<<<HERE
<div class="gallery">
<form method="post" action="property_detail.php?id_property=$id_property">
<input type="hidden" name="post_item" value="$id_property">
<input type="image" src="$filename"  height="139" width="249px">
</form>
<div class="desc">
<p align="left" class="code_text">CODE: <text class="highlight_num">M0$id_property</text></p>
<text class="price_text">$name_property <br> </text>
<text class="price_text">$price</text></p></div>
</div>
HERE;

$i++;
}
 ?>

</body>
</html>
