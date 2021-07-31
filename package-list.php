<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS  | Package List</title>
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
<!--- banner ---->
<div class="banner-3">
	<div class="container">
		<h1 style="background:rgba(0,0,0,.5); padding:75px; margin-bottom:0px; font-family: Cookie; color:#ffb74d;"class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Our Tourism Sites &amp; Pacakges</h1>
	</div>
</div>
<!--- /banner ---->
<!--- rooms ---->
<div class="rooms">
	<div class="container">
		
		<div class="room-bottom">
			<center><h3 style="background:rgba(0,0,0,.8); padding:45px; font-size:45px; margin-bottom:30px; font-family: Cookie; color:#ffb74d;">Our Packages</h3></center>

					
<?php $sql = "SELECT * from tbltourpackages";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
        <div class="col-md-4 room-left wow fadeInLeft animated">
            <div class="card" style="background: #EEE; border-radius: 10px; -webkit-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.5);
                                     -moz-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.5);
                                     box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.5);
                                      margin-bottom:30px">
              <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive card-img-top" alt="..." style="width:100%;height:300px; border-top-left-radius:10px; border-top-right-radius:10px">
              <div class="card-body" style="background-color:#EEE; padding:5px 5px 1px 12px; border-bottom-left-radius:10px; border-bottom-right-radius:10px">
                    <h5 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;" class="card-title">Package Name: <?php echo htmlentities($result->PackageName);?></h5>
					<h6 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">Package Type : <?php echo htmlentities($result->PackageType);?></h6>
					<p style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;"><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;"><b>Features</b>
                        <?php echo htmlentities($result->PackageFetures);?></p>
                  	<h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>
            
              </div>
            </div>
            
			

<?php }} ?>
			
		
		
		</div>
	</div>
</div>
<!--- /rooms ---->

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
<!-- //write us -->
</body>
</html>