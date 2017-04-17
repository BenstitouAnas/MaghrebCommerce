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
                    <h2>Commerciale - Tickets</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="">Accueil</a>
                        </li>
                        <li>
                            <a href="commerciale_tickets.php">Tickets</a>
                        </li>
                        <li class="active">
                            <strong>Détaille Ticket</strong>
                        </li>
                    </ol>
                </div>
            </div>

            <!-- ****************************** Contenue de page ********************************** -->
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">

                            <div class="ibox chat-view">

                                <div class="ibox-content">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ibox">
                                                <div class="ibox-title">
                                                    <h5>répondre au ticket</h5>
                                                    <div class="ibox-tools">
                                                        <a class="collapse-link">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="ibox-content" style="display: none;">
                                                    <form method="POST" class="form-horizontal" action="">

                                                        <div class="hr-line-dashed"></div>
                                                        <div class="form-group"><label class="col-sm-2 control-label">Service</label>
                                                            <div class="col-sm-10"><input type="text" disabled="" placeholder="Service Commerciale" class="form-control" name="service"></div>
                                                        </div>
                                                        
                                                        <div class="hr-line-dashed"></div>
                                                        <div class="form-group"><label class="col-sm-2 control-label">Repondre</label>

                                                            <div class="col-sm-10"><textarea class="form-control message-input" name="message" placeholder="Entrer Votre Réponse"></textarea></div>
                                                        </div>
                                                        <div class="hr-line-dashed"></div>
                                                        
                                                        <div class="form-group">
                                                            <div class="col-sm-4 col-sm-offset-2">
                                                                <button class="btn btn-primary" type="submit" name="enregistrer">Repondre</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="chat-discussion">

                                                <div class="chat-message">
                                                    <div class="message">
                                                        <a class="message-author" href="#"> Michael Smith </a>
                                                        <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                        <span class="message-content">
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="chat-message">
                                                    <div class="message">
                                                        <a class="message-author" href="#"> Michael Smith </a>
                                                        <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                        <span class="message-content">
                                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="chat-message">
                                                    <div class="message">
                                                        <a class="message-author" href="#"> Alice Jordan </a>
                                                        <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                        <span class="message-content">
                                                        All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                                            It uses a dictionary of over 200 Latin words.
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="chat-message">
                                                    <div class="message">
                                                        <a class="message-author" href="#"> Mark Smith </a>
                                                        <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                        <span class="message-content">
                                                        All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                                            It uses a dictionary of over 200 Latin words.
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

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
</body>
</html>
