<?php include("head.php"); ?>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>


<script type="text/javascript" class="init">
	


$(document).ready(function() {
	$('#example').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	} );
} );



	</script>
<div class="container">
<div class="row">

<center><img src="https://i.vimeocdn.com/channel/209787_980?mh=250"></center>

<table id="example" class="display" style="width:100%">
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
							
    <tr>
      <td>
      	<img src="medios/productos/<?=$row['strFoto'];?>" width="60">
      	<b><?=$row['strPrefijo'];?></b><?=$row['intID'];?></td>
      <td><?=$row['strNProducto'];?></td>
      <td><?=$row['intPrecio'];?></td>
      <td>
      	<?php
			 $queryc = "SELECT * FROM tbl_categorias WHERE intID = ".$row['intCategoria']."";  
			 $resultc = mysqli_query($connect, $queryc);  
			 while($rowc = mysqli_fetch_array($resultc))  {
			?>
	      	<?=$rowc['strNombre'];?>
	      	<?php } ?>
      </td>
      <td scope="row"><?=$row['intDcto'];?></td>
      <td scope="row"><?=$row['intStock'];?></td>
      <td scope="row"><?=$row['DteFecha'];?></td>
 
    </tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr>
								 <th scope="col"># de Prooducto</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Categoria</th>
      <th scope="col">Descuento</th>
      <th scope="col">Existencias</th>
	  <th scope="col">Fecha</th> 
						</tfoot>
					</table>
				</div></div>
<?php include("footer.php"); ?>