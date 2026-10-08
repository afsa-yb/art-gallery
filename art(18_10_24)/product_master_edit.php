<?php include("aheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    
    <div class="container-fluid" style="background-color:#2f2021;">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              Product
            </h2>
            <form action="product_master_edit_code.php" method="post" enctype="multipart/form-data">
			
			<?php
			include("connect.php");
			$product_id=$_GET['product_id'];
			
			$q="select * from product_master where product_id=$product_id";
			
			$res=mysqli_query($cn,$q);
			if($row=mysqli_fetch_array($res))
			{
			?>
			  <div>
				<input type="hidden" name="product_id" value="<?php print $product_id;?>">
              <div>			
              <div>
                <input type="text" value="<?php print $row['product_name'];?>" name="product_name" />
              </div>
			  <div>
                <input type="text" class="message-box" value="<?php print $row['product_description'];?>" name="product_description" />
              </div>
			  <div>
                <input type="file" placeholder="Product Photo" name="product_photo" />
              </div>
			  <div>
                <input type="date" value="<?php print $row['product_mfg_date'];?>" name="product_mfg_date" />
              </div>
			  <div>
                <input type="text" value="<?php print $row['product_price'];?>" name="product_price" />
              </div>
			  
			  
			  <select class="myselect" name="cat_id">
			  <option value="0">Select Category</option>
			  <?php
			  include("connect.php");
			  $q="select * from cat_master";
			  $res=mysqli_query($cn,$q);
			  while($row=mysqli_fetch_array($res))
			  {
			   ?> 
			   <option value="<?php print $row['cat_id'];?>"><?php print $row['cat_name'];?></option>
			  <?php
			  }			  
			  ?>
			  </select>
			  
			  <select class="myselect" name="sub_cat_id">
			  <option value="0">Select Sub Category</option>
			  <?php
			  include("connect.php");
			  $q="select * from sub_cat_master";
			  $res=mysqli_query($cn,$q);
			  while($row=mysqli_fetch_array($res))
			  {
			   ?> 
			   <option value="<?php print $row['sub_cat_id'];?>"><?php print $row['sub_cat_name'];?></option>
			  <?php
			  }			  
			  ?>
			  </select>
              
			  <select class="myselect" name="artist_id">
			  <option value="0">Select Artist</option>
			  <?php
			  include("connect.php");
			  $q="select * from artist_master";
			  $res=mysqli_query($cn,$q);
			  while($row=mysqli_fetch_array($res))
			  {
			   ?> 
			   <option value="<?php print $row['artist_id'];?>"><?php print $row['artist_name'];?></option>
			  <?php
			  }			  
			  ?>
			  </select>
              
              <div class="btn_box">
                <button type="submit">
				<i class="fa fa-save"></i>
                  SAVE
                </button>
              </div>
			  <?php
			}
			?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->

<?php include("footer.php");?>