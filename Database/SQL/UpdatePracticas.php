<?php
//nos conectamos a la BD`
include'conexion.php';

$objData = new  Database();

$herramienta=$_POST['herramienta'];
$nombre = $_POST['nombre'];
$descripcion= $_POST['descripcion'];
$id=$_POST['idpracUPDATE'];


$sth1 = $objData->prepare("SELECT id_Herramientas from herramientas where nombre =:herramienta");     
$sth1->bindParam(':herramienta', $herramienta);    
$sth1->execute(); 

foreach ($sth1 as $currentUser) {   

    $idH=$_POST['id_Herramientas'];

    $sth2 = $objData->prepare("UPDATE practicas 
    SET Nombre_Practica=:nombre,Descripcion=:descripcion,FK_Herramientas_P= :herramienta
     WHERE FK_Herramientas_F=$idH");   

    $sth2->bindParam(':herramienta',$herramienta );    
    $sth2->bindParam(':nombre',$nombre );
    $sth2->bindParam(':descripcion',$descripcion ); 
    $sth2->execute();
}


header('location: ../../index.php');
?>