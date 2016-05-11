<?php
/*
Template name: Afiliate
*/
get_header(); ?>

<div class="container body">


	<div class="col-md-12">
		<section class="seccion-area">
		<span class="subtitulo"> Formulario </span>
		<h1 class="titulo-pag">Formulario de pre-afiliación</h1>
		<p class="copete"><strong>Proponé la afiliación a tus compañeros de cátedra, laboratorio o escuela. </strong>
AGD es el único sindicato de la UBA que defiende los derechos de las y los docentes preuniversitarios y universitarios. Lucha por un salario igual a la canasta familiar, por estabilidad laboral y mejores condiciones de trabajo y por una Universidad pública, gratuita, científica. 
Al gremio lo encontrás cada día en tu lugar de trabajo, en las marchas, en las asambleas y en cada lucha por las reivindicaciones de los trabajadores docentes de la UBA:  por la paritaria, contra las cesantías de los jubilables, por la estabilidad de los docentes del CBC y de todas las unidades académicas, por el salario para los ad honorem, en apoyo a la lucha de nuestros becarios. También como parte de la lucha por las libertades democráticas y los DDHH. Y por la solidaridad concreta y movilizada en unión con los docentes de los restantes niveles y los trabajadores en general que dan batalla por sus derechos.
 AGD plantea la independencia política de las autoridades y el Estado, defiende la democracia sindical construyendo cada mandato en asamblea de afiliados confronta con las burocracias sindicales, se opone por el vértice a las burocracias que dan la espalda al movimiento docente y entregan nuestras condiciones de trabajo.
Porque necesitamos fortalecer la AGD como instrumento para avanzar y conquistar nuestras reivindicaciones. Afiliate y afiliá a la AGD.</p> <br>

<h4>Para afiliarse a AGD-UBA es necesario completar el siguiente formulario y nos contactaremos </h4>
<br>

				<form action="postulacion.php" method="post"> 
					<div>
						<div class="col-md-3 afiliacion">
							<p><label class="afiliacion">Apellido</label> <br>
							<input class="a1" type="text" name="apellido" required />
							</p>
						</div>
						
						<div class="col-md-3 afiliacion">
							<p><label class="afiliacion">Nombres</label> <br>
							<input class="a1" type="text" name="nombre" required />
							</p>
						</div>

					
						<div class="col-md-3 afiliacion">
							<p><label class="afiliacion">Teléfono</label> <br>
							<input class="a1" type="text" name="telefono" required />
							</p>
						</div>
						

						<div class="col-md-3 afiliacion">
							<p><label class="afiliacion">Correo electrónico</label> <br>
							<input class="a1" type="text" name="correo" required />
							</p><br>
						</div>
						<br>

						<h2 class="titulo-cont"> Cargos Docentes en UBA </h2>

						<div class="col-md-3">
							<p>
								 <select name="categoria" class="cargos">
   									<option value="Cat01">Cat01</option>
   									<option value="Cat02">Cat02</option>
   									<option value="Cat03">Cat03</option>
   									<option value="Cat04">Cat04</option>
  								</select>
							</p>
						</div>

						<div class="col-md-3">
							<p>
								 <select name="dedicacion" class="dedicacion">
   									<option value="ded01">Dedicacion01</option>
   									<option value="ded01">Dedicacion02</option>
   									<option value="ded01">Dedicacion03</option>
   									<option value="ded01">Dedicacion04</option>
  								</select>
							</p>
						</div>

						<div class="col-md-3">
							<p>
							<input class="a2" type="text" name="legajo" required />
							</p>
						</div>

						<div class="col-md-3">
							<p>
								 <select name="facultad" class="facultad">
   									<option value="fac01">Facultad01</option>
   									<option value="fac2">Facultad02</option>
   									<option value="fac03">Facultad03</option>
   									<option value="fac04">Facultad04</option>
  								</select>
							</p>
		
						</div>
						

						<div>
						<p><input class="radio" type="checkbox" name="acepto" required />Acepto la Política de Confidencialidad y Protección de Datos Personales</p>
						<label class="a1"><input class="a1 enviar" type="submit" name="submit" value="Enviar" /></label>
						</div>


					</div>
				</form>
		</section>
	</div>
</div>

<?php get_footer(); ?>