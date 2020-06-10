<?php
     ini_set("display_errors", "off"); 
	//Código para incluir las librerias
	 include_once("conexion.php");
	 include('MyFPDF2.php');

	 //Conexión con el servidor
	  $link=ConectarseServidor();

	 //Conexión con la base de datos
	  ConectarseBaseDatos($link);

	 //realiza consulta a la base de datos
	 $sql = "select * from candidato"; 
     
     $result=mysql_query($sql,$link);

	   
	   //inclusión de rutinas para crear informes PDF
	   $pdf=new MyFPDF2();
	   $pdf->AddPage('P');
	   $pdf->SetFont('Arial','B',11);
	   $pdf->Cell(0,8,"Informacion Candidato",0,0,'C',0);
	   $pdf->Cell(0,20,"",0,1,'',0);

		//titulos de las columnas
		$pdf->SetTextColor(0,0,0); //rgb	
		$pdf->Cell(35,5,'Partido Politico',1,0,'C');	
		$pdf->Cell(35,5,'Tipo postulacion',1,0,'C');	
		$pdf->Cell(35,5,'nroTarjeton',1,0,'C');	
		$pdf->Cell(35,5,'lema',1,1,'C');	
		$pdf->SetFont('Arial','',10);

		//impresion de datos obtenidos desde la BD
		 while($row = mysql_fetch_array($result)){
			  $pdf->Cell(35,4,$row["partido"],1,0,'C');
			  $pdf->Cell(35,4,$row["postulacion"],1,0,'C');
			  $pdf->Cell(35,4,$row["tarjeton"],1,0,'C');
			   $pdf->Cell(35,4,$row["lema"],1,1,'C');
			 
		  }//fin del while	
		
		 //libera memoria
		mysql_free_result ($result);

		//genera el PDF en el Navegador
		$pdf->Output();  
		//genera el PDF en un archivo
	    $pdf->Output("d:\DatosCandidato.pdf");  			 
?>