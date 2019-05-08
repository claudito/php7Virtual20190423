<?php 

//Conexion a la Base de Datos => PDO

try {
	
//Conexion
$conexion = new PDO( 

"mysql:host=localhost;dbname=db_info",
"root",
"",
array(

PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"

)

);

$conexion->setAttribute(

PDO::ATTR_ERRMODE,//ERRORES
PDO::ERRMODE_EXCEPTION //EXCEPCIONES

);

//consulta

$query  = "

SELECT

id,
nombres,
apellidos,
celular,
correo

FROM  usuario ";

//SEnTENCIA PREPARADA

//Evaluar el código SQL
$statement = $conexion->prepare($query);

//ejecución
$statement->execute();

//array de datos
$result  = $statement->fetchAll(PDO::FETCH_ASSOC);

//var_dump($result);

//echo json_encode($result);

$json =  array("data"=>$result);

echo json_encode($json);


} catch (Exception $e) {

echo "Error: ".$e->getMessage();
	
}






 ?>