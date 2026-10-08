<?php include("aheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              Subcategory
            </h2>
            <form action="sub_cat_master_edit_code.php" method="post" enctype="multipart/form-data">
			
			<?php
			include("connect.php");
			$sub_cat_id=$_GET['sub_cat_id'];
			
			$q="select * from sub_cat_master where sub_cat_id=$sub_cat_id";
			
			$res=mysqli_query($cn,$q);
			if($row=mysqli_fetch_array($res))
			{
			?>
			  <div>
				<input type="hidden" name="sub_cat_id" value="<?php print $sub_cat_id;?>">
              <div>
			
              <div>
                <input type="text" value="<?php print $row['sub_cat_name'];?>" name="sub_cat_name" />
              </div>
			  <div>
                <input type="text" class="message-box" value="<?php print $row['sub_cat_description'];?>" name="sub_cat_description" />
              </div>
			  <div>
                <input type="file" placeholder="Subcategory Photo" name="sub_cat_photo" />
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