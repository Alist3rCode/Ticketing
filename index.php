<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ETMI - Ticketing</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark sidenav-toggled" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">ECS Ticketing</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-ticket"></i>
            <span class="nav-link-text">Ticket</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-building-o"></i>
            <span class="nav-link-text">Clients</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-address-card"></i>
            <span class="nav-link-text">Contacts</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cogs"></i>
            <span class="nav-link-text">Option</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Gérer les filtres</a>
            </li>
            <li>
              <a href="#">Préférences</a>
            </li>
            <li>
              <a href="#">Mon Profil</a>
            </li>
            
          </ul>
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
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
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
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">ECS Imaging</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-ticket"></i>
              </div>
              <div class="mr-5">4 Nouveaux Tickets</div>
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
              <div class="mr-5">11 Réponses clients</div>
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
              <div class="mr-5">2 Tickets Bloquant</div>
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
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-ticket"></i> Mon filtre</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered " id="dataTable" width="100%"  cellspacing="0">
              <thead overflow-y:auto>
                <tr >
                  <th>P.</th>
                  <th>Numéro</th>
                  <th>Client</th>
                  <th>Sujet</th>
                  <th>Logiciel</th>
                  <th>Création</th>
                  <th>Etat</th>
                  <th>Assigné à</th>
                  <th>Version Corrective</th>
                  <th>Tache JIRA</th>
                </tr>
              </thead>
              <tfoot>
                <tr >
                    <th>P.</th>
                    <th>Numéro</th>
                  <th>Client</th>
                  <th>Sujet</th>
                  <th>Logiciel</th>
                  <th>Création</th>
                  <th>Etat</th>
                  <th>Assigné à</th>
                  <th>Version Corrective</th>
                  <th>Tache JIRA</th>
                </tr>
              </tfoot>
              <tbody >
                <tr >
                    <td><i class="fa fa-fw fa-flag" style="color:green"></i></td>
                  <td>381302</td>
                  <td>AMIENS - Polyclinique de Picardie</td>
                  <td>Récupération des anciens CR</td>
                  <td>ECS IMAGING 7.4.3 MariaDB</td>
                  <td>01/03/2017 09:29:08</td>
                  <td>Pris en compte</td>
                  <td>Thibault LONGRET</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                    <td><i class="fa fa-fw fa-flag" style="color:green"></i></td>
                    <td>381302</td> 

	<td>AMIENS - Polyclinique de Picardie</td> 

	<td>Récupération des anciens CR</td> 

	<td>ECS IMAGING 7.4.3 MariaDB</td> 

	<td>42795,3952314815</td> 

	<td>Pris en compte</td> 

	<td>Thibault LONGRET</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>398464</td> 

	<td>CHAUNY CEDEX - CENTRE HOSPITALIER DE CHAUNY</td> 

	<td>#PACS - Perte d'antériorité patient</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42992,4881712963</td> 

	<td>Nouveau</td> 

	<td>Eric LE-HUIC</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>398867</td> 

	<td>NICE - CENTRE DE RADIOLOGIE NICE DR CARAMELLA</td> 

	<td>#PACS - Superviseur</td> 

	<td>ECS IMAGING 6.21.3 MariaDB</td> 

	<td>42997,5953703704</td> 

	<td>Nouveau</td> 

	<td>Jérémie VENEKAS</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>398897</td> 

	<td>CHELLES - CENTRE D IMAGERIE MEDICALE RESISTANCE</td> 

	<td>#PACS - Perte d'examens</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42997,6558449074</td> 

	<td>Nouveau</td> 

	<td>Arthur JANSEN</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>399150</td> 

	<td>CASTELNAUDARY CEDEX - CENTRE HOSPITALIER J.P. CASSABEL</td> 

	<td>GE Healthcare affaire n°01280386 - MONTPELLIER - CHRU -</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42999,685462963</td> 

	<td>Nouveau</td> 

	<td>Arthur JANSEN</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>399327</td> 

	<td>NICE - CENTRE DE RADIOLOGIE NICE DR CARAMELLA</td> 

	<td>#PACS - Service et replication</td> 

	<td>ECS IMAGING 6.21.3 MariaDB</td> 

	<td>43003,502037037</td> 

	<td>Nouveau</td> 

	<td>Arthur JANSEN</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>381557</td> 

	<td>MARIGNANE - IMAGERIE MEDICALE DE MARIGNANE</td> 

	<td>[diffusion]Accès patient impossible</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42797,4060532407</td> 

	<td>En cours de traitement</td> 

	<td>Céline DIAS</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>385127</td> 

	<td>CHELLES - CENTRE D IMAGERIE MEDICALE RESISTANCE</td> 

	<td>#PACS HS -  PB fonctionnement pacs</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42836,3945601852</td> 

	<td>En cours de traitement</td> 

	<td>Arthur JANSEN</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>392867</td> 

	<td>BASSENS - Centre Hopitalier Spécialisé de Savoie</td> 

	<td>#PACS - [CHS SAVOIE] - Interface ORM - Demande de RDV : Recette</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42921,3591898148</td> 

	<td>En cours de traitement</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>392869</td> 

	<td>BMC - BELLEVUE MEDICAL CENTER</td> 

	<td>#PACS - Report Creation</td> 

	<td>ECS IMAGING 7.5.11 MariaDB</td> 

	<td>42921,3664467593</td> 

	<td>En cours de traitement</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>396444</td> 

	<td>MONT DE MARSAN - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#RIS - Télétransmission en erreur</td> 

	<td>ECS IMAGING 7.6.4</td> 

	<td>42968,4400115741</td> 

	<td>En cours de traitement</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>397231</td> 

	<td>MONT DE MARSAN - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#PACS - Etablissement inconnu dans paramétrage</td> 

	<td>ECS IMAGING 7.6.4</td> 

	<td>42977,449212963</td> 

	<td>En cours de traitement</td> 

	<td>Céline DIAS</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>398518</td> 

	<td>MONT DE MARSAN - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#RIS - Modification ordonnance</td> 

	<td>ECS IMAGING 7.6.4</td> 

	<td>42992,6874189815</td> 

	<td>En cours de traitement</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>398586</td> 

	<td>MONT DE MARSAN - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>Lenteurs réseau</td> 

	<td>ECS IMAGING 7.6.4</td> 

	<td>42993,4719675926</td> 

	<td>En cours de traitement</td> 

	<td>Jérémie VENEKAS</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>398809</td> 

	<td>AMIENS - Polyclinique de Picardie</td> 

	<td>#RIS - Pas de transfert Speechmike -> Ris</td> 

	<td>ECS IMAGING 7.6.2 MariaDB</td> 

	<td>42997,3516319444</td> 

	<td>En cours de traitement</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>399290</td> 

	<td>PESSAC - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#RIS - Problème de convention mutuelle</td> 

	<td>ECS IMAGING 7.6.5 MariaDB</td> 

	<td>43003,4250231481</td> 

	<td>En cours de traitement</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>383913</td> 

	<td>TOULOUSE - CLINIQUE AMBROISE PARE - SARL SCANNER AMBROISE PARE</td> 

	<td>#LENTEUR SYSTEM</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42822,5116087963</td> 

	<td>En cours d'analyse</td> 

	<td>Arthur JANSEN</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>365361</td> 

	<td>KOUBA - HOPITAL CENTRAL DE L ARMEE</td> 

	<td>Pb ouverture d un examen CT dans le viewer</td> 

	<td>ECS VIEW 3D/STD 3.2.1</td> 

	<td>42611,5363888889</td> 

	<td>Attente version</td> 

	<td>Eric LE-HUIC</td> 

	<td>uView</td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>377481</td> 

	<td>LA CIOTAT - SCM D'IMAGERIE DU GOLFE</td> 

	<td>PB QR depuis syngovia</td> 

	<td>ECS IMAGING 6.18.11 MariaDB</td> 

	<td>42753,6133101852</td> 

	<td>Attente version</td> 

	<td>Céline DIAS</td> 

	<td>6.21</td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>380276</td> 

	<td>BMC - BELLEVUE MEDICAL CENTER</td> 

	<td>#PACS - Tag étiquettes</td> 

	<td>ECS IMAGING 7.4.3 MariaDB</td> 

	<td>42782,7650810185</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>7.8.0</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3543</td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>385788</td> 

	<td>KOUBA - HOPITAL CENTRAL DE L ARMEE</td> 

	<td>Connexion Digi-pointer</td> 

	<td>ECS IMAGING 7.4.3 MariaDB</td> 

	<td>42844,5069212963</td> 

	<td>Attente version</td> 

	<td>Thibault LONGRET</td> 

	<td>7.7.0</td> 

	<td></td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>386644</td> 

	<td>TOULOUSE - CLINIQUE AMBROISE PARE - SARL SCANNER AMBROISE PARE</td> 

	<td>#PACS - Pb affichage / stockage/ visualisation fichier MR</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42852,6986574074</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>6.21.4</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3598</td> 

