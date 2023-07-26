
<?php
require_once '../library/lib.php';
require_once '../classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;
$lib->check_login2();

if (isset($_POST['sub'])) {
$check=$crud->compareCareer($_POST);

if($check){
$crud->addReport($_SESSION['id'],$check['id']) ; 
$result=$check['result'];
$advice=$check['advice'];
header("location:result.php?result=$result&advice=$advice");
}
else{
$result='No Result';
$advice='No Result';
header("location:result.php?result=$result&advice=$advice");  
}

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
                        <h4 class="page-title">CAREER</h4>
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
                                    <form action="add-career.php" method="POST">
                                     <div class="row p-t-20">


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">What are you passoinate about in an organisation: </label>
                                                    <select class="form-control custom-select" name="f1" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="PERSONAL GROWTH">PERSONAL GROWTH</option>
                                                        <option value="GROUP GROWTH">GROUP GROWTH</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">What will be your career goal in a work place:</label>
                                                    <select class="form-control custom-select" name="f2" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="GIVING RESULT">GIVING RESULT</option>
                                                        <option value="CHANGING THINGS">CHANGING THINGS</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->


                                          
                                             <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">How do you handle stress:</label>
                                                    <select class="form-control custom-select" name="f3" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="FACE WHAT'S AHEAD">FACE WHAT'S AHEAD</option>
                                                        <option value="CLOSE FOR THE DAY">CLOSE FOR THE DAY</option>
                                                         <option value="TAKE A BREAK AND RESUME LATER">TAKE A BREAK AND RESUME LATER</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                             <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">What is your philosophy:</label>
                                                    <select class="form-control custom-select" name="f4" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="ASKING QUESTIONS">ASKING QUESTIONS</option>
                                                        <option value="OBSERVING">OBSERVING</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                             <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">Do you prefer team work or one man thing:</label>
                                                    <select class="form-control custom-select" name="f5" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                             <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">What motivates you:</label>
                                                    <select class="form-control custom-select" name="f6" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="MAKING A DIFFERENCE">MAKING A DIFFERENCE</option>
                                                        <option value="SEEING PEOPLE'S REACTION">SEEING PEOPLE'S REACTION</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                             <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">What makes you uncomfortable:</label>
                                                    <select class="form-control custom-select" name="f7" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="PRESSURE">PRESSURE</option>
                                                        <option value="PEOPLE">PEOPLE</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->
                                             <!--/span-->
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">What do you do at your leisure time:</label>
                                                    <select class="form-control custom-select" name="f8" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="READ">READ</option>
                                                        <option value="HANGOUT WITH FRIENDS">HANGOUT WITH FRIENDS</option>
                                                          <option value="WATCH MOVIES">WATCH MOVIES</option>
                                                            <option value="PLAY SPORT">PLAY SPORT</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">If you are faced with problem at work, what will you do:</label>
                                                    <select class="form-control custom-select" name="f9" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="ASK FOR HELP">ASK FOR HELP</option>
                                                        <option value="RESEARCH POTENTIAL SOLUTIONS">RESEARCH POTENTIAL SOLUTIONS</option>
                                                          <option value="LEAVE AND ATTEND TO OTHER ISSUES AT THE MOMENT">LEAVE AND ATTEND TO OTHER ISSUES AT THE MOMENT</option>
                                                    </select>
                                                     </div>
                                            </div>

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">What field of study do you have passion for:</label>
                                                    <select class="form-control custom-select" name="f10" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="SCIENCES">SCIENCES</option>
                                                        <option value="ART">ART</option>
                                                          <option value="SOCIAL SCIENCES">SOCIAL SCIENCES</option>
                                                            <option value="ENGINEERING">ENGINEERING</option>
                                                    </select>
                                                     </div>
                                            </div>

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">Do you like calculations:</label>
                                                    <select class="form-control custom-select" name="f11" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="YES">YES</option>
                                                        <option value="NO">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">What is your reading rate:</label>
                                                    <select class="form-control custom-select" name="f12" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="HIGH">HIGH</option>
                                                        <option value="AVERAGE">AVERAGE</option>
                                                          <option value="LOW">LOW</option>
                                                    </select>
                                                     </div>
                                            </div>

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">What is your level of education:</label>
                                                    <select class="form-control custom-select" name="f13" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="PHD">PHD</option>
                                                        <option value="MSC">MSC</option>
                                                          <option value="BSC">BSC</option>
                                                            <option value="SSCE">SSCE</option>
                                                            <option value="NONE">NONE</option>
                                                    </select>
                                                     </div>
                                            </div>

                                            <div class="col-md-6">
                                              <div class="form-group">
                                                    <label class="control-label">How well do you perform in school:</label>
                                                    <select class="form-control custom-select" name="f14" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="EXCELLENT">EXCELLENT</option>
                                                        <option value="V.GOOD">V.GOOD</option>
                                                          <option value="AVERAGE">AVERAGE</option>
                                                            <option value="LOW">LOW</option>
                                                    </select>
                                                     </div>
                                            </div>

                                            <div class="col-md-12">
                                              <div class="form-group">
                                                    <label class="control-label">What is your marital status:</label>
                                                    <select class="form-control custom-select" name="f15" required="required">
                                                        <option value="">Choose an Option</option>
                                                        <option value="SINGLE">SINGLE</option>
                                                        <option value="MARRIED">MARRIED</option>
                                                          <option value="DIVORCED">DIVORCED</option>
                                                    </select>
                                                     </div>
                                            </div>



                                            <div class="offset-sm-4 col-md-10">
                                                        <button type="submit" class="btn btn-success" name="sub"> <i class="ti-book"></i> Process Career</button>
                                                       
                                                    </div>
                                        </div>

                                    </form>
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