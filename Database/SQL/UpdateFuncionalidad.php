<?php
//nos conectamos a la BD`
include'conexion.php';

$objData = new  Database();
$herramienta=$_POST['herramientaUP'];
$nombre = $_POST['nombreUP'];
$descripcion= $_POST['descripcionUP'];
$id=$_POST['idfuncUPDATE'];
 echo "$herramienta, $nombre, $descripcion,$id";


    $sth2 = $objData->prepare("UPDATE funcionalidades 
    SET Nombre_Funcionalidad=:nombre,Descripcion=:descripcion,FK_Herramientas_F= :herramienta
     WHERE id_Funcionalidad=$id");   

    $sth2->bindParam(':herramienta',$herramienta );    
    $sth2->bindParam(':nombre',$nombre );
    $sth2->bindParam(':descripcion',$descripcion ); 
    $sth2->execute();



header('location: ../../index.php');
?>