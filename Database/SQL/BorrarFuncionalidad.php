<?php
include 'conexion.php';
$objData = new  Database();

 $id=$_POST['idfunc'];

 $sth2 = $objData->prepare('DELETE FROM funcionalidades WHERE (id_Funcionalidad ='.$id.' )');
 $sth2->execute();
 


header('location: ../../index.php');
?>