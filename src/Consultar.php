 <?php
    ini_set("display_errors", "off");
	//Código para incluir las librerias
	 include_once("conexion.php");


	 //Conexión con el servidor
	  $link=ConectarseServidor();

	 //Conexión con la base de datos
	  ConectarseBaseDatos($link);

	 //realiza consulta a la base de datos
	 $sql = "select * from candidato"; 
     
     $result=mysql_query($sql,$link);
	 
	 
	  
		while($row = mysql_fetch_array($result)){
			$datos   = array('nombre' => $row['nombre'] , 'apellido' => $row['apellido'] , 'dirrecion' => $row['dirrecion'],
            'telefono' => $row['telefono'] , 'celular' => $row['celular'] , 'email' => $row['email'], 'edad' => $row['edad'] , 'sexo' => $row['sexo']
		 'partido' => $row['partido'] , 'postulacion' => $row['postulacion'] , 'tarjeton' => $row['tarjeton'], 'lema' => $row['lema']);
		    $rows[]     = $datos;
		}

	/*Función para desconectarse de la base de datos*/
	desconectarse($link);//cierra la conexion

    echo json_encode($rows);
 	
?>