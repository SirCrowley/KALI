<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kali Design | Gestion</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-yellow sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>K</b>ali</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Kali</b>Design</span>
        </a>
	<nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navigation On/Off</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li>
              <a href="../../deco.php" class="dropdown">
                <i class="fa fa-power-off"></i>
              </a>
             </li>
            </ul>
          </div>
	</nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-group"></i> <span>Clients</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="./clientsvue.php"><i class="fa fa-eye"></i> Voir</a></li>
                <li class="active"><a href="./clientsadd.php"><i class="fa fa-plus-square-o"></i> Ajouter</a></li>
		<li><a href="./clientssup.php"><i class="fa fa-minus-square-o"></i> Supprimer</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <i class="fa fa-usd"></i> <span>Achats</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../achats/achatsvue.php"><i class="fa fa-eye"></i> Voir</a></li>
                <li><a href="../achats/achatsadd.php"><i class="fa fa-plus-square-o"></i> Ajouter</a></li>
		<li><a href="../achats/achatssup.php"><i class="fa fa-minus-square-o"></i> Supprimer</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-copyright"></i> <span>Produits</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../produits/produitsvue.php"><i class="fa fa-eye"></i> Voir</a></li>
                <li><a href="../produits/produitsadd.php"><i class="fa fa-plus-square-o"></i> Ajouter</a></li>
		<li><a href="../produits/produitssup.php"><i class="fa fa-minus-square-o"></i> Supprimer</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-trademark"></i> <span>Marques</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../marques/marquesvue.php"><i class="fa fa-eye"></i> Voir</a></li>
                <li><a href="../marques/marquesadd.php"><i class="fa fa-plus-square-o"></i> Ajouter</a></li>
		<li><a href="../marques/marquessup.php"><i class="fa fa-minus-square-o"></i> Supprimer</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Rendez Vous</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../rdv/rdvvue.php"><i class="fa fa-eye"></i> Voir</a></li>
                <li><a href="../rdv/rdvadd.php"><i class="fa fa-plus-square-o"></i> Ajouter</a></li>
		<li><a href="../rdv/rdvsup.php"><i class="fa fa-minus-square-o"></i> Supprimer</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-signal"></i> <span>Statistiques</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Clients
            <small>Ajouter</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-9">
              <!-- general form elements -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Ajout</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="../../includes/ajout/ajoutClient.php">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="InputNom1">Nom</label>
                      <input type="text" class="form-control" id="InputNom1" name="nom" placeholder="Nom">
                    </div>
                    <div class="form-group">
                      <label for="InputPrenom1">Prenom</label>
                      <input type="text" class="form-control" id="InputPrenom1" name="prenom" placeholder="Prenom">
                    </div>
                    <div class="form-group">
                      <label for="InputSociete1">Societe</label>
                      <input type="text" class="form-control" id="InputSociete1" name="societe" placeholder="Societe">
                    </div>
                    <div class="form-group">
                      <label for="InputAdresse1">Adresse</label>
                      <input type="text" class="form-control" id="InputAdresse1" name="adresse"placeholder="Adresse">
                    </div>
                    <div class="form-group">
                      <label for="InputCP1">Code Postal</label>
                      <input type="text" class="form-control" id="InputCP1" name="cp" placeholder="Code Postal">
                    </div>
                    <div class="form-group">
                      <label for="InputVille1">Ville</label>
                      <input type="text" class="form-control" id="InputVille1" name="ville" placeholder="Ville">
                    </div>
                    <div class="form-group">
                      <label for="InputEmail1">Email</label>
                      <input type="email" class="form-control" id="InputEmail1" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="InputFixe1">Fixe</label>
                      <input type="text" class="form-control" id="InputFixe1" name="fixe" placeholder="Fixe">
                    </div>
                    <div class="form-group">
                      <label for="InputPortable1">Portable</label>
                      <input type="text" class="form-control" id="InputPortable1" name="portable" placeholder="Portable">
                    </div>
                    <div class="form-group">
                      <label for="InputNotes1">Notes</label>
                      <input type="text" class="form-control" id="InputNotes1" name="notes" placeholder="Notes" cols="20" rows="5"></textarea>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn-warning btn btn-primary">Enregistrer</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-3">
              <!-- Horizontal Form -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Horizontal Form</h3>
                </div><!-- /.box-header -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Gestion kali</b> Version 1.0.0
        </div>
        <strong>Copyright &copy; 2016 <a href="http://www.atelierdescontenus.net/">L'atelier des contenus</a>.</strong> Tous droits reserves.
      </footer>

      <!-- Control Sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
  </body>
</html>
