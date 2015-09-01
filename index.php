<?php
require 'conexion.php';
// require 'comun.php';
?>
<html>
	<head>
		<title>Register Changes</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="normalize.css" />
		<link rel="stylesheet" href="estilos.css" />
	</head>
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
					<tbody>
						<?php
						while($row = mysqli_fetch_array($result)) {
						?>
					<tr>
						<td>
							<?php echo $row['school_id'];?>
						</td>
						<td>
							<?php echo $row['report_name'];?>
						</td>
						<td align="center">
							<?php echo $row['modification_date'];?>
						</td>
						<td>
							<?php echo $row['observation'];?>
						</td>
						<td>
							<a href="update.php?id=<?php echo $row['id'];?>" class="btn">Update</a>
							<!-- <a href="#" class="btn" id="update">Update</a> -->
						</td>
						<td>
							<a href="remove.php?id=<?php echo $row['id'];?>" class="btn">Remove</a>
						</td>
					</tr>
						<?php } 
						?>
					</tbody>
				</thead>
			</table>
			</div>
		</section>
		<footer>
			<h2>Registro de Modificaciones en Informes.XML Ciudad Educativa</h2>
		</footer>
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="formulario.js"></script>			
	</body>
</html>