<?php include("rheader.php");?>

 
  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Art Sub Categories
        </h2>
      </div>
      <div class="row">
        
		<?php
			
		include("connect.php");
		$cat_id=$_GET['cat_id'];
		$q="select * from sub_cat_master where cat_id=$cat_id";
		$res=mysqli_query($cn,$q);

		while($row=mysqli_fetch_array($res))
		{

		?>
		
		<div class="col-md-6">
          <div class="box">
            <a href="product_view_ruser.php?sub_cat_id=<?php print $row['sub_cat_id'];?>">
			<div class="img-box">
              <img src="<?php print $row['sub_cat_photo'];?>" alt="" height="300px">
            </div>
			</a>
            <div class="detail-box">
              <h5>
                <?php print $row['sub_cat_name'];?>
              </h5>
              <p>
				<?php print $row['sub_cat_description'];?>   </p>
              
            </div>
          </div>
        </div>
        <?php
		}
		?>
		
      </div>
    </div>
  </section>


<?php include("footer.php");?>