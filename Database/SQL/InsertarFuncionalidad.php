<?php
include'conexion.php';

$objData = new  Database();

$nombre = $_POST['nombre'];

$fecha = date('Y-m-d');
$descripcion= $_POST['descripcion'];
$archivo= $_FILES['archivo']['tmp_name'];
$nombreArchivo = $_FILES['archivo']['name'];
$tamanio= $_FILES["archivo"]["size"];
$tipo = $_FILES["archivo"]["type"];
$ruta = "C:/xampp/htdocs/EasyLabWeb/assets/Archivos/";
$herramienta=$_POST['herramienta'];
echo"asdasdsa' $herramienta  $nombre  '";

$query = $objData->prepare('SELECT max(id_Funcionalidad) as "func" FROM funcionalidades');
$query->execute();

        foreach ($query as $currentUser) {
            $id= $currentUser['func']+1; 
            echo $id;
            $sth2 = $objData->prepare('INSERT INTO funcionalidades (id_Funcionalidad,Fecha,Nombre_Funcionalidad,Descripcion,FK_Herramientas_F)
                            VALUES('.$id.',:fecha,:nombre,:descripcion,'.$herramienta.')');     
$sth2->bindParam(':fecha', $fecha);    
 $sth2->bindParam(':descripcion', $descripcion);  
$sth2->bindParam(':nombre', $nombre);  
$sth2->execute(); 

        }





header('location: ../../index.php');
?>   
