<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/slider-css.css">
    
    <!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ResponsiveSlides.js/1.55/responsiveslides.min.js" integrity="sha512-xLb7JAM9BNykuzMmlFtHHgQQAwFMiPVf9IhLV6g/IgQInWqxECLrlqBo64ytFPZH7qeZjahD1TOvl/wp8dL6LA==" crossorigin="anonymous"></script>    
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
<div class="banner">
	<div class="container">

               <!-- Start Slider -->
        <section id= "slider">

          <!-- Start Slider Checked -->
          <input type= "radio" name="slider" id= "slide-1-radio" checked />
          <input type= "radio" name="slider" id= "slide-2-radio" />
          <input type= "radio" name="slider" id= "slide-3-radio" />
          <!-- End Slider Checked 
            <img src= "http://res.cloudinary.com/hurricane10/image/upload/v1499938951/banner-2_gl3fir.jpg" alt="slide-1" />
            <img src= "http://res.cloudinary.com/hurricane10/image/upload/v1499939039/banner-4_gdy1qw.jpg" alt="slide-1" />
            <img src= "http://res.cloudinary.com/hurricane10/image/upload/v1499939087/banner-1_rlnwku.jpg" alt="slide-1" />-->
          <!-- Start Slides -->
          <div class= "slides">
            <div class= "slide">
              <a href= "#"><img src= "images/Burj-Al-Arab-Dubai-UAE-Wallpaper-1600x1200.jpg" alt="slide-1" /></a>
            </div>
            <div class= "slide">
              <a href= "#"><img src= "images/6.jpg" alt="slide-1" /></a>
            </div>
            <div class= "slide">
              <a href= "#"><img src= "images/Dubai-Buildings-Night-View-Wallpaper-3852x2572.jpg" alt="slide-1" /></a>
            </div>
          </div>
          <!-- End Slides -->

          <!-- Start Slider Control -->

          <!-- Start Prevese Arrow -->
          <div class="prev-arrow arrow">
            <label for= "slide-1-radio" id= "prev-1-arrow">
              <i class= "fa fa-arrow-left"></i>
              <span class= "thumb">
                <img src= "http://res.cloudinary.com/hurricane10/image/upload/v1499938951/banner-2_gl3fir.jpg" alt="slide-1-thumb" />
              </span>
            </label>
            <label for= "slide-2-radio" id= "prev-2-arrow">
              <i class= "fa fa-arrow-left"></i>
              <span class= "thumb">
                <img src= "http://res.cloudinary.com/hurricane10/image/upload/v1499939039/banner-4_gdy1qw.jpg" alt="slide-2-thumb" />
              </span>
            </label>
            <label for= "slide-3-radio" id= "prev-3-arrow">
              <i class= "fa fa-arrow-left"></i>
              <span class= "thumb">
                <img src= "http://res.cloudinary.com/hurricane10/image/upload/v1499939087/banner-1_rlnwku.jpg" alt="slide-3-thumb" />
              </span>
            </label>
          </div>
          <!-- Start Prevese Arrow -->

          <!-- Start next Arrow -->
          <div class="next-arrow arrow">
            <label for= "slide-1-radio" id= "next-1-arrow">
              <i class= "fa fa-arrow-right"></i>
              <span class= "thumb">
                <img src= "http://res.cloudinary.com/hurricane10/image/upload/v1499938951/banner-2_gl3fir.jpg" alt="slide-1-thumb" />
              </span>
            </label>
            <label for= "slide-2-radio" id= "next-2-arrow">
              <i class= "fa fa-arrow-right"></i>
              <span class= "thumb">
                <img src= "http://res.cloudinary.com/hurricane10/image/upload/v1499939039/banner-4_gdy1qw.jpg" alt="slide-2-thumb" />
              </span>
            </label>
            <label for= "slide-3-radio" id= "next-3-arrow">
              <i class= "fa fa-arrow-right"></i>
              <span class= "thumb">
                <img src= "http://res.cloudinary.com/hurricane10/image/upload/v1499939087/banner-1_rlnwku.jpg" alt="slide-3-thumb" />
              </span>
            </label>
          </div>
          <!-- Start next Arrow -->

          <!-- End Slider Control -->
        </section>
        <!-- End Slider -->

        
		<h1 style="font-family: Cookie; font-size:50px; color:#ffb74d; background:rgba(0,0,0,.5)" class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> "Traverse The United Arab Emirates"</h1>
	</div>
