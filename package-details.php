<?php
session_start();
error_reporting(0);
include('includes/config.php');
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; 
//Test PayPal API URL
$paypal_email = 'phpinfo@gmail.com';
if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$comment=$_POST['comment'];
$status=0;
$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Click below to proceed to paypal";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Package Details</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Cookie:regular"]
      }
    });
</script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script>
		 new WOW().init();
	</script>
<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
	  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>				
</head>
<body>
<!-- top-header -->
<?php include('includes/header.php');?>
<div class="banner-3">
	<div class="container">
		<h1 style="background:rgba(0,0,0,.5); padding:75px; margin-bottom:0px; font-family: Cookie; color:#ffb74d;" class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Package Details</h1>
	</div>
</div>
<!--- /banner ---->
<!--- selectroom ---->

<div class="selectroom">
	<div class="container">	
		<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
 <div class="col-md-12 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
      <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>Proceed to Payment</strong>:<?php echo htmlentities($msg); ?> 
                <form action="<?php echo $paypal_url; ?>" method="post">
                    <!-- Paypal business test account email id so that you can collect the payments. -->
			            <input type="hidden" name="business" value="<?php echo $paypal_email; ?>">
                        <input type="hidden" name="cmd" value="_xclick">
                        <!-- Details about the item that buyers will purchase. -->
			            <input type="hidden" name="item_name" value="<?php echo $result->PackageName; ?>">
			            <input type="hidden" name="item_number" value="<?php echo $result->PackageId; ?>">
			            <input type="hidden" name="amount" value="<?php echo $result->PackagePrice; ?>">
				        <input type="hidden" name="currency_code" value="USD">
                        <!-- URLs -->
			            <input type='hidden' name='cancel_return' value='http://localhost/tms/cancel.php'>
			            <input type='hidden' name='return' value='http://localhost/tms/success.php?item_number=<?php echo htmlentities($result->PackageId); ?>&item_name=<?php echo htmlentities($result->PackageName);?>&amount=<?php echo htmlentities($result->PackagePrice); ?>&pkgid=<?php echo htmlentities(intval($_GET['pkgid'])); ?>&useremail=<?php echo htmlentities($_SESSION['login']); ?>'>
                    <input type="image" name="submit" border="0"
			src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
			<img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" > 
                </form>
        </div><?php }?>
<form name="book" method="post">
    
   
		<div class="selectroom_top">
            <div class="card mb-3">
              <img style="width:100%; height:500px;background-size: cover" src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="card-img-top img-responsive" alt="">
              <div class="card-body">
                <h2 class="card-title" style="background:rgba(0,0,0,.7); padding:25px; font-size:50px; margin-bottom:10px; font-family: Cookie; color:#ffb74d;" ><?php echo htmlentities($result->PackageName);?>
				</h2>
                <p class="dow card-text">#PKG-<?php echo htmlentities($result->PackageId);?></p>
				<p class="card-text"><b>Package Type :</b> <?php echo htmlentities($result->PackageType);?></p>
				<p class="card-text"><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
				<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <div class="ban-bottom">
				    <div class="bnr-right">
				        <label class="inputLabel">From</label>
                        <input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
                    </div>
                    <div class="bnr-right">
				        <label class="inputLabel">To</label>
				        <input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="">
			        </div>
                    <div class="clearfix"></div>
                    <div class="grand">
                        <p>Grand Total</p>
                        <h3><?php echo htmlentities($result->PackagePrice);?> USD</h3>                         
                    </div>
                </div>
            </div>    
            </div></div>
		<!--	<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
			</div>
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h2><?php echo htmlentities($result->PackageName);?></h2>
				<p class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p>
				<p><b>Package Type :</b> <?php echo htmlentities($result->PackageType);?></p>
				<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">From</label>
				<input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
			</div>
			<div class="bnr-right">
				<label class="inputLabel">To</label>
				<input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="">
			</div>
			</div>
            <div class="clearfix"></div>
				<div class="grand">
					<p>Grand Total</p>
					<h3>USD.800</h3>
				</div>
			</div>
		<h3>Package Details</h3>
				<p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p>	
				<div class="clearfix"></div>
		</div>
    
    -->
		<div class="selectroom_top">
			<h2>Message</h2>
			<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
				<ul>
				
					<li class="spe">
						<input class="special" type="text" name="comment" required="">
					</li>
					<?php if($_SESSION['login'])
					{?>
                    
						<li class="spe" align="center">
					       <button type="submit" name="submit2" class="btn-warning btn" >Book</button>
						</li>
						<?php } else {?>
							<li class="sigi" align="center" style="margin-top: 1%">
							<a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Book</a></li>
							<?php } ?>
					<div class="clearfix"></div>
				</ul>
			</div>
			
		</div>
		</form>
        </div>
<?php }} ?>


	</div>
</div>
<!--- /selectroom ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>