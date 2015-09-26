<?php
include 'conexion.php';

$registros = 10;
$contador = 1;
$pagina = '';

if (!$pagina) { 
    $inicio = 0; 
    $pagina = 1; 
} else { 
    $inicio = ($pagina - 1) * $registros; 
} 


// $query = mysqli_query($link, "SELECT * FROM register_changes_reports"); 

?>
<html>
	<head>
		<title>Register Changes</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="normalize.css" />
		<link rel="stylesheet" href="estilos.css" />
	<body>
		<header>
			<h1>Register of Changes</h1>
			<nav>
				<ul>
					<li id='new_register'>
						<a href="#" id="mostrar-form" class="btn">New Register</a>
					</li>
				</ul>
			</nav>
			<form name="new_user" id="formulario" class="formulario" method="post" action="save_user.php" autocomplete="on">
				<p><h3>New Register</h3></p>
				<input id="school" class="formInput" type="number" name="school" min="101" placeholder="School" required/>
				<input class="formInput" list="report" name="report" placeholder="Report"/>
				<input class="formInput" type="date" name="dates" min="2010-01-01" />
				<datalist id="report">
				  <option value="Boletin de Periodo">
				  <option value="Boletin de periodo con Definitiva">
				  <option value="Boletin de periodo antes de Promoción">
				  <option value="Boletin de periodo despues de Promoción">
				  <option value="Carnet Administrativos">
				  <option value="Carnet Estudiantes">
				  <option value="Certificado de Curso y Aprobo">
				  <option value="Certificado Traslado">
				  <option value="Constancia de Estudio">
				  <option value="Hoja de Matricula">
				  <option value="Libro de Calificaciones">
				  <option value="Paz y Salvo">
				  <option value="Planilla por Docente">
				 </datalist>
				<textarea placeholder="Motivo" class="textArea" name="observation"></textarea>
				<input type="submit" name="join" value="Join" class="btn">
			</form>
		</header>
		<section>
			<div id='table_register'>
			<table border="1" width="100%" >
				<thead>
					<tr>
						<th width="5%" class="table_th"><b>School</b></th>
						<th width="30%" class="table_th"><b>Report</b></th>
						<th width="20%" class="table_th"><b>Date</b></th>
						<th width="50%" class="table_th"><b>Observation</b></th>
						<th colspan="2" class="table_th"><b>Acciones</b></th>
					</tr>
				</thead>
					<tbody>
						<?php
							$resultados = mysqli_query($conn, "SELECT * FROM register_changes_reports");
							$total_registros = mysqli_num_rows($resultados);

							$resultados = mysqli_query($conn, "SELECT * FROM register_changes_reports LIMIT $inicio $registros");
							$total_paginas = ceil($total_registros / $registros);

							if ($total_registros) {
								if($resultados === FALSE) { 
								    die(mysqli_connect_error());
								}		
	
								while($reportes = mysqli_fetch_array($resultados, MYSQLI_BOTH)) {
								?>
								<tr>
									<td>
										<?php echo $reportes['school_id'];?>
									</td>
									<td>
										<?php echo $reportes['report_name'];?>
									</td>
									<td align="center">
										<?php echo $reportes['modification_date'];?>
									</td>
									<td>
										<?php echo $reportes['observation'];?>
									</td>
									<td>
										<a href="update.php?id=<?php echo $reportes['id'];?>" class="btn">Update</a>
									</td>
									<td>
										<a href="remove.php?id=<?php echo $reportes['id'];?>" class="btn">Remove</a>
									</td>
								</tr>
							<?php } 
							} else {
								echo "<font color='darkgray'>(sin resultados)</font>";
							}

							mysqli_free_result($resultados);
							?>
					</tbody>
			</table>
			</div>
			<div class="pagination">
				<?php
					if ($total_registros) {
						if (($pagina - 1) > 0) {
							echo "<a href='index2.php?pagina=" . ($pagina-1) . "'>< Anterior</a>";	
						} else {
							echo "<a href='#'>< Anterior</a>";
						}

						for ($i = 1; $i <= $total_paginas; $i++) {
							if ($pagina == $i) {
								echo "<a href='#'>". $pagina ."</a>"; 
							} else {
								echo "<a href='paginacion.php?pagina=$i'>$i</a> "; 
							}	
						}
			 
				  		
						if (($pagina + 1)<=$total_paginas) {
							echo "<a href='paginacion.php?pagina=".($pagina+1)."'>Siguiente ></a>";
						} else {
							echo "<a href='#'>Siguiente ></a>";
						}	
					}
				?>
			</div>
			<?php
				mysqli_close($conn);
			?>
		</section>
		<footer>
			<h2>Registro Unico de Modificaciones en XML Ciudad Educativa</h2>
		</footer>			
	</body>
</html>