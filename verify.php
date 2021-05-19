     <?php 
     ob_start();
     require_once 'library/lib.php';
     require_once 'classes/crud.php';

     $lib=new Lib;
     $crud=new Crud;


     if(isset($_POST['check'])){
     	$id=$_POST['id'];
     	$crud->verifyResult($id);
     }
     ?>

     <!DOCTYPE html>
     <html lang="en">
     <head>
     	<title>CERTIFICATE VERIFICATION SYSTEM</title>
     	<meta charset="UTF-8">
     	<meta name="viewport" content="width=device-width, initial-scale=1">
     	<!--===============================================================================================-->	
     	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
     	<!--===============================================================================================-->

     	<!--===============================================================================================-->
     	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
     	<!--===============================================================================================-->
     	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

     	<!--===============================================================================================-->
     	<link rel="stylesheet" type="text/css" href="css/util.css">
     	<link rel="stylesheet" type="text/css" href="css/main.css">
     	<!--===============================================================================================-->
     </head>
     <body style="background-color: #666666;">
     	
     	<div class="limiter">
     		<div class="container-login100">
     			<div class="wrap-login100">
     				<form action="verify.php" class="login100-form validate-form" method="post">

     					<span class="login100-form-title p-b-5">
     						<p style="color: blue;opacity: .5;font-size: 20px;margin-top: -150px;"> <marquee behavior="alternate" scrollDelay="10">CERTIFICATE VERIFICATION SYSTEM</marquee></p>
     						<br><br><br><br>
     						Student Verification Check:
     					</span>
                              <br/>
     					<p><?=$lib->msg();?></p>
                               <br/>
     					
     					<div class="wrap-input100 validate-input" data-validate = "Student Matric Number is required">
     						<input class="input100" type="text" name="id" placeholder="Student Matric Number" required  />
     						<span class="focus-input100">Student Matric Number: </span>
     						<span class="label-input100"></span>
     					</div>

                               <br/>



     					<div class="container-login100-form-btn">
     						<button  type="submit" name="check" class="login100-form-btn">
     							Verify Result
     						</button>
     					</div>
     					
     					<div class="text-left p-t-46 p-b-20">
     						<span class="txt2">
     							
     							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


     							<a href="index.html" style="text-decoration: none;">
     								
     								<i class="fa fa-home fa-2x"></i>Go back to home?
     							</a>
     						</span>
     					</div>


     					
     					
     					


     				</fieldset>
     			</form>

     			<div class="login100-more" style="background-image: url('images/5.jpg');">
     			</div>
     		</div>
     	</div>
     </div>





     <!--===============================================================================================-->
     <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
     <!--===============================================================================================-->
     <script src="vendor/animsition/js/animsition.min.js"></script>
     <!--===============================================================================================-->
     <script src="vendor/bootstrap/js/popper.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
     <!--===============================================================================================-->
     <script src="vendor/select2/select2.min.js"></script>
     <!--===============================================================================================-->
     <script src="vendor/daterangepicker/moment.min.js"></script>
     <script src="vendor/daterangepicker/daterangepicker.js"></script>
     <!--===============================================================================================-->
     <script src="vendor/countdowntime/countdowntime.js"></script>
     <!--===============================================================================================-->
     <script src="js/main.js"></script>

 </body>
 </html>


