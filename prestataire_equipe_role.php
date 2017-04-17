<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Maghreb Commerce | Prestataire</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    	
	<!-- Sweet Alert -->
    <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

</head>

<body class="">

    <div id="wrapper">

    <!-- *********************************** Le menu de navigation ************************************* -->
    <?php include('navigationPrestataire.php');
?>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <!-- *********************************** Le menu de notification ************************************* -->
        <?php include('notification.php');
?>

        </div>
            <div class="wrapper wrapper-content animated fadeInRight ecommerce">


            <div class="ibox-content m-b-sm border-bottom">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" id="user_name" name="user_name" value="" placeholder="Nom" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" id="user_fname" name="user_fname" value="" placeholder="Prénom" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" id="user_mail" name="user_mail" value="" placeholder="Email" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label" for="search"></label>
                            <button class="btn btn-primary" type="submit" id="search" name="search">Rechercher</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                <thead>
                                <tr>
                                    <th data-hide="phone">Nom</th>
                                    <th data-hide="phone">Prénom</th>
                                    <th data-hide="phone">Email</th>
                                    <th data-hide="phone,tablet">Dernier Accès</th>
                                    <th data-hide="phone">Status</th>
                                    <th class="text-right">Rôles</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Errouissi
                                    </td>
                                    <td>
                                        Mustapha
                                    </td>
                                    <td>
                                        Errouissi.musta@gmail.com
                                    </td>
                                    <td>
                                        03-05-2016 15:15:15
                                    </td>
                                    <td>
                                        <span class="label label-primary">Valide</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <a class="btn-white btn btn-xs" data-toggle="modal" data-target="#myModa">Voir</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Benstitou
                                    </td>
                                    <td>
                                        Anas
                                    </td>
                                    <td>
                                        Benstitou.anas@gmail.com
                                    </td>
                                    <td>
                                        24-04-2017 23:18:45
                                    </td>
                                    <td>
                                        <span class="label label-primary">Valide</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Voir</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Jaali
                                    </td>
                                    <td>
                                        Reda
                                    </td>
                                    <td>
                                       Jaali.reda@gmail.com
                                    </td>
                                    <td>
                                        25-03-2017 18:16:23
                                    </td>
                                    <td>
                                        <span class="label label-success">Quité</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Voir</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Ahmad
                                    </td>
                                    <td>
                                        Amine
                                    </td>
                                    <td>
                                        Ahmad.amine@gmail.com
                                    </td>
                                    <td>
                                        04-02-2016 09:15:57
                                    </td>
                                    <td>
                                        <span class="label label-danger">Supprimé</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">Voir</button>
                                        </div>
                                    </td>
                                </tr>
                                

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                            <div class="modal inmodal fade" id="myModa" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-sl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Errouissi Mustapha</h4>
                                        </div>
                                        <form method="POST" class="form-horizontal" action="">
                                            <div class="modal-body">
                                                <div class="ibox float-e-margins">
                                                    <div class="form-group">
                                                        <label> <input type="checkbox" class="i-checks">  Ajouter Produit </label>
                                                    </div>

                                                    <div class="form-group">
                                                        <label> <input type="checkbox" class="i-checks">  Supprimer Produit </label>
                                                    </div>

                                                    <div class="form-group">
                                                        <label> <input type="checkbox" class="i-checks">  Modifier Quantite </label>
                                                    </div>

                                                    <div class='hr-line-dashed'></div>

                                                    <div class="form-group">
                                                        <label> <input type="checkbox" class="i-checks">  Valider Commande </label>
                                                    </div>

                                                    <div class='hr-line-dashed'></div>

                                                    <div class="form-group">
                                                        <label> <input type="checkbox" class="i-checks">  Repondre au Tickets </label>
                                                    </div>
                                                    <div class='hr-line-dashed'></div>

                                                    <div class="form-group">
                                                        <label> <input type="checkbox" class="i-checks">  Voir Solde Totale  </label>
                                                    </div>

                                                    <div class="form-group">
                                                        <label> <input type="checkbox" class="i-checks">  Demander Retrait  </label>
                                                    </div>
                                                    <div class='hr-line-dashed'></div>

                                                    <div class="form-group">
                                                        <label> <input type="checkbox" class="i-checks">  Ajouter Utilisateur  </label>
                                                    </div>

                                                    <div class="form-group">
                                                        <label> <input type="checkbox" class="i-checks">  Supprimer Utilisateur  </label>
                                                    </div>
                                                    <div class='hr-line-dashed'></div>
                                                 
                                                </div>
                                            </div>
                                            

                                            <div class="modal-footer">
                                                <button type="reset" class="btn btn-white" data-dismiss="modal">Fermer</button>
                                                <button type="submit" class="btn btn-primary" name="modifierService">Enregistrer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- ****************************** Contenue de page ********************************** -->
            <div class="wrapper wrapper-content">
                <div class="middle-box text-center animated fadeInRightBig">
                    <h3 class="font-bold">This is page content</h3>
                    <div class="error-desc">
                        You can create here any grid layout you want. And any variation layout you imagine:) Check out
                        main dashboard and other site. It use many different layout.
                        <br/><a href="index-2.html" class="btn btn-primary m-t">Dashboard</a>
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

        <!-- Sweet alert -->
    <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.footable').footable();
        });

    </script>

<script>

    $(document).ready(function () {

        $('.demo4').click(function () {
			var id = $(this).attr('id');
            swal({
                        title: "Vous etes sur?",
                        text: "Ce service seras supprimer de la base des données !",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Oui, supprimer!",
                        cancelButtonText: "Non, annuler!",
                        closeOnConfirm: false,
                        closeOnCancel: false },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Supprimé!", "Le service a été supprimé de la base des données", "success");
							window.location.href='traitement.php?suppService='+id+'';
                        } else {
							
                            swal("Annulé", "Action annulée ", "error");
                        }
                    });
        });


    });

</script>
</body>
</html>
