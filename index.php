 <!DOCTYPE html>
<html>
    <head>
        <title>	Elecciones del Congreso de la republica</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="js/jQuery.js"></script>
        <script src="js/Proceso.js"></script> 
		<script src="js/Reporte.js"></script> 
		<script src="js/Reporte2.js"></script> 
    </head>
    <body>
		<div class="container">

			<div class="row">
			    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<form role="form">
						<h1>Informaci&oacute;n del Candidato</h1>
						
		
						<hr class="colorgraph">
						<div class="row">
						
							<h2> Datos b&aacute;sicos</h2>
						
							<div class="col-xs-12 col-sm-6 col-md-6">						
								<div class="form-group">
			                        <input type="text" name="txtCedula" id="txtCedula" class="form-control input-lg" placeholder="Cedula" tabindex="1">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="txtNombre" id="txtNombre" class="form-control input-lg" placeholder="Nombre" tabindex="2">
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="txtApellido" id="txtApellido" class="form-control input-lg" placeholder="Apellido" tabindex="3">
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="txtDirrecion" id="txtDirrecion" class="form-control input-lg" placeholder="Dirrecion" tabindex="4">
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="txtTelefono" id="txtTelefono" class="form-control input-lg" placeholder="Telefono" tabindex="5">
								</div>
							</div>
						</div>
						
						
						<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="txtCelular" id="txtCelular" class="form-control input-lg" placeholder="Celular" tabindex="6">
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="txtEmail" id="txtEmail" class="form-control input-lg" placeholder="Email" tabindex="7">
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="txtEdad" id="txtEdad" class="form-control input-lg" placeholder="Edad" tabindex="8">
								</div>
							</div>
						</div>
						
						
						<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="txtSexo" id="txtSexo" class="form-control input-lg" placeholder="Sexo" tabindex="9">
								</div>
							</div>
						</div>
						
						<h4>Generar pdf de informacion B&aacute;sica</h4>
						<img src="img/pdf.gif" onClick="generarPDF();">
						
						<h2>Datos Generales</h2>
						
						<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="txtPartido" id="txtPartido" class="form-control input-lg" placeholder="Partido" tabindex="10">
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="txtPostulacion" id="txtPostulacion" class="form-control input-lg" placeholder="Postulacion" tabindex="11">
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="txtTarjeton" id="txtTarjeton" class="form-control input-lg" placeholder="Tarjeton" tabindex="12">
								</div>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="txtLema" id="txtLema" class="form-control input-lg" placeholder="Lema" tabindex="13">
								</div>
							</div>
						</div>
						
						
						
						
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-md-6"><div class="btn btn-primary btn-block btn-lg" tabindex="14" id="btnCalcular">Guardar Informaci&oacute;n</div></div>
							<h4>Generar pdf de informaci&oacute;n general</h4>
							<img src="img/pdf.gif" onClick="generarPDF2();">
						</div>
					</form>
				</div>
			</div>
		</div>
    </body>
   
    </div>
	</div>
</html>