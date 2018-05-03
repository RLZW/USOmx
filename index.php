<?php
require('connect.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-icon.png">
    <link rel="icon" href="../assets/img/favicon.png">
    <title>
        USO Inteligente - Inicio
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/material-dashboard.css?v=2.0.0">

</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo">

          <center>
                  <img src="images/SC logo chico.png" border="0" width="50%">
          </center>


        </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                  <li clas"">
                        <center>
                            Manejo de cuenta
                        </center>

                </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proyectos.php">
                            <i class="material-icons">book</i>
                            <p>Proyectos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nuevo.php">
                            <i class="material-icons">note_add</i>
                            <p>Añadido de Proyectos</p>
                        </a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="borrado.php">
                            <i class="material-icons">delete</i>
                            <p>Borrado de proyectos</p>
                        </a>
                    </li>-->

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#">Dashboard General de Proyectos</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Buscar...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Verificar proyecto iStudy</a>
                                    <a class="dropdown-item" href="#">3 proyectos cambiaron su estado a completado</a>
                                    <a class="dropdown-item" href="#">Se canceló HackMx</a>+
                                    <a class="dropdown-item" href="#">El proyecto está a punto de agotar su presupuesto</a>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            
            
            <!-- Contenido  -->
            <div class="content">
                <div class="container-fluid">

                    <div class="col-md-12">
                        <div class="row">   
                            <div class="card card-chart">
                                    <div class="card-header card-header-success">
                                        <div class="ct-chart" id="dailySalesChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="80%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="131.90476771763394" x2="131.90476771763394" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="223.80953543526786" x2="223.80953543526786" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="315.7143031529018" x2="315.7143031529018" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="407.6190708705357" x2="407.6190708705357" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="499.52383858816967" x2="499.52383858816967" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="591.4286063058036" x2="591.4286063058036" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="683.3333740234375" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="683.3333740234375" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="683.3333740234375" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="683.3333740234375" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="683.3333740234375" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="683.3333740234375" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,91.2C131.905,79.2,131.905,79.2,131.905,79.2C223.81,103.2,223.81,103.2,223.81,103.2C315.714,79.2,315.714,79.2,315.714,79.2C407.619,64.8,407.619,64.8,407.619,64.8C499.524,76.8,499.524,76.8,499.524,76.8C591.429,28.8,591.429,28.8,591.429,28.8" class="ct-line"></path><line x1="40" y1="91.2" x2="40.01" y2="91.2" class="ct-point" ct:value="12"></line><line x1="131.90476771763394" y1="79.2" x2="131.91476771763394" y2="79.2" class="ct-point" ct:value="17"></line><line x1="223.80953543526786" y1="103.2" x2="223.81953543526785" y2="103.2" class="ct-point" ct:value="7"></line><line x1="315.7143031529018" y1="79.2" x2="315.72430315290177" y2="79.2" class="ct-point" ct:value="17"></line><line x1="407.6190708705357" y1="64.8" x2="407.6290708705357" y2="64.8" class="ct-point" ct:value="23"></line><line x1="499.52383858816967" y1="76.8" x2="499.53383858816966" y2="76.8" class="ct-point" ct:value="18"></line><line x1="591.4286063058036" y1="28.799999999999997" x2="591.4386063058035" y2="28.799999999999997" class="ct-point" ct:value="38"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="91.90476771763393" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 92px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="131.90476771763394" y="125" width="91.90476771763393" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 92px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="223.80953543526786" y="125" width="91.90476771763392" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 92px; height: 20px;">W</span></foreignObject><foreignObject style="overflow: visible;" x="315.7143031529018" y="125" width="91.90476771763394" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 92px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="407.6190708705357" y="125" width="91.90476771763394" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 92px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="499.52383858816967" y="125" width="91.90476771763389" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 92px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="591.4286063058036" y="125" width="91.90476771763394" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 92px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject></g></svg></div>
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

                    
                    <div class="row"> <!-- ROW -->
                            <div class="col-md-4">
                                <div class="card card-chart">
                                    <div class="card-header card-header-warning">
                                        <div class="ct-chart" id="dailySalesChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="51.90401785714286" x2="51.90401785714286" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="63.808035714285715" x2="63.808035714285715" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="75.71205357142857" x2="75.71205357142857" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="87.61607142857143" x2="87.61607142857143" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="99.52008928571429" x2="99.52008928571429" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="111.42410714285714" x2="111.42410714285714" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="123.328125" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="123.328125" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="123.328125" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="123.328125" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="123.328125" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="123.328125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,91.2C51.904,79.2,51.904,79.2,51.904,79.2C63.808,103.2,63.808,103.2,63.808,103.2C75.712,79.2,75.712,79.2,75.712,79.2C87.616,64.8,87.616,64.8,87.616,64.8C99.52,76.8,99.52,76.8,99.52,76.8C111.424,28.8,111.424,28.8,111.424,28.8" class="ct-line"></path><line x1="40" y1="91.2" x2="40.01" y2="91.2" class="ct-point" ct:value="12"></line><line x1="51.90401785714286" y1="79.2" x2="51.91401785714286" y2="79.2" class="ct-point" ct:value="17"></line><line x1="63.808035714285715" y1="103.2" x2="63.81803571428571" y2="103.2" class="ct-point" ct:value="7"></line><line x1="75.71205357142857" y1="79.2" x2="75.72205357142857" y2="79.2" class="ct-point" ct:value="17"></line><line x1="87.61607142857143" y1="64.8" x2="87.62607142857144" y2="64.8" class="ct-point" ct:value="23"></line><line x1="99.52008928571429" y1="76.8" x2="99.5300892857143" y2="76.8" class="ct-point" ct:value="18"></line><line x1="111.42410714285714" y1="28.799999999999997" x2="111.43410714285714" y2="28.799999999999997" class="ct-point" ct:value="38"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="11.904017857142858" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 12px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="51.90401785714286" y="125" width="11.904017857142858" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 12px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="63.808035714285715" y="125" width="11.904017857142854" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 12px; height: 20px;">W</span></foreignObject><foreignObject style="overflow: visible;" x="75.71205357142857" y="125" width="11.904017857142861" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 12px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="87.61607142857143" y="125" width="11.904017857142861" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 12px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="99.52008928571429" y="125" width="11.904017857142847" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 12px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="111.42410714285714" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject></g></svg></div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Cambios en Proyectos</h4>
                                        <p class="card-category">
                                            
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">access_time</i> Actualizado ahora
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-chart">
                                    <div class="card-header card-header-warning">
                                        <div class="ct-chart" id="websiteViewsChart"></div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">En validación</h4>
                                        <p class="card-category">Proyectos en estado de validación</p>
                                    </div>
                                    <div class="card-footer">
                                    <div class="stats" style="color:#566573">
                                            <i class="material-icons">autorenew</i> NOMBRE PROYECTO
    
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                    <div class="stats" style="color:#566573">
                                            <i class="material-icons">autorenew</i> NOMBRE PROYECTO
    
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                    <div class="stats" style="color:#566573">
                                            <i class="material-icons">autorenew</i> NOMBRE PROYECTO
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-chart">
                                    <div class="card-header card-header-danger">
                                        <div class="ct-chart" id="completedTasksChart"></div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Proyectos Terminados</h4>
                                        <p class="card-category">Últimos proyectos terminados</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats" style="color:#566573">
                                            <i class="material-icons">check</i> NOMBRE PROYECTO
    
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats" style="color:#566573">
                                            <i class="material-icons">check</i> NOMBRE PROYECTO
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div> <!-- END ROW -->
                    

                    <div class="row"> <!-- ROW -->

                    <!-- ESTADO PROYECTOS CHART MES -->
                        <?php
                            $queryUltimoMes = $connection->query('SELECT DISTINCT * FROM UltimoMes');
                            if($queryUltimoMes->num_rows!=0)
                            {
                            ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-warning">
                                        <h4 class="card-title">Estado de proyectos</h4>
                                        <p class="card-category">Proyectos del último mes</p>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-hover">
                                            <thead class="text-warning">
                                                <th>Clave</th>
                                                <th>Nombre</th>
                                                <th>Categorías</th>
                                                <th>Presupuesto</th>
                                                <th>Estado</th>
                                            </thead>
                                            <tbody>
                                            <?php
                                            while($filaUltimoMes = $queryUltimoMes->fetch_assoc())
                                            {
                                            ?>
                                                <tr>
                                                    <td><?php echo $filaUltimoMes['ID']; ?></td>
                                                    <td><?php echo $filaUltimoMes['NOMBRE']; ?></td>
                                                    <td><?php
                                                    $categoriaProyectoQuery = $connection->query('SELECT CATEGORIAS.NOMBRE FROM CATEGORIA_PROYECTO INNER JOIN CATEGORIAS ON CATEGORIA_PROYECTO.CATEGORIA = CATEGORIAS.ID WHERE CATEGORIA_PROYECTO.PROYECTO = '.$filaUltimoMes['ID']);
                                                    if($categoriaProyectoQuery->num_rows!=0)
                                                    {
                                                        while($filaCategoriaProyecto = $categoriaProyectoQuery->fetch_assoc())
                                                        {
                                                        echo $filaCategoriaProyecto['NOMBRE'];
                                                        echo "<br/>";
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "SIN CATEGORIA";
                                                    }
                                                    ?></td>
                                                    <td><?php echo $filaUltimoMes['PRESUPUESTO']; ?></td>
                                                    <td><?php switch($filaUltimoMes['ESTADO'])
                                                    {
                                                    case 'EPC':
                                                    echo "En proceso";
                                                    break;
                                                    case 'COM':
                                                    echo "Completado";
                                                    break;
                                                    case 'CAN':
                                                    echo "Cancelado";
                                                    break;


                                                    } ?></td>
                                                </tr>


                                            <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- END CLASS CARD -->
                                
                            
                            </div> <!-- END COL -->
                            
                        <?php
                            }
                        ?>
                    
                     <!-- ESTADO PROYECTOS CHART SEMANA -->
                        <?php
                            $queryUltimoMes = $connection->query('SELECT DISTINCT * FROM UltimoMes');
                            if($queryUltimoMes->num_rows!=0)
                            {
                            ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-success">
                                        <h4 class="card-title">Estado de proyectos</h4>
                                        <p class="card-category">Proyectos de la semana</p>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-hover">
                                            <thead class="text-warning">
                                                <th>Clave</th>
                                                <th>Nombre</th>
                                                <th>Categorías</th>
                                                <th>Presupuesto</th>
                                                <th>Estado</th>
                                            </thead>
                                            <tbody>
                                            <?php
                                            while($filaUltimoMes = $queryUltimoMes->fetch_assoc())
                                            {
                                            ?>
                                                <tr>
                                                    <td><?php echo $filaUltimoMes['ID']; ?></td>
                                                    <td><?php echo $filaUltimoMes['NOMBRE']; ?></td>
                                                    <td><?php
                                                    $categoriaProyectoQuery = $connection->query('SELECT CATEGORIAS.NOMBRE FROM CATEGORIA_PROYECTO INNER JOIN CATEGORIAS ON CATEGORIA_PROYECTO.CATEGORIA = CATEGORIAS.ID WHERE CATEGORIA_PROYECTO.PROYECTO = '.$filaUltimoMes['ID']);
                                                    if($categoriaProyectoQuery->num_rows!=0)
                                                    {
                                                        while($filaCategoriaProyecto = $categoriaProyectoQuery->fetch_assoc())
                                                        {
                                                        echo $filaCategoriaProyecto['NOMBRE'];
                                                        echo "<br/>";
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "SIN CATEGORIA";
                                                    }
                                                    ?></td>
                                                    <td><?php echo $filaUltimoMes['PRESUPUESTO']; ?></td>
                                                    <td><?php switch($filaUltimoMes['ESTADO'])
                                                    {
                                                    case 'EPC':
                                                    echo "En proceso";
                                                    break;
                                                    case 'COM':
                                                    echo "Completado";
                                                    break;
                                                    case 'CAN':
                                                    echo "Cancelado";
                                                    break;


                                                    } ?></td>
                                                </tr>


                                            <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- END CLASS CARD -->
                                
                            
                            </div> <!-- END COL -->
                            
                        <?php
                            }
                        ?>
                    </div>  <!-- END ROW -->



                    <div class"row"> <!-- ROW -->
                        <!-- CATEGORIAS CHART --> 
                            <?php
                                    $categoriasQuery = $connection->query("SELECT * FROM CATEGORIAS");
                                    if($categoriasQuery->num_rows!=0)
                                    {
                                    ?>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="card">
                                            <div class="card-header card-header-warning">
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

                                                                while($filaCategorias = $categoriasQuery->fetch_assoc()){
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $filaCategorias['ID']; ?></td>
                                                                    <td><?php echo $filaCategorias['NOMBRE']; ?></td>
                                                                    </tr>
                                                                <?php

                                                                }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            ?>

                    
                        
                       
                    
                    </div>  <!-- END ROW -->
                </div> <!-- END CONTAINER -->
                
            </div> <!-- END CONTENT -->

        </div> <!-- END MAIN PANEL -->
    </div> <!-- END WRAPPER -->
    
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/bootstrap-material-design.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="assets/js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="assets/js/material-dashboard.js?v=2.0.0"></script>
</html>