</tr>
<tr><td><i class="fa fa-fw fa-flag" style="color:green"></i></td><td>387126</td> 

	<td>CANNES - AZUR IMAGERIE</td> 

	<td>#ECSVIEW3D - Pb affichage echo dopler</td> 

	<td>ECS View 3D 3.3.2</td> 

	<td>42859,3844907407</td> 

	<td>Attente version</td> 

	<td>Matthias MOUCHOT</td> 

	<td>3.3.5</td> 

	<td>https://jira.evolucare.com/browse/ETMIAC-24</td> 

</tr>
<tr><td>387615</td> 

	<td>SAINT QUENTIN - Dr Christophe ZYLBERSTEJN</td> 

	<td>PB system</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42865,391412037</td> 

	<td>Attente version</td> 

	<td>Eric LE-HUIC</td> 

	<td>3.3.4</td> 

	<td></td> 

</tr>
<tr><td>387943</td> 

	<td>MONT DE MARSAN - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#ECS 3D - pb affichage image scout</td> 

	<td>ECS VIEW 3D/STD 3.2.1</td> 

	<td>42867,4476157407</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td>https://jira.evolucare.com/browse/ETMIAC-21</td> 

</tr>
<tr><td>390660</td> 

	<td>CANNES - AZUR IMAGERIE</td> 

	<td>médecin traitant et médecin prescripteur</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42899,5923842593</td> 

	<td>Attente version</td> 

	<td>Céline DIAS</td> 

	<td>v7</td> 

	<td></td> 

