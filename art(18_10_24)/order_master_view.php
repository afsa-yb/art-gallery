<?php include("aheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    
    <div class="container-fluid" style="background-color:#2f2021;">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              View Order
            </h2>
            <table class="table table-bordered">
			<tr>
				<th>Order Id</th>
				<th>Order Quantity</th>
				<th>Total Price</th>
				<th>Order Date</th>
				<th>Product ID</th>
				<th>User ID</th>				
				<th>Delete</th>
			</tr>

			<?php
				include("connect.php");
				$q="select * from order_master";
				$res=mysqli_query($cn,$q);

				while($row=mysqli_fetch_array($res))
				{

			?>
				<tr>
					<td><?php print $row['order_id'];?></td>
					<td><?php print $row['order_qty'];?></td>
					<td><?php print $row['total_price'];?></td>
					<td><?php print $row['order_date'];?></td>					
					<td>
					<?php 
					$product_id=$row['product_id'];
					$q1="select * from product_master where product_id=$product_id";
					$res1=mysqli_query($cn,$q1);

					if($row1=mysqli_fetch_array($res1))
					{
						print $row1['product_name'];
					}
					?>
					</td>
					<td>
					<?php 
					$user_id=$row['user_id'];
					$q2="select * from user_master where user_id=$user_id";
					$res2=mysqli_query($cn,$q2);

					if($row2=mysqli_fetch_array($res2))
					{
						print $row2['user_name'];
					}
					?>
					</td>
					<td><a href="order_master_delete.php?order_id=<?php print $row['order_id'];?>" class="btn btn-danger" ><i class="fa fa-trash"></i>Delete</a></td>
					</tr>
			<?php
	
				}
			?>
			</table>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->

<?php include("footer.php");?>