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
		<p class="cuerpo">Podes descargar la grilla salarial vigente o utilizar el calculador automático (actualmente en versión de prueba) </p>
		<a class="vinculo" href="http://agduba.org.ar/wp-content/uploads/grilla_salarial_docente_noviembre_2015.pdf" target="_blank"> Grilla Salarial 2015 </a><span>


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
   									<option value="0.10">20 a 22</option>
   									<option value="0.11">22 a 24</option>
   									<option value="0.12">Mayor a 24</option>
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

						<h2 style="color:#e31f26"> Total sueldo bruto </h2>
						<p> $ 11.474,24 </p>

						<h2> Codigo remunerativo </h2>
						<p> 101 | $ 9.561,80 </p>
						<p> 103 | $ 1245,00 </p>
						<p> 120 | $ 1245,00 </p>
						<p> 174t | $ 245,00 </p>
						<p> 110 | $ 3.251,66 </p>


						<h2 > Total de haberes </h2>
						<p> 174 | $ 245,00 </p>

						<p> 201 | $ 9.561,80 </p>
						<p> 247 | $ 1245,00 </p>
						<p> 210 | $ 1245,00 </p>
						<p> 207t | $ 245,00 </p>
						<p> 214 | $ 3.251,66 </p>
						<p> 234 | $ 3.251,66 </p>
						<p> 282 | $ 3.251,66 </p>

						<h2> Sueldo Neto*</h2>
						<p> 110 | $ 3.251,66 </p>
						<hr>
						<p> Aclaraciones (*): Se considera un título doctorado con 17% sobre el básico, si fuese Maestría corresponde 7% del básico, Especialización 5% del básico


					</div>
				</form>
		</section>
	</div>


</div>

<?php get_footer(); ?>