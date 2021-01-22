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
         <style type="text/css">
.highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
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

		</style>

<script src="assets/js/High/highcharts.js"></script>
<script src="assets/js/High/series-label.js"></script>
<script src="assets/js/High/exporting.js"></script>
<script src="assets/js/High/export-data.js"></script>
<script src="assets/js/High/accessibility.js"></script>
<script src="assets/js/High/data.js"></script>
<script src="assets/js/High/drilldown.js"></script>

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
            <li class="tooltips-general exit-system-button" data-href="Database/Logout.php" 
            data-placement="bottom" title="Salir del sistema">
            <a href="Database/Logout.php">Salir</a>
                
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
                                                                        <input type="text" class="form-control" name="herramienta" id="herramienta" placeholder="Herramienta">
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
                                                                    <input type="text" class="form-control" name="herramienta" id="herramienta" placeholder="Herramienta"> 
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
                                            
                                        </h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <figure class="highcharts-figure">
                                            <div id="container1"></div>
                                            </figure>
                                        </div>
                                        <div class="col-sm-6">
                                        <figure class="highcharts-figure">
                                            <div id="container2"></div>
                                </figure>
                                   </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <figure class="highcharts-figure">
                                    <div id="container3"></div>
                                </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <figure class="highcharts-figure">
                                            <div id="container4"></div>
                                            </figure>
                                        </div>
                                        <div class="col-sm-3">
                                        </div>
                                        <div class="col-sm-6">
                                            <figure class="highcharts-figure">
                                            <div id="container5"></div>
                                            </figure>
                                        </div>
                                        <div class="col-sm-3">
                                        </div>
                                    </div>
                                    </div>

    <!----------------Pregunta 1----------------------->
<script type='text/javascript'>
Highcharts.chart('container1', {
    title: {
        text: 'Pregunta1: ¿Le pareció de facil manejo el aplicativo?'
    },
    xAxis: {
        categories: ['Pregunta 1']
    },
    labels: {
        items: [{
            style: {
                left: '50px',
                top: '18px',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'black'
            }
        }]
    },
    series: [{
        type: 'column',
        name: 'Acuerdo',
        data: [    
                <?php
                $data = json_decode(file_get_contents("https://api-easylab.herokuapp.com/ApiRest/Formulario?fbclid=IwAR0O6juItrqp2UJfWoD4tUEQueiyxmcvVLwLCr-FQfGgXFfFsgR8H4c8gXo"), true);
	$respuestaTrue1 = 0;

    
   
		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 1") {
				if ($data[$i]["respuesta"]=="1") {
					$respuestaTrue1 ++;
				}
			}
		}
		

echo $respuestaTrue1?>
]
    }, {
        
        type: 'column',
        name: 'Desacuerdo',
        data: [


        <?php         
	$respuestaFalse1 = 0;

		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 1") {
				if ($data[$i]["respuesta"]=="0") {
					$respuestaFalse1 ++;
				}
			}
		}
		
echo $respuestaFalse1;?>
        ]
    }]
});
	</script>

		
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
    <!----------------Pregunta 2----------------------->
<script type='text/javascript'>
Highcharts.chart('container2', {
    title: {
        text: 'Pregunta 2: ¿Está satisfecho con los contenidos encontrados dentro del aplicativo?'
    },
    xAxis: {
        categories: ['Pregunta 1']
    },
    labels: {
        items: [{
            style: {
                left: '50px',
                top: '18px',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'black'
            }
        }]
    },
    series: [{
        type: 'column',
        name: 'Acuerdo',
        data: [    
                <?php
                $data = json_decode(file_get_contents("https://api-easylab.herokuapp.com/ApiRest/Formulario?fbclid=IwAR0O6juItrqp2UJfWoD4tUEQueiyxmcvVLwLCr-FQfGgXFfFsgR8H4c8gXo"), true);
	$respuestaTrue2 = 0;

    
   
		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 2") {
				if ($data[$i]["respuesta"]=="1") {
					$respuestaTrue2 ++;
				}
			}
		}
		

echo $respuestaTrue2?>
]
    }, {
        
        type: 'column',
        name: 'Desacuerdo',
        data: [


        <?php         
	$respuestaFalse2 = 0;

		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 2") {
				if ($data[$i]["respuesta"]=="0") {
					$respuestaFalse2 ++;
				}
			}
		}
		
echo $respuestaFalse2;?>
        ]
    }]
});
	</script>
		
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
        <!----------------Pregunta 3----------------------->
<script type="text/javascript">
// Create the chart
Highcharts.chart('container3', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Pregunta 3: ¿Le parece adecuada la explicación de las funcionalidades presentadas?'
    },

    accessibility: {
        announceNewData: {
            enabled: true
        },
        point: {
            valueSuffix: 'respuestas'
        }
    },

    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f} respuestas'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f} respuestas</b> of total<br/>'
    },

    series: [
        {
            colorByPoint: true,
            data: [
                {
                    name: "Acuerdo",
                    y: 
                                
        <?php         
	$respuestaTrue3 = 0;

		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 3") {
				if ($data[$i]["respuesta"]=="1") {
                    
                    $respuestaTrue3 ++;
				}
			}
        }
        echo $respuestaTrue3;
        ?>,
                    drilldown: "Desacuerdo"
                },
                {
                    name: "Desacuerdo",
                    y:                          
        <?php         
	$respuestaFalse3 = 0;

		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 3") {
				if ($data[$i]["respuesta"]=="0") {
                    
                    $respuestaFalse3 ++;
				}
			}
        }
        echo $respuestaFalse3;
        ?>,
                    drilldown: "Desacuerdo"
                },

            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "Acuerdo",
                id: "Acuerdo",
                data: [
                    
        <?php         
	$respuestaTrue31 = 0;

		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 3") {
				if ($data[$i]["respuesta"]=="1") {
                    echo ' [
                        "v65.0",
                        '.$respuestaTrue31.'
                    ],';
                    $respuestaTrue31 ++;
				}
			}
		}?>
                ]
            },
            {
                name: "Desacuerdo",
                id: "Desacuerdo",
                data: [
                    <?php         
	$respuestaFalse32 = 0;

		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 3") {
				if ($data[$i]["respuesta"]=="0") {
                    echo ' [
                        "v65.0",
                        '.$respuestaFalse32.'
                    ],';
                    $respuestaFalse32 ++;
				}
			}
		}?>
                ]
            }
            
        ]
    }
});
        </script>
        <!----------------Pregunta 4----------------------->    
        <script type="text/javascript">
// Create the chart
Highcharts.chart('container4', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Pregunta 4: ¿Las prácticas propuestas completan su conocimiento previo?'
    },

    accessibility: {
        announceNewData: {
            enabled: true
        },
        point: {
            valueSuffix: 'respuestas'
        }
    },

    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f} respuestas'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f} respuestas</b> of total<br/>'
    },

    series: [
        {
            colorByPoint: true,
            data: [
                {
                    name: "Acuerdo",
                    y: 
                                
        <?php         
	$respuestaTrue4 = 0;

		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 4") {
				if ($data[$i]["respuesta"]=="1") {
                    
                    $respuestaTrue4 ++;
				}
			}
        }
        echo $respuestaTrue4;
        ?>,
                    drilldown: "Desacuerdo"
                },
                {
                    name: "Desacuerdo",
                    y:                          
        <?php         
	$respuestaFalse4 = 0;

		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 4") {
				if ($data[$i]["respuesta"]=="0") {
                    
                    $respuestaFalse4 ++;
				}
			}
        }
        echo $respuestaFalse4;
        ?>,
                    drilldown: "Desacuerdo"
                },

            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "Acuerdo",
                id: "Acuerdo",
                data: [
                    
        <?php         
	$respuestaTrue41 = 0;

		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 4") {
				if ($data[$i]["respuesta"]=="1") {
                    echo ' [
                        "v65.0",
                        '.$respuestaTrue41.'
                    ],';
                    $respuestaTrue41 ++;
				}
			}
		}?>
                ]
            },
            {
                name: "Desacuerdo",
                id: "Desacuerdo",
                data: [
                    <?php         
	$respuestaFalse42 = 0;

		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 4") {
				if ($data[$i]["respuesta"]=="0") {
                    echo ' [
                        "v65.0",
                        '.$respuestaFalse42.'
                    ],';
                    $respuestaFalse42 ++;
				}
			}
		}?>
                ]
            }
            
        ]
    }
});
		</script>

<script type="text/javascript">
Highcharts.chart('container5', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: 'Pregunta 5:¿Recomendaría implementar esta aplicación con las demás herramientas del laboratorio?',
        align: 'center',
        verticalAlign: 'top',
        y: 10
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f} respuestas</b>'
    },
    accessibility: {
        point: {
            valueSuffix: 'respuestas'
        }
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: true,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '75%'],
            size: '110%'
        }
    },
    series: [{
        type: 'pie',
        name: 'Browser share',
        innerSize: '50%',
        data: [
            ['Acuerdo',  <?php         
	$respuestaTrue5 = 0;

		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 5") {
				if ($data[$i]["respuesta"]=="1") {
                    
                    $respuestaTrue5 ++;
				}
			}
        }
        echo $respuestaTrue5;
        ?>],
            ['Desacuerdo',  <?php         
	$respuestaFalse5 = 0;

		for ($i=0; $i < count($data); $i++) { 

			if ($data[$i]["nombre_Pregunta"]=="Pregunta 5") {
				if ($data[$i]["respuesta"]=="0") {
                    
                    $respuestaFalse5 ++;
				}
			}
        }
        echo $respuestaFalse5;
        ?>],

        ]
    }]
});

		</script>
</body>

</html>