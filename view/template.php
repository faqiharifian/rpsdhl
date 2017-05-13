<?php
    require_once(ROOTPATH."/models/users.php");
    $user = getUserLogin();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo ROOT; ?>/assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo ROOT; ?>/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo ROOT; ?>/assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo ROOT; ?>/assets/dist/css/skins/_all-skins.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo ROOT; ?>/assets/plugins/datepicker/datepicker3.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php echo $user['email']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header"><a href="<?php echo ROOT; ?>/auth/logging_out.php">KELUAR</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li><a href="<?php echo ROOT.'/'.$user['rule'];?>/kbr"><i class="fa fa-circle-o text-red"></i> <span>KBR</span></a></li>
                <li><a href="<?php echo ROOT.'/'.$user['rule'];?>/rhl"><i class="fa fa-circle-o text-yellow"></i> <span>RHL</span></a></li>
                <li><a href="<?php echo ROOT.'/'.$user['rule'];?>/obit"><i class="fa fa-circle-o text-aqua"></i> <span>OBIT</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php
        switch($page){
            case "welcome":
                include(ROOTPATH."/view/".$user['rule']."/welcome.php");
                break;
            case "kbr":
                include(ROOTPATH."/view/".$user['rule']."/dashboard_kbr.php");
                break;
            case "obit":
                include(ROOTPATH."/view/".$user['rule']."/dashboard_obit.php");
                break;
            case "rhl":
                include(ROOTPATH."/view/".$user['rule']."/dashboard_rhl.php");
                break;
        }
        ?>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo ROOT; ?>/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo ROOT; ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo ROOT; ?>/assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo ROOT; ?>/assets/dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo ROOT; ?>/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo ROOT; ?>/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo ROOT; ?>/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo ROOT; ?>/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo ROOT; ?>/assets/plugins/chartjs/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo ROOT; ?>/assets/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo ROOT; ?>/assets/dist/js/demo.js"></script>
<!-- Bootstrap datepicker -->
<script src="<?php echo ROOT; ?>/assets/plugins/datepicker/bootstrap-datepicker.js"></script>

</body>
<script type="text/javascript">
    $(".tahun_kbr").datepicker(
        {
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
            autoclose: true
        }
    );

    var ctx1 = document.getElementById("myChart1");
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["Semarang", "Demak", "Kudus", "Kudus", "Kudus", "Kudus", "Kudus", "Kudus", "Kudus", "Kudus", "Demak", "Demak", "Demak"],
            datasets: [
                {
                    label: "Unit",
                    data: [5,7,4,2,3,4,6,7,9,7,6,4,3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ]
                },
                {
                    label: "Luas(Ha)",
                    data: [4,3,6,5,6,7,8,4,6,7,8,8,8],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                }
            ]
        }

    });
</script>
</html>
