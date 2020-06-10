 <?php
       ini_set("display_errors", "off");
       //Código para incluir las librerias
	   include_once("conexion.php");

	   //Conexión con el servidor
	   $link=ConectarseServidor();

	   //Conexión con la base de datos
	    ConectarseBaseDatos($link);

	  	
		
		//obtiene la informacion de las variables inmersas en el calculo del indice de masa corporal
		$cedula    		= $_POST["cedula"];
		$nombre 		= $_POST["nombre"];
		$apellido      	= $_POST["apellido"];
		$dirrecion  	= $_POST["dirrecion"];
		$telefono     	= $_POST["telefono"];
		$celular 		= $_POST["celular"];
		$email      	= $_POST["email"];
		$edad	        = $_POST["edad"];
		$sexo	        = $_POST["sexo"];
		$partido 		= $_POST["partido"];
		$postulacion   	= $_POST["postulacion"];
		$tarjeton	    = $_POST["tarjeton"];
		$lema	        = $_POST["lema"];
		
		//construye cadena con sentencia sql
		$query = "INSERT INTO candidato(cedula, nombre, apellido, dirrecion, telefono, celular, email, edad, sexo, partido, postulacion, tarjeton, lema)
		VALUES ('$cedula', '$nombre', '$apellido', '$dirrecion', '$telefono', '$celular', '$email', '$edad', '$sexo', '$partido', '$postulacion', '$tarjeton', '$lema')";
		
        /*Ejecución de la inserción*/
	     $respuesta=consultas($query);

    	/*Función para desconectarse de la base de datos*/
	    desconectarse($link);//cierra la conexion
 	
?>