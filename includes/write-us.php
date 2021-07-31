<?php
error_reporting(0);
if(isset($_POST['submit']))
{
$issue=$_POST['issue'];
$description=$_POST['description'];
$email=$_SESSION['login'];
$sql="INSERT INTO  tblissues(UserEmail,Issue,Description) VALUES(:email,:issue,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':issue',$issue,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="Info successfully submited ";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
}
?>	

	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div style="background:#222;" class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="color:#FFF" aria-hidden="true">&times;</span></button>		
                            <h3 style="font-family: Cookie; color:#ffb74d;">Report your Issues</h3>
						</div>
							<section>
							<form name="help" method="post">
								<div class="modal-body modal-spa">
									<div class="writ">

									   <ul>
						     				<li class="na-me">
													<select id="country" name="issue" class="frm-field required sect form-control form-control-lg" required="">
														<option style="font-family: Cookie; color:#333;" value="">Select Problem</option> 		
														<option style="font-family: Cookie; color:#ffb74d;" value="Booking Issues">Booking Problems</option>
														<option style="font-family: Cookie; color:#ffb74d;" value="Cancellation"> Withdraw Booking</option>
														<option style="font-family: Cookie; color:#ffb74d;" value="Refund">Refunding</option>
														<option style="font-family: Cookie; color:#ffb74d;" value="Other">Other</option>														
													</select>
							    				</li>
											
												<li class="descrip">
									<input class="special form-control" type="text" placeholder=" Description"  name="description" required="">
												</li>
													<div class="clearfix"></div>
								      </ul>
											<div class="sub-bn">
												<form>
													<button style="font-family: Cookie; background:#000; font-size:18px; padding:10px 35px; color:#ffb74d; border-radius:9px;"  type="submit" name="submit" class="subbtn">Submit</button>
												</form>
											</div>
									</div>
								</div>
								</form>
							</section>
					</div>
				</div>
			</div>