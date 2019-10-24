<?php 

$flag =  $_POST["flag"];
include("connection.php");
$name_property=$_POST["name_property"];
    
if($flag == 1){


    $name_property=$_POST["name_property"];
    $type_property=$_POST["type_property"];
    $add1=$_POST["add1"];
    $add2=$_POST["add2"];
    $price=$_POST["price"];
    $price_type=$_POST["price_type"];
    $land_area=$_POST["land_area"];
    $groos_floor_area=$_POST["groos_floor_area"];
    $leasehold=$_POST["leasehold"];
    $beds=$_POST["beds"];
    $baths=$_POST["baths"];
    $contact_no=$_POST["contact_no"];
    $per_square_feet=$_POST["per_square_feet"];
    $square_feet=$_POST["square_feet"];
    $text=$_POST["text"];

    $insert_sql="INSERT INTO property VALUES('', '$name_property','$type_property', '$add1', '$add2', '$price', '$price_type', '$land_area', '$groos_floor_area', '$leasehold', '$beds', '$baths', '$contact_no', '$per_square_feet', '$square_feet', '$text')";

    $sql_result=mysqli_query($db,$insert_sql) or die("Error in inserting data due to
    ".mysqli_error());

    if($sql_result)
        {
            header("Location:admin_view.php");
            // echo "<script type='text/javascript'> window.location.href = 'admin_view.php'; </script>";
             $sql="DELETE FROM user_prop WHERE name_property='$name_property'";
             $result=mysqli_query($db,$sql);
        
        }     
    else
    echo "Error in inserting new data";

    

}

else if($flag==0){
   echo "Banana";
    $sql="DELETE FROM user_prop WHERE name_property='$name_property'";
    $result=mysqli_query($db,$sql);
        if($result){
            //echo "<script type='text/javascript'> window.location.href = 'business_req.php'; </script>";
            header("Location: business_req.php");
            
        }
}
?>