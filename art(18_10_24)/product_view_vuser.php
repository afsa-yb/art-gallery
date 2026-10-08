<?php include("vheader.php");?>

<!-- furniture section -->

  <section class="furniture_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Products
        </h2>
        
      </div>
      <div class="row">
	  
		<?php
			
		include("connect.php");
		$sub_cat_id=$_GET['sub_cat_id'];
		$q="select * from product_master where sub_cat_id=$sub_cat_id";
		$res=mysqli_query($cn,$q);

		while($row=mysqli_fetch_array($res))
		{

		?>
	  
        <div class="col-md-4">
          <div class="box">
            <div class="">
			<a href="product_deatil_vuser.php?product_id=<?php print $row['product_id'];?>">
              <img src="<?php print $row['product_photo'];?>" alt="" height="320px" width="350px">
			</a>
            </div>
            <div class="detail-box">
              <h5>
                <?php print $row['product_name'];?>
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>Rs.</span> <?php print $row['product_price'];?>
                </h6>
                <a href="product_deatil_vuser.php?product_id=<?php print $row['product_id'];?>">
                  Buy Now
                </a>
              </div>
              
              <a href="product_deatil_vuser.php?product_id=<?php print $row['product_id'];?>">
                <span>
                  Read More
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
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