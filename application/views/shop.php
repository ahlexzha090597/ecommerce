

<button type="button"  class="btn btn-success btn" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus"></span>&nbsp;ADD PRODUCT</button> 
<br>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-lg-lg">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Product List</h3>
				</div>
					<div class="panel-body">

						<table class="table table-striped">
						  <tr>
						  	<th>No</th>
						  	<th>Product Name</th>
						  	<th>Product Code</th>
						  	<th>Product Image</th>
						  	<th>Stock</th>
						  	<th>Price</th>
						  	<th>Action</th>
						  </tr>
						<?php
						$no=0;	
							foreach ($sql1->result() as $obj1) {
								$no++;
								?>

									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $obj1->prdct_name; ?></td>
										<td><?php echo $obj1->prdct_code; ?></td>
										<td width="20%"><img src="<?php echo base_url()?>/image/<?php echo $obj1->uploadimage; ?>" height="20%" width="80%"></td>
										<td><?php echo $obj1->stock; ?></td>
										<td><?php echo $obj1->price; ?></td>
										<td>
											
										 <a class="btn btn-info btn-s"x data-toggle="modal" data-target="#myModal">edit</a>
										 <a href="javascript:if(confirm('Are you sure you want to remove it??')){document.location='<?php echo base_url();?>index.php/home/remove/<?php echo $obj1->id_shop; ?>'}" class="btn btn-danger btn-s">remove </a>
										 </td>

									</tr>
								<?php
							}
						?>
						</table>
					</div>
			</div>
		</div>
	</div>
</div>



<?php
  $op ="add";
  $id_shop ="";
  $prdct_name ="";
  $prdct_code ="";
  $uploadimage ="";
  $stock ="";
  $price ="";
  if($op=="edit"){
    foreach ($sql->result() as $obj1) {
      $op = "edit";
      $id_shop = $obj1->id_shop;
      $prdct_name = $obj1->$prdct_name;
      $prdct_code = $obj1->$prdct_code;
      $uploadimage = $obj1->uploadimage;
      $stock = $obj1->stock;
      $price = $obj1->price;



    }
  }

?>

<!-- edit Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">EDIT PRODUCT</h4>
        </div>
        <div class="modal-body">
          

        		<input type="hidden" name="$op" value="<?php echo $op; ?>" class="form-control">
				<input type="hidden" name="id_shop" value="<?php echo $id_shop; ?>" class="form-control">
				<form role="form" action="<?php echo base_url(); ?>/home/save" method="POST">
					<input type="hidden" name="$op"  class="form-control">
					<input type="hidden" name="id_shop"  class="form-control">

				  <div class="form-group">
				    <label>Product Name</label>
				    <input type="text" name="prdct_name" value="<?php echo $prdct_name; ?>"  class="form-control"  placeholder="Product Name">
				  </div>

				   <div class="form-group">
				    <label>Product Code</label>
				   	<input type="text" name="prdct_code" value="<?php echo $prdct_code; ?>"  class="form-control"  placeholder="Product Code">
				  </div>

				  <div class="form-group">
				    <label>Upload Image</label>
				    <input type="file" name="uploadimage" value="<?php echo $uploadimage; ?>" class="form-control"  placeholder="Upload Image">
				  </div>

				  <div class="form-group">
				    <label>Stock</label>
				    <script>
							function isNumberKey(evt){
							var charCode = (evt.which) ? evt.which : evt.keyCode;
							if (charCode > 31 && (charCode < 48 || charCode > 57))
							return false;
							return true;
							}
						</script>
				    <input type="text" name="stock" value="<?php echo $stock; ?>" class="form-control" onkeypress='return isNumberKey(event)' placeholder="Stock">
				  </div>

				  <div class="form-group">
				    <label>Price</label>
				    <input type="number" name="price" value="<?php echo $price; ?>" class="form-control"  placeholder="Price">
				  </div>

				  <button type="submit" class="btn btn-success btn-default "><span class="glyphicon glyphicon-ok" ></span> Save</button>
				   <button type="submit" class="btn btn-danger btn-default "><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				</form>

				



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>




<!--add Modal -->
  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ADD NEW PRODUCT</h4>
        </div>
        <div class="modal-body">
          

        		<input type="hidden" name="$op" value="<?php echo $op; ?>" class="form-control">
				<input type="hidden" name="id_shop" value="<?php echo $id_shop; ?>" class="form-control">
				<form role="form" action="<?php echo base_url(); ?>/home/save" method="POST">
					<input type="hidden" name="$op"  class="form-control">
					<input type="hidden" name="id_shop"  class="form-control">

				  <div class="form-group">
				    <label>Product Name</label>
				    <input type="text" name="prdct_name" value="<?php echo $prdct_name; ?>"  class="form-control"  placeholder="Product Name">
				  </div>

				   <div class="form-group">
				    <label>Product Code</label>
				   	<input type="text" name="prdct_code" value="<?php echo $prdct_code; ?>"  class="form-control"  placeholder="Product Code">
				  </div>

				  <div class="form-group">
				    <label>Upload Image</label>
				    <input type="file" name="uploadimage" value="<?php echo $uploadimage; ?>" class="form-control"  placeholder="Upload Image">
				  </div>

				  <div class="form-group">
				    <label>Stock</label>
				    <script>
							function isNumberKey(evt){
							var charCode = (evt.which) ? evt.which : evt.keyCode;
							if (charCode > 31 && (charCode < 48 || charCode > 57))
							return false;
							return true;
							}
						</script>
				    <input type="text" name="stock" value="<?php echo $stock; ?>" class="form-control" onkeypress='return isNumberKey(event)' placeholder="Stock">
				  </div>

				  <div class="form-group">
				    <label>Price</label>
				    <input type="text" name="price" value="<?php echo $price; ?>" class="form-control"  placeholder="Price">
				  </div>

				  <button type="submit" class="btn btn-success btn-default "><span class="glyphicon glyphicon-ok"></span> Save</button>
				   <button type="submit" class="btn btn-danger btn-default "><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				</form>

				



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


