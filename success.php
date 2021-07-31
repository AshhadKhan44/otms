<?php
/*
echo "<h2> Item Num=" .$item_number. "</h2>";

echo "<h2> Item Name=" .$item_name. "</h2>";

echo "<h2> Item Amount=" .$amount. "</h2>";

echo "<h2> Pkg id=" .$pakageid. "</h2>";
echo "<h2> useremail=" .$useremail. "</h2>";


*/

//Store transaction information into database from PayPal

$item_number = $_GET['item_number']; 
$item_name = $_GET['item_name'];
$amount = $_GET['amount'];

//booking table entities
$pakageid = $_GET['pkgid'];
$useremail = $_GET['useremail'];


?>
<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Confirmation </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Cookie:regular"]
      }
    });
</script>
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>
<div class="banner-1 ">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Shaun Global Tours</h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- contact ---->
<div class="contact">
	<div class="container">
	<h3 style="font-family: Cookie; font-size:50px; color:#333;">Your payment has been made successfully!</h3>
		<div class="col-md-10 contact-left">
			<div class="con-top animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
                <h3> Payment Details</h3>
               <?php
                echo "<ul style='padding-bottom:25px'>";
                echo "<li style='font-size:15px'> Purchased Item Number=" .$item_number. "</li>";
                echo "<li style='font-size:15px'> Item Name=" .$item_name. "</li>";
                echo "<li style='font-size:15px'> Total Amount Paid=" .$amount. "</li>";
                echo "<li style='font-size:15px'> User Email=" .$useremail. "</li>";
                echo "</ul>";
                ?>
	          <h4 style="display:none;">  <?php echo htmlentities($_SESSION['msg']);?></h4>
              </div>
			<div class="clearfix"></div>
	</div>
</div>
<!--- /contact ---->
<?php include('includes/footer.php');?>
<!-- sign -->
<?php include('includes/signup.php');?>	
<!-- signin -->
<?php include('includes/signin.php');?>	
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>	
<!-- //write us -->
</body>
</html>
