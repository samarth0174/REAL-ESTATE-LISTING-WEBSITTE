<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Free House Sale Template  - Real Estate web design - Free Html Website Templates</title>
<link href="style.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
function ctck()
{
var sds = document.getElementById("dum");
if(sds == null){alert("You are using a free package.\n You are not allowed to remove the tag.\n");}
}
</script> 

</head>

<body>
<div id="header"></div>
<div id="navigation">
  <ul>
    <center>
      <li><a href="index.php">HOME</a></li>
      <li><a href="property_listing.php">PROPERTY LISTINGS</a></li>
      <li><a href="about.php">ABOUT US</a></li>
      <li><a href="contact.php">CONTACT US</a></li>
      <li><a href="feedback.php">FEEDBACK</a></li>
    </center>
  </ul>
</div>
<div id="content"><table width="928" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    <div id="content_top">
    <div id="main_content">
    <h1>Contact Successfull</h1>
    <h3>We appieciate for your contact</h3>
    <h3><?php

$tbl_name="feedback";

$host="localhost:3306";
$user="root";
$password="";
$db=mysqli_connect("localhost:3306","root","","property") or die(mysql_error());


$reason = $_POST['reason'];
$planning = $_POST['planning'];
$name = $_POST ['name'];
$no_phone = $_POST['no_phone'];
$email = $_POST['email'];
$question = $_POST['question'];

$sql = "INSERT INTO $tbl_name(reason, planning, name, no_phone, email,  question) VALUE('$reason', '$planning', '$name',  '$no_phone', '$email', '$question')";

$result = mysqli_query($db,$sql);


if($result)
{
echo "<p><center>";
echo "";
echo "<br>";
echo "<a href='index.php'><img src='images/success.ico'></a>";
}
else
{
echo "Error";
echo mysqli_error();
}
?></p>
    <div id="house_sales">
    </div>
    </div>
    <div id="find">
      <h2>Find Your House</h2>
      <h3>Over 3 million properties</h3>
      <form name="form1" method="post" action="property_success.php">
        <table width="265" border="0" cellpadding="2" cellspacing="0" class="black">
          <tr>
            <td>Type of Property </td>
            <td>:</td>
            <td><select name="search" id="select">
              <option>......</option>
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
            <td>Beds :</td>
            <td>:</td>
            <td><select name="search" id="select">
              <option>...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
            </select></td>
          </tr>
          <tr>
            <td>Baths :</td>
            <td>:</td>
            <td><select name="search" id="select">
              <option>...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
            </select></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input name="button" type="submit" class="find" id="button" value=""></td>
          </tr>
        </table>
      </form>
    </div>
    </div>
    <div id="find">
      <h2>Leave Your Message</h2>
      <h3>Let Me know </h3>
      <form name="form1" method="post" action="message_success.php">
        <table width="402" border="0" cellpadding="2" cellspacing="0" class="black">
          <tr>
            <td width="55">Reason </td>
            <td width="3">:</td>
            <td width="332"><select name="reason" type="text" width="333">
        				<option>I am looking to sell a Property</option>
                        <option>I am looking to rent a Property</option>
        				<option>I am looking to let a Property</option>
                        <option>I have another enquiry</option>
                        </select></td>
          </tr>
          <tr>
            <td>Name :</td>
            <td>:</td>
            <td><input name="name" type="text" width="333"></td>
          </tr>
          <tr>
            <td>Contact :</td>
            <td>:</td>
            <td><input name="no_fon" type="text" width="333"></td>
          </tr>
          <tr>
            <td>Email :</td>
            <td>:</td>
            <td><input name="email" type="text" width="333"></td>
          </tr>
          <tr>
            <td>Message </td>
            <td>:</td>
            <td><textarea name="message" width="333"></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input name="button" type="submit"></td>
          </tr>
        </table>
      </form>
    </div>
    <div id="content_bottom">
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div class="features">
            <h4 style="background:url(images/services.jpg) left center no-repeat;">Profile</h4>
            <h3 style="padding-left:25px;">About me </h3>
            <table width="360" border="0">
              <tr>
                <td width="154"><img src="admin/images/aaaassss.jpg" alt="" width="149" height="155"></td>
                <td width="190"><p>Vincent Khaw</p>
                  <p>Senior Negotiator</p>
                  <p>+014 321 6788</p>
                  <p>vincent_khaw@yahoo.com</p>
                  <p>www.jann.com.my</p>
                  <p>&nbsp;</p></td>
              </tr>
            </table>
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</div>
<div id="fotter">
    <div class="design_info" id="footer">Designed by <a id="dum" href="http://freedesignertemplates.com/">www.freedesignertemplates.com</a>
	<script type="text/javascript">
	document.onload = ctck();
	</script>
	</div>
    <div class="copyrights">Copyright Information Goes Here. All Rights Reserved.</div>
</div>
</body>
</html>
