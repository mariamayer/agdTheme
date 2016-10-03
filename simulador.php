<?php
/*
Template name: Simulador
*/
get_header(); ?>

<div class="container body">
<div class="col-md-12">
		<section class="seccion-area">
		<span class="subtitulo"> Calculador automático </span>
		<h1 class="titulo-pag">Grilla Salarial</h1>
		<p class="cuerpo">Elaboramos el presente simulador con el objetivo de brindar a los compañera/os una herramienta amigable que oriente el monto que debemos percibir como salario. 
Debe tenerse en cuenta que algunos items que no han sido contemplados, como la imposición del impuesto a las ganancias, asignaciones familiares, etc.<br>
		<a class="vinculo" href="<?php echo esc_attr( get_option('pdf') ); ?>" target="_blank"> Aqui </a> puede consultarse la grilla salarial vigente a la fecha para verificar cada uno de los items en detalle.<br>
		<a class="vinculo" href="http://agduba.org.ar/recibo-de-sueldo/" target="_blank"> Aqui </a> puede encontrar una guía sobre como leer el recibo de sueldo.<br> <br></p>


				<form action="<?php echo get_home_url(); ?>/grilla/" method="post"> 
					<div >
						

						<div class="col-md-6">
							<p> <span> Categoría </span>

								 <select name="categoria" class="categoria">
   									<option value="titular">Titular</option>
   									<option value="asociado">Asociado</option>
   									<option value="adjunto">Adjunto</option>
   									<option value="jtp">Jefe de Trabajos Prácticos</option>
   									<option value="ay1">Adyudante 1ra</option>
   									<option value="ay2">Adyudante 2da</option>
  								</select>
							</p>
						</div>

						<div class="col-md-6">
							<p> Dedicación
								 <select name="dedicacion" class="dedicacion">
   									<option value="simple">Simple/Parcial (P)</option>
   									<option value="semiexclusiva">Semi exclusiva (SE)</option>
   									<option value="exclusiva">Exclusiva (E)</option>
  								</select>
							</p>
						</div>

						<div class="col-md-6">
							<p> Antigüedad
								 <select name="antiguedad" class="antiguedad">
   									<option value="0">0 a 5</option>
   									<option value="0.3">5 a 7</option>
   									<option value="0.4">7 a 10</option>
   									<option value="0.5">10 a 12</option>
   									<option value="0.6">12 a 15</option>
   									<option value="0.7">15 a 17</option>
   									<option value="0.8">17 a 20</option>
   									<option value="1">20 a 22</option>
   									<option value="1.1">22 a 24</option>
   									<option value="1.2">Mayor a 24</option>
  								</select>
							</p>
						</div>

						<div class="col-md-6">
							<p> Cobra plus por:
								 <select name="especializacion" class="especializacion">
   									<option value="no">No tiene</option>
   									<option value="especializacion">Especialización</option>
   									<option value="maestria">Maestría</option>
   									<option value="doctorado">Doctorado</option>
  								</select>
							</p>
						</div>

						<div class="col-md-12">
						<p> ¿Está afiliado a AGD?
								 <select name="afiliacion" class="especializacion">
   									<option value="si">Si</option>
   									<option value="no">No</option>
  								</select>
							</p>
						</div>


						<p><input class="radio" type="checkbox" name="acepto" required />Acepto la Política de Confidencialidad y Protección de Datos Personales</p>
						<label class="a1"><input class="a1 enviar" type="submit" name="submit" value="Consultar" /></label> <br>
						<hr>


					</div>
				</form>
		</section>
	</div>


</div>

<?php get_footer(); ?>