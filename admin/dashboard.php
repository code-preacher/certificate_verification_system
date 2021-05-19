<?php
ob_start();
require_once '../library/lib.php';
require_once '../classes/crud.php';

$lib=new Lib;
$crud=new Crud;

$lib->check_login2();
?>

?>

<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid bg-dark">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $crud->countAll('student');  ?></h3>

                <p>All Students</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>  <i class="fa fa-users"></i>
              </div>
              <a href="view-student.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

            <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                 <h3><?php echo $crud->countAll('school');  ?></h3>
                <p>All Institution</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i><i class="fa fa-institution"></i>
              </div>
              <a href="view-school.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                 <h3><?php echo $crud->countAll('faculty');  ?></h3>
                <p>All Faculty</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i><i class="fa fa-institution"></i>
              </div>
              <a href="view-fal.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                 <h3><?php echo $crud->countAll('department');  ?></h3>
                <p>All Department</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i><i class="fa fa-institution"></i>
              </div>
              <a href="view-dep.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                  <h3><?php echo $crud->countAll('course');  ?></h3>
                <p>All Course</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i><i class="fa fa-book"></i>
              </div>
              <a href="view-course.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->



<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>
&nbsp;
                </h3>

                <p>My Profile</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i><i class="fa fa-user"></i>
              </div>
              <a href="profile.php" class="small-box-footer">View profile <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->


<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
&nbsp;
                </h3>

                <p>Logout</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i><i class="fa fa-sign-out"></i>
              </div>
              <a href="logout.php" class="small-box-footer" onClick="return confirm('Are you sure you want to Logout?')">Logout <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->


        </div>
        <!-- /.row -->
        
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  <?php
include 'inc/footer.php';
?>