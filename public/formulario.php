<html>
<head>
	<title>Ventas.com</title>
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

<h1>Solicitud de Registro</h1>
<body>
	<form>
	<table>

	<tr>
    <td>Nombre</td>
	<td>
		<input type="text" placeholder="Nombre, Apellidos" size="40" name "nombre">
	</td>
	</tr>
		
	<td>Rut</td>
	<td>
		<input type="text" placeholder="11.111.111-1" size="7" name "rut">
	</td>
	</tr>

	<tr>
	<td>Telefono</td>
	<td>
		<input type="text" placeholder="Telefono" size="8" name "Telefono">   
	</td>
	</tr>

 	<tr>
 	<td>E-mail</td>
	<td>
 		<input type="email" placeholder="xxxxxxx@gmail.com" size="40" name "correo">
	</td>
	</tr>


	<tr>
 	<td>Contrase&ntildea</td>
 	<td>	
 		<input type="text" placeholder="Contraseña" size="8" name "Contrase&ntildea">   
	</td>
	</tr>
	
	<tr>
	<td>
		<input type="submit">
	</td>
	</tr>


	</table>
	</form>
	

	<FOOTER>
		<p>Ventas.com 2015</p>
	</FOOTER>


	<?php
		if($_REQUEST['rut'] && $_REQUEST['nombre'] && $_REQUEST['telefono'] && $_REQUEST['correo'] && $_REQUEST['contrasena']) 
		// Verifica si todos los campos fueron llenados
		{

		$query = sprintf("INSERT INTO cliente VALUES('%s','%s','%s','%s','%s')", $_REQUEST['rut'],$_REQUEST['nombre'],$_REQUEST['telefono'],$_REQUEST['correo'],$_REQUEST['contrasena']);
		$query = pg_query($query);
 		if($query)
 		echo "El ingreso se realizado correctamente";
 		else
  		echo "Se gerero un error en el ingreso! ".pg_last_error();
		}
	?>
</body>	
<table>

		</table>
</html>