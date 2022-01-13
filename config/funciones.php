<?php 
include ('conexion.php');

// Crear Categoria 
if (isset($_POST['ctCategoria'])) {


$Nombre = $_POST['strNombre'];


$crearcategoria = $connect->query("INSERT INTO tbl_categorias (intID, strNombre)
  VALUES (null, '$Nombre')");

if ($crearcategoria==true) {
     echo "<script>
             alert('Se agrego Categoria'); 
             window.location.href='../admin/sm_categorias.php';

        </script>";
  }else{
   echo "<script>
             alert('Algo salio mal'); 
             window.location.href='../admin/sm_categorias.php';

        </script>";
  }


}

// Crear Producto 
if (isset($_POST['ctProducto'])) {


$strProducto = $_POST['strProducto'];
$strPrecio = $_POST['strPrecio'];
$strCategoria = $_POST['strCategoria'];
$strDescuento = $_POST['strDescuento'];
$strExistecia = $_POST['strExistecia'];
$fecha = date('y-m-d');

   //Recogemos el archivo enviado por el formulario
   $archivo = $_FILES['archivo']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, '../medios/productos/'.$archivo)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('images/'.$archivo, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
$crearproducto = $connect->query("INSERT INTO tbl_Productos (intID, strNProducto, intPrecio, intCategoria, intDcto, intStock, DteFecha, strFoto) VALUES (null, '$strProducto','$strPrecio','$strCategoria','$strDescuento','$strExistecia', '$fecha', '$archivo')");
if ($crearproducto==true) {
     echo "<script>
             alert('Se agrego Producto'); 
             window.location.href='../admin/sm_productos.php';

        </script>";
  }else{
   echo "<script>
             alert('Algo salio mal'); 
             window.location.href='../admin/sm_productos.php';

        </script>";
  }            //Mostramos la imagen subida
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
   echo "<script>
             alert('Algo salio mal'); 
             window.location.href='../admin/sm_productos.php';

        </script>";        }
      }
   }

  


}


if (isset($_POST['ctpactualizar'])) {

$idr = $_POST['idr'];
$strNProducto = $_POST['strNProducto'];
$intPrecio = $_POST['intPrecio'];
$intCategoria = $_POST['intCategoria'];
$intDcto = $_POST['intDcto'];
$intStock = $_POST['intStock'];
$DteFecha = $_POST['DteFecha'];

$actualizarproductos = $connect->query("UPDATE `tbl_Productos` SET  `strNProducto` = '$strNProducto', `intPrecio` = '$intPrecio', `intCategoria` = '$intCategoria', `intDcto` = '$intDcto', `intStock` = '$intStock', `DteFecha` = '$DteFecha' WHERE `tbl_Productos`.`intID` = '$idr'");


if ($actualizarproductos==true) {
     echo "<script>
             alert('Se Modifico Producto'); 
             window.location.href='../admin/sm_productos.php#vertabla';

        </script>";
  }else{
   echo "<script>
             alert('Algo salio mal'); 
             window.location.href='../admin/sm_productos.php#vertabla';

        </script>";
  } 

}

if (isset($_POST['ctpEliminar'])) {

$idr = $_POST['idr'];
$eliminar = $connect->query("DELETE FROM `tbl_Productos` WHERE `tbl_Productos`.`intID` = '$idr'");

  if ($eliminar==true) {
     echo "<script>
             alert('Se Elimino Producto'); 
             window.location.href='../admin/sm_productos.php#vertabla';

        </script>";
  }else{
   echo "<script>
             alert('Algo salio mal'); 
             window.location.href='../admin/sm_productos.php#vertabla';

        </script>";
  } 


}


if (isset($_POST['ctcEliminar'])) {

$idr = $_POST['idr'];
$eliminar = $connect->query("DELETE FROM `tbl_categorias` WHERE `tbl_categorias`.`intID` = '$idr'");

  if ($eliminar==true) {
     echo "<script>
             alert('Se Elimino Categoria'); 
             window.location.href='../admin/sm_categorias.php#vertabla';

        </script>";
  }else{
   echo "<script>
             alert('Algo salio mal'); 
             window.location.href='../admin/sm_categorias.php#vertabla';

        </script>";
  } 


}