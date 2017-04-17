<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Maghreb Commerce | Commerciale</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="">

    <div id="wrapper">

    <!-- *********************************** Le menu de navigation ************************************* -->
    <?php include('navigationCommerciale.php'); ?>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <!-- *********************************** Le menu de notification ************************************* -->
        <?php include('notification.php'); ?>

        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Commerciale - Solde</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Accueil</a>
                        </li>
                        <li>
                            <a>Solde</a>
                        </li>
                        <li class="active">
                            <strong>Mon Solde</strong>
                        </li>
                    </ol>
                </div>
            </div>

            <!-- ****************************** Contenue de page ****************************** -->
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Solde actuelle</h5>
                            <div ibox-tools></div>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">40 886,200 $</h1>
                            <small>Total</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Solde des derniers 6 mois</h5>
                            <div ibox-tools></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="barChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Solde anuelle</h5>
                            <div ibox-tools></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="lineChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            
            <!-- *********************************** Le menu de notification ************************************* -->
            <?php include('footer.html'); ?>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/mainScript.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

        <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

        <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>
    <script src="js/demo/chartjs-demo.js"></script>
</body>
</html>
