<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<?php
	include_once("conexion.php");
?>

 <img src="imagenes/logo.jpg">  
    <div class="navigation">
      <ul>
       <Center> <li><a href="index.html">Pagina Principal</a></li>
        <li><a href="formulario.php">Formulario</a></li>
		<li><a href="clientes.php">Listado Clientes</a></li>
		<li><a href="Crearpdf.php">Generar PDF</a></li>
		<li><a href="xml.php">Generar XML</a></li>
    
        </ul>
    </div>

    <CENTER>
<?php
		$consulta = "SELECT * FROM cliente";
		$ejecquery = pg_exec($consulta); 
		?> 
		<table class="table table-bordered table-hover" >
		<tr class= >
		<th class="titulo">Nombre</th><th>rut</th><th>Correo</th>
		</tr>
		<?php
		while ($reg = pg_fetch_assoc($ejecquery)){
		echo"<tr>
			<td>".$reg['nombre']. "</td>
			<td>".$reg['rut']. "</td>
			<td>".$reg['correo']. "</td>
			</tr>";
		}
		?>

 </CENTER>

</html>
	