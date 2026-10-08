<?php include("rheader.php");?>


<section class="offer_section layout_padding" id="contactLink" > 
    
	<div class="container">
      <div class="heading_container">
        <h2>
          Cart View
        </h2>
      </div>
    </div>
	
	<div class="container">
      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered" style="color:#000;">
		  <tr>
		  <th>Product Image</th>
		  <th>Product Name</th>
		  <th>Product Price</th>
		  <th>Order Quantity</th>
		  <th>Total Price</th>
		  <th>Delete</th>
		  
		  </tr>
		  
		  <?php 
		  include("connect.php");
		  $q="select * from cart_master where user_id=$user_id";
		  $res=mysqli_query($cn,$q);
		  $grand_total=0;
		  
		  while($row=mysqli_fetch_array($res))
		  {
			  $product_id=$row['product_id'];
			  $q2="select * from product_master where product_id=$product_id";
			  $res2=mysqli_query($cn,$q2);
			  if($row2=mysqli_fetch_array($res2))
			  {
		  ?>
				<tr>
					<td><img src="<?php print $row2['product_photo'];?>" width="100px" height="100px"></td>
					<td><?php print $row2['product_name'];?></td>
					<td><?php print $row2['product_price'];?></td>
					<td><?php print $row['qty'];?></td>
					<td><?php print $row['total_price'];?></td>
					<td><a href="cart_delete.php?cart_id=<?php print $row['cart_id'];?>" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</a></td>
				</tr>
				<?php
				$grand_total=$grand_total+$row['total_price'];
				?>
		<?php
			  }		
		  }
		   ?>
		   
		   <tr>
		   <td colspan="4" style="text-align:right;font-weight:bold;">Grand Total</td>
		   <td colspan="2"><?php print $grand_total;?></td>
		   </tr>
		   
		   <tr>
		   <td colspan="3"><a href="cat_view_ruser.php" class="btn btn-primary">Back To Shopping</a></td>
		   <td colspan="3" style="text-align:right;"><a href="place_order.php?user_id=<?php print $user_id;?>" class="btn btn-danger">Place Order</a></td>
		   <td></td>
		   </tr>
		   
		   
		  </table>
		  
        </div>
      </div>
    </div>
  </section>





<?php include("footer.php");?>
 