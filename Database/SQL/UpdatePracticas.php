<?php
//nos conectamos a la BD`
include'conexion.php';

$objData = new  Database();
$herramienta=$_POST['herramientaUP'];
$nombre = $_POST['nombreUP'];
$descripcion= $_POST['descripcionUP'];
$idP=$_POST['idpracUPDATE'];
 echo " $herramienta, $idP";


    $sth2 = $objData->prepare("UPDATE practicas 
    SET Nombre_Practica='$nombre',Descripcion='$descripcion',FK_Herramientas_P= $herramienta
     WHERE id_Practica=$idP");   
    $sth2->execute();



header('location: ../../index.php');
?>