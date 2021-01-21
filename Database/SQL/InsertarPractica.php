<?php
include'conexion.php';

$objData = new  Database();

$nombre = $_POST['nombre'];

$fecha = date('Y-m-d');
$descripcion= $_POST['descripcion'];
$archivo= $_FILES['archivo']['tmp_name'];
$nombreArchivo = $_FILES['archivo']['name'];
$tamanio= $_FILES["archivo"]["size"];
$ruta = "C:/xampp/htdocs/EasyLabWeb/assets/Archivos/";
$herramienta=$_POST['herramienta'];

$tipo = strtok($nombreArchivo,"."); 
$tipo = strtok(".");


$ruta = $ruta.basename( $_FILES['archivo']['name']);   
  
if(move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta)) {  
    echo "File uploaded successfully!";  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  


$query = $objData->prepare('SELECT max(id_Practica) as "practica" FROM practicas');
$query->execute();

foreach ($query as $currentUser) {
$id= $currentUser['practica']+1; 
 $sth2 = $objData->prepare('INSERT INTO practicas (id_Practica,Fecha,Nombre_Practica,Descripcion,FK_Herramientas_P)
                        VALUES('.$id.',:fecha,:nombre,:descripcion,'.$herramienta.')');     
$sth2->bindParam(':fecha', $fecha);    
$sth2->bindParam(':descripcion', $descripcion);  
$sth2->bindParam(':nombre', $nombre);  
$sth2->execute(); 
}

$query2 = $objData->prepare('SELECT max(id_Practica) as "practica" FROM practicas');
$query2->execute();
 
  foreach ($query2 as $currentUser2) {
         $id2= $currentUser2['practica']; 

         $query3 = $objData->prepare('SELECT max(id_RecursoP) as "rec" FROM recursos_practicas');
         $query3->execute();
        
         foreach ($query3 as $currentUser3) {
         $id3= $currentUser3['rec']+1; 

         $sth2 = $objData->prepare("INSERT INTO recursos_practicas (id_RecursoP,Nombre_Archivo,Tamaño,Tipo,Ruta,FK_Practicas)
                             VALUES('.$id3.',:nombreArchivo,:tamanio,:tipo,:ruta,'.$id2.')");     
         $sth2->bindParam(':nombreArchivo', $nombreArchivo);    
         $sth2->bindParam(':tamanio', $tamanio);  
         $sth2->bindParam(':ruta', $ruta); 
         $sth2->bindParam(':tipo', $tipo);   
         $sth2->execute(); 
         }
  }

header('location: ../../index.php');
?>   
