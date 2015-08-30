<?php
require ("conexion.php");

	$school=$_POST['school'];
	$dates=$_POST['dates'];
	$report=$_POST['report'];
	$obser=$_POST['observation'];

	$query="INSERT INTO register_changes_reports (school_id, modification_date, report_name, observation) 
	VALUES ('$school', '$dates', '$report', '$obser')";
	
$result = $link->query($query);

?>
<html>
	<head>
		<title>Guardar usuario</title>
		<meta charset="UTF-8" />
		<style type="text/css">@import 'estilos.css';</style>
	</head>
	<body>
		<center>	
			<?php if($result > 0){ ?>
				<h1>Usuario Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			<a href="index.php">Regresar</a>
		</center>
	</body>
	</html>	