
<!DOCTYPE html>
<html>
	<head>
		<title>Join</title>
		<link rel="stylesheet" href="estilos.css" />
		<link rel="stylesheet" href="normalize.css" />
	</head>
	<body>
		<div id='join1' align="center">
			<p><h3>Join the new change</h3></p>
			<table border="1" height="240">
				<tr>
					<td>
						<form name="new_user" method="post" action="save_user.php" autocomplete="on">
							 Select the school: <input type="number" name="school" min="101" value="" required/><br>
 							 Enter the date: <input type="date" name="dates" min="2010-01-01" value="" /><br>
 							 Select the report: <input list="report" name="report" value="" />
								<datalist id="report">
								  <option value="Boletin de Periodo">
								  <option value="Boletin de periodo con Definitiva">
								  <option value="Boletin de periodo antes de Promoci&oacute;n">
								  <option value="Boletin de periodo despues de Promoci&oacute;n">
								  <option value="Carnet Administrativos">
								  <option value="Carnet Estudiantes">
								  <option value="Certificado de Curso y Aprobo">
								  <option value="Certificado Traslado">
								  <option value="Constancia de Estudio">
								  <option value="Hoja de Matricula">
								  <option value="Libro de Calificaciones">
								  <option value="Paz y Salvo">
								  <option value="Planilla por Docente">
								  </datalist><br>
								Enter observation:<textarea placeholder="Motivo" class="Footer-textarea"></textarea><br>
 							 <input type="submit" name="send" value="Join">
						</form>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
