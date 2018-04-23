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
                        <a class="nav-link" href="index.html">
                            <i class="material-icons">dashboard</i> 
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="gastos.html">
                            <i class="material-icons">book</i>
                            <p>Proyectos</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="usuario.html">
                            <i class="material-icons">note_add</i>
                            <p>Añadido de Proyectos</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="tarjetas.html">
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
                        <a class="navbar-brand" href="#pablo">Proyectos</a>
                   
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- Contenido -->
            
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title "><b>Resumen de Proyectos</b></h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="tabla">
                                            <thead class=" text-primary">
                                                <th>
                                                    Orden
                                                </th>
                                                <th>
                                                    Proyecto
                                                </th>
                                                <th>
                                                    Estado
                                                </th>
                                                <th>
                                                    Cuenta
                                                </th>
                                                <th>
                                                    Fondos
                                                </th>
                                            </thead>
                                            <tbody>
                                                  
                                                <?php
                                                $mysqli = new mysqli("uso.c7dhdhum783t.us-east-2.rds.amazonaws.com", "mota", "JavierRM1", "USO_INTELIGENTE");
                                                $mysqli->set_charset("utf8");
                                                if ($mysqli->connect_errno) {
                                                    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
                                                }
                                                $res = $mysqli->query("SELECT * FROM PROYECTOS");
                                                while($f = $res->fetch_assoc()){
                                                    echo '<tr>
                                                        <td>'.$f["ID"].'</td>
                                                        <td>'.$f["NOMBRE"].'</td>
                                                        <td>'.$f["OBJETIVO"].'</td>
                                                        <td>'.$f["PRESUPUESTO"].'</td>
                                                        <td>'.$f["DIAGNOSTICO"].'</td>
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
<!--