</tr>
<tr><td>390743</td> 

	<td>QUINCY SOUS SENART - CENTRE D' IMAGERIE MEDICALE</td> 

	<td>#ECS / PACS - stockage / affichage image noire</td> 

	<td>ECS IMAGING 7.5.11 MariaDB</td> 

	<td>42900,4081365741</td> 

	<td>Attente version</td> 

	<td>Eric LE-HUIC</td> 

	<td></td> 

	<td>https://jira.evolucare.com/browse/ETMIAC-37</td> 

</tr>
<tr><td>391108</td> 

	<td>SAINT MARTIN - CIMIN</td> 

	<td>#RIS [St martin]  Calcul de facturation éronné ( negatif )</td> 

	<td>ECS IMAGING 7.6.2 MariaDB</td> 

	<td>42902,6114236111</td> 

	<td>Attente version</td> 

	<td>Christophe BRASSEUR</td> 

	<td>7.8.0</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3661</td> 

</tr>
<tr><td>391151</td> 

	<td>SAINT MARTIN - CIMIN</td> 

	<td>#PACS - acces examens</td> 

	<td>ECS IMAGING 7.6.2 MariaDB</td> 

	<td>42905,3727083333</td> 

	<td>Attente version</td> 

	<td>Eric LE-HUIC</td> 

	<td>7.8.0</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3455</td> 

</tr>
<tr><td>391514</td> 

	<td>TOULOUSE - CLINIQUE AMBROISE PARE - SARL SCANNER AMBROISE PARE</td> 

	<td>#ECSVIEW - Affichage image</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42907,5349768518</td> 

	<td>Attente version</td> 

	<td>Thibault LONGRET</td> 

	<td>6.21.4</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3598</td> 

</tr>
<tr><td>391590</td> 

	<td>PARIS - CENTRE D'IMAGERIE MÉDICALE PARIS -CONVENTION 15</td> 

	<td>#PACS [Scanner]- reconcilation patient impossible</td> 

	<td>ECS IMAGING 7.6.3</td> 

	<td>42908,3816435185</td> 

	<td>Attente version</td> 

	<td>Eric LE-HUIC</td> 

	<td>7.7.1</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-1470</td> 

</tr>
<tr><td>392425</td> 

	<td>SAINT MARTIN - CIMIN</td> 

	<td>#RIS - Evolution : Affichage Bordereaux</td> 

	<td>ECS IMAGING 7.6.3</td> 

	<td>42915,6342361111</td> 

	<td>Attente version</td> 

	<td>Christophe BRASSEUR</td> 

	<td>7.7.1</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3810</td> 

