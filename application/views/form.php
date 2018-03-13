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


<form role="form" action="<?php echo base_url(); ?>/home/save" method="POST">
	<input type="hidden" name="$op"  class="form-control">
	<input type="hidden" name="id_shop"  class="form-control">

  <div class="form-group">
    <label>Product Name</label>
    <input type="text" name="prdct_name"   class="form-control"  placeholder="Product Name">
  </div>

   <div class="form-group">
    <label>Product Code</label>
    <input type="text" name="prdct_code"   class="form-control"  placeholder="Product Code">
  </div>

  <div class="form-group">
    <label>Upload Image</label>
    <input type="text" name="uploadimage"  class="form-control"  placeholder="Upload Image">
  </div>

  <div class="form-group">
    <label>Stock</label>
    <input type="text" name="stock"  class="form-control"  placeholder="Stock">
  </div>

  <div class="form-group">
    <label>Price</label>
    <input type="text" name="price"  class="form-control"  placeholder="Price">
  </div>

  <button type="submit" class="btn btn-default">Save</button>
</form>


