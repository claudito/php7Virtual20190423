<?php 

try {

/*
PDO 4 parametros:
1. 
 a Driver: Tipo de Motor de BD(mysql,sqlserver,oracle,etc)
 b Servidor: localhost,IP, nombre de dominio DNS
 c Nombre de la base de datos
 2. Nombre del usuario de la BD
 3. Contraseña
 4. Configuración (UTF-8)
*/
$conexion = new PDO(

"mysql:host=localhost;dbname=db_info",
"root",
"",
array(

//Activar la validación de UTF8
PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'

)

);
//Activar los errores o excepciones
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


	
} catch (Exception $e) {

 //Creación y/oConfiguración del mensaje de error Y/o excepción  
 echo "Error: ".$e->getMessage();

}



 ?>