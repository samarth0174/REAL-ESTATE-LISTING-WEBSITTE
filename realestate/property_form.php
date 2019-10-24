<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body style="background-color:#EDF2F7;">
<div class='separator'></div>


<?php include('admin/connection.php'); ?>
 
<?php
$id_property = $_GET['id_property'];
$id_property_sql="SELECT * FROM property WHERE id_property='$id_property'";
$id_property_result=mysqli_query($db,$id_property_sql) or die(mysqli_error());

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


print<<<HERE
<u></u><br><br>

<div class="container">
  <h2>Enquire About this Listing:<Strong>$name_property</Strong></h2>
  <h3>Please Enter your details. We will contact you shortly.</h3>
  <form name="form1" method="post" action="property_form_success.php">
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="name" name="name"class="form-control" >
    </div>
    
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" name="mobile_phone" class="form-control" >
    </div>

    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="text" name="cus_email" class="form-control" >
    </div>

    <div class="form-group">
      <label for="Name">Additional Info:</label>
      <textarea name="reason" width="333"  class="form-control"></textarea>
    </div>
      
    <input type="hidden" name="id_property" value="$id_property">



    <button type="submit" class="btn btn-default" name="submit" value="submit">Submit</button>
 
    </form>
       <button class="btn btn-default" name="HOME" value="HOME" onclick="location.href='index.php'">HOME</button>
    
    
</div>

HERE;

}
 ?>


 
</body>
</html>
