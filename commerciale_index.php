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
    <?php include('navigationCommerciale.php');
?>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <!-- *********************************** Le menu de notification ************************************* -->
        <?php include('notification.php');
?>

        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Commerciale - Tableau de bord</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html">Accueil</a>
                        </li>
                        <li class="active">
                            <strong>Tableau de bord</strong>
                        </li>
                    </ol>
                </div>
            </div>

            <!-- ****************************** Contenue de page ****************************** -->
            <div class="wrapper wrapper-content">

                <!-- ****************************** Infos generale ****************************** -->
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Ce mois</span>
                                <h5>Solde</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">40 886,200 $</h1>
                                <small>Total</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Cette semaine</span>
                                <h5>Commandes</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">275,800</h1>
                                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                                <small>Nouvelles commandes</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Ajourd'hui</span>
                                <h5>Produits</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">106,120</h1> <!-- Max  106,12000000-->
                                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                                <small>Nombre produits</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">Low</span>
                                <h5>Nomre utilisateurs</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">600</h1>
                                <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                                <small>Ce mois ci</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ****************************** Commandes recentes ****************************** -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Commandes Récentes (5/23)</h5>
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
                                        <th data-toggle="true">Numero Commande</th>
                                        <th data-hide="phone">Date Commande</th>
                                        <th data-hide="all">Produits</th>
                                        <th data-hide="phone">Date Validation</th>
                                        <th data-hide="phone,tablet" >Nombre Produits</th>
                                        <th data-hide="phone" >Total</th>
                                        <th data-hide="phone" class="text-left">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            CMD001
                                        </td>
                                        <td>
                                            25-03-2016
                                        </td>
                                        <td>
                                            <table class="table table-hover lg">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nom Produit</th>
                                                        <th>Quantité</th>
                                                        <th>Prix Unitaire</th>
                                                        <th>Totale</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Chemise hiver</td>
                                                        <td>2</td>
                                                        <td>$15.3</td>
                                                        <td>$30.6</td>
                                                    </tr>
                                                    <tr>
                                                       <td>1</td>
                                                        <td>Table rond</td>
                                                        <td>2</td>
                                                        <td>$15.3</td>
                                                        <td>$30.6</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>dfsdf hiver</td>
                                                        <td>2</td>
                                                        <td>$15.3</td>
                                                        <td>$30.6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            $50.00
                                        </td>
                                        <td class="text-left">
                                            <span class="label label-primary">Livrée</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CMD002
                                        </td>
                                        <td>
                                            25-03-2016
                                        </td>
                                        <td>
                                            It is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                            'Content here, content here', making it look like readable English.
                                        </td>
                                        <td>
                                            28-03-2016
                                        </td>
                                        <td>
                                            32
                                        </td>
                                        <td>
                                            $5000.00
                                        </td>
                                        <td class="text-left">
                                            <span class="label label-primary">Annulée</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            CMD003
                                        </td>
                                        <td>
                                            25-03-2016
                                        </td>
                                        <td>
                                            It is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                            'Content here, content here', making it look like readable English.
                                        </td>
                                        <td>
                                            28-03-2016
                                        </td>
                                        <td>
                                            14
                                        </td>
                                        <td>
                                            $3520.00
                                        </td>
                                        <td class="text-left">
                                            <span class="label label-warning">En cours</span>
                                        </td>
                                    </tr>

                                   <tr>
                                        <td>
                                            CMD001
                                        </td>
                                        <td>
                                            25-03-2016
                                        </td>
                                        <td>
                                            It is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                            'Content here, content here', making it look like readable English.
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            $50.00
                                        </td>
                                        <td class="text-left">
                                            <span class="label label-primary">Livrée</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CMD002
                                        </td>
                                        <td>
                                            25-03-2016
                                        </td>
                                        <td>
                                            It is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                            'Content here, content here', making it look like readable English.
                                        </td>
                                        <td>
                                            28-03-2016
                                        </td>
                                        <td>
                                            32
                                        </td>
                                        <td>
                                            $5000.00
                                        </td>
                                        <td class="text-left">
                                            <span class="label label-primary">Annulée</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            CMD003
                                        </td>
                                        <td>
                                            25-03-2016
                                        </td>
                                        <td>
                                            It is a long established fact that a reader will be distracted by the readable
                                            content of a page when looking at its layout. The point of using Lorem Ipsum is
                                            that it has a more-or-less normal distribution of letters, as opposed to using
                                            'Content here, content here', making it look like readable English.
                                        </td>
                                        <td>
                                            28-03-2016
                                        </td>
                                        <td>
                                            14
                                        </td>
                                        <td>
                                            $3520.00
                                        </td>
                                        <td class="text-left">
                                            <span class="label label-warning">En cours</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ****************************** Tickets recentes ****************************** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Tickets Récentes (3/35)</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="faq-item">
                                <div class="row">
                                    <div class="col-md-7">
                                        <a data-toggle="collapse" href="#faq1" class="faq-question">What It a long established fact that a reader ?</a>
                                        <small>Par <strong>Alex Smith</strong> <i class="fa fa-clock-o"></i> Aujourd'hui 2:40 pm - 24.06.2014</small>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="small font-bold">Robert Nowak</span>
                                        <div class="tag-list">
                                            <span class="tag-item">General</span>
                                            <span class="tag-item">License</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <span class="small font-bold">Réponses </span><br/>
                                        3
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="faq1" class="panel-collapse collapse ">
                                            <div class="faq-answer">
                                                <p>
                                                    It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                    letters, as opposed to using 'Content here, content here', making it
                                                    look like readable English.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="row">
                                    <div class="col-md-7">
                                        <a data-toggle="collapse" href="#faq2" class="faq-question">Many desktop publishing packages ?</a>
                                        <small>Par <strong>Mark Nowak</strong> <i class="fa fa-clock-o"></i> Aujourd'hui 3:30 pm - 11.06.2014</small>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="small font-bold">Robert Nowak</span>
                                        <div class="tag-list">
                                            <span class="tag-item">General</span>
                                            <span class="tag-item">License</span>
                                            <span class="tag-item">CC</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <span class="small font-bold">Réponses </span><br/>
                                        4
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="faq2" class="panel-collapse collapse">
                                            <div class="faq-answer">
                                                <p>
                                                    Many desktop publishing packages and web page editors now use Lorem
                                                    Ipsum as their default model text, and a search for 'lorem ipsum' will
                                                    uncover many web sites still in their infancy. Various versions have
                                                    evolved over the years, sometimes by accident, sometimes on purpose
                                                    (injected humour and the like).
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="row">
                                    <div class="col-md-7">
                                        <a data-toggle="collapse" href="#faq3" class="faq-question">Ipsum generators on the Internet tend ?</a>
                                        <small>Par <strong>Monica Rother</strong> <i class="fa fa-clock-o"></i> Vendredi 7:60 pm - 12.06.2014</small>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="small font-bold">Alex Berg</span>
                                        <div class="tag-list">
                                            <span class="tag-item">General</span>
                                            <span class="tag-item">Web App</span>
                                            <span class="tag-item">Instruction</span>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <span class="small font-bold">Réponses </span><br/>
                                        22
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="faq3" class="panel-collapse collapse">
                                            <div class="faq-answer">
                                                <p>
                                                    Ipsum generators on the Internet tend to repeat predefined chunks as
                                                    necessary, making this the first true generator on the Internet. It uses
                                                    a dictionary of over 200 Latin words, combined with a handful of model
                                                    sentence structures, to generate Lorem Ipsum which looks reasonable. The
                                                    generated Lorem Ipsum is therefore always free from repetition, injected
                                                    humour, or non-characteristic words etc.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- ****************************** Le footer ****************************** -->
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
