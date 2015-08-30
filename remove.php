<?php 
	
	include("conexion.php");
	
	$id=$_GET['id'];
	
	$query="delete from register_changes_reports where id='$id'";
	
	$result = $link->query($query);
	
?>

<html>
	<head>
		<title>Eliminar usuario</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($result>0){
				?>
				
				<h1>Usuario Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>		
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>