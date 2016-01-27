<?php
    session_start();
    include_once '../../includes/database.php';
    include_once '../../includes/affichage.php';
    $base = dbConnect();
    $data = dbSelectClient($base);
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
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
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
  <body class="hold-transition skin-blue sidebar-mini">
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
                <li class="active"><a href="./clientsvue.php"><i class="fa fa-eye"></i> Voir</a></li>
                <li><a href="./clientsadd.php"><i class="fa fa-plus-square-o"></i> Ajouter</a></li>
		<li><a href="./clientssup.php"><i class="fa fa-minus-square-o"></i> Supprimer</a></li>
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
            <small>vue</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Liste des Clients</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Numero</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Societe</th>
                        <th>Adresse</th>
                        <th>CP</th>
                        <th>Ville</th>
                        <th>Email</th>
                        <th>Fixe</th>
                        <th>Portable</th>
                        <th>Notes</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                           afficheTab($data);
                        ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Numero</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Societe</th>
                        <th>Adresse</th>
                        <th>CP</th>
                        <th>Ville</th>
                        <th>Email</th>
                        <th>Fixe</th>
                        <th>Portable</th>
                        <th>Notes</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
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
    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
