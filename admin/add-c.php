
<?php
require_once '../library/lib.php';
require_once '../classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;
$lib->check_login2();

  if (isset($_GET['id'])) {
       $crud->delete($_GET['id'],'complain','add-c.php');
     }

    if (isset($_POST['sub'])) {
    $crud->addComplain($_POST);
    }
?>


<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
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
                        <h4 class="page-title">HELP CENTER</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Help Center</li>
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
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title"><!-- 
                                <h4>DIAGNOSIS</h4> -->

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#" method="POST">
                                     <div class="row p-t-20">

                                         <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Message :</label>
                                                  <textarea name="chat" placeholder="Message" class="form-control" required="required"></textarea>
                                                     </div>
                                            </div>

                                            <input type="hidden" name="name" value="Admin">


                                            <div class="offset-sm-4 col-md-10">
                                                        <button type="submit" class="btn btn-success" name="sub"> Send Message</button>
                                                       
                                                    </div>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>


                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title"><!-- 
                                <h4>DIAGNOSIS</h4> -->
                                <?php $lib->msg();?>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                     <div class="row p-t-20">

                                      <?php
                           $qt=$crud->displayAllWithOrder('complain','id','desc');

                         $c=1;
                         if ($qt) {

                           foreach($qt as $dy){ $id=$dy['id'];?>
                <div class="col-lg-10 offset-lg-1">
                    <div class="card">
                        <div style="padding: 2px">
                           <?php echo $dy['chat']."<br/>"."<hr/><div class='offset-lg-6'>".$dy['name']."&nbsp;&nbsp;&nbsp;@&nbsp;&nbsp;".$dy['date']." | "."<a href='add-c.php?id=$id'>Delete</a>"."</div>"; ?>

                        </div>
                    </div><br/><br/>
                </div>
                  <?php
                      }

                    } else {
                      echo "<center>No Complain at the moment</center>";
                    }
                    ?>

                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
 <?php
include 'inc/footer.php';
?>
 
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>