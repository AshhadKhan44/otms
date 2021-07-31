<?php
session_start();
if(isset($_POST['signin']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password FROM tblusers WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
echo "<script type='text/javascript'> document.location = 'package-list.php'; </script>";
} else{
	
	echo "<script>alert('Invalid Details');</script>";

}

}

?>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header" style="background:#222;">
                          	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color:#FFF">×</span></button>		
                              <h3 style="font-family: Cookie; font-size:50px; color:#ffb74d;">Login Here!</h3>
						
						</div>
						<div class="modal-body modal-spa" style="background:#444; border:5px solid #222;">
							<div class="login-grids">
								<div class="login">
										<!--<div class="login-left">
												<ul>
													<li><a class="fb" href="#"><i></i>Facebook</a></li>
													<li><a class="goog" href="#"><i></i>Google</a></li>
													
												</ul>
											</div>-->
									<div class="col-md-12">
										<form method="post">
											<h3 style="font-family: Cookie; color:#ffb74d;">Enter your login credentials! </h3>
                                            <input style="border-radius:5px; margin-bottom:12px; padding:15px;" class="form-control" type="text" name="email" id="email" placeholder="Enter your Email"  required="">	
                                            <input style="border-radius:5px; margin-bottom:12px; padding:15px;" type="password" class="form-control" name="password" id="password" placeholder="Password" value="" required="">	
                                        <h4 style="font-family: Cookie; color:#ffb74d;"><a href="forgot-password.php" style="font-family: Cookie; color:#ffb74d; text-decoration:none;">Forgot password</a></h4>
											
											<input style="font-family: Cookie; background:#000; font-size:18px; padding:10px 35px; color:#ffb74d; border-radius:9px;" type="submit" name="signin" value="Sign In">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <a style="color:#ffb74d;" href="page.php?type=terms">Terms and Conditions</a> and <a style="color:#ffb74d;" href="page.php?type=privacy">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>