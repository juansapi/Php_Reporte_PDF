<?php
     ini_set("display_errors", "off"); 
	//Código para incluir las librerias
	 include_once("conexion.php");
	 include('MyFPDF.php');

	 //Conexión con el servidor
	  $link=ConectarseServidor();

	 //Conexión con la base de datos
	  ConectarseBaseDatos($link);

	 //realiza consulta a la base de datos
	 $sql = "select * from candidato"; 
     
     $result=mysql_query($sql,$link);

	   
	   //inclusión de rutinas para crear informes PDF
	   $pdf=new MyFPDF();
	   $pdf->AddPage('P');
	   $pdf->SetFont('Arial','B',11);
	   $pdf->Cell(0,8,"Informacion Candidato",0,0,'C',0);
	   $pdf->Cell(0,20,"",0,1,'',0);

		//titulos de las columnas
		$pdf->SetTextColor(0,0,0); //rgb	
		$pdf->Cell(20,5,'Cedula',1,0,'C');	
		$pdf->Cell(20,5,'Nombre',1,0,'C');	
		$pdf->Cell(20,5,'Apellido',1,0,'C');	
		$pdf->Cell(20,5,'Dirrecion',1,0,'C');	
		$pdf->Cell(20,5,'Telefono',1,0,'C');	
		$pdf->Cell(20,5,'Celular',1,0,'C');
		$pdf->Cell(20,5,'Email',1,0,'C');
		$pdf->Cell(20,5,'Edad',1,0,'C');
		$pdf->Cell(20,5,'Sexo',1,1,'C');	
		$pdf->SetFont('Arial','',10);

		//impresion de datos obtenidos desde la BD
		 while($row = mysql_fetch_array($result)){
			  $pdf->Cell(20,4,$row["cedula"],1,0,'C');
			  $pdf->Cell(20,4,$row["nombre"],1,0,'C');
			  $pdf->Cell(20,4,$row["apellido"],1,0,'C');
			   $pdf->Cell(20,4,$row["dirrecion"],1,0,'C');
			  $pdf->Cell(20,4,$row["telefono"],1,0,'C');
			  $pdf->Cell(20,4,$row["celular"],1,0,'C');
			    $pdf->Cell(20,4,$row["email"],1,0,'C');
				  $pdf->Cell(20,4,$row["edad"],1,0,'C');
			  $pdf->Cell(20,4,$row["sexo"],1,1,'C');
		
		  }//fin del while	
		
		 //libera memoria
		mysql_free_result ($result);

		//genera el PDF en el Navegador
		$pdf->Output();  
		//genera el PDF en un archivo
	    $pdf->Output("d:\ReporteIMC.pdf");  			 
?>