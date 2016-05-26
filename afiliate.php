<?php
/*
Template name: Afiliate
*/
get_header(); ?>

<?php
if(isset($_POST['submit'])){
	$to = 'sjgandara@yahoo.com.ar';
	$subject = 'Formulario Afiliacion';
	$body= '<br>Nombre: '.$_POST['nombre'];
	$body.= '<br>Apellido: '.$_POST['apellido'];
	$body.= '<br>Telefono: '.$_POST['telefono'];
	$body.= '<br>Correo: '.$_POST['correo'];
	$body.= '<br>CARGOS DOCENTES EN UBA';
	$body.= '<br>Categoria: '.$_POST['categoria'];
	$body.= '<br>Dedicacion: '.$_POST['dedicacion'];
	$body.= '<br>Legajo: '.$_POST['legajo'];
	$body.= '<br>Facultad: '.$_POST['facultad'].'</p>';
	$headers = array('Content-Type: text/html; charset=UTF-8');
	wp_mail( $to, $subject, $body, $headers );
	echo '<p class="success">Formulario enviado con éxito</p>';
}
?>

<div class="container body">
	<div class="col-md-12 afiliacion">
		<section class="seccion-area">
		<span class="subtitulo"> Formulario </span>
		<h1 class="titulo-pag">Formulario de pre-afiliación</h1>
		<p class="copete">
		Proponé la afiliación a tus compañeros de cátedra, laboratorio o escuela. 
		AGD es el único sindicato de la UBA que defiende los derechos de las y los docentes preuniversitarios y universitarios. Lucha por un salario igual a la canasta familiar, por estabilidad laboral y mejores condiciones de trabajo y por una Universidad pública, gratuita, científica. <br>
		Al gremio lo encontrás cada día en tu lugar de trabajo, en las marchas, en las asambleas y en cada lucha por las reivindicaciones de los trabajadores docentes de la UBA:  por la paritaria, contra las cesantías de los jubilables, por la estabilidad de los docentes del CBC y de todas las unidades académicas, por el salario para los ad honorem, en apoyo a la lucha de nuestros becarios. También como parte de la lucha por las libertades democráticas y los DDHH. Y por la solidaridad concreta y movilizada en unión con los docentes de los restantes niveles y los trabajadores en general que dan batalla por sus derechos.<br>
		AGD plantea la independencia política de las autoridades y el Estado, defiende la democracia sindical construyendo cada mandato en asamblea de afiliados confronta con las burocracias sindicales, se opone por el vértice a las burocracias que dan la espalda al movimiento docente y entregan nuestras condiciones de trabajo.<br>
		Porque necesitamos fortalecer la AGD como instrumento para avanzar y conquistar nuestras reivindicaciones. Afiliate y afiliá a la AGD.</p> <br>
		<h4>Para afiliarse a AGD-UBA es necesario completar el siguiente formulario y nos contactaremos </h4>
		<br>

				<form action="" method="post"> 
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
							<input class="a1" type="text" name="telefono"  />
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
   									<option value="Titular">Titular</option>
   									<option value="Asociado">Asociado</option>
   									<option value="Adjunto">Adjunto</option>
   									<option value="JTP">Jefe de Trabajos Prácticos</option>
									<option value="Ay1">Ayudante de primera</option>
   									<option value="Ay2">Ayudante de segunda</option>
   									<option value="Otros">Otros</option>

  								</select>
							</p>
						</div>

						<div class="col-md-3">
							<p>
								 <select name="dedicacion" class="dedicacion">
   									<option value="Simple">Simple</option>
   									<option value="Semi">Semi</option>
   									<option value="Exclusiva">Exclusiva</option>
  								</select>
							</p>
						</div>

						<div class="col-md-3">
							<p>
							<input class="a2" type="text" name="legajo"  placeholder="Legajo" />
							</p>
						</div>

						<div class="col-md-3">
							<p>
								 <select name="facultad" class="facultad">
   									<option value="fadu">Arquitectura, diseño y urbanismo</option>
   									<option value="CBC">CBC</option>
   									<option value="cnba">Colegio Nacional de Buenos Aires</option>
   									<option value="pelle">Carlos Pellegrini</option>
   									<option value="ilse">ILSE</option>
   									<option value="derecho">Derecho</option>
   									<option value="economicas">Económicas</option>
   									<option value="exactar">Exactas y Naturales</option>
   									<option value="ingenieria">Ingeniería</option>
   									<option value="medicina">Medicina</option>
   									<option value="sociales">Sociales</option>
   									<option value="veterinaria">Veterinaria</option>
   									<option value="agronomia">Agronomía</option>
   									<option value="psicologia">Psicología</option>
   									<option value="odontologia">Odontología</option>
									<option value="farmacia">Farmacia y Bioquímica</option>


  								</select>
							</p>
		
						</div>

						<div class="col-md-12 afiliacion">
							<p><input class="radio" type="checkbox" name="acepto" required />Acepto la Politica de Confidencialidad y Protección de Datos Personales</p>
							<label class="a1"><input class="a1 enviar" type="submit" name="submit" value="Enviar" /></label>
						</div>

					</div>
				</form>
		</section>
	</div>
</div>

<?php get_footer(); ?>