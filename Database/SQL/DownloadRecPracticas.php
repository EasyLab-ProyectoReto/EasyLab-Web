<?php

include'conexion.php';

$objData = new  Database();

$idPractica = $_GET['idPractica'];

$sth1 = $objData->prepare('SELECT * from recursos_practicas where id_RecursoP =:idPractica');          
$sth1->bindParam(':idPractica', $idPractica);
$sth1->execute();

foreach ($sth1 as $currentUser) {
  $Nombre_Archivo = $currentUser['Nombre_Archivo'];
  $Tamanio = $currentUser['Tamaño'];
  $Tipo = $currentUser['Tipo'];
  $Ruta = $currentUser['Ruta'];
  echo "$Ruta";

header('Content-Type: application/octet-stream');  
header("Content-Transfer-Encoding: Binary");   
header("Content-disposition: attachment; filename=\"" . basename($Ruta) . "\"");   
readfile($Ruta);
}
/*header('Content-type: application/pdf'); 
header('Content-Disposition: inline; filename="'.$file.'"'); 
header('Content-Transfer-Encoding: binary'); 
header('Accept-Ranges: bytes'); 
@readfile($file);  

*/
?>