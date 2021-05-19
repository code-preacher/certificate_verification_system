<?php
require_once 'library/lib.php';
require_once 'classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;

$rc=$crud->displayOneStudent('result',$_GET['id']);
if ($rc == false) {
header("location:student/dashboard.php?msg=Your result was not found, or currently unavailable...contact academic office if the duration persists....thanks&type=error");
}
$rs=$crud->displayOneStudent('student',$_GET['id']);
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
	        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                color: black;
                font-family: tahoma, tahoma, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid #738AFB;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                color: #2E60EC;
            }

            .marquee {
                color: #2E60EC;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
        </style>
</head>
<body>
	
	<br><br>
<center>		
<div class="container">
	       <div class="logo">
              <img src="admin/images/<?=$crud->displayInstitutionImage($rs['school_id'])?>" style="width: 150px;height: 120px;border-radius: 100%;">
            </div><br><br>

            <div class="logo">
                <?=$crud->displaySchoolName($rs['school_id'])?>
            </div>

            <div class="marquee">
                Certificate of Completion
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
               <?=$rs['name']?>
            </div>

            <div class="reason">
                For the Award of Bsc. Hons in <b><?=$crud->displayCourseName($rs['course_id'])?></b><br/>
                from the department of <b><?=$crud->displayDepartmentName($rs['department_id'])?></b> under the faculty of <b><?=$crud->displayFacultyName($rs['faculty_id'])?></b>.
            </div>
        </div>
</center>		
<br><br>

                                 <a href="javascript:print()" style="text-decoration: none;font-family: arial;font-weight: bolder;">
     								
     								<i class="fa fa-print fa-2x"></i>&nbsp;&nbsp;&nbsp;Print&nbsp;&nbsp;&nbsp;
     							</a>
     							|&nbsp;&nbsp;&nbsp;

     							<a href="student/dashboard.php" style="text-decoration: none;font-family: arial;font-weight: bolder;">
     								
     								<i class="fa fa-home fa-2x"></i>&nbsp;&nbsp;&nbsp;Go back to dashboard?
     							</a>



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


