<?php
include 'conexion.php';
$objData = new  Database();

 $id=$_POST['idprac'];

 $sth1 = $objData->prepare('SELECT Nombre_Archivo FROM recursos_practicas WHERE FK_Practicas ='.$id.'');
 $sth1->execute();
        
 foreach ($sth1 as $currentUser) {
 $nombreArchivo= $currentUser['Nombre_Archivo']; 
 unlink('C:/xampp/htdocs/EasyLabWeb/assets/Archivos/'.$nombreArchivo.'');
}

 $sth2 = $objData->prepare('DELETE FROM recursos_practicas WHERE (FK_Practicas ='.$id.' )');
 $sth2->execute();
 
 $sth3 = $objData->prepare('DELETE FROM practicas WHERE (id_Practica ='.$id.' )');
 $sth3->execute();
 
header('location: ../../index.php');
?>