<?php
include 'conexion.php';
// require 'comun.php';
$limite = 12;
$pagina = '';

if (isset($_GET["pagina"])) {
	$pagina = (int)$_GET["pagina"];
}

if ($pagina == 0 || $pagina=="" ) { 
    $inicio = 0; 
    $pagina = 1; 
} else { 
    $inicio = ($pagina - 1) * $limite; 
} 

?>
<html>
	<head>
		<title>Register Changes</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="normalize.css" />
		<link rel="stylesheet" href="estilos.css" />
		<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
	</head>
	<body>
		<header>
			<h1>Register of Changes</h1>
			<nav>
				<ul>
					<li id='new_register'>
						<bottom id="mostrar-form" class="btn">New Register</bottom>
					</li>
				</ul>
			</nav>
		</header>
		<section>
			<div id='form'></div>
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
						$resultados = mysqli_query($conn, "SELECT * FROM register_changes");

						$total_registros = mysqli_num_rows($resultados);

						$resultados = mysqli_query($conn, "SELECT * FROM register_changes limit $limite");
						$total_paginas = ceil($total_registros / $limite);


						while($row = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
						?>
					<tr>
						<td>
							<?php echo $row['school_id'];?>
						</td>
						<td>
							<?php echo mb_convert_encoding($row['report_name'],"UTF-8");?>
						</td>
						<td align="center">
							<?php echo $row['modification_date'];?>
						</td>
						<td>
							<?php echo mb_convert_encoding($row['observation'],"UTF-8");?>
						</td>
						<td>
							<a href="update.php?id=<?php echo $row['id'];?>" class="btn">Update</a>
						</td>
						<td>
							<a href="remove.php?id=<?php echo $row['id'];?>" class="btn">Remove</a>
						</td>
					</tr>
						<?php } 
						mysqli_free_result($resultados);
						?>
					</tbody>
				</thead>
			</table>
				<div class="paginacion">
					<?php
						if ($total_registros) {

							if (($pagina - 1) > 0) {
								echo "<a href='?pagina=" . ($pagina-1) . "'>< Anterior </a>";	
							} else {
								echo "<a href='#'>< Anterior </a>";
						}

						for ($i = 1; $i <= $total_paginas; $i++) {
								if ($pagina == $i) {
									echo "<a href='#'>". $pagina ."</a>"; 
								} else {
									echo "<a href='?pagina=$i'> $i </a> "; 
								}	
							}

						if (($pagina + 1) <= $total_paginas) {
								echo "<a href='?pagina=".($pagina+1)."'> Siguiente ></a>";
							} else {
								echo "<a href='#'> Siguiente ></a>";
						}	
					}
				?>
				</div>
			</div>
		</section>
		<footer>
			<h2>Registro Unico de Modificaciones en XML Ciudad Educativa</h2>
		</footer>
		<script type="text/javascript" src='formulario.js'></script>
	</body>
</html>