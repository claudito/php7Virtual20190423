<?php 

//Conexion a la Base de Datos => PDO

try {
	
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

$query =  "  

SELECT 
id,
nombres,
apellidos,
celular,
correo

FROM  usuario";

$statement  = $conexion->prepare($query);
$statement->execute();

$result  = $statement->fetchAll(PDO::FETCH_ASSOC);

//var_dump($result);

echo json_encode($result);


} catch (Exception $e) {

echo "Error: ".$e->getMessage();
	
}






 ?>