</div>

    
    

<!--- rupes ---->
<div class="container">
            <h1 style="font-family: Cookie; font-size:50px; color:#ffb74d; "><center>Our Services</center></h1>
	<div class="rupes">
        <div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
            <div class="card" style="background: #EEE; border-radius: 10px; -webkit-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.5);
                                     -moz-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.5);
                                     box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.5);
                                      ">
              <img src="images/pexels-pixabay-219692.jpg" class="card-img-top" alt="..." style="width:100%; border-top-left-radius:10px; border-top-right-radius:10px">
              <div class="card-body" style="background-color:#EEE; padding:5px 5px 1px 12px; border-bottom-left-radius:10px; border-bottom-right-radius:10px">
                
                <p class="card-text">“One’s destination is never a place, but a new way of seeing things.” – Henry Miller</p>
                
              </div>
            </div>
            <div class="clearfix"></div>
			<!--<div class="rup-left">
				<a href="offers.html"><i class="fa fa-usd"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>UP TO USD. 50 OFF</h3>
				<h4><a href="offers.html">TRAVEL SMART</a></h4>
				
			</div>
				<div class="clearfix"></div>-->
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
		<!--	<div class="rup-left">
				<a href="offers.html"><i class="fa fa-h-square"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>UP TO 70% OFF</h3>
				<h4><a href="offers.html">ON HOTELS ACROSS WORLD</a></h4>
				
			</div>-->
             <div class="card" style="background: #EEE; border-radius: 10px; -webkit-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.5);
                                     -moz-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.5);
                                     box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.5);
                                      ">
              <img src="images/pexels-jeshootscom-442579.jpg" class="card-img-top" alt="..." style="width:100%; border-top-left-radius:10px; border-top-right-radius:10px">
              <div class="card-body" style="background-color:#EEE; padding:5px 5px 1px 12px; border-bottom-left-radius:10px; border-bottom-right-radius:10px">
                
                <p class="card-text">“We travel not to escape life, but for life not to escape us.” – Unknown</p>
                
              </div>
            </div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<!--<div class="rup-left">
				<a href="offers.html"><i class="fa fa-mobile"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>FLAT USD. 50 OFF</h3>
				<h4><a href="offers.html">US APP OFFER</a></h4>
			
			</div>-->
             <div class="card" style="background: #EEE; border-radius: 10px; -webkit-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.5);
                                     -moz-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.5);
                                     box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.5);
                                      ">
              <img src="images/pexels-nextvoyage-1470405.jpg" class="card-img-top" alt="..." style="width:100%; border-top-left-radius:10px; border-top-right-radius:10px">
              <div class="card-body" style="background-color:#EEE; padding:5px 5px 1px 12px; border-bottom-left-radius:10px; border-bottom-right-radius:10px">
               
                <p class="card-text">“He who is outside his door has the hardest part of his journey behind him.” – Dutch Proverb</p>
                
              </div>
            </div>
				<div class="clearfix"></div>
		</div>
	
	</div>
</div>
<!--- /rupes ---->




<!---holiday---->
    <section style="background:#333; padding:50px 50px 100px 50px; margin-top:25px">
        
	<center><h3 style="font-family: Cookie; font-size:50px; color:#ffb74d; padding-bottom:50px">Travel Packages</h3></center>
<div class="container">
	<!--<div class="holiday">-->
	
<div class="row">


	

					
<?php $sql = "SELECT * from tbltourpackages order by rand() limit 3";
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
                                      margin-bottom:10px">
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


			<div class="clearfix"></div>
    </div>
    
			
		<div><a href="package-list.php" class="view" style="font-size:30px; text-decoration:none">View More Packages</a></div>
	</div>

</section>

<!--- routes ---->
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
				<h3>80000</h3>
				<p>Enquiries</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>1900</h3>
				<p>Regestered users</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>7,00,00,000+</h3>
				<p>Booking</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<script>
       
            $("#slider1").responsiveSlides({
                pager: true,
                speed: 500,
                namespace: "transparent-btns"
              });
       
    </script>
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