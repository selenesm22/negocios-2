<?php 
ini_set('display_errors', 0);
$conex=mysqli_connect("localhost", "root", "", "prueba");

// if($conex){
//     echo "todo correcto";
// } else {
//     echo "ha ocurrido un error";
// }


$nombre=trim($_POST['nombre']);
$precio=trim($_POST['precio']);
$nombreCliente=trim($_POST['nombreCliente']);
$correo=trim($_POST['correo']);
$precioTotal=trim($_POST['precioTotal']);
$consulta="INSERT INTO `pedido`(`nombre`, `precio`,`nombreCliente`, `precioTotal`) VALUES ('$nombre','$precio', '$nombreCliente','$precioTotal')";
$resultado= mysqli_query($conex, $consulta);

// if($resultado){
//     echo"ok";
// } else{
//     echo"no ok";
// }
?>