<?php include("rheader.php");?>

<!-- furniture section -->

  <section class="furniture_section layout_padding">
    <div class="container">
      
      <div class="row">
	  
		<?php
			
		include("connect.php");
		$product_id=$_GET['product_id'];
		$q="select * from product_master where product_id=$product_id";
		$res=mysqli_query($cn,$q);

		while($row=mysqli_fetch_array($res))
		{

		?>
	  
        <div class="col-md-4">
		        <div class="box">
            <div class="">
              <img src="<?php print $row['product_photo'];?>" alt="" height="300px" width="350px">
            </div>
			</div>
		</div>
		<div class="col-md-8">
        <div class="heading_container">
        <h2>
          <?php print $row['product_name'];?>
        </h2>
        
		</div>
		<div class="detail-box">
			
			   <p>
				<b>Description:</b>
                <?php print $row['product_description'];?>
              </p>
			  <p>
				<b>Artist Name:</b>
                <?php 
				$artist_id=$row['artist_id'];
				$q3="select * from artist_master where artist_id=$artist_id";
				$res3=mysqli_query($cn,$q3);

				if($row3=mysqli_fetch_array($res3))
				{
					print $row3['artist_name'];
				}
				?>
              </p>
			  <p>
				<b>Product MFG Date:</b>
                <?php 
				$artist_id=$row['artist_id'];
				$q3="select * from product_master where product_id=$product_id";
				$res3=mysqli_query($cn,$q3);

				if($row3=mysqli_fetch_array($res3))
				{
					print $row3['product_mfg_date'];
				}
				?>
              </p>
              <div class="price_box">
                <h6 class="price_heading">
					<b>Price:</b> <?php print $row['product_price'];?>
                </h6>
                
              </div>
			  
			<div style="text-align:center;">
			
			<form action="add_cart_code.php" method="post">
			
				<input type="number" placeholder="Enter Quantity" name="qty">
				<input type="hidden" value="<?php print $row['product_id'];?>" name="product_id">
				<input type="hidden" value="<?php print $user_id;?>" name="user_id">
				<input type="hidden" value="<?php print $row['product_price'];?>" name="product_price">
			
				<a href="cart_view.php">
					<button class="btn btn-success"><i class="fa fa-shopping-cart"></i>Add to cart</button>
				</a>
			
			</form>
			</div>				               
            </div>
        </div>
        
        
      <?php
		}
		?>
	  
	  
	  </div>
    </div>
  </section>

  <!-- end furniture section -->


<?php include("footer.php");?>