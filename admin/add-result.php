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
  $crud->insertResult($_POST);
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
            <li class="breadcrumb-item active">Add Result</li>
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
            <h3 class="card-title">Add Student Result: </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="add-result.php" method="post">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputName">Select Student :</label>
                    <select type="text" name="matno" class="form-control" id="exampleInputName"  required="required">
                      <?php
                      $qt=$crud->displayAllWithOrder('student','id','desc');
                      if ($qt) {

                       foreach($qt as $dy){
                         ?>
                         <option value="<?php echo $dy['matno']; ?>"><?php echo $dy['name']." (".$dy['matno'].")"; ?></option>

                         <?php
                       }
                       
                     } else {
                      echo "<tr><td colspan='2'><center>No Student at the moment</center</td></tr>";
                    }
                    ?>
                    

                  </select>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleInputName">Select Grade :</label>
                     <select type="text" name="grade" class="form-control" id="exampleInputName"  required="required">
                         <option value="FIRST CLASS">FIRST CLASS</option>
                         <option value="SECOND CLASS UPPER">SECOND CLASS UPPER</option>
                         <option value="SECOND CLASS LOWER">SECOND CLASS LOWER</option>
                         <option value="THIRD CLASS">THIRD CLASS</option>
                  </select>
                </div>
              </div>

            </div>

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary col-md-3" name="submit">Add Result</button>
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