</tr>
<tr><td>392434</td> 

	<td>SAINT MARTIN - CIMIN</td> 

	<td>#RIS - Pb affichage avancement</td> 

	<td>ECS IMAGING 7.6.3</td> 

	<td>42915,6502546296</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>7.8.0</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3250</td> 

</tr>
<tr><td>392637</td> 

	<td>PERIGUEUX - CENTRE D' IMAGERIE MEDICALE</td> 

	<td>#RIS - Profil Utilisateur inaccessible</td> 

	<td>ECS IMAGING 7.5.11 MariaDB</td> 

	<td>42919,4906018519</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>7.8.0</td> 

	<td>https://jira.evolucare.com/browse/EVOLIMA-458</td> 

</tr>
<tr><td>393219</td> 

	<td>BEAUNE - GIE IRM - CUFFIA DENIS</td> 

	<td>#RIS - Téléphone non présent dans Agenda</td> 

	<td>ECS IMAGING 7.6.2 MariaDB</td> 

	<td>42923,5999537037</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>7.7.1</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-1816</td> 

</tr>
<tr><td>393338</td> 

	<td>AMIENS - Polyclinique de Picardie</td> 

	<td>Installation ECS VIEW 3D 32 bits console manips</td> 

	<td>ECS VIEW 3D/STD 3.2.1</td> 

	<td>42926,6059143519</td> 

	<td>Attente version</td> 

	<td>Céline DIAS</td> 

	<td>3.3.x 32 bits</td> 

	<td></td> 

</tr>
<tr><td>393586</td> 

	<td>MONT DE MARSAN - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#RIS - Modificateur Y non présent pour un médecin remplaçant</td> 

	<td>ECS IMAGING 7.6.2 MariaDB</td> 

	<td>42928,6764467593</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>7.8.0</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-2325</td> 

</tr>
<tr><td>393825</td> 

	<td>BMC - BELLEVUE MEDICAL CENTER</td> 

	<td>#RIS BMC - Dept Filter config</td> 

	<td>ECS IMAGING 7.5.11 MariaDB</td> 

	<td>42933,7444675926</td> 

	<td>Attente version</td> 

	<td>Christophe BRASSEUR</td> 

	<td>7.7.1</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3501</td> 

</tr>
<tr><td>393944</td> 

	<td>BMC - BELLEVUE MEDICAL CENTER</td> 

	<td>#PACS - Delay In Openning X-Ray Images</td> 

	<td>ECS IMAGING 7.5.11 MariaDB</td> 

	<td>42935,3680092593</td> 

	<td>Attente version</td> 

	<td>Arthur JANSEN</td> 

	<td>3.3.4</td> 

	<td>https://jira.evolucare.com/browse/EV-585</td> 

</tr>
<tr><td>395213</td> 

	<td>AMIENS - Polyclinique de Picardie</td> 

	<td>#RIS - Relance AMO n'affiche pas tout</td> 

	<td>ECS IMAGING 7.6.2 MariaDB</td> 

	<td>42948,6104861111</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>7.7.1</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3586</td> 

</tr>
<tr><td>395509</td> 

	<td>PESSAC - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#RIS - Erreur Java lancement CR</td> 

	<td>ECS IMAGING 7.6.3</td> 

	<td>42951,4231018519</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>7.7.0</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3641</td> 

</tr>
<tr><td>395643</td> 

	<td>BEAUNE - GIE IRM - CUFFIA DENIS</td> 

	<td>#RIS - Tri des factures dans bordereaux</td> 

	<td>ECS IMAGING 7.6.4</td> 

	<td>42954,4950810185</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>7.7.0</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3647</td> 

</tr>
<tr><td>395762</td> 

	<td>ALBERTVILLE - CENTRE IMAGERIE MEDICALE LE BOIS FLEURI</td> 

	<td>#Viewer pb CPR ECSView 3D - Cone Beam</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42955,5000462963</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>3.3.5</td> 

	<td>https://jira.evolucare.com/browse/EV-586</td> 

</tr>
<tr><td>395997</td> 

	<td>SAINT MARTIN - CIMIN</td> 

	<td>#ECS - capture d'ecran impossible</td> 

	<td>ECS IMAGING 7.6.5 MariaDB</td> 

	<td>42957,690625</td> 

	<td>Attente version</td> 

	<td>Eric LE-HUIC</td> 

	<td></td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3789</td> 

</tr>
<tr><td>396023</td> 

	<td>SAINT QUENTIN - Dr Christophe ZYLBERSTEJN</td> 

	<td>#ECSVIEW - exportation de CR impossible</td> 

	<td>ECS IMAGING 6.10.7 MariaDB</td> 

	<td>42958,4159490741</td> 

	<td>Attente version</td> 

	<td>Eric LE-HUIC</td> 

	<td>3.3.4</td> 

	<td>https://jira.evolucare.com/browse/EV-542.</td> 

</tr>
<tr><td>396384</td> 

	<td>PESSAC - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#RIS - Ecoute dictée est accélérée</td> 

	<td>ECS IMAGING 7.6.3</td> 

	<td>42965,5708912037</td> 

	<td>Attente version</td> 

	<td>Romain VIGNERI</td> 

	<td>7.7.0</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3635</td> 

</tr>
<tr><td>396907</td> 

	<td>PESSAC - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#EVOL - Supprimer 0 dans numéro de téléphone</td> 

	<td>ECS IMAGING 7.6.3</td> 

	<td>42972,585775463</td> 

	<td>Attente version</td> 

	<td>Virgil SANCHEZ</td> 

	<td>7.7.1</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3662</td> 

</tr>
<tr><td>397169</td> 

	<td>SAINT MARTIN - CIMIN</td> 

	<td># RIS - Pouvoir passer le solde d'un dossier en perte / profit</td> 

	<td>ECS IMAGING 7.6.5 MariaDB</td> 

	<td>42976,6374421296</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>7.8.0</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3661</td> 

</tr>
<tr><td>397174</td> 

	<td>PESSAC - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#AGD - Protocole EOTES ne fonctionne pas dans l'agenda</td> 

	<td>ECS IMAGING 7.6.3</td> 

	<td>42976,6630439815</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>7.7.0</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3653</td> 

</tr>
<tr><td>397488</td> 

	<td>MONT DE MARSAN - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#RIS - Mise à jour tarifs NGAP</td> 

	<td>ECS IMAGING 7.6.4</td> 

	<td>42979,6545601852</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>7.7.0</td> 

	<td></td> 

</tr>
<tr><td>397708</td> 

	<td>AMIENS - Polyclinique de Picardie</td> 

	<td>#RIS - Patient n'apparait pas sur les relances</td> 

	<td>ECS IMAGING 7.6.2 MariaDB</td> 

	<td>42983,6885648148</td> 

	<td>Attente version</td> 

	<td>Yohann LOPEZ</td> 

	<td>7.7.1</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3586</td> 

</tr>
<tr><td>397974</td> 

	<td>VANNES - SELARL LE RIVA -</td> 

	<td>#ECS - Selections examen ppour exportation impossible</td> 

	<td>ECS IMAGING 6.21.3 MariaDB</td> 

	<td>42986,4638310185</td> 

	<td>Attente version</td> 

	<td>Eric LE-HUIC</td> 

	<td>6.21.4</td> 

	<td>https://jira.evolucare.com/browse/ECSIMG-3788</td> 

</tr>
<tr><td>398927</td> 

	<td>MARSEILLE - SCM IMAGERIE MEDICALE DU MIDI</td> 

	<td>#PACS - [Rampe St Maurice] transfert examens impossible</td> 

	<td>ECS IMAGING 6.11.9 MariaDB</td> 

	<td>42997,7232407407</td> 

	<td>Attente version</td> 

	<td>Eric LE-HUIC</td> 

	<td></td> 

	<td>https://jira.evolucare.com/browse/ETMIAC-37</td> 

</tr>
<tr><td>399124</td> 

	<td>TOULOUSE - CLINIQUE AMBROISE PARE - SARL SCANNER AMBROISE PARE</td> 

	<td>#PACS - Vignette IRM tournent en boucle</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42999,6027893519</td> 

	<td>Attente version</td> 

	<td></td> 

	<td>6.21</td> 

	<td></td> 

</tr>
<tr><td>380393</td> 

	<td>CANNES - AZUR IMAGERIE</td> 

	<td>demande de clé d'activation</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42786,362337963</td> 

	<td>Attente traitement</td> 

	<td>Arthur JANSEN</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>393990</td> 

	<td>PESSAC - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#ECSVIEW - Pb affichage en 3D MPR</td> 

	<td>ECS IMAGING 7.6.3</td> 

	<td>42935,5325</td> 

	<td>Attente traitement</td> 

	<td>Virgil SANCHEZ</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>395478</td> 

	<td>CHAUNY CEDEX - CENTRE HOSPITALIER DE CHAUNY</td> 

	<td>#PACS - Absence d'examens</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42950,7204861111</td> 

	<td>Attente traitement</td> 

	<td>Thibault LONGRET</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>398638</td> 

	<td>SAINT MARTIN - CIMIN</td> 

	<td>#RIS - [Barth] - Impression etiquette</td> 

	<td>ECS IMAGING 7.6.5 MariaDB</td> 

	<td>42993,6409606481</td> 

	<td>Attente prestataire client</td> 

	<td>Eric LE-HUIC</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>398846</td> 

	<td>QUINCY SOUS SENART - CENTRE D' IMAGERIE MEDICALE</td> 

	<td>#PACS - QR/ IMPOSSIBLE SUR CONSOLE</td> 

	<td>ECS IMAGING 7.5.11 MariaDB</td> 

	<td>42997,4734722222</td> 

	<td>Attente prestataire client</td> 

	<td>Jérémie VENEKAS</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>398919</td> 

	<td>CHELLES - CENTRE D IMAGERIE MEDICALE RESISTANCE</td> 

	<td>#PACS - pas d'acces pacs depuis l'exterieur</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42997,6930902778</td> 

	<td>Attente prestataire client</td> 

	<td>Eric LE-HUIC</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>399214</td> 

	<td>ALBERTVILLE - CENTRE IMAGERIE MEDICALE LE BOIS FLEURI</td> 

	<td>#VIEW - Chargement des images très long</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>43000,5198611111</td> 

	<td>Attente prestataire client</td> 

	<td>Eric LE-HUIC</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>381266</td> 

	<td>BMC - BELLEVUE MEDICAL CENTER</td> 

	<td>Change locked patient</td> 

	<td>ECS IMAGING 7.4.3 MariaDB</td> 

	<td>42794,6458101852</td> 

	<td>Attente comité évolutif</td> 

	<td>Eric LE-HUIC</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>395299</td> 

	<td>PESSAC - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#PACS - Choisir viewer automatiquement</td> 

	<td>ECS IMAGING 7.6.3</td> 

	<td>42949,4690162037</td> 

	<td>Attente comité évolutif</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td>https://jira.evolucare.com/browse/EVOLIMA-518</td> 

</tr>
<tr><td>396984</td> 

	<td>PESSAC - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#RIS - Problème de Mutuelle</td> 

	<td>ECS IMAGING 7.6.3</td> 

	<td>42975,4499537037</td> 

	<td>Attente comité évolutif</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td>https://jira.evolucare.com/browse/EVOLIMA-543</td> 

</tr>
<tr><td>397817</td> 

	<td>MONT DE MARSAN - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#PACS - Appel contextuel AWS</td> 

	<td>ECS IMAGING 7.6.4</td> 

	<td>42984,6987268518</td> 

	<td>Attente comité évolutif</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td>https://jira.evolucare.com/browse/EVOLIMA-559</td> 

</tr>
<tr><td>397950</td> 

	<td>PESSAC - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#RIS - Protocole non actif disponible sur médecin</td> 

	<td>ECS IMAGING 7.6.5 MariaDB</td> 

	<td>42986,3881712963</td> 

	<td>Attente comité évolutif</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td>https://jira.evolucare.com/browse/EVOLIMA-562</td> 

</tr>
<tr><td>385800</td> 

	<td>KOUBA - HOPITAL CENTRAL DE L ARMEE</td> 

	<td>Pb de sauvegarde de filtres par modalité</td> 

	<td>ECS IMAGING 7.4.3 MariaDB</td> 

	<td>42844,5740509259</td> 

	<td>Attente comité correctif</td> 

	<td>Mohammed Medhi LACHACHI</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>386451</td> 

	<td>NIMES CEDEX 9 - Hôpital Carémeau</td> 

	<td>#ECSLITE - Pb ouverture dossier patient</td> 

	<td>ECS IMAGING 7.4.3 MariaDB</td> 

	<td>42851,4436805556</td> 

	<td>Attente comité correctif</td> 

	<td>Eric LE-HUIC</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>391782</td> 

	<td>NICE - CENTRE DE RADIOLOGIE NICE DR CARAMELLA</td> 

	<td>demande d'information sur appel contextuel</td> 

	<td>ECS IMAGING 6.18.11 MariaDB</td> 

	<td>42909,4859722222</td> 

	<td>Attente comité correctif</td> 

	<td>Eric LE-HUIC</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>395014</td> 

	<td>MONT DE MARSAN - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#RIS - Impression feuille de soin hors parcours</td> 

	<td>ECS IMAGING 7.6.4</td> 

	<td>42947,3546643518</td> 

	<td>Attente comité correctif</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>398391</td> 

	<td>MONT DE MARSAN - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#RIS - Télétransmission bloquée</td> 

	<td>ECS IMAGING 7.6.4</td> 

	<td>42991,6928356482</td> 

	<td>Attente comité correctif</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>398616</td> 

	<td>MONT DE MARSAN - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#RIS - Impression Etiquettes trop longue</td> 

	<td>ECS IMAGING 7.6.4</td> 

	<td>42993,5835069444</td> 

	<td>Attente comité correctif</td> 

	<td>Yohann LOPEZ</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>399276</td> 

	<td>BORDEAUX - DR SEBAG</td> 

	<td>#VIEW - Sous mac, export HS</td> 

	<td>ECS IMAGING 7.3.2 MariaDB</td> 

	<td>43003,3350231481</td> 

	<td>Attente comité correctif</td> 

	<td></td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>399329</td> 

	<td>MONT DE MARSAN - CENTRE D'IMAGERIE MEDICALE</td> 

	<td>#AGD - Compétence médecin non pris en compte.</td> 

	<td>ECS IMAGING 7.6.4</td> 

	<td>43003,5189699074</td> 

	<td>Attente comité correctif</td> 

	<td>Arthur JANSEN</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>377220</td> 

	<td>KOUBA - HOPITAL CENTRAL DE L ARMEE</td> 

	<td>Problème avec le xtrecorder</td> 

	<td>ECS IMAGING 7.4.3 MariaDB</td> 

	<td>42751,6241435185</td> 

	<td>Attente analyse Niv2</td> 

	<td>Eric LE-HUIC</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>392941</td> 

	<td>TOULOUSE - CLINIQUE AMBROISE PARE - SARL SCANNER AMBROISE PARE</td> 

	<td>#PACS - Paramétrage en-tête éditeur web</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42921,5199189815</td> 

	<td>Attente analyse Niv2</td> 

	<td>Céline DIAS</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>393212</td> 

	<td>TOULOUSE - CLINIQUE AMBROISE PARE - SARL SCANNER AMBROISE PARE</td> 

	<td>#PACS - Pb affichage Image patient</td> 

	<td>ECS IMAGING 6.20.1 MariaDB</td> 

	<td>42923,565775463</td> 

	<td>Attente analyse Niv2</td> 

	<td>Eric LE-HUIC</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>393904</td> 

	<td>CARCASSONNE CEDEX 9 - CENTRE HOSPITALIER ANTOINE GAYRAUD</td> 

	<td>#PACS - les filtres ne fonctionnent plus correctement</td> 

	<td>ECS IMAGING 6.21.1 MariaDB</td> 

	<td>42934,6171527778</td> 

	<td>Attente analyse Niv2</td> 

	<td>Céline DIAS</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>397598</td> 

	<td>TOURCOING - CENTRE D IMAGERIE DE TOURCOING</td> 

	<td>#ECS - Prise de mesure impossible</td> 

	<td>ECS View 3D 3.3.2</td> 

	<td>42982,7331828704</td> 

	<td>Attente analyse Niv2</td> 

	<td>Eric LE-HUIC</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>397670</td> 

	<td>VANNES - SELARL LE RIVA -</td> 

	<td>#PACS - PB Q/R & Recorder</td> 

	<td>ECS IMAGING 6.18.11 MariaDB</td> 

	<td>42983,5626041667</td> 

	<td>Attente analyse Niv2</td> 

	<td>Arthur JANSEN</td> 

	<td></td> 

	<td></td> 

</tr>
<tr><td>398670</td> 

	<td>SAINT MARTIN - CIMIN</td> 

	<td>#PACS - Pb de connexion Saint Martin - Saint Barth</td> 

	<td>ECS IMAGING 7.6.5 MariaDB</td> 

	<td>42996,3406018519</td> 

	<td>Attente analyse Niv2</td> 

	<td>Jérémie VENEKAS</td> 

	<td></td> 

	<td></td> 

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
          <small>Copyright © Your Website 2017</small>
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
    <script src="vendor/jquery/jquery.min.js"></script>
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
  </div>
</body>

</html>
