<?php include("rheader.php");?>
  <!-- contact section -->
  <section class="offer_section layout_padding" id="contactLink">
    <div class="container">
      <div class="heading_container">
        <h2>
          Order
        </h2>
      </div>
    </div>
    <div class="container">
      <div class="row">	  
        <div class="col-md-12">
        <table class="table table-bordered" style="color:#000;">
			<tr>
				<th>Product Photo</th>  
				<th>Product id</th>
				<th>Order Qty</th>
				<th>Total price</th>
				<th>Order Date</th>
				<th>Delete</th>		  
			</tr>
		  
			<?php 
			include("connect.php");
			$q="select * from order_master where user_id=$user_id";
			$res=mysqli_query($cn,$q);
			
			while($row=mysqli_fetch_array($res))
			{
			?>
			<tr>
				<?php 
					include("connect.php");
					$product_id=$row['product_id'];
					$q2="select * from product_master where product_id=$product_id";
					$res2=mysqli_query($cn,$q2);
					if($row2=mysqli_fetch_array($res2))
					{
				?>
					<td><img src="<?php print $row2['product_photo'];?>" width="200px" height="200px"></td>
					<td><?php print $row2['product_name'];?></td>
					<td><?php print $row['order_qty'];?></td>
					<td><?php print $row['total_price'];?></td>
					<td><?php print $row['order_date'];?></td>														   
					<td><a href="order_delete_ruser.php?order_id=<?php print $row['order_id'];?>" class="btn btn-danger"><i class="fa fa-trash">Delete</i></a></td>
				<?php
					}
				?>
			</tr>
			<?php		
				}
			?>
		</table>		  
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
<?php include("footer.php");?>