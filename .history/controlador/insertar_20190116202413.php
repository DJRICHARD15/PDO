<? php
require_once ('../../Proyecto PDO/modelo/conexion.php');
require_once ('../modelo/class.dataBase.php');

$mesaje = null;
 $nombre = $_POST['nombre'];
 $descripcion = $_POST['descripcion'];
 $categoria = $_POST['categoria'];
 $precio = $_POST['precio'];
If (strlen($nombre) > 0 && strlen($descripcion) > && strlen($categoria) > 0 &&
strlen($precio) > 0){
	$consulta = new DateBase(); 
	$mensaje = $consulta->insertarProducto($nombre,$descripcion,$categoria, $precio);
}else{
    return "Porfavor inglres los datos ";
}
echo $mesaje;
?>