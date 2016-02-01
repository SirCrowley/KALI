<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('location: ./pages/login.php');
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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

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
        <a href="index2.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>K</b>ali</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Kali</b>Design</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Deploiement menu</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li>
              <a href="./deco.php" class="dropdown">
                <i class="fa fa-power-off"></i>
              </a>
             </li>
            </ul>
          </div>
        </nav>
      </header>
    </div>
    <div>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-group"></i> <span>Clients</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="./pages/clients/clientsvue.php"><i class="fa fa-eye"></i> Voir</a></li>
                <li><a href="./pages/clients/clientsadd.php"><i class="fa fa-plus-square-o"></i> Ajouter</a></li>
		<li><a href="./pages/clients/clientssup.php"><i class="fa fa-minus-square-o"></i> Supprimer</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-copyright"></i> <span>Produits</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="./pages/produits/produitsvue.php"><i class="fa fa-eye"></i> Voir</a></li>
                <li><a href="./pages/produits/produitsadd.php"><i class="fa fa-plus-square-o"></i> Ajouter</a></li>
		<li><a href="./pages/produits/produitssup.php"><i class="fa fa-minus-square-o"></i> Supprimer</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-trademark"></i> <span>Marques</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="./pages/marques/marquesvue.php"><i class="fa fa-eye"></i> Voir</a></li>
                <li><a href="./pages/marques/marquesadd.php"><i class="fa fa-plus-square-o"></i> Ajouter</a></li>
		<li><a href="./pages/marques/marquessup.php"><i class="fa fa-minus-square-o"></i> Supprimer</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Rendez Vous</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="./pages/rdv/rdvvue.php"><i class="fa fa-eye"></i> Voir</a></li>
                <li><a href="./pages/rdv/rdvadd.php"><i class="fa fa-plus-square-o"></i> Ajouter</a></li>
		<li><a href="./pages/rdv/rdvsup.php"><i class="fa fa-minus-square-o"></i> Supprimer</a></li>
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
            Bienvenue
            <small><?php echo $_SESSION['login'];?></small>
          </h1>
        </section>

        <!-- Main content -->
          <section class="content">
            <div class="col-md-4">
              <!-- Ajouter un client -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Ajouter un client</h3>
                </div><!-- /.box-header -->
                <a href="./pages/clients/clientsadd.php">
                    <button type="submit" class="btn-warning btn btn-primary btn-block btn-flat">Ajouter</button>
                </a>
              </div><!-- /.box -->
            </div><!--/.col (right) -->
            <div class="col-md-4">
              <!-- RDV semaine -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Rendez vous de la semaine</h3>
                </div><!-- /.box-header -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
            <div class="col-md-4">
              <!-- RDV tel semaine -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Rendez vous telephonique de la semaine</h3>
                </div><!-- /.box-header -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </section>
          <section class="content">
            <div class="col-md-4">
              <div class="box warning"> 
                <a href="http://kalidesign.fr">
                  <button type="submit" class="btn-warning btn-lg btn btn-primary btn-block btn-flat">Retour sur kalidesign.fr</button>
                </a>
              </div>
            </div>
           <!-- /.box -->
             <div class="col-md-4">
              <div class="box warning">
                <a href="https://www.ovh.com/manager/web/login/">
                  <button type="submit" class="btn-warning btn-lg btn btn-primary btn-block btn-flat">Interface OVH</button>
                </a>
              </div>
            </div>
            <!-- /.box -->
            <div class="col-md-4">
              <div class="box">
                <a href="https://ssl0.ovh.net/fr/">
                  <button type="submit" class="btn-warning btn-lg btn btn-primary btn-block btn-flat">WebMail OVH</button>
                </a>
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </section>   
        </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2016 <a href="http://kalidesign.fr">KaliDesign</a>.</strong> All rights reserved.<a href="http://almsaeedstudio.com">Almsaeed Studio</a>
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>
