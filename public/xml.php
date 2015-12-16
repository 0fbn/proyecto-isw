<?
header("Content-type: text/xml");
//Creamos un array con los datos
//En vez de un array podemos cogerlos desde una base de datos
$Categorias = array('Computadores','SmartTV','Piesas de PC','Tablets','Softwares');
$Codigo = array('82374', '293892', '28929', '2954549','293892');
$Cantidad = array('30','656','64','50','80');
echo '<?xml version="1.0"?>';
echo '<INSUMOS>';
$registro = 0;
foreach ($Categorias as $valor) {
      echo '<Producto>';
      echo '<Categorias>' . $valor . '</Categorias>';
      echo '<Codigo>' . $Codigo[$registro] . '</Codigo>';
      echo '<Cantidad>' . $Cantidad[$registro] . '</Cantidad>';
      echo'</Producto>';
      $registro++;
}
echo '</INSUMOS>';
?>