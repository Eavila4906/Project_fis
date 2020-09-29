<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administracion</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- grafico -->
  <script src="./hc/code/highcharts.js"></script>
  <script src="./hc/code/modules/exporting.js"></script>
  <script src="./hc/code/modules/export-data.js"></script>
  <script src="./hc/code/modules/accessibility.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <?php
        session_start();
        if(!isset($_SESSION["USUARIO"])){
            header("location:login.html");
        }
  ?>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  <?php
                    $_SESSION["USUARIO"];
                  ?>
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SGA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php
              

              include("conexionbd.php");
                $usuario = $_SESSION['USUARIO'];
                if(isset($usuario)){
                  $resultado = mysqli_query($conexion, "SELECT * FROM usuario WHERE
                  username='$usuario' OR email='$usuario'");
                  while($consulta = mysqli_fetch_array($resultado)){
                    echo "<h3>".$consulta['username']."</h3>";
                  }
                }




            ?>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Registrar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./registrar_usuarios.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./registrar_producto.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file-invoice"></i>
                <p>Reportes
                <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./reporte_usuarios.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./reporte_productos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./reporte_importaciones.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Importaciones</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./reporte_canastas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Canastas</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
              <a href="cerrar_session.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Cerrar session</p>
              </a>
          </li>
        </ul> 
      </nav>  
    </div>

    
  </aside>



  <div class="register-logo">
    <center><b>Bienvenido Administrador</b></center>
  </div>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Accesos directos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Accesos directos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
                  include("conexionbd.php");
                  $usuario = $_SESSION["USUARIO"];
                  if(isset($usuario)){
                    $sql_pro = mysqli_query($conexion, "SELECT count(id_import) FROM importacion");
                    while($consulta = mysqli_fetch_array($sql_pro)){
                      ?>
                        <h3><?php echo $consulta['count(id_import)']; ?></h3>
                      <?php 
                    }
                  }
                ?>
                <p>Importaciones</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="./reporte_importaciones.php" class="small-box-footer">Mas información<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                  include("conexionbd.php");
                  $usuario = $_SESSION["USUARIO"];
                  if(isset($usuario)){
                    $sql_pro = mysqli_query($conexion, "SELECT count(id_producto) FROM productos");
                    while($consulta = mysqli_fetch_array($sql_pro)){
                      ?>
                        <h3><?php echo $consulta['count(id_producto)']; ?></h3>
                      <?php 
                    }
                  }
                ?>
                <p>Productos registrados</p>
              </div>
              <div class="icon">
                <i class="far fa-clipboard"></i>
              </div>
              <a href="./reporte_productos.php" class="small-box-footer">Mas información<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                  include("conexionbd.php");
                  $usuario = $_SESSION["USUARIO"];
                  if(isset($usuario)){
                    $sql_pro = mysqli_query($conexion, "SELECT count(id_usuario) FROM usuario");
                    while($consulta = mysqli_fetch_array($sql_pro)){
                      ?>
                        <h3><?php echo $consulta['count(id_usuario)']; ?></h3>
                      <?php 
                    }
                  }
                ?>
                <p>Usuarios registrados</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a href="./reporte_usuarios.php" class="small-box-footer">Mas información<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php 
                  include("conexionbd.php");
                  $usuario = $_SESSION["USUARIO"];
                  if(isset($usuario)){
                    $sql_pro = mysqli_query($conexion, "SELECT SUM(cantidad) FROM canasta");
                    while($consulta = mysqli_fetch_array($sql_pro)){
                      $cc = $consulta['SUM(cantidad)']; 
                      if($cc > 0){
                        echo "<h3>".$cc."</h3>";
                      }else{
                        echo "<h3>"."0"."</h3>";
                      }
                    }
                  }
                ?>
                <p>Productos en canastas</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-basket"></i>
              </div>
              <a href="./reporte_canastas.php" class="small-box-footer">Mas información<i class="nav-icons fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card" style=" width:500px;">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                     Grafíco estadístico
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#" data-toggle="tab">Importaciones por Usuarios</a>
                    </li>
                    
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body" >
                <div class="tab-content p-0" >
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="Imports"style="position: relative; height: 400px;">
                 
                  <!--Grafico estadistico-->
                      <figure class="highcharts-figure">
                        <div id="container"></div>
                      </figure>

                      <script src="./hc/code/highcharts.js"></script>
                      <script src="./hc/code/modules/exporting.js"></script>
                      <script src="./hc/code/modules/export-data.js"></script>
                      <script src="./hc/code/modules/accessibility.js"></script>
                      <!--Grafico estadistico-->
                      <style type="text/css">
                        .highcharts-figure, .highcharts-data-table table {
                            min-width: 320px; 
                            max-width: 800px;
                            margin: 1em auto;
                        }

                        .highcharts-data-table table {
                          font-family: Verdana, sans-serif;
                          border-collapse: collapse;
                          border: 1px solid #EBEBEB;
                          margin: 10px auto;
                          text-align: center;
                          width: 100%;
                          max-width: 500px;
                        }
                        .highcharts-data-table caption {
                            padding: 1em 0;
                            font-size: 1.2em;
                            color: #555;
                        }
                        .highcharts-data-table th {
                          font-weight: 600;
                            padding: 0.5em;
                        }
                        .highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
                            padding: 0.5em;
                        }
                        .highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
                            background: #f8f8f8;
                        }
                        .highcharts-data-table tr:hover {
                            background: #f1f7ff;
                        }


                        input[type="number"] {
                          min-width: 50px;
                        }
                      </style>

                      <script type="text/javascript">
                         Highcharts.chart('container', {
                                      chart: {
                                          plotBackgroundColor: null,
                                          plotBorderWidth: null,
                                          plotShadow: false,
                                          type: 'pie'
                                      },
                                      title: {
                                          text: 'Importaciones de usuarios'
                                      },
                                      tooltip: {
                                          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                      },
                                      accessibility: {
                                          point: {
                                              valueSuffix: '%'
                                          }
                                      },
                                      plotOptions: {
                                          pie: {
                                              allowPointSelect: true,
                                              cursor: 'pointer',
                                              dataLabels: {
                                                  enabled: true,
                                                  format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                                              }
                                          }
                                      },
                                      series: [{
                                        name: 'Importo el',
                                        colorByPoint: true,
                                        data:[
                            <?php 
                                include("conexionbd.php");
                                $usuario = $_SESSION["USUARIO"];
                                if(isset($usuario)){
                                  $sql_pro1 = mysqli_query($conexion, "SELECT * FROM usuario WHERE rol=2");
                                  $sql_pro = mysqli_query($conexion, "SELECT ur.username, sum(cantidad) FROM importacion im INNER JOIN usuario ur on (im.importador=ur.id_usuario)
                                  INNER JOIN productos pr on (im.producto=pr.id_producto) WHERE ur.rol=2 GROUP BY importador ORDER BY importador LIMIT 10");
                                  while($consulta = mysqli_fetch_array($sql_pro)){
                                    
                                    ?>
                                          {
                                          name: '<?php echo $consulta['username'];?>',
                                          y: <?php echo $consulta['sum(cantidad)'];?>
                                          },

                                    <?php
                                  }
                                }
                            ?>
                                        ]
                                      }]
                                    });
                            
                       
                      </script>
                          
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
          </section>



          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div  class="card" style="width:552px; position:relative; right:117px">
              <div class="card-header ">
                <h3 class="card-title">
                <i class="fas fa-align-left mr-1"></i>
                    Grafíco Estadistíco
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#" data-toggle="tab">Productos Importados</a>
                    </li>  
                  </ul>
                </div>
                <!-- /.card-tools -->
              </div>
               <div class="card-body">
                <div class="tab-content p-0" >
                   
                  <div class="chart tab-pane active" id="prodimport"style="position: relative; height: 400px;">


                  <style type="text/css">
                 

                  #sliders td input[type=range] {
                      display: inline;
                  }
                  #sliders td {
                      padding-right: 1em;
                      white-space: nowrap;
                  }
                  </style>
                  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
                  <script src="./hc/code/highcharts.js"></script>
                  <script src="./hc/code/highcharts-3d.js"></script>
                  <script src="./hc/code/modules/exporting.js"></script>
                  <script src="./hc/code/modules/export-data.js"></script>
                  <script src="./hc/code/modules/accessibility.js"></script>

                  <figure class="highcharts-figure">
                      <div id="container"></div>
                      <p class="highcharts-description">
                        Los 10 productos mas importados por los usuarios en orden ascendente
                      </p>
                      <div id="sliders">

                          <table id="tbl" >
                            <?php 
                                  include("conexionbd.php");
                                  $usuario = $_SESSION["USUARIO"];
                                  if(isset($usuario)){
                                    $sql_pro = mysqli_query($conexion, "SELECT pr.producto, COUNT(im.id_import) as n FROM importacion im INNER JOIN usuario ur on (im.importador=ur.id_usuario)
                                    INNER JOIN productos pr on (im.producto=pr.id_producto) WHERE ur.rol=2 GROUP BY producto ORDER BY n DESC LIMIT 10");
                                    while($consulta = mysqli_fetch_array($sql_pro)){
                                      $cantidad = $consulta['n'];
                                      $porcentaje = ($cantidad * $cantidad) / 100;
                                      ?>
                                        <tr>
                                        <td><label for="alpha"><?php echo $consulta['producto'];?></label></td>
                                        <td><input id="alpha"  disabled="disabled" type="range" value="<?php echo $consulta['n'];?>"/> <span id="alpha-value" class="value"></span></td>
                                        <td><label for="alpha"><?php echo $porcentaje;?>%</label></td>
                                        </tr>
                                      <?php
                                    }
                                  }
                              ?>

                              
                          </table>
                          
                      </div>
                  </figure>

                  </div>
                  
                  
                </div>
                
              </div>
              <!-- /.card-body-->
              
            </div>
            
          </section>





        </div>
      </div>     
    </section>


    
       
  </div>       
  
 
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">Grupo#4 Fundamentos de ingenieria de software</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
