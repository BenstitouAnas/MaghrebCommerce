<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Maghreb Commerce | Prestataire</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
	
	<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

    <link href="css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

    <!-- Include the plugin css file. -->
    <link rel="stylesheet" href="css/plugins/froala/fullscreen.css">




</head>

<body class="">

    <div id="wrapper">

    <!-- *********************************** Le menu de navigation ************************************* -->
    <?php include('navigationPrestataire.php'); ?>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <!-- *********************************** Le menu de notification ************************************* -->
        <?php include('notification.php'); ?>

        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Prestataire - Ajouter Produit</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html">Accueil</a>
                        </li>
                        <li class="active">
                            <strong>Ajouter un Produit</strong>
                        </li>
                    </ol>
                </div>
            </div>

            <!-- ****************************** Contenue de page ********************************** -->
            <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Ajouter un Produit</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="POST" class="form-horizontal" action="">
                                <div class="form-group"><label class="col-sm-2 control-label">Nom du produit</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="numeroSerie" placeholder="Nom du produit" ></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Type</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="type">									
                                            <option value="marque" selected hidden >Choisir Le Type</option>
                                            <option value="">Article E-commerce</option>
                                            <option value="">Deals</option>
                                            <option value="">Formation</option>
                                            <option value="">Prestation</option>
                                            <option value="">Booking</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								<div class="form-group"><label class="col-sm-2 control-label">Désignation</label>
                                    <div class="col-sm-10"><textarea type="text" class="form-control" name="designation" placeholder="Désignation"></textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>

								<div class="form-group"><label class="col-sm-2 control-label">Catégorie</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="marque">
                                            <option value="marque" selected hidden >Choisir Catégorie</option>
                                            <option value="">Produit Ete</option>
                                            <option value="">Electromenager</option>	
                                        </select>
                                    </div>
                                </div>
								<div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Prix</label>
                                    <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <input type="number" step="0.01" min="0.00" class="form-control validateFloat" placeholder="Prix"><span class="input-group-addon">Dhs.</span> </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Quantité</label>
                                    <div class="col-sm-10">
                                        <input type="number" step="1" min="1" class="form-control validateInt" placeholder="Quantité">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
																
								<div class="form-group" id="data_3" >
                                    <label class="col-sm-2 control-label">Date Limite (Validité)</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date m-b">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
                                            <input type="text" class="form-control validateDate" placeholder="Date Limite" name="dateAchat">
                                        </div>
                                    </div>
                                </div>
								<div class="hr-line-dashed"></div>

                                <div class="form-group" id="data_5">
                                    <label class="col-sm-2 control-label">Durée</label>
                                    <div class="col-sm-10">
                                        <div class="input-daterange input-group date m-b" style="width:100%" id="datepicker">
                                            <input type="text" class="form-control validateDate" name="start" value="05/14/2014">
                                            <span class="input-group-addon">to</span>
                                            <input type="text" class="form-control validateDate" name="end" value="05/22/2014">
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group" id="data_3" >
                                    <label class="col-sm-2 control-label">Date Résérvation</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date m-b">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
                                            <input type="text" class="form-control validateDate" placeholder="Date Résérvation" name="dateAchat">
                                        </div>
                                    </div>
                                </div>
								<div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Désignation</label>
                                    <div class="col-sm-10">
                                        <button id="edit" class="btn btn-primary btn-xs m-l-sm" onclick="edit()" type="button">Edit</button>
                                        <button id="save" class="btn btn-primary  btn-xs" onclick="save()" type="button">Save</button>
                                        <div class="click2edit wrapper p-md">
                                            <h3>Lorem Ipsum is simply</h3>
                                            dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                            <br/>
                                            <br/>
                                            <ul>
                                                <li>Remaining essentially unchanged</li>
                                                <li>Make a type specimen book</li>
                                                <li>Unknown printer</li>
                                            </ul>
                                        </div>

                                        <div id="froala-editor">
                                            <p>Use the Fullscreen button to start editing in fullscreen mode.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								<div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="reset">Annuler</button>
                                        <button class="btn btn-primary" type="submit" name="enregistrer">Enregistrer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            
            
            <!-- *********************************** Le menu de notification ************************************* -->
            <?php include('footer.html'); ?>

        </div>
        </div>

<!-- Include the plugin js file. -->
<script src="js/plugins/froala/fullscreen.min.js"></script>
  
<script>
  $(function() {
    $('div#froala-editor').froalaEditor({
      toolbarButtons: ['fullscreen', '|', 'bold', 'italic', 'strikeThrough', 'underline', '|', 'paragraphFormat', 'paragraphStyle', 'align', 'formatOL', 'formatUL', 'indent', 'outdent', '|', 'insertImage', 'insertLink', 'insertVideo', 'insertFile', 'html']
    })
  });
</script>




    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/mainScript.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Data picker -->
    <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <!-- Date range picker -->
    <script src="js/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>
	
	<!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- SUMMERNOTE -->
    <script src="js/plugins/summernote/summernote.min.js"></script>
	
	<script>

        $(document).ready(function() {
            $(".validateFloat").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl/cmd+A
                    (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: Ctrl/cmd+C
                    (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: Ctrl/cmd+X
                    (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                        // let it happen, don't do anything
                        return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });

            $(".validateInt").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                    // Allow: Ctrl/cmd+A
                    (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: Ctrl/cmd+C
                    (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: Ctrl/cmd+X
                    (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                        // let it happen, don't do anything
                        return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });

            $(".validateDate").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190, 111]) !== -1 ||
                    // Allow: Ctrl/cmd+A
                    (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: Ctrl/cmd+C
                    (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: Ctrl/cmd+X
                    (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                        // let it happen, don't do anything
                        return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });

            $('.i-checks').iCheck({
				checkboxClass: 'icheckbox_square-green',
				radioClass: 'iradio_square-green',
			});

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });
        });
		
		$('#data_3 .input-group.date').datepicker({
			startView: 2,
			todayBtn: "linked",
			keyboardNavigation: false,
			forceParse: false,
			autoclose: true
        });
			
		$("#form").validate({
			 rules: {
				 password: {
					 required: true,
					 minlength: 3
				 },
				 url: {
					 required: true,
					 url: true
				 },
				 number: {
					 required: true,
					 number: true
				 },
				 min: {
					 required: true,
					 minlength: 6
				 },
				 max: {
					 required: true,
					 maxlength: 4
				 }
			 }
		 });


         $(document).ready(function(){

            $('.summernote').summernote();

        });
            var edit = function() {
                $('.click2edit').summernote({focus: true});
            };
            var save = function() {
                var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
                $('.click2edit').destroy();
            };
    </script>
</body>
</html>
