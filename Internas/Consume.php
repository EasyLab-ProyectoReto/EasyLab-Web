<?php
$data = json_decode(file_get_contents("https://api-easylab.herokuapp.com/ApiRest/Formulario?fbclid=IwAR0O6juItrqp2UJfWoD4tUEQueiyxmcvVLwLCr-FQfGgXFfFsgR8H4c8gXo"), true);
echo "<br>";

for ($i=0; $i < count($data); $i++) { 
	echo $data[$i]["nombre_Pregunta"]."<br>";
}
?>