<?php
error_reporting(0);
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$mnumber=$_POST['mobilenumber'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql="INSERT INTO  tblusers(FullName,MobileNumber,EmailId,Password) VALUES(:fname,:mnumber,:email,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mnumber',$mnumber,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="You are Scuccessfully registered. Now you can login ";
header('location:thankyou.php');
}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";
header('location:thankyou.php');
}
}
?>
<!--Javascript for check email availabilty-->
<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background:#222">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span style="color:#FFF" aria-hidden="true">&times;</span></button>		
                            <h3 style="font-family: Cookie; font-size:50px; color:#ffb74d;">Sign Up</h3>
						</div>
							<section>
								<div class="modal-body modal-spa" style="background:#444; border:5px solid #222;">
									<div class="login-grids">
										<div class="login">
										  <div class="col-md-12">
												<form name="signup" method="post">
													<h3 style="font-family: Cookie; font-size:50px; color:#ffb74d;">Create your account </h3>
					
                <fieldset class="form-group">                                    
				    <input type="text" style="border-radius:5px; margin-bottom:12px; padding:15px;" class="form-control"  value="" placeholder="Full Name" name="fname" autocomplete="off" required="">
				    <input type="text" style="border-radius:5px; margin-bottom:12px; padding:15px;" class="form-control"  value="" placeholder="Mobile number" maxlength="10" name="mobilenumber" autocomplete="off" required="">
		            <input type="text" style="border-radius:5px; margin-bottom:12px; padding:15px;" class="form-control"  value="" placeholder="Email id" name="email" id="email" onBlur="checkAvailability()" autocomplete="off"  required="">	
		            <span id="user-availability-status"  style="font-size:12px;"></span> 
	                <input style="border-radius:5px; margin-bottom:12px; padding:15px;" class="form-control"  type="password" value="" placeholder="Password" name="password" required="">	
                </fieldset>
				    <input style="font-family: Cookie; background:#000; font-size:18px; padding:10px 35px; color:#ffb74d; border-radius:9px;" type="submit" name="submit" id="submit" value="CREATE ACCOUNT">
					</form>
											
                                            </div>
												<div class="clearfix"></div>								
										</div>
											<p>By logging in you agree to our <a style="color:#ffb74d;" href="page.php?type=terms">Terms and Conditions</a> and <a style="color:#ffb74d;" href="page.php?type=privacy">Privacy Policy</a></p>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>