<?php
include 'conexion.php';
$objData = new  Database();

 $id=$_POST['idprac'];

 $sth2 = $objData->prepare('DELETE FROM practicas WHERE (id_Practica ='.$id.' )');
 $sth2->execute();
 
header('location: ../../index.php');
?>