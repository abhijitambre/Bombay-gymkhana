<?php
//   ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(E_ALL);
//  include 'filesLogic.php';
$dbhandle =  mysqli_connect("localhost", "u924494635_bombaygym", "Ask@1gym");
mysqli_select_db($dbhandle, "u924494635_bombaygym");




/////////////EVENT/////////////////////////////////

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $update = true;
    $updtesql = "SELECT * FROM profile WHERE id=$id";
    $record = mysqli_query($dbhandle, $updtesql);

    if (count(array($record)) == 1) {
        $n  = mysqli_fetch_array($record);


        $achid = $n['name_ach'];
        $desccri = $n['description'];
        $img = $n['image'];

        $edate = $n['Date'];

        $etime = $n['time'];

        $enddate = $n['end_date'];

        $endtime = $n['end_time'];
    }
}

/////////////Notice Board/////////////////////////////////

if (isset($_GET['nedit'])) {
    $nid = $_GET['nedit'];
    echo $nid;
    $update = true;
    $updtesql1 = "SELECT * FROM notice WHERE nid=$nid";
    $record1 = mysqli_query($dbhandle, $updtesql1);

    if (count(array($record1)) == 1) {
        $nt = mysqli_fetch_array($record1);
        $tit = $nt['ntitle'];
        $date = $nt['ndate'];
        $pdf = $nt['pdflink'];
    }
}






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bombay Gymkhana</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <!-- <link href="../vendors/nprogress/nprogress.css" rel="stylesheet"> -->

    <!-- Custom Theme Style -->

    <!-- bootstrap-daterangepicker -->
    <!-- <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.20/daterangepicker.css" integrity="sha512-gyIdQhK2sqxNii/JT9BPM/cnGbb8BkXfmQClOlUztaGk/uqZJSTKKZc///sUeTDvpb3umiA517C/87tYeVXYqA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap-datetimepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css" integrity="sha512-bYPO5jmStZ9WI2602V2zaivdAnbAhtfzmxnEGh9RwtlI00I9s8ulGe4oBa5XxiC6tCITJH/QG70jswBhbLkxPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <!-- <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Bombay Gymkhana
                                Alela!</span></a>
                    </div> -->

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="images/img.png" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Bombay Gymkhana</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <!-- <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="index.html">Dashboard</a></li>
                                        <li><a href="index2.html">Dashboard2</a></li>
                                        <li><a href="index3.html">Dashboard3</a></li> 
                                    </ul>
                                </li> -->
                                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="formnotice.php">General Form</a></li>
                                        <!-- <li><a href="form_advanced.html">Advanced Components</a></li>
                                        <li><a href="form_validation.html">Form Validation</a></li>
                                        <li><a href="form_wizards.html">Form Wizard</a></li>
                                        <li><a href="form_upload.html">Form Upload</a></li>
                                        <li><a href="form_buttons.html">Form Buttons</a></li> -->
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <!-- <li><a href="tables.html">Tables</a></li> -->
                                        <li><a href="event-table.php">Event Table </a></li>
                                        <li><a href="notice-tabel.php">Notice Table</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>


                    </div>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.png" alt="">Bombay Gymkhana
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <!-- <li><a href="javascript:;"> Profile</a></li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li><a href="javascript:;">Help</a></li> -->
                                    <li id="logout"><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <!-- <div class="title_left">
                            <h3>Form Validation</h3>
                        </div> -->

                        <!-- <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="clearfix"></div>




                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">

                                <div class="x_content">


                                    <!-- /*///////////////////////////////Events/////////////////////////////////-->
                                    <form class="form-horizontal form-label-left" action="addach.php" method="post" enctype="multipart/form-data">

                                        <!-- <p>For alternative validation library <code>parsleyJS</code> check out in the <a
                                                href="form.html">form page</a>
                                        </p> -->
                                        <span class="section">Event</span>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="achi" id="" value="<?php echo $achid; ?>" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">

                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Description
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="des" id="" value="<?php echo $desccri; ?>" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Display Image
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" type="file" name="image" id="image" value="<?php echo base64_encode($img)  ?>" placeholder="both name(s) e.g Jon Doe" required="required">
                                            </div>
                                        </div>



                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="edate"> Date
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class='input-group date'>
                                                    <input type='text' id='myDatepicker2' class="form-control" name='edate' value="<?php echo $edate; ?>" placeholder="Start Date" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class='input-group date'>
                                                    <input type='text' id='myDatepickerd' class="form-control" name='eldate' value="<?php echo $eldate; ?>" placeholder="End Date" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="etime">Time
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class='input-group date'>
                                                    <input type='text' id='myDatepicker3' class="form-control" name='etime' value="<?php echo $endtime; ?>" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-time"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class='input-group date'>
                                                    <input type='text' id='myDatepickert' class="form-control" name='eltime' value="<?php echo $endtime; ?>" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-time"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>




                                        <?php if ($update == true) : ?>
                                            <button class="btn" type="submit" name="update" style="background: #556B2F;">update</button>
                                        <?php else : ?>
                                            <button class="btn" type="submit" name="save">Save</button>
                                        <?php endif ?>
                                    </form>






                                    <!-- /*///////////////////////////////Notice Board/////////////////////////////////-->


                                    <form class="form-horizontal form-label-left" action="addach.php" method="post" enctype="multipart/form-data">

                                        <!-- <p>For alternative validation library <code>parsleyJS</code> check out in the <a
                                                href="form.html">form page</a>
                                        </p> -->
                                        <span class="section">Notice Board </span>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Notice
                                                Title
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="pdftitle" id="" value="<?php echo $tit; ?>" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                                                <input type="hidden" name="id" value="<?php echo $nid; ?>">

                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">PDF
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" type="file" name="pdffile" id="image" value="<?php echo $pdf; ?>" placeholder="both name(s) e.g Jon Doe" required="required">

                                            </div>
                                        </div>


                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pdate"> Date
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class='input-group date'>
                                                    <input type='text' id='myDatepickerpdf' class="form-control" name='pdate' value="<?php echo $date; ?>" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pdate"> Notice Type
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="noticetype" id="noticetype" required="required" class="form-control col-md-7 col-xs-12">
                                                    <option value="agm">AGM</option>
                                                    <option value="normal">Normal</option>
                                                </select>
                                            </div>
                                        </div> -->


                                        <?php if ($update == true): ?>
                                        <button class="btn" type="submit" name="updatenew"
                                            style="background: #556B2F;">update</button>
                                        <?php else: ?>
                                        <button class="btn" type="submit" name="savenew">Save</button>
                                        <?php endif ?>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- footer content -->
            <footer>
                <!-- <div class="pull-right">
            Bombay Gymkhana - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div> -->
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- FastClick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/0.6.0/fastclick.js" integrity="sha512-XLEKMI36UqpBLvIGMBCBty0wwuzwevNUmoSDw87LaZ/nuN7wThnmLbnoWJLMfsmpiKeDNx4TqUWxk/2xynsXFw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- NProgress -->
    <!-- <script src="../vendors/nprogress/nprogress.js"></script> -->
    <!-- validator -->
    <!-- bootstrap-daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.20/daterangepicker.min.js" integrity="sha512-aXnAK+6GibEb/kjcoPp4LXVpLbJGsxT2S1KccmNeaDNkqaGM463fu/szQo8TyczzeSsHiimGjG81fK3ntcjqpA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bootstrap-datetimepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Ion.RangeSlider -->
    <!-- Bootstrap Colorpicker -->
    <!-- jquery.inputmask -->
    <!-- jQuery Knob -->
    <!-- Cropper -->
    <script src="../vendors/cookie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.js?v=1"></script>
    <!-- Custom Theme Scripts -->

    <script>
        $(document).ready(function() {
            // alert("Successs");
            var valcook = Cookies.get('username');
            // alert(valcook);

            if (valcook == "" || valcook == null) {
                window.location.href = "login.php";
            }
        });

        $(document).ready(function() {
            $('#logout').click(function() {
                $.removeCookie("username");

                window.location.href = "login.php";
            });
        });
    </script>
    <script>
        $('#myDatepicker').datetimepicker();

        $('#myDatepicker2').datetimepicker({
            timepicker: false,
            format: 'd.m.Y',
            viewMode: "months"
        });

        $('#myDatepickerd').datetimepicker({
            timepicker: false,
            format: 'd.m.Y',
            viewMode: "months"
        });

        $('#myDatepickerpdf').datetimepicker({
            timepicker: false,
            format: 'd.m.Y',
            viewMode: "months"
        });


        $('#myDatepicker3').datetimepicker({
            datepicker: false,
            timepicker: true,
            format: 'H:i',
            step: 15
        });
        $('#myDatepickert').datetimepicker({
            datepicker: false,
            timepicker: true,
            format: 'H:i',
            step: 15
        });

        $('#myDatepicker4').datetimepicker({
            ignoreReadonly: true,
            allowInputToggle: true
        });

        $('#datetimepicker6').datetimepicker();

        $('#datetimepicker7').datetimepicker({
            useCurrent: false
        });

        $("#datetimepicker6").on("dp.change", function(e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });

        $("#datetimepicker7").on("dp.change", function(e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    </script>
    <script src="../build/js/custom.min.js"></script>
</body>

</html>