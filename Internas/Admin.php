<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!-- Titulo para el navegador -->
    <title>Easylab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- llamamos alos estilos y frameworks -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/estilos.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="icon" type="../../assets/img/logo.png" href="/imágenes/mifavicon.png" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script script src="assets/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#Actividades").click(function() {
                $("#act").show();
                $("#pra,#est").hide();
            });
            $("#Practicas").click(function() {
                $("#pra").show();
                $("#act,#est").hide();
            });
            $("#Estadisticas").click(function() {
                $("#est").show();
                $("#act,#pra").hide();
            });
        });
    </script>
</head>

<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">

                <div class="logo">
                    <a hef="home.html"><img src="assets/img/logo.png" alt="merkery_logo" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="assets/img/utp_logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>

                </div>
                <div class="navi">
                    <ul>
                        <li><a id="Actividades"><i class="fa fa-home" aria-hidden="true"></i>Funcionalidades</a></li>
                        <li><a id="Practicas"><i class="fa fa-tasks" aria-hidden="true"></i>Prácticas</a></li>
                        <li><a id="Estadisticas"><i class="fa fa-bar-chart" aria-hidden="true"></i>Estadísticas</a></li>
                    </ul>
                </div>
            </div>
        
                        
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                    <header id="l1">
                        <div class="col-md-12">
                            <div class="header-rightside">
                            <h2>Easylab</h2>
                            </div>
                        </div>
                        
                        <ul class="list-inline header-top pull-right">

<li class=" fa fa-user dropdown" style="color: white; font-size: 1.5em;">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white; ">
        <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li>
           
        </li>
        <div class="navbar-content">
            <!-- Al hacer clic ens alir se llama la pagina logout.php y se destruye la sesion-->
            <li class="tooltips-general exit-system-button" data-href="Database/logout.php" 
            data-placement="bottom" title="Salir del sistema">
            <a href="Database/logout.php">Salir</a>
                
            </li>
        </div>
    </ul>
</li>
</ul>
                    </header>
                </div>
                <div id="act">
                
                        <div class="user-dashboard">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse10000"> <button type="button" class="btn btn-success">Nueva Funcionalidad</button></a>
                                        </h4>
                                    </div>
                                    <div id="collapse10000" class="panel-collapse collapse">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                             
                                               
                                                <form class="form-horizontal" method="post" action="Database/SQL/InsertarFuncionalidad.php" enctype="multipart/form-data" >
                                                        <legend>Funcionalidad</legend>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="Herramienta" class="control-label col-sm-2">Herramienta:</label>
                                                                    <div class="col-sm-10" style="display: block;">
                                                                        <?php
                                                                            $user->SelectHerramientas();
                                                                        ?> 
                                                                        <p class="help-block">Selecione la herramienta...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="Titulo" class="control-label col-sm-2">Nombre:</label>
                                                                    <div class="col-sm-10" style="display: block;">
                                                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Titulo">
                                                                        <p class="help-block">Nombre de la funcionalidad...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="fecha" class="control-label col-sm-2">Fecha</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="date" class="form-control" disabled name="fecha" id="fecha" value="<?php echo date('Y-m-d');?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-2">Archivo</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="file" name="archivo">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-2" for="descripcion">Descripción</label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control" id="descripcion" name="descripcion" rows="7"></textarea>
                                                                        <p class="help-block">Descripción de la funcionalidad ....
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-2"></label>
                                                                    <div class="text-center col-sm-10">
                                                                        <div id="LimpiarGroup" class="btn-group" role="group" aria-label="">
                                                                            <button type="button" id="Limpiar" name="Limpiar" class="btn btn-warning" aria-label="limpiar">limpiar</button>
                                                                            <button type="subir"  name="subir" class="btn btn-primary" aria-label="subir">enviar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </form>
                                            </li>
                                        </ul>
                                        <div class="panel-footer">Nueva Funcionalidad</div>
                                    </div>
                                    <div class="bs-callout bs-callout-danger">
                                        <h4>Funcionalidades Creadas</h4>
                                        <?php $user->ListaFuncionalidades(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                 
                </div>
                
                <div id="pra" style="display: none">
                
                        <div class="user-dashboard">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse20000"> <button type="button" class="btn btn-success">Nueva Práctica</button></a>
                                        </h4>
                                    </div>
                                    <div id="collapse20000" class="panel-collapse collapse">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                             
                                               
                                                <form class="form-horizontal" method="post" action="Database/SQL/InsertarPractica.php" enctype="multipart/form-data" >
                                                        <legend>Práctica</legend>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="Herramienta" class="control-label col-sm-2">Herramienta:</label>
                                                                    <div class="col-sm-10" style="display: block;">
                                                                        <?php
                                                                            $user->SelectHerramientas();
                                                                        ?> 
                                                                        <p class="help-block">Selecione la herramienta...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="Titulo" class="control-label col-sm-2">Nombre:</label>
                                                                    <div class="col-sm-10" style="display: block;">
                                                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Titulo">
                                                                        <p class="help-block">Nombre de la práctica...</p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="fecha" class="control-label col-sm-2">Fecha</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="date" class="form-control" disabled name="fecha" id="fecha" value="<?php echo date('Y-m-d');?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-2">Archivo</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="file" name="archivo">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-2" for="descripcion">Descripción</label>
                                                                    <div class="col-sm-10">
                                                                        <textarea class="form-control" id="descripcion" name="descripcion" rows="7"></textarea>
                                                                        <p class="help-block">Descripción de la práctica ....
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-2"></label>
                                                                    <div class="text-center col-sm-10">
                                                                        <div id="LimpiarGroup" class="btn-group" role="group" aria-label="">
                                                                            <button type="button" id="Limpiar" name="Limpiar" class="btn btn-warning" aria-label="limpiar">limpiar</button>
                                                                            <button type="subir"  name="subir" class="btn btn-primary" aria-label="subir">enviar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </form>
                                            </li>
                                        </ul>
                                        <div class="panel-footer">Nueva Funcionalidad</div>
                                    </div>
                                    <div class="bs-callout bs-callout-danger">
                                        <h4>Funcionalidades Creadas</h4>
                                        <?php $user->ListaPracticas(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                 
                </div>


    <div id="est" style="display: none">
        <div class="user-dashboard">
            <div class="panel-group">
                <div class="panel panel-default">
                <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse10000"> <button type="button" class="btn btn-success">Exportar datos</button></a>
                                        </h4>
                                    </div>
                <div class="col-md-6">
                
                <div class="chart">
		<canvas id="myChart" width="400" height="200"></canvas>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <script >             
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
	// The type of chart we want to create
	type: 'bar', // also try bar or other graph types

	// The data for our dataset
	data: {
		labels: ["Pregunta 1", "Pregunta 2", "Pregunta 3", "Pregunta 4", "Pregunta 5"],
		// Information about the dataset
    datasets: [{
			label: "media",
			backgroundColor: 'lightblue',
			borderColor: 'royalblue',
			data: [26.4, 39.8, 66.8, 66.4, 40.6],
		}]
	},

	// Configuration options
	options: {
    layout: {
      padding: 10,
    },
		legend: {
			position: 'bottom',
		},
		title: {
			display: true,
			text: 'Grafica de satisfacción'
		},
		scales: {
			yAxes: [{
				scaleLabel: {
					display: true,
					labelString: 'Media de respuestas'
				}
			}],
			xAxes: [{
				scaleLabel: {
					display: true,
					labelString: 'Preguntas'
				}
			}]
		}
	}
});
</script>
                 
                </div>
                <div class="col-md-6">
                <div class="chart">
		<canvas id="myChart2" width="400" height="200"></canvas>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <script >             
    var ctx = document.getElementById('myChart2').getContext('2d');
    var chart = new Chart(ctx, {
	// The type of chart we want to create
	type: 'line', // also try bar or other graph types

	// The data for our dataset
	data: {
		labels: ["Pregunta 1", "Pregunta 2", "Pregunta 3", "Pregunta 4", "Pregunta 5"],
		// Information about the dataset
    datasets: [{
			label: "media",
			backgroundColor: 'lightblue',
			borderColor: 'royalblue',
			data: [26.4, 39.8, 66.8, 66.4, 40.6],
		}]
	},

	// Configuration options
	options: {
    layout: {
      padding: 10,
    },
		legend: {
			position: 'bottom',
		},
		title: {
			display: true,
			text: 'Grafica de satisfacción'
		},
		scales: {
			yAxes: [{
				scaleLabel: {
					display: true,
					labelString: 'Media de respuestas'
				}
			}],
			xAxes: [{
				scaleLabel: {
					display: true,
					labelString: 'Preguntas'
				}
			}]
		}
	}
});
</script>
                </div> 
                <div class="col-md-2"></div> 
                <div class="col-md-8">
                <div class="chart">
		<canvas id="myChart4" width="400" height="200"></canvas>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <script >             
    var ctx = document.getElementById('myChart4').getContext('2d');
    var chart = new Chart(ctx, {
	// The type of chart we want to create
	type: 'polarArea', // also try bar or other graph types

	// The data for our dataset
	data: {
		labels: ["Pregunta 1", "Pregunta 2", "Pregunta 3", "Pregunta 4", "Pregunta 5"],
		// Information about the dataset
    datasets: [{
			label: "media",
			backgroundColor: 'lightblue',
			borderColor: 'royalblue',
			data: [26.4, 39.8, 66.8, 66.4, 40.6],
		}]
	},

	// Configuration options
	options: {
    layout: {
      padding: 10,
    },
		legend: {
			position: 'bottom',
		},
		title: {
			display: true,
			text: 'Grafica de satisfacción'
		},
		scales: {
			yAxes: [{
				scaleLabel: {
					display: true,
					labelString: 'Media de respuestas'
				}
			}],
			xAxes: [{
				scaleLabel: {
					display: true,
					labelString: 'Preguntas'
				}
			}]
		}
	}
});
</script>
                </div> 

                
                 
                                </div>
                            </div>
                        </div>            
    </div>
    <script>
        $(document).ready(function() {
            $('#tabla_resumen2').DataTable({
                "scrollY": "500px",
                "scrollCollapse": true,
                "paging": false,
                "order": [
                    [0, 'desc']
                ]
            });
        });
        $(document).ready(function() {
            $('#tabla_criterios').DataTable({
                "scrollY": "500px",
                "scrollCollapse": true,
                "paging": false,
                "order": [
                    [0, 'desc']
                ]
            });
        });
        $(document).ready(function() {
            $('#tabla_rev').DataTable({
                "scrollY": "500px",
                "scrollCollapse": true,
                "paging": false,
                "order": [
                    [0, 'desc']
                ]
            });
        });
        $(document).ready(function() {
            $('#tabla_cali').DataTable({
                "scrollY": "500px",
                "scrollCollapse": true,
                "paging": false,
                "order": [
                    [0, 'desc']
                ]
            });
        });
    </script>

</body>

</html>