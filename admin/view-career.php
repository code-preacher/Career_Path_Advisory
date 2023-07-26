     <?php 
     ob_start();
     require_once '../library/lib.php';
     require_once '../classes/crud.php';

     $lib=new Lib;
     $crud=new Crud;

     $lib->check_login2();

       if (isset($_GET['id'])) {
       $crud->delete($_GET['id'],'career','view-career.php');
     }


     ?>

<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">CAREER VIEW</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Career</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php $lib->msg();?></h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>organisation passion</th>
                                        <th>goal in work place</th>
                                        <th>stress handling</th>
                                        <th>philosophy</th>
                                        <th>team work or one man thing</th>
                                        <th>motivator</th>
                                        <th>uncomfortable issue</th>
                                        <th>leisure time</th>
                                        <th>office challenge</th>
                                        <th>field passion</th>
                                        <th>calculations</th>
                                        <th>reading rate</th>
                                        <th>level of education</th>
                                        <th>performance in school</th>
                                        <th>marital status</th>
                                        <th>Result</th>
                                        <th>Advice</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php
                                 $qt=$crud->displayAllWithOrder('career','id','desc');

                                 $c=1;
                                 if ($qt) {

                                     foreach($qt as $r){
                                        ?>
                                        <tr>
                                           <td><?php echo $c++; ?></td>
                                           <td><?=$r['f1']?> </td>
                                           <td><?=$r['f2']?> </td>
                                           <td><?=$r['f3']?> </td>
                                           <td><?=$r['f4']?> </td>
                                           <td><?=$r['f5']?> </td>
                                           <td><?=$r['f6']?> </td>
                                           <td><?=$r['f7']?> </td>
                                           <td><?=$r['f8']?> </td>
                                           <td><?=$r['f9']?> </td>
                                           <td><?=$r['f10']?> </td>
                                           <td><?=$r['f11']?> </td>
                                           <td><?=$r['f12']?> </td>
                                           <td><?=$r['f13']?> </td>
                                           <td><?=$r['f14']?> </td>
                                           <td><?=$r['f15']?> </td>
                                  
<td><?php echo $r['result']; ?></td>
<td><?php echo $r['advice']; ?></td>
<td>
  <a href="view-career.php?id=<?php echo $r['id']; ?>" onClick="return confirm('Are you sure you want to delete this record?')"><i class="mdi mdi-washing-machine"></i></a></td>

</tr>
<?php
}

} else {
  echo "<tr><td colspan='20'><center>No Career at the moment</center</td></tr>";
}
?>

</tbody>
<tfoot>
    <tr>
     
                                        <th>S/N</th>
                                        <th>organisation passion</th>
                                        <th>goal in work place</th>
                                        <th>stress handling</th>
                                        <th>philosophy</th>
                                        <th>team work or one man thing</th>
                                        <th>motivator</th>
                                        <th>uncomfortable issue</th>
                                        <th>leisure time</th>
                                        <th>office challenge</th>
                                        <th>field passion</th>
                                        <th>calculations</th>
                                        <th>reading rate</th>
                                        <th>level of education</th>
                                        <th>performance in school</th>
                                        <th>marital status</th>
                                        <th>Result</th>
                                        <th>Advice</th>
                                        <th>Delete</th>
    </tr>
</tfoot>
</table>
</div>

</div>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php include 'inc/footer.php'; ?>
<script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
         $('#zero_config').DataTable();
     </script>

 </body>

 </html>