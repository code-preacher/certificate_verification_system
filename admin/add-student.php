<?php
ob_start();
require_once '../library/lib.php';
require_once '../classes/crud.php';

$lib=new Lib;
$crud=new Crud;

$lib->check_login2();
?>
<?php
if(isset($_POST['submit'])){
$crud->insertStudent($_POST);
}

?>

<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 bg-dark">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Student</li>
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
          <div class="col-md-12">
           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Student: </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="#" method="post">
                <div class="card-body">
                  <div class="row">

                    <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputName">Fullname :</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Please enter your name" required="required">
                  </div>
                </div>
  <div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputMatno">Matric number :</label>
                    <input type="text" name="matno" class="form-control" id="exampleInputMatno" placeholder="Please enter your matric number" required="required">
                  </div>
             </div>     
<div class="col-sm-4">
                  <div class="form-group">
                    <label for="exampleInputPassword">Password :</label>
                    <input type="text" name="password" class="form-control" id="exampleInputPassword" placeholder="Please enter your password" required="required">
                  </div>
            </div>   


                            <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputName">Select Institution :</label>
                    <select type="text" name="school_id" class="form-control" id="exampleInputName"  required="required">
                      <?php
                      $qt=$crud->displayAllWithOrder('school','id','desc');
                      if ($qt) {

                       foreach($qt as $dy){
                         ?>
                         <option value="<?php echo $dy['id']; ?>"><?php echo $dy['name']; ?></option>

                         <?php
                       }
                       
                     } else {
                      echo "<tr><td colspan='2'><center>No Institution at the moment</center</td></tr>";
                    }
                    ?>
                    

                  </select>
                </div>
              </div>


                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputName">Select Faculty :</label>
                    <select type="text" name="faculty_id" class="form-control" id="exampleInputName"  required="required">
                      <?php
                      $qt=$crud->displayAllWithOrder('faculty','id','desc');
                      if ($qt) {

                       foreach($qt as $dy){
                         ?>
                         <option value="<?php echo $dy['id']; ?>"><?php echo $dy['name']; ?></option>

                         <?php
                       }
                       
                     } else {
                      echo "<tr><td colspan='2'><center>No Faculty at the moment</center</td></tr>";
                    }
                    ?>
                    

                  </select>
                </div>
              </div>


                              <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputName">Select Department :</label>
                    <select type="text" name="department_id" class="form-control" id="exampleInputName"  required="required">
                      <?php
                      $qt=$crud->displayAllWithOrder('department','id','desc');
                      if ($qt) {

                       foreach($qt as $dy){
                         ?>
                         <option value="<?php echo $dy['id']; ?>"><?php echo $dy['name']; ?></option>

                         <?php
                       }
                       
                     } else {
                      echo "<tr><td colspan='2'><center>No Department at the moment</center</td></tr>";
                    }
                    ?>
                    

                  </select>
                </div>
              </div>



                              <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputName">Select Course :</label>
                    <select type="text" name="course_id" class="form-control" id="exampleInputName"  required="required">
                      <?php
                      $qt=$crud->displayAllWithOrder('course','id','desc');
                      if ($qt) {

                       foreach($qt as $dy){
                         ?>
                         <option value="<?php echo $dy['id']; ?>"><?php echo $dy['name']; ?></option>

                         <?php
                       }
                       
                     } else {
                      echo "<tr><td colspan='2'><center>No Course at the moment</center</td></tr>";
                    }
                    ?>
                    

                  </select>
                </div>
              </div>
              

              


                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary col-md-3" name="submit">Add Student</button>
                  <button type="reset" class="btn btn-danger col-md-3">Clear</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
        <!-- Main row -->
       </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
   <br/><br/>
  <?php
include 'inc/footer.php';
?>