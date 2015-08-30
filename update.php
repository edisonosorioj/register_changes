<?php
	
	include("conexion.php");
	
	$id=$_GET['id'];
	
	$query="SELECT id, school_id, report_name, modification_date, observation FROM register_changes_reports where id='$id'";
	
	$result = $link->query($query);
	
	$row=$result->fetch_assoc();
	
?>

<html>
	<head>
		<title>Join</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="normalize.css" />
		<link rel="stylesheet" href="estilos.css" />
	</head>
	<body>
		<div id='update1'>
			<p><h3>Update the change</h3></p>
			<table id='tableupt'>
				<tr>
					<td>
						<form name="new_user" method="post" action="update_info.php" autocomplete="on">
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							School: <input type="number" name="school" min="101" value="<?php echo $row['school_id']; ?>" />
 							Date: <input type="text" name="dates" value="<?php echo $row['modification_date']; ?>" />
 							Report: <input list="report" name="report" value="<?php echo $row['report_name']; ?>" />
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
							Observation:<input type="text" id="txtarea" name="obser" wrap="hard" value="<?php echo $row['observation']; ?>" />
 							 <input type="submit" name="send" value="Save" >
						</form>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>