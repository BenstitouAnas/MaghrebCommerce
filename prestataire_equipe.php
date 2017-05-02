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

    <link href="css/tree.css" rel="stylesheet">

    <script src="js/GoJs/release/go.js"></script>
    

    <script id="code">
    var names = {}; // hash to keep track of what names have been used
    function init() {
        if (window.goSamples) goSamples();  // init for these samples -- you don't need to call this
        var $ = go.GraphObject.make;  // for conciseness in defining templates
        myDiagram =
        $(go.Diagram, "myDiagramDiv",
            {
            initialAutoScale: go.Diagram.UniformToFill,
            // define the layout for the diagram
            layout: $(go.TreeLayout, { nodeSpacing: 5, layerSpacing: 30 })
            });
        // Define a simple node template consisting of text followed by an expand/collapse button
        myDiagram.nodeTemplate =
        $(go.Node, "Horizontal",
            { selectionChanged: nodeSelectionChanged },  // this event handler is defined below
            $(go.Panel, "Auto",
            $(go.Shape, { fill: "#1F4963", stroke: null }),
            $(go.TextBlock,
                { font: "bold 13px Helvetica, bold Arial, sans-serif",
                stroke: "white", margin: 3 },
                new go.Binding("text", "key"))
            ),
            $("TreeExpanderButton")
        );
        // Define a trivial link template with no arrowhead.
        myDiagram.linkTemplate =
        $(go.Link,
            { selectable: false },
            $(go.Shape));  // the link shape
        // create the model for the DOM tree
        myDiagram.model =
        $(go.TreeModel, {
            isReadOnly: true,  // don't allow the user to delete or copy nodes
            // build up the tree in an Array of node data
            nodeDataArray: traverseDom(document.activeElement)
        });
    }
    // Walk the DOM, starting at document, and return an Array of node data objects representing the DOM tree
    // Typical usage: traverseDom(document.activeElement)
    // The second and third arguments are internal, used when recursing through the DOM
    function traverseDom(node, parentName, dataArray) {
        if (parentName === undefined) parentName = null;
        if (dataArray === undefined) dataArray = [];
        // skip everything but HTML Elements
        if (!(node instanceof Element)) return;
        // Ignore the navigation menus
        if (node.id === "navindex" || node.id === "navtop") return;
        // add this node to the nodeDataArray
        var name = getName(node);
        var data = { key: name, name: name };
        dataArray.push(data);
        // add a link to its parent
        if (parentName !== null) {
        data.parent = parentName;
        }
        // find all children
        var l = node.childNodes.length;
        for (var i = 0; i < l; i++) {
        traverseDom(node.childNodes[i], name, dataArray);
        }
        return dataArray;
    }
    // Give every node a unique name
    function getName(node) {
        var n = node.nodeName;
        if (node.id) n = n + " (" + node.id + ")";
        var namenum = n;  // make sure the name is unique
        var i = 1;
        while (names[namenum] !== undefined) {
        namenum = n + i;
        i++;
        }
        names[namenum] = node;
        return namenum;
    }
    // When a Node is selected, highlight the corresponding HTML element.
    function nodeSelectionChanged(node) {
        if (node.isSelected) {
        names[node.data.name].style.backgroundColor = "lightblue";
        } else {
        names[node.data.name].style.backgroundColor = "";
        }
    }
</script>

</head>

<body class="">

<div id="wrapper">

    <!-- *********************************** Le menu de navigation ************************************* -->
    <?php include('navigationPrestataire.php'); ?>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <!-- *********************************** Le menu de notification ************************************* -->
            <?php include('notification.php');


            ?>

        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Prestataire - Mon Équipe</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index-2.html">Accueil</a>
                    </li>
                    <li>
                        <a>Mon Équipe</a>
                    </li>
                    <li class="active">
                        <strong>Équipe</strong>
                    </li>
                </ol>
            </div>
        </div>

        <!-- ****************************** Contenue de page ********************************** -->
        <div class="wrapper wrapper-content animated fadeInRight" >
            <div class="row" >
                <div class="col-lg-12" >
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Mon Équipe
                                <small>Affichage par arbre</small>
                            </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content" >
                            <div class="row" >

                                <div id="sample">
                                <!-- The DIV needs an explicit size or else we won't see anything. -->
                                <div id="myDiagramDiv" style="border: 1px solid black; width:100%; height:300px"></div>
                                </div>

                                <!--<div class="tree" style="overflow:auto;">
                                    <ul>
                                        <li>
                                            <a href="#">Reda JAALI</a>
                                            <ul>
                                                <li>
                                                    <a href="#">BENSTITOU Anas</a>
                                                </li>
                                                <li>
                                                    <a href="#">ERROUISSI Mustapha</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Fatimi Soukaina</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Harrougui Mohammed</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Kabarouss Saad</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Mehdi</a>
                                                </li>
                                                <li>
                                                    <a href="#">Kamal</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mohammed</a>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Mon Équipe
                                <small>Affichage Tableau</small>
                            </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="contact-box center-version">

                                        <a href="profile.html">

                                            <img alt="image" class="img-circle" src="img/a1.jpg">


                                            <h3 class="m-b-xs"><strong>Alex Johnatan</strong></h3>

                                            <div class="font-bold">CEO</div>
                                            <address class="m-t-md">
                                                <strong>Twitter, Inc.</strong><br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                            </address>

                                        </a>
                                        <div class="contact-box-footer">
                                            <div class="m-t-xs btn-group">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i>
                                                    Follow</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="contact-box center-version">

                                        <a href="profile.html">

                                            <img alt="image" class="img-circle" src="img/a2.jpg">


                                            <h3 class="m-b-xs"><strong>John Smith</strong></h3>

                                            <div class="font-bold">Graphics designer</div>
                                            <address class="m-t-md">
                                                <strong>Twitter, Inc.</strong><br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                            </address>

                                        </a>
                                        <div class="contact-box-footer">
                                            <div class="m-t-xs btn-group">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i>
                                                    Follow</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="contact-box center-version">

                                        <a href="profile.html">

                                            <img alt="image" class="img-circle" src="img/a5.jpg">


                                            <h3 class="m-b-xs"><strong>Sandra Smith</strong></h3>

                                            <div class="font-bold">Graphics designer</div>
                                            <address class="m-t-md">
                                                <strong>Twitter, Inc.</strong><br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                            </address>

                                        </a>
                                        <div class="contact-box-footer">
                                            <div class="m-t-xs btn-group">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i>
                                                    Follow</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="contact-box center-version">

                                        <a href="profile.html">

                                            <img alt="image" class="img-circle" src="img/a7.jpg">


                                            <h3 class="m-b-xs"><strong>John Smith</strong></h3>

                                            <div class="font-bold">Graphics designer</div>
                                            <address class="m-t-md">
                                                <strong>Twitter, Inc.</strong><br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                            </address>

                                        </a>
                                        <div class="contact-box-footer">
                                            <div class="m-t-xs btn-group">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i>
                                                    Follow</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="contact-box center-version">

                                        <a href="profile.html">

                                            <img alt="image" class="img-circle" src="img/a1.jpg">


                                            <h3 class="m-b-xs"><strong>Alex Johnatan</strong></h3>

                                            <div class="font-bold">CEO</div>
                                            <address class="m-t-md">
                                                <strong>Twitter, Inc.</strong><br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                            </address>

                                        </a>
                                        <div class="contact-box-footer">
                                            <div class="m-t-xs btn-group">
                                                <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                                <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i>
                                                    Follow</a>
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
