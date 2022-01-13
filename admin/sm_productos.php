<?php include("head.php"); ?>
<div class="container">
	<div class="row">
<br><br><br />
<h1><center>Sistema de Crear Productos</center></h1>

<hr>
	<section>	
		
	<form action="../config/funciones.php" method="post" enctype="multipart/form-data">
		 <input type="file" name="archivo" required="">
	<div class="mb-3 row">
	    <label  class="col-sm-2 col-form-label">Nombre de Producto</label>
	    <div class="col-sm-10">
	      <input type="text" name="strProducto" class="form-control">
	    </div>
 	 </div>
 	 <div class="mb-3 row">
	    <label  class="col-sm-2 col-form-label">Precio de Producto</label>
	    <div class="col-sm-10">
	      <input type="text" name="strPrecio" class="form-control">
	    </div>
 	 </div><div class="mb-3 row">
	    <label  class="col-sm-2 col-form-label">Categotia de Producto</label>
	    <div class="col-sm-10">
	    	<select  name="strCategoria" class="form-control">
	    	<?php
			 $query = "SELECT * FROM tbl_categorias";  
			 $result = mysqli_query($connect, $query);  
			 while($row = mysqli_fetch_array($result))  {
			?>
	      	<option value="<?=$row['intID'];?>"><?=$row['strNombre'];?></option>
	      	<?php } ?>
	      </select>
	    </div>
 	 </div><div class="mb-3 row">
	    <label  class="col-sm-2 col-form-label">Descuento de Producto</label>
	    <div class="col-sm-10">
	     <select  name="strDescuento" class="form-control">
	     	<option value="5">5</option>
	     	<option value="10">10</option>
	     	<option value="15">15</option>
	     </select>

	    </div>
 	 </div><div class="mb-3 row">
	    <label  class="col-sm-2 col-form-label">Existencias de Producto</label>
	    <div class="col-sm-10">
	      <input type="text" name="strExistecia" class="form-control">
	    </div>
 	 </div>

 	<div class="col-auto">
    	<button type="submit" name="ctProducto" class="btn btn-primary mb-3">Crear Producto</button>
  	</div>

	</form>

	</section>

<hr>
	<section id="vertabla">
		<table class="table">
  <thead>
    <tr>
      <th scope="col"># de Prooducto</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Categoria</th>
      <th scope="col">Descuento</th>
      <th scope="col">Existencias</th>
	  <th scope="col">Fecha</th>    
    </tr>
  </thead>
  <tbody>
<?php
 $query = "SELECT * FROM tbl_Productos";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  {
?>
<form action="../config/funciones.php" method="post">
	<input type="hidden" name="idr" value="<?=$row['intID'];?>">
    <tr>
      <th scope="row"><b><?=$row['strPrefijo'];?></b><?=$row['intID'];?></th>
      <th scope="row"><input type="text" name="strNProducto" class="form-control" value="<?=$row['strNProducto'];?>"></th>
      <th scope="row"><input type="text" name="intPrecio" class="form-control" value="<?=$row['intPrecio'];?>"></th>
      <th scope="row">
	<select  name="intCategoria" class="form-control">
      	<?php
			 $queryc = "SELECT * FROM tbl_categorias WHERE intID = ".$row['intCategoria']."";  
			 $queryup = "SELECT * FROM tbl_categorias";  
			 $resultup = mysqli_query($connect, $queryup);  
			 $resultc = mysqli_query($connect, $queryc);  
			 while($rowc = mysqli_fetch_array($resultc))  {
			?>
			<option value="<?=$rowc['intID'];?>"><?=$rowc['strNombre'];?></option>
	      	
	      
	    	<?php
			 while($rowup = mysqli_fetch_array($resultup))  {
			?>
	      	<option value="<?=$rowup['intID'];?>"><?=$rowup['strNombre'];?></option>
	      	<?php } ?>
	      	<?php } ?>
	      </select>
      </th>
      
      <th scope="row"><select  name="intDcto" class="form-control">
      	<option value="<?=$row['intDcto'];?>"><?=$row['intDcto'];?></option>
      	<option value="5">5</option>
	    <option value="10">10</option>
	    <option value="15">15</option>
      </select></th>
      <th scope="row"><input type="text" name="intStock" class="form-control" value="<?=$row['intStock'];?>"></th>
      <th scope="row"><input type="date" name="DteFecha" class="form-control" value="<?=$row['DteFecha'];?>"></th>
      <td width="15%">
		<button type="submit" name="ctpactualizar" class="btn btn-warning ">Editar</button>
		<button type="submit" name="ctpEliminar" class="btn btn-danger ">X</button>
      </td>
 
    </tr>

</form>
 <?php } ?>
  </tbody>
</table>
	</section>
</div>
</div>

<?php include("footer.php"); ?>