<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-icon.png">
    <link rel="icon" href="../assets/img/favicon.png">
    <title>
       USO INTELIGENTE
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/material-dashboard.css?v=2.0.0">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/assets-for-demo/demo.css" rel="stylesheet" />
    <!-- iframe removal -->
</head>

<body class="">




    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                
            <center>
                    <img src="/images/SC logo chico.png" border="0" width="50%" height="50%">
            </center>
                
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li clas"">
                        <center>
                            Manejo de cuenta
                        </center>

                </li>
                    <li class="nav-item active ">
                        <a class="nav-link" href="index.php">
                            <i class="material-icons">dashboard</i> 
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="proyectos.php">
                            <i class="material-icons">book</i>
                            <p>Proyectos</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="nuevo.php">
                            <i class="material-icons">note_add</i>
                            <p>Añadido de Proyectos</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="borrado.php">
                            <i class="material-icons">delete</i>
                            <p>Borrado de proyectos</p>
                        </a>
                    </li>
                   
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Dashboard General de Proyectos</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- Contenido para Modificar -->
                <div class="content">  
                    <div class="col-md-12">
                     <div class="row">   
                        <div class="card card-chart">
                                <div class="card-header card-header-success">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Gráfico del total de proyectos</h4>
                                    <p class="card-category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> de proyectos finalizados.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> Actualizado ahora
                                    </div>
                                </div>
                        </div>
                    </div>
                    </div> 

                    


                    <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">Proyectos Último Mes</h4>
                                <p class="card-category">Últimos Proyectos</p>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-warning">
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Presupuesto</th>
                                        <th>Estado</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                                $mysqli = new mysqli("uso.c7dhdhum783t.us-east-2.rds.amazonaws.com", "mota", "JavierRM1", "USO_INTELIGENTE");
                                                $mysqli->set_charset("utf8");
                                                if ($mysqli->connect_errno) {
                                                    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                                                }
                                                $res = $mysqli->query("SELECT * FROM UltimoMes");
                                                while($f = $res->fetch_assoc()){
                                                    echo '<tr>
                                                        <td>'.$f["ID"].'</td>
                                                        <td>'.$f["NOMBRE"].'</td>
                                                        <td>'.$f["PRESUPUESTO"].'</td>
                                                        <td>'.$f["ESTADO"].'</td>
                                                        </tr>';
                                                }
                                                ?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>

                         <div class="card">
                            <div class="card-header card-header-success">
                                <h4 class="card-title">CATEGORIAS</h4>
                                <p class="card-category">Información Categorias</p>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead class="text">
                                        <th>ID</th>
                                        <th>Nombre</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                                $mysqli = new mysqli("uso.c7dhdhum783t.us-east-2.rds.amazonaws.com", "mota", "JavierRM1", "USO_INTELIGENTE");
                                                $mysqli->set_charset("utf8");
                                                if ($mysqli->connect_errno) {
                                                    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                                                }
                                                $res = $mysqli->query("SELECT * FROM CATEGORIAS");
                                                while($f = $res->fetch_assoc()){
                                                    echo '<tr>
                                                        <td>'.$f["ID"].'</td>
                                                        <td>'.$f["NOMBRE"].'</td>
                                                        </tr>';
                                                }
                                                ?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                
            </div>

            <footer class="footer ">
               
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/bootstrap-material-design.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="../assets/js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="../assets/js/material-dashboard.js?v=2.0.0"></script>
<!-- demo init -->
<script src="../assets/js/plugins/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        //init wizard

        // demo.initMaterialWizard();

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initCharts();

    });

</script>
<!--

































 -->

</html>
