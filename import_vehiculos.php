<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aduana de Ecuador</title>
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

  <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
   

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
        <a href="index.php" class="nav-link">Home</a>
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
    <a href="index.php" class="brand-link">
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
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-arrow-alt-circle-down"></i>
              <p>
                Importar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="./import_alimentos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alimentos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./import_electrodomestico.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Electrodomesticos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./import_decoracion.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Decoracion</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./import_vestimenta.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vestimentas</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./import_calzados.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calzados</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./import_vehiculos.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vehículo</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="my_imports" class="nav-link">
              <i class="nav-icon fas fa-shopping-basket"></i>
              <p>
                Mis importaciones
              </p>
            </a>
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

    <center><div class="register-box">
    
        <div class="register-logo">
                
            </div>
        <div class="card">
            <div class="card-body register-card-body">
            <p class="login-box-msg">Importa tu Vehículo deseado</p>

            <form action="" method="post">

                <div class="input-group mb-3">
                        <select class="form-control" name="pro" required="required">
                            <option disabled selected>Selecciona Vehículo</option>
                            <?php
                            include("conexionbd.php");
                                            
                            $SQL = mysqli_query($conexion, "SELECT * FROM productos pr inner join categoria ct
                            ON (pr.categoria=ct.id_cat) where ct.categoria='Vehiculo' ");
                                while ($row = mysqli_fetch_array($SQL)) {
                                ?>
                                    <option value="<?php echo $row['id_producto']?>"><?php echo utf8_encode($row['producto'])?></option>
                                <?php
                                }
                            ?>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fab fa-product-hunt"></i>
                            </div>
                        </div>
                </div>

                <div class="input-group mb-3">
                        <select class="form-control" name="cantidad" required="required">
                            <option disabled selected>Selecciona cantidad</option>
                            <option values="1">1</option>
                            <option values="2">2</option>
                            <option values="3">3</option>
                            <option values="4">4</option>
                            <option values="5">5</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <i class="fas fa-shopping-basket"></i>
                            </div>
                        </div>
                </div>
                


                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" name="btn_reg" class="btn btn-primary btn-block">Agregar</button>
                </div>
                <!-- /.col -->
                </div>
            </form>
        </div>
    </div></center>

    <?php
      include("conexionbd.php");
      $useractivo = $_SESSION['USUARIO'];
      if(isset($_POST['btn_reg'])){
        $pro= $_POST['pro'];
        $cantidad= $_POST['cantidad'];
        
        $calcular_cantidad = mysqli_query($conexion, "SELECT * FROM productos where id_producto='$pro'");
        while($consulta = mysqli_fetch_array($calcular_cantidad)){
          $precio = $consulta['precio'];
          $categoria = $consulta['categoria'];
        }
        $id_user = mysqli_query($conexion, "SELECT * FROM usuario WHERE username='$useractivo' or email='$useractivo'");
        while($consulta1 = mysqli_fetch_array($id_user)){
          $iduser = $consulta1['id_usuario'];
        }
        
        $subtotal = $cantidad * $precio;

        $ivatotal = ($subtotal * 15) / 100;
        $total = $subtotal + $ivatotal;
        
        $validar_producto = mysqli_query($conexion, "SELECT * FROM canasta WHERE producto='$pro' and usuario='$iduser'");
        if(mysqli_num_rows($validar_producto) > 0){
          echo '<script>
              alert("Esye producto ya se encuentra en su canasta!");
              window.history.go(-1);
          </script>';
          exit;
        }
        $insertar = "INSERT INTO canasta (producto, usuario, subtotal, total, cantidad, iva, categoria_prod)
        VALUES ('$pro',$iduser,'$subtotal','$total', '$cantidad', $ivatotal, $categoria)";
                      
        $result = mysqli_query($conexion, $insertar);

      }
    ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Embarco de Vehículo</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Productos</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <section class="content">

            <!-- Default box -->
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Vehiculos</h3>

                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            
                            <th style="width: 20%">
                                Producto
                            </th>
                            <th style="width: 8%">
                                Cantidad
                            </th>
                            <th>
                                Sub Total
                            </th>
                            <th >
                                +15% iva
                            </th>
                            <th >
                                Total
                            </th>
                           
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                        
                          include("conexionbd.php");
                            $usuarioactivo = $_SESSION["USUARIO"];
                            
                            if(isset($usuarioactivo)){
                              
                                $sql_pro = mysqli_query($conexion, "SELECT * FROM canasta ca INNER JOIN productos ps 
                                ON (ca.producto=ps.id_producto) INNER JOIN usuario ur ON (ca.usuario=ur.id_usuario) where (username='$usuarioactivo' or email='$useractivo') and ca.categoria_prod=6 ORDER BY fecha DESC");
                              while($consulta = mysqli_fetch_array($sql_pro)){
                                
                              ?>
                                  <tr>
                                   
                                    <td>
                                        <a>
                                          <?php echo $consulta['producto']; ?>
                                        </a>
                                        <br/>
                                        <small>
                                            Agregado el <?php echo $consulta['fecha']; ?>
                                        </small>
                                    </td>
                                    <td>
                                      <?php echo $consulta['cantidad']; ?>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success"> $
                                        <?php echo number_format($consulta['subtotal'],2, ",", "."); ?>
                                        </span>
                                    </td>
                                    <td class="project-state">
                                      <span class="badge badge-success"> $ <?php echo number_format($consulta['iva'],2, ",", "."); ?></span>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success"> $ <?php echo number_format($consulta['total'],2, ",", "."); ?></span>
                                    </td>
                                    
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" 
                                        href="import.php?id=<?php echo $consulta['id_cna'];?>&producto=<?php echo $consulta['producto'];?>&
                                        cantidad=<?php echo $consulta['cantidad'];?>&iva=<?php echo $consulta['iva'];?>&
                                        subtotal=<?php echo $consulta['subtotal'];?>&total=<?php echo $consulta['total'];?>&
                                        useractivo=<?php echo $useractivo;?>">
                                            <i class="fas fa-check-circle"></i>
                                            Importar
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#" onclick="dele(<?php echo $consulta['id_cna']; ?>);">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                              <?php
                
                              }
                            }
                        ?>
                        
                        
                    </tbody>
                </table>
                
            </div>
              
        </section> 
        <div class="row">
            <div class="col-12">
                <input type="submit" value="Importar todo" onclick="del();" class="btn btn-success float-right">
            </div>
        </div>
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

<script src="jquery-3.2.1.min.js"></script>
<script src="alertifyjs/alertify.js"></script>


  <script type="text/javascript">
      function dele(id){
        alertify.confirm("Desea eliminar este producto de su canasta",
          function(){
            window.location = "delete_prod.php?id="+id;
            alertify.success('Ok');
          },
          function(){
          alertify.error('Cancel');
        });
      }
    </script>
    
    <script type="text/javascript">
      de();
    </script>  
    
    <script type="text/javascript">
      function del(){
        alertify.confirm("Desea eliminar este producto de su canasta",
          function(){
            alertify.success('Ok');
          },
          function(){
          alertify.error('Cancel');
        });
      }
    </script>
</body>
</html>