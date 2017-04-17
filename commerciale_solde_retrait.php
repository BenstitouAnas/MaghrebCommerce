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
                    <h2>Commerciale - Retrait du Solde</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html">Solde</a>
                        </li>
                        <li class="active">
                            <strong>Retrait Solde</strong>
                        </li>
                    </ol>
                </div>
            </div>

            <!-- ****************************** Contenue de page ********************************** -->
            <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Demander un retrait <small></small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <form method="POST" class="form-horizontal" action="">
                                <div class="form-group"><label class="col-sm-2 control-label">Montant Retrait</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" name="montantRetrait"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								<div class="form-group"><label class="col-sm-2 control-label">Description</label>

                                    <div class="col-sm-10"><input type="text" class="form-control" name="descRetrait"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="reset">Annuler</button>
                                        <button class="btn btn-primary" type="submit" name="enregistrer">Demander</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-6">
                    <div class="ibox float-e-margins">
						<div class="ibox-title">
                            <h5>Historique des Retraits<small></small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                <thead>
                                <tr>
                                    <th data-toggle="true">#</th>
                                    <th data-hide="phone">Montant Retrait</th>
                                    <th data-sort-ignore="true">Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>R00151</td>
                                    <td>12-06-2015 15:42:41</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>R001245</td>
                                    <td>12-06-2015 15:42:41</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>R01245</td>
                                    <td>12-06-2015 15:42:41</td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>R01248</td>
                                    <td>12-06-2015 15:42:41</td>
                                </tr>
                                </tbody>
                                <tfoot>
									<tr>
										<td colspan="6">
											<ul class="pagination pull-right"></ul>
										</td>
									</tr>
                                </tfoot>
                            </table>
			
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
</body>
</html>
