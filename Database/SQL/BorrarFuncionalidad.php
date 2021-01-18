<?php
include 'conexion.php';
$objData = new  Database();

 $id=$_POST['idfunc'];

 $sth1 = $objData->prepare('SELECT Nombre_Archivo FROM recursos_funcionalidades WHERE FK_Funcionalidades ='.$id.'');
 $sth1->execute();
        
 foreach ($sth1 as $currentUser) {
 $nombreArchivo= $currentUser['Nombre_Archivo']; 
 unlink('C:/xampp/htdocs/EasyLabWeb/assets/Archivos/'.$nombreArchivo.'');
}

 $sth2 = $objData->prepare('DELETE FROM recursos_funcionalidades WHERE (FK_Funcionalidades ='.$id.' )');
 $sth2->execute();

 $sth3 = $objData->prepare('DELETE FROM funcionalidades WHERE (id_Funcionalidad ='.$id.' )');
 $sth3->execute();
 
 
 

header('location: ../../index.php');
?>