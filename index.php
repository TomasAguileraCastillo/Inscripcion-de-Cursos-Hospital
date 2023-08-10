<?php 
header('Content-Type: text/html; charset=UTF-8');  
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Pre-Inscripción Cursos</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

<!--===============================================================================================-->
</head>
<body>
<script>
		function habilitar(value)
		{
			if(value=="1" || value==true)
			{
				// habilitamos
				//document.getElementById("segundo").disabled=false;
				/*document.getElementById("ETO").disabled=false;
				document.getElementById("UN").disabled=false;
				document.getElementById("CDJ").disabled=false;
				document.getElementById("validationTextarea").disabled=true;
				document.getElementById("validationTextarea").value = "";

			}else if(value=="2" || value==false){
				// deshabilitamos
				//document.getElementById("segundo").disabled=true;
				document.getElementById("ETO").disabled=true;
				document.getElementById("UN").disabled=true;
				document.getElementById("CDJ").disabled=true;
				
				document.getElementById("validationTextarea").disabled=false;
				document.getElementById("ETO").value = "";
				document.getElementById("UN").value = "";
				document.getElementById("CDJ").value = "";
				document.getElementById("ETO").require = false;
				document.getElementById("UN").require = false;
				document.getElementById("CDJ").require = false;*/
			}
		}
	</script>

                

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form id="formjornada" method="POST" name="formjornada" class="contact100-form validate-form">
			<table style="height: 100px;" >
					<tbody>
						<tr>
						<td class="align-middle">
							<h2>Cursos PAC 2020</h2>
							<h2>Pre-Inscríbete!</h2>
						</td>
						<td class="align-text-top">
						<div class="col-6 col-md-4">
						<!--<img src="" width="220" height="254" >-->
						</div>
						</td>
						</tr>
					</tbody>
					</table>	
				<div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
						
								<label for="validationDefault01">Ingresa tu Rut <br><small>el rut debe ser sin puntos ni guion</small></label>
								<input type="text"  class="form-control" id="RT" required placeholder="" name="rut"onblur="return Rut(formjornada.rut.value)" maxlength="10"/>

							</div>
							<!-- Alerta informa --> 
							<div id="alerta" class="text-center" role="alert">
                  			<span id="mensaje"></span>
							</div>
                		<!-- FIN ALERTA -->
              
						</div>
						<div class="form-row">
							<div class="col-md-12 mb-3">
								<label for="validationDefault01">Nombres</label>
								
								<input type="text"
								class="form-control"  
								id="NMB" 
								name="NMB" 
								required  
                                                                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
								 
								title="Ingrese solo letras Mayusculas y Minusculas.">

								 
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationDefault01">Apellido Paterno</label>
								<input 	
								type="text" 
								class="form-control" 
								id="APP" 
								name="APP" 
								required    
								title="Ingrese solo letras Mayusculas y Minusculas."
								pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" 
								>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationDefault02">Apellido Materno</label>
								<input 
								type="text" 
								class="form-control" 
								id="APM" 
								name="APM" 
								required    
								title="Ingrese solo letras Mayusculas y Minusculas."
								pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" 
								>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12 mb-3">
								<label for="validationDefault03">Email</label>
								<input type="email" 
								class="form-control" 
								id="EML" 
								name="EML" 
								required placeholder="xxxxxxx@xxxxx.xx" 
								title="Ingrese un correo valido y en el formato indicado."
								pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
								>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-2 mb-3">
								<label for="validationDefault05">Teléfono</label>
								<input	type=""
										class="form-control" 
										value="+569" 
										readonly="readonly"  >
							</div>
							<div class="col-md-10 mb-3">
								<label for="validationDefault05">Móvil</label>
								
								<input type="text" 
								id="CLR" 
								name="CLR"
								class="form-control"
								required 
								placeholder="12345678" 
								maxlength="8"
								title="Ingrese un N° de Telefono Valido, solo 8 digitos."
								oninput="this.value = this.value.replace(/[^0-9\-]+/g, '').replace(/(\..*)\./g, '$1');">

								<!--<input	type="tel" 
										class="form-control" 
										id="CLR" 
										name="CLR" 
										required 
										placeholder="12345678" 
										maxlength="8" 
										onkeypress="return isNumber(event)"
										title="Ingrese un N° de Telefono Valido, solo 8 digitos." >-->
							</div>
								
						</div>
                                                <div class="form-row">
							<div class="col-md-12 mb-3">
								<label for="validationDefault05">Cargo</label>
                        			<input	type="text" 
										class="form-control" 
										id="CARG" 
										name="CARG" 
										required 
										placeholder=""
										pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
                                                                                >										
							</div>
								
						</div>
						
						
							<div class="form-row">
								<div class="col-md-12 mb-3">
										<label for="validationDefault04">Estamento</label>
											<select class="form-control"  id="ETO" name="ETO" required>
												<option selected disabled value="">Seleccione</option>
												<option>Médico</option>
												<option>Profesional Clínico no Médico</option>
                                                                                                <option>Otro Profesional no Médico</option>
												<option>Técnico</option>
												<option>Administrativo</option>
												<option>Auxiliar</option>
											</select>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="validationDefault05">Unidad</label>
									<input type="text" 
									class="form-control" 
									id="UN" 
									name="UN" 
									required  
									title="Ingrese solo letras Mayusculas y Minusculas."
									pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" 
									>
								</div>
								<div class="col-md-6 mb-3">
									<label for="validationDefault04">Calidad Jurídica</label>
									<select class="form-control"  id="CDJ" name="CDJ" required>
										<option selected disabled value="">Seleccione</option>
										<option>Titular</option>
										<option>Contrata</option>
										<option>Reemplazo</option>
										<option>Honorario</option>
									</select>
								</div>
							</div>
						
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<label id=" " name="" for="validationDefault04">Selecciona el Curso de tu Preferencia </labe>
							<!--<select class="form-control" id="CUR" name="CUR" onchange="habilitar(this.value);" required>-->
							<select class="form-control" id="CUR" name="CUR" required>
								<option selected disabled value="">Seleccione</option>
								<option >ACSL-0220 / Acoso Laboral y Sexual</option>
								<option >OBFR-0220 / Obligaciones Funcionarias y Responsabilidades Administrativas</option>
								<option >PGVS-0220 / Perspectivas actuales de Genero y violencia en Salud </option>
								<option >HESM-0220 / Herramientas para equipos de salud en el abordaje de migrantes</option>
								<option disabled >XLSI-0220 / MS Excel Nivel Intermedio (CUPOS AGOTADOS)</option>
								<option disabled >XLSA-0220 / MS Excel Nivel Avanzado (CUPOS AGOTADOS) </option>
								<option disabled >OFSA-0220 / MS Office para Secretarias y Administrativos(as)        (CUPOS AGOTADOS) </option>
								<option disabled >ASFT-0220 / Actualización en Seguridad Farmacoterapéutica para TENS (CUPOS AGOTADOS)</option>
								<option disabled >RCP1-0220 / RCP para Profesionales y TENS Grupo 1                   (CUPOS AGOTADOS)</option>
								<option disabled >RCP2-0220 / RCP para Profesionales y TENS Grupo 2(CUPOS AGOTADOS)</option>
								<option disabled >RCIA-0220 / RCP e IAAS Básico para Auxiliares/RCP Prof. y TENS Práctico 11/12/2020(CUPOS AGOTADOS)</option>
								<option >SAC1-0220 / Sensibilización para la Acreditación  Grupo 1</option>
								<option >SAC2-0220 / Sensibilización para la Acreditación  Grupo 2</option>
                                                                
                                                                <!--<option >SAC3-0220 / Sensibilización para la Acreditación  Grupo 3</option>
                                                                <option >SAC4-0220 / Sensibilización para la Acreditación  Grupo 4</option>-->
								
                                                                <option >HEPSCOVID19 / Herramientas y Estrategias de afrontamiento psicológico en la emergencia sanitaria COVID-19</option>
								<option disabled >GRGC-0220 / GRD y Gestión Clínica PRÓXIMAMENTE</option>
								 
							</select>
						</div>
					</div>
					</br>
					</br>
                			<div class="form-row">
									<div class="col-md-12 mb-3">
											
										
										<!--<label for="validationTextarea">
											<small>¿eneces?</small>
										</label>
										<textarea class="form-control " disabled id="validationTextarea" name="validationTextarea" placeholder="" required>
										</textarea>-->
										<div class="invalid-feedback">
										</div>
									</div>
                            	<div></div>
							</div>
					
					
						<input class="btn btn-primary btn btn-block submit" type="submit" value="Enviar" id="btninscribir" name="btninscribir">
			</form>
			<div class="contact100-more flex-col-c-m" style="background-image: url('images/laboratorio.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Hospital El Pino 
						</span>

						<span class="txt2">
							Av. Padre Hurtado 13560, San Bernardo. 
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr ldnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							 
						</span>

						<span class="txt3">
							
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-enwvelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Cursos Plan Anual de Capacitación (PAC) 2020. 
						</span>
						<span class="txt1 p-b-20">
							2° Semestre.
						</span>


						<span class="txt3">
							Desarrollo de Personas y Organización.
						</span>

						<br><br><br><br><br><br><br><br><br><br><br>
						<div class="contahiner">
						<img src="images\gob_hep_2011.jpg" class="floaht-left" alt=" " width="180" height="163"> 
						</div>
						 
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
				include("php2/agregar.php");
			?>

	<!--<div id="dropDownSelect1"></div>-->

	<!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	
  </button>-->
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered-sm ">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel"></h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body text-center">
		  ha sido inscrito con exito.
		</div>
		<div class="modal-footer">
		 <!---- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary">Save changes</button>-->
		</div>
	  </div>
	</div>
  </div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	 
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="js/fun.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	<script src="js/script.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
