               <?php session_start(); 
				ob_start();
				$tbl_name="admin";     //Table name
				
				//Connect to server and select database
				$db=mysqli_connect("localhost:3306","root","","property") or die(mysql_error());
				
				//Define $myusername and $mypassword
				$myusername=$_POST['myusername'];
				$mypassword=$_POST['mypassword'];
				
				
				//To protect mysqli injection (more detail about mysqli injection)
				
				$sql="SELECT * FROM admin WHERE myusername= '$myusername'  and  mypassword= '$mypassword'";
				
				$result=mysqli_query($db,$sql);
				
				//mysqli_num_row is counting table row
				$count=mysqli_num_rows($result);
				//  If  result matched $myusename  and $mypassword, table row must be 1 row
				
				if($count==1){
				//  Register  $myusername, $mypassword  and redirect to file "adminMenu.php"
$_SESSION['myusername']=$myusername;
$_SESSION['mypassword']=$mypassword;
session_start();
header("location:admin_home.php");
}
else {
echo "Wrong Username or Password";
}

ob_end_flush();
?>