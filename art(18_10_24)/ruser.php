<?php
	include("rheader.php");
?>

<div class="container-fluid">
<div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
 <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/spaint.jpg" class="d-block w-100" alt="..." width="100%" height="500px">
    </div>
    <div class="carousel-item">
      <img src="images/shome.jpg" class="d-block w-100" alt="..." width="100%" height="500px">
    </div>
    <div class="carousel-item">
      <img src="images/sphoto.jpg" class="d-block w-100" alt="..." width="100%" height="500px">
    </div>
	<div class="carousel-item">
      <img src="images/sceramic.jpg" class="d-block w-100" alt="..." width="100%" height="500px">
    </div>
  </div>
</div>
</div>
</div>

<!-- furniture section -->

  <section class="furniture_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          New Arrivals
        </h2>
        
      </div>
      <div class="row">
	  
		<?php
			
		include("connect.php");
		
		$q="select * from product_master order by rand() limit 6";
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


<?php
	include("footer.php");
?>