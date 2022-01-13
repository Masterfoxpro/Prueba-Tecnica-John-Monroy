<?php include("head.php"); ?>
<div class="container">
	<div class="row">
<br><br><br />
<h1><center>Sistema de Crear Categorias</center></h1>

<hr>
	<section>	
		
	<form action="../config/funciones.php" method="post">
		
	<div class="mb-3 row">
	    <label  class="col-sm-2 col-form-label">Nombre de Categorias</label>
	    <div class="col-sm-10">
	      <input type="text" name="strNombre" class="form-control" required="">
	    </div>
 	 </div>

 	<div class="col-auto">
    	<button type="submit" name="ctCategoria" class="btn btn-primary mb-3">Crear Categoria</button>
  	</div>

	</form>

	</section>

<hr>
	<section id="vertabla">
		<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">#</th>
     
    </tr>
  </thead>
  <tbody>
  	<form action="../config/funciones.php" method="post">

<?php
 $query = "SELECT * FROM tbl_categorias";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  {
?>
	<input type="hidden" name="idr" value="<?=$row['intID'];?>">

    <tr>
      <th scope="row"><?=$row['strNombre'];?></th>
      <td>		<button type="submit" name="ctcEliminar" class="btn btn-danger ">X</button>
</td>
 
    </tr>
 <?php } ?>
 </form>
  </tbody>
</table>
	</section>
</div>
</div>

<?php include("footer.php"); ?>