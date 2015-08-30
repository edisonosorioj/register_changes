<?php 
	
	include("conexion.php");
	
	$id=$_POST['id'];
	$school=$_POST['school'];
	$dates=$_POST['dates'];
	$report=$_POST['report'];
	$obser=$_POST['obser'];
	
	$query="update register_changes_reports set school_id='$school', modification_date='$dates', 
	report_name='$report', observation='$obser' where id='$id'";
/*
	print_r($query); die();*/
	
	$result = $link->query($query);
	/*print_r($result); die();*/
?>

<html>
	<head>
		<title>Información Actualizada</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<center>
			<?php 
				if($result>0){
				?>
				
				<h1>Información actualizada</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Actualizar Información</h1>
				
			<?php	} ?>		
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
