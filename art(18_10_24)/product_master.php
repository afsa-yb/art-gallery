<?php include("aheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink" style="background-color:#2f2021;">
    
    <div class="container" >
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              Product
            </h2>
            <form action="product_master_insert.php" method="post" enctype="multipart/form-data">
              <div>
                <input type="text" placeholder="Product Name" name="product_name" />
              </div>
			  <div>
                <input type="text" class="message-box" placeholder="Product Description" name="product_description" />
              </div>
			  <div>
                <input type="file" placeholder="Product Photo" name="product_photo" />
              </div>
			  <div>
                <input type="date" placeholder="Enter mfg date" name="product_mfg_date" />
              </div>
			  <div>
                <input type="text" placeholder="Product Price" name="product_price" />
              </div>
			  
			  <div>
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
			  <div>
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
              <div>
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
              </div>
              <div class="btn_box">
                <button type="submit">
				<i class="fa fa-save"></i>
                  SAVE
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->

<?php include("footer.php");?>