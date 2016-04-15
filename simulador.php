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

				<form action="grilla.php" method="post"> 
					<div >
						

						<div class="col-md-4">
							<p>
								 <select name="cargo" class="cargos">
   									<option value="Cargo01">Cat01</option>
   									<option value="Cat02">Cat02</option>
   									<option value="Cat03">Cat03</option>
   									<option value="Cat04">Cat04</option>
  								</select>
							</p>
						</div>

						<div class="col-md-4">
							<p>
								 <select name="dedicacion" class="cargos">
   									<option value="ded01">Dedicacion01</option>
   									<option value="ded01">Cat02</option>
   									<option value="ded01">Cat03</option>
   									<option value="ded01">Cat04</option>
  								</select>
							</p>
						</div>

						<div class="col-md-4">
							<p>
								 <select name="antiguedad" class="cargos">
   									<option value="ded01">Dedicacion01</option>
   									<option value="ded01">Cat02</option>
   									<option value="ded01">Cat03</option>
   									<option value="ded01">Cat04</option>
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
						<p> 102 | - </p>
						<p> 103 | $ 1245,00 </p>


						<h2 > Codigo no remunerativo </h2>
						<p> 174 | $ 245,00 </p>

						<h2> Código remunerativo*</h2>
						<p> 110 | $ 3.251,66 </p>
						<hr>
						<p> Título (*): Se considera un título doctorado con 17% sobre el básico, si fuese Maestría corresponde 7% del básico, Especialización 5% del básico


					</div>
				</form>
		</section>
	</div>


</div>

<?php get_footer(); ?>