<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Maghreb Commerce | Commerciale</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">

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
                <div class="col-sm-12">
                    <h2>Commerciale - Historique du Solde</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html">Solde</a>
                        </li>
                        <li class="active">
                            <strong>Historique</strong>
                        </li>
                    </ol>
                </div>
            </div>

            <!-- ****************************** Contenue de page ********************************** -->
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                <thead>
                                <tr>
                                    <th data-toggle="true">Produit</th>
                                    <th data-hide="phone">Type</th>
                                    <th data-hide="all">Description</th>
                                    <th data-hide="phone">Montant</th>
                                    <th data-hide="phone,tablet">Quantité</th>
                                    <th data-hide="phone,tablet">Commission</th>
                                    <th data-hide="phone,tablet">Client</th>
                                    <th data-hide="phone">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                       Chemise
                                    </td>
                                    <td>
                                        Habillement
                                    </td>
                                    <td>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td>
                                        $50.00
                                    </td>
                                    <td>
                                        1000
                                    </td>
                                    <td>
                                        $12.00
                                    </td>
                                    <td>
                                        Anas BENSTITOU
                                    </td>
                                    <td>
                                        <span class="label label-primary">Validé</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        PC Portable
                                    </td>
                                    <td>
                                        Electronique
                                    </td>
                                    <td>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td>
                                        $40.00
                                    </td>
                                    <td>
                                        4300
                                    </td>
                                    <td>
                                        $4.30
                                    </td>
                                    <td>Errouissi Mustapha</td>
                                    <td>
                                        <span class="label label-primary">Validé</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       Formation JAVA EE
                                    </td>
                                    <td>
                                        Formation
                                    </td>
                                    <td>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td>
                                        $43.00
                                    </td>
                                    <td>
                                        7600
                                    </td>

                                    <td>
                                        $3.75
                                    </td>
                                    <td>Reda JAALI</td>
                                    <td>
                                        <span class="label label-warning">En Attente</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                       Chambre HOTEL
                                    </td>
                                    <td>
                                        Reservation
                                    </td>
                                    <td>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td>
                                        $12.00
                                    </td>
                                    <td>
                                        7600
                                    </td>
                                    <td>
                                        $7.52
                                    </td>
                                    <td>BAKKHOUCHA Abdel</td>
                                    <td>
                                        <span class="label label-danger">Annulé</span>
                                    </td>
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

    
    <!-- FooTable -->
    <script src="js/plugins/footable/footable.all.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.footable').footable();
        });
    </script>
</body>
</html>
