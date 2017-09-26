<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>ECS Ticketing</title>
        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/ecs_ticketing.css" rel="stylesheet">
        <!-- Include Required Prerequisites -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

        <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>


        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />



    </head>

    <body class="fixed-nav sticky-footer bg-dark  sidenav-toggled" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top " id="mainNav">
            <a class="navbar-brand" href="index.html">ECS Ticketing</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="index.html">
                            <i class="fa fa-fw fa-ticket"></i>
                            <span class="nav-link-text">Ticket</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="charts.html">
                            <i class="fa fa-fw fa-address-book"></i>
                            <span class="nav-link-text">Clients</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-wrench"></i>
                            <span class="nav-link-text">Options</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseComponents">
                            <li>
                                <a href="navbar.html">Mon Profil</a>
                            </li>
                            <li>
                                <a href="cards.html">Préférences</a>
                            </li>
                            <li>
                                <a href="cards.html">Mes filtres</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                        <a class="nav-link" href="https://release.imaging.evolucare.com/yoda/" target="_blank">
                            <i class="fa fa-fw fa-rebel"></i>
                            <span class="nav-link-text">Yoda</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="d-lg-none">Alerts
                                <span class="badge badge-pill badge-warning">6 New</span>
                            </span>
                            <span class="indicator text-warning d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">Nouveaux Tickets</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up fa-fw"></i>396205</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">Appel de St Sever, grosses lenteurs</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-danger">
                                    <strong>
                                        <i class="fa fa-long-arrow-down fa-fw"></i>396548</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">Martine de Pessac, problème de télétransmission</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up fa-fw"></i>398989</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">Demande de Virgil, installation d'un nouveau poste à la hiroire Demande de Virgil, installation d'un nouveau poste à la hiroire Demande de Virgil, installation d'un nouveau poste à la hiroire</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">View all alerts</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0 mr-lg-2">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Déconnexion</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">

                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-plus-circle"></i>
                                </div>
                                <div class="mr-5">Créer un ticket</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-ticket"></i>
                                </div>
                                <div class="mr-5">2 Nouveaux Tickets</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Voir les tickets</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">4 Réponses clients</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Voir les tickets</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-warning"></i>
                                </div>
                                <div class="mr-5">1 Ticket Bloquant</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Voir les tickets</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Example DataTables Card-->
                <button  type="button" data-toggle="collapse" data-target="#Filter" aria-expanded="false" aria-label="Toggle Filter" class="btn btn-secondary btn-lg btn-block"> 
                    <span class="fa fa-fw fa-filter"></span> Modifier les filtres</button>


                <div id="Filter" class="collapse col-12 ">

                    <div class="filter">
                        <div class="col-xl-3 col-sm-6 mb-3" >
                            <form action="" class="formulaire col-12" >
                                <div class="row">
                                    <input class="champ form-control col-4" type="text" value="Numéro"/>   
                                    <input class="champ form-control col-8" type="text" value="Titre"/>  
                                </div>
                                <div class="row">
                                    <input class="champ form-control col-12" type="text" value="Description" /> 
                                </div>
                                <div class="row">
                                    <input class="champ form-control col-6" type="text" value="Client"/>   
                                    <input class="champ form-control col-6" type="text" value="Contact"/>  
                                </div>
                            </form>
                        </div>

                        <div class="col-xl-3 col-sm-6 mb-3">
                            <form action="" class="formulaire col-12" >
                                <div class="row">
                                    <div class="col-6">Date de création du ticket : </div>
                                    <input type="text" name="daterange" value="" class="form-control col-6"/>

                                    <script type="text/javascript">
                                        $(function () {
                                            $('input[name="daterange"]').daterangepicker();
                                        });
                                    </script>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-6">Date de fermeture du ticket : </div>
                                    <input type="text" name="daterange" value="" class="form-control col-6"/>

                                    <script type="text/javascript">
                                        $(function () {
                                            $('input[name="daterange"]').daterangepicker();
                                        });
                                    </script>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-6">Date de l'étape :  </div>
                                    <input type="text" name="daterange" value="" class="form-control col-6"/>

                                    <script type="text/javascript">
                                        $(function () {
                                            $('input[name="daterange"]').daterangepicker();
                                        });
                                    </script>
                                    
                                </div>
                            </form>

                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <form action="" class="formulaire col-12" >
                                <div class="row">
                                    <input class="champ form-control col-6" type="text" value="Sévérité"/>   
                                    <input class="champ form-control col-6" type="text" value="Version"/>  
                                </div>
                                <div class="row">
                                    <select class="form-control col-6" name="size" >
                                        <option value="">Logiciel</option>
                                        <option value="1">ECS Imaging</option>
                                        <option value="2">ECS View Web</option>
                                        <option value="3">ECS View 3D / STD</option>
                                    </select>
                                    <select class="form-control col-6" name="size" >
                                        <option value="">Etat</option>
                                        <option value="1">Nouveau</option>
                                        <option value="2">Pris en Compte</option>
                                        <option value="3">En cours de Traitement</option>
                                        <option value="3">Attente Client</option>
                                    </select>
                                </div>
                                
                                    <div class=" row btn-group " data-toggle="buttons">
                                        <label class="btn btn-secondary caseacocher col-12">
                                            <input type="checkbox"> Inclure les tickets fermés
                                            

                                        </label>
                                    </div>
                                
                            </form>
                            </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <form action="" class="formulaire col-12" >
                                <div class="row">
                                    <input class="champ form-control col-6" type="text" value="Créer par..."/>   
                                    <input class="champ form-control col-6" type="text" value="Etape par..."/>  
                                </div>
                                <div class="row">
                                    <input class="champ form-control col-12" type="text" value="Assigné à..." /> 
                                </div>
                                <div class="row">
                                    <button type="button" class="btn btn-secondary"><span class="fa fw-fa fa-check"></span></button>
                                    <button type="button" class="btn btn-secondary"><span class="fa fw-fa fa-star"></span></button>
                                    <button type="button" class="btn btn-secondary"><span class="fa fw-fa fa-ban"></span></button>
                                    
                                </div>
                            </form>
                        </div>

                    </div>

                </div>


                <div class="card mb-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>P.</th>
                                        <th>Numéro</th>
                                        <th>Client</th>
                                        <th>Sujet</th>
                                        <th>Création</th>
                                        <th>Assigné</th>
                                        <th>Version Corrective</th>
                                        <th>Tache JIRA</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>P.</th>
                                        <th>Numéro</th>
                                        <th>Client</th>
                                        <th>Sujet</th>
                                        <th>Création</th>
                                        <th>Assigné</th>
                                        <th>Version Corrective</th>
                                        <th>Tache JIRA</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr onclick="document.location = 'blank.html'">

                                        <td> <a href="blank.html"><i class="fa fa-fw fa-flag" style="color: red"></i></a></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>
                                    <tr>
                                        <td> <i class="fa fa-fw fa-flag" style="color: green"></i></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>
                                    <tr>
                                        <td> <i class="fa fa-fw fa-flag" style="color: orange"></i></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>
                                    <tr>
                                        <td> <i class="fa fa-fw fa-flag" style="color: black"></i></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>
                                    <tr>
                                        <td> <i class="fa fa-fw fa-flag" style="color: red"></i></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>
                                    <tr>
                                        <td> <i class="fa fa-fw fa-flag" style="color: red"></i></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>
                                    <tr>
                                        <td> <i class="fa fa-fw fa-flag" style="color: red"></i></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>
                                    <tr>
                                        <td> <i class="fa fa-fw fa-flag" style="color: red"></i></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>
                                    <tr>
                                        <td> <i class="fa fa-fw fa-flag" style="color: red"></i></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>
                                    <tr>
                                        <td> <i class="fa fa-fw fa-flag" style="color: red"></i></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>
                                    <tr>
                                        <td> <i class="fa fa-fw fa-flag" style="color: red"></i></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>
                                    <tr>
                                        <td> <i class="fa fa-fw fa-flag" style="color: red"></i></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>
                                    <tr>
                                        <td> <i class="fa fa-fw fa-flag" style="color: red"></i></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>
                                    <tr>
                                        <td> <i class="fa fa-fw fa-flag" style="color: red"></i></td>
                                        <td>396558</td>
                                        <td>MONT DE MARSAN </td>
                                        <td>#RIS - Télétransmission bloquée</td>
                                        <td>25/09/2017 17:00:54</td>
                                        <td>Yohann LOPEZ</td>
                                        <td>7.7.0</td>
                                        <td>ECSIMG-6530</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

            </div>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © Yoyoh la menace 2017</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JavaScript-->
            <!--<script src="vendor/jquery/jquery.min.js"></script>-->
            <script src="vendor/popper/popper.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->
            <script src="vendor/chart.js/Chart.min.js"></script>
            <script src="vendor/datatables/jquery.dataTables.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <script src="js/sb-admin-datatables.min.js"></script>
            <script src="js/sb-admin-charts.min.js"></script>
            <!-- Include Required Prerequisites -->


        </div>
    </body>

</html>
