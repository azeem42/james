<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Sep 2019 10:06:06 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Tabs </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link href="css/plugins/select2/select2.min.css" rel="stylesheet">
  <!-- <script src="js/plugins/daterangepicker/daterangepicker.js"></script> -->
  <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
  <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
  
  <link href="css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="css/plugins/slick/slick.css" rel="stylesheet">
    <link href="css/plugins/slick/slick-theme.css" rel="stylesheet">


<style>

.text_design {
            color: #203466;
            font-size: 14px;
        }
.progress{
            height: 7px;
            width: 136px;
}
.bar_text{
            font-size: 12px;
}
.progress-bar-success{
    background-color: #203466;
}
.progress{
            height: 6px;
            width: 130px;
}
.days_cal {
            color: #203466;
            font-size: 10px;
        }
.date_cal {
            color: #203466;
            font-size: 13px;
}
</style>
</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">

            <?php include('inc_leftmenu.php');  ?> 

        </nav>

        <div id="page-wrapper" class="gray-bg">
            
            <?php include('inc_test.php');  ?>

            

            <div class="footer">
                <div class="float-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2018
                </div>
            </div>

        </div>
    </div>


    <!-- Mainly scripts -->
    <script src="js/plugins/fullcalendar/moment.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI  -->
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>

<!-- Full Calendar -->
<script src="js/plugins/fullcalendar/fullcalendar.min.js"></script>

  <!-- slick carousel-->
  <script src="js/plugins/slick/slick.min.js"></script>

  <script>
        $(document).ready(function(){


            $('.slick_demo_1').slick({
                dots: false
            });

            $('.slick_demo_2').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.slick_demo_3').slick({
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                adaptiveHeight: true
            });
        });

    </script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Sep 2019 10:06:06 GMT -->

</html>