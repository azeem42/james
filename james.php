<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Sep 2019 10:06:06 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

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
    <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
    <!-- Clock picker -->
    <script src="js/plugins/clockpicker/clockpicker.js"></script>
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <link href="css/plugins/summernote/summernote-bs4.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>



  

  

    <style>
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: white;
            background-color: darkblue;
            border-color: darkblue;
        }

        .btn-success {
            color: white;
            background-color: #203466;
            border-color: #203466;
        }


        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link {
            color: #203466;
            background-color: white;
            font-size: 17.1px;
        }

        .panel .panel-default {
            border: none !important;
        }

        .panel-body {
            border: none !important;
        }

        .panel-heading {
            border: none !important;
        }

        .panel-default {
            border: none !important;
        }

        .text_design {
            color: #203466;
            font-size: 14px;
        }

        .date_div {
            background-color: lightgray;
            margin-left: 18px;
            border-radius: 3px;
        }

        .row_div {

            height: 50px;
            margin-top: 10px;
        }

        .input-group {
            left: -1px !important;
            top: 2px !important;
        }

        .checkbox-round1 {
            width: 1.3em;
            height: 1.3em;
            background-color: white;
            border-radius: 50%;
            vertical-align: middle;
            border: 2.5px solid darkgray;
            appearance: none;
            -webkit-appearance: none;
            outline: none;
            cursor: pointer;
        }

        .checkbox-round1:checked {
            background-color: red;
        }

        .ml-3 {
            margin-left: 3rem !important;
        }

        .progress-small,
        .progress-small .progress-bar {
            height: 4px !important;
            width: 300px;
        }

        .progress-bar {
            background-color: orange;

        }

        .ibox-content1 {
            background-color: #ffffff;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
            border: none;
            margin-top: -16px;
            margin-left: -14px;
        }

        .close1 {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #203466;
            text-shadow: 0 1px 0 #fff;
            /* opacity: .5; */
            margin-top: -20px;
            margin-right: 163px;
            border: none;
            background: none;
        }

        .bar_text {
            font-size: 12px;
            color: #203466;
        }

        .p_text {
            font-size: 12px;
            color: #203466;
        }

        .ibox-content2 {
            /* background-color: #ffffff; */
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
            border: none;
            margin-top: -8px;
            margin-left: -48px;
        }

        .close2 {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #203466;
            text-shadow: 0 1px 0 #fff;
            /* opacity: .5; */
            margin-top: -20px;
            margin-right: 163px;
            border: none;
            background: none;
        }

        .note-popover .popover-content,
        .card-header.note-toolbar {
            /* padding: 0 0 5px 5px; */
            margin: 0;
            /* background-color: white; */
        }

        .note-editor.note-frame .note-statusbar {
            display: none;
        }

        .note-editor.note-frame {
            border: 1px solid black;
        }

        .table {
            font-family: "open sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            color: #676a6c;
        }

        .dropzone {
            min-height: 330px;
            border: 3px dashed darkgray;
            background: white;
            padding: 20px 20px;
            border-radius: 10px;
        }

        .ibox-content-adv {
            background-color: #ffffff;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
            border: none;
            /* margin-top: -16px; */
            margin-left: -9px;
        }

        .close-adv {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #203466;
            text-shadow: 0 1px 0 #fff;
            /* opacity: .5; */
            margin-top: 24px;
            /* margin-right: 163px; */
            border: none;
            background: none;
        }

        .progress-small-adv,
        .progress-small-adv .progress-bar-adv {
            height: 4px !important;
            width: 335px;
        }

        .checkbox-round {
            width: 1.3em;
            height: 1.3em;
            background-color: white;
            border-radius: 50%;
            vertical-align: middle;
            border: 1px solid #ddd;
            appearance: none;
            -webkit-appearance: none;
            outline: none;
            cursor: pointer;
        }

        .checkbox-round:checked {
            background-color: white;
        }

        .redColor {
            color: red;
        }

        input[type="checkbox"] {
            width: 17px;
            height: 17px;
            border: 2px solid #4664a3;
            outline: none;
            /* -webkit-appearance: none;
  -moz-appearance: none; */
            /* c */
            position: relative;
            margin-right: 2px;
            border-radius: 3px;
            color: red;
        }

        .select_design {
            background-color: #203466;
            color: white;
        }

        .tab6_design {
            color: #203466;
            font-size: 25px;
            font-weight: bold;
        }

        .row_back {
            background-color: #203466;
            color: #fff;
        }

        .cal_bg {
            background-color: darkblue;
        }

        .row_rad {
            border-radius: 5px;
        }

        .sel_settings {
            border-radius: 5px;
            background-color: #203466;
            color: #fff;
            height: 110%;
        }
        .table tr th{
            background-color: #203466;
            color: #fff;
            font-size: 14px;
            
        }
        .table-row-with-margin {
  margin-top: 20px;
}
        .table >thead >tr >th{
            padding: 26px;
        }
        .table >tbody >tr >td{
            color: #203466;
            font-size: 15px;
        }
        .table >tbody >tr{
            margin-top: 20px;
        }
       .bluee{
        background-color: #1f3366;
        color: white;
        display: block;
        width: 100%;
        padding: 5px;
        border: 1px solid #1f3366;
        appearance: none;
       } 
       .bluetextbox{
        background-color: #1f3366;
        color: white;
        display: block;
        width: 100%;
        padding: 5px;
        border: 1px solid #1f3366;
        appearance: none;
       } 

       .abc table {
        border-collapse: collapse;
        border-spacing: 0px 15px;
       }

       .abc table tbody tr {
        border-radius: 10px;
       }

    </style>
</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">


            
            
        </nav>

        <div id="page-wrapper" class="gray-bg">

            <?php include('inc_tabs.php');  ?>



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
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- SUMMERNOTE -->
    <script src="js/plugins/summernote/summernote-bs4.js"></script>

    <script>
        $(document).ready(function() {

            $('.summernote').summernote();

        });
    </script>

</body>




<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Sep 2019 10:06:06 GMT -->

</html>