<?php include("vheader.php");?>

 
  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Art Categories
        </h2>
      </div>
      <div class="row">
        
		<?php
			
		include("connect.php");
		$q="select * from cat_master";
		$res=mysqli_query($cn,$q);

		while($row=mysqli_fetch_array($res))
		{

		?>
		
		<div class="col-md-6">
          <div class="box">
            <a href="subcat_view_vuser.php?cat_id=<?php print $row['cat_id'];?>"><div class="img-box">
              <img src="<?php print $row['cat_photo'];?>" alt="" height="300px">
            </div></a>
            <div class="detail-box">
              <h5>
                <?php print $row['cat_name'];?>
              </h5>
              <p>
				<?php print $row['cat_description'];?>   </p>
                
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