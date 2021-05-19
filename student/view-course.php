     <?php 
ob_start();
require_once '../library/lib.php';
require_once '../classes/crud.php';

$lib=new Lib;
$crud=new Crud;

$lib->check_login2();

    ?>

<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid bg-dark">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Course</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
        

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">View all Course: <strong><?php $lib->msg(); ?></strong></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body"><div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Name</th>
                   <th>Faculty</th>
                   <th>Department</th>
                  <th>Date Created</th>
                </tr>
                </thead>
                <tbody>
                <?php
    $qt=$crud->displayAllWithOrder('course','name','desc');
    $c=1;
    if ($qt) {

     foreach($qt as $dy){
         ?>
                  <tr>
                    <td><?php echo $c++; ?></td>
                    <td><?php echo $dy['name']; ?></td>
                    <td><?php echo $crud->displayFacultyName($dy['faculty_id']); ?></td>
                     <td><?php echo $crud->displayDepartmentName($dy['department_id']); ?></td>
                    <td><?php echo $dy['date_created']; ?></td>
                  </tr>

                                    <?php
    }
                    
    } else {
    echo "<tr><td colspan='5'><center>No course at the moment</center</td></tr>";
    }
    ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>S/N</th>
                  <th>Name</th>
                   <th>Faculty</th>
                   <th>Department</th>
                  <th>Date Created</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body --></div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <br/><br/>
  <?php
include 'inc/footer.php';
?>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>