<?php 
session_start();
if($_SESSION["myusername"]=="")
{	
?>
	<script type="text/javascript">
		window.location="admin_login.php";
    </script>
<?php 
}
	include "connection.php"; ?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<style type="text/css">
	#main .module.width_full .module_content .stats_graph center table tr td table {
	font-size: 10px;
}
    </style>
	
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="admin_home.php">Website Admin</a></h1>
			<h2 class="section_title">Dashboard</h2>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p><?php $_SESSION['myusername']; ?> (<a href="admin_home.php">Admin</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div>
			<a class="current">Admin</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<h3>Content</h3>
		<ul class="toggle">
			<li><a href="admin_home.php">Home</a></li>
			<li class="icn_new_article"><a href="admin_new.php">New Add Property</a></li>
			<li class="icn_edit_article"><a href="admin_view.php">View All Properties</a></li>
			<li class="icn_profile"><a href="interested_users.php">Interested Users</a></li>
			<li class="icn_profile"><a href="business_req.php">Sellers</a></li>
			<li class="icn_jump_back"><a href="logout.php">Logout</a></li>
		
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; VIT ESTATES</strong></p>
			<p>&nbsp;</p>
		</footer>
	</aside><!-- end of sidebar -->

	<section id="main" class="column">
	  <article class="module width_full">
		  <header>
			  <h3>ADMIN INFORMATION UPDATE</h3></header>
	    <div class="module_content">
			  <article class="stats_graph"> 
			<?php
        
        
        $tbl_name="admin";
        
        $db=mysqli_connect("localhost:3306","root","","property") or die(mysql_error());
				
        $sql="SELECT*FROM $tbl_name";
        $result=mysqli_query($db,$sql);
        ?>
        
        
        <table width="638" height="138" border="2" cellpadding="1" cellspacing="0">
        <tr>
        <td colspan="13" align="center"><strong>Admin Information</strong></td>
        </tr>
        
        <tr>
        <td width="81" align="center"><font color="black"><strong>Image</strong></td>
        <td width="190" align="center"><font color="black"><strong>Name</strong></td>
        <td width="140" align="center"><strong>Username</strong></td>
        <td width="138" align="center"><font color="black"><strong>Password</strong></td>
        
        
        </tr>
        
        <?php
        while($rows=mysqli_fetch_array ($result))
        {
        ?>
        
        <tr>
        <td height="88"><font color="black"><img src="images/<?php echo $rows['myusername'];?>.jpg" width="81" height="81"></td
        ><td height="88"><font color="black"><?php echo $rows['name'];?></td
        ><td width="140"><font color="black"><?php echo $rows['myusername'];?></td
        ><td><font color="black"><?php echo $rows['mypassword'];?></td>
        </tr>
        
        
        <?php
        
        }
        
        ?>
        
        </table>
        
        </td>
       
        </tr>
        
        </table>
        </center>
        <?php
        mysqli_close($db);
        ?>


</table>

				<form class="post_message">
				</form>
			</footer>
		</article><!-- end of messages article -->
		
		<div class="clear"></div><!-- end of post new article --><!-- end of styles article -->
	  <div class="spacer"></div>
	</section>


</body>

</html>