<?php 

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: sm_ingresar.php");
    exit;
}

include("../config/conexion.php"); 

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Técnica SMDigital</title>
  <link href="../medios/asset/css/bootstrap.css" rel="stylesheet">
  <link href="../medios/asset/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-secondary">Escritorio</a></li>
          <li><a href="sm_categorias.php" class="nav-link px-2 text-white">Categorias</a></li>
          <li><a href="sm_productos.php" class="nav-link px-2 text-white">Productos</a></li>
         
        </ul>

        <div class="text-end">
          <a href="sm_salir.php" class="btn btn-warning">Cerrar</a>
        </div>
      </div>
    </div>
  </header>
<br>