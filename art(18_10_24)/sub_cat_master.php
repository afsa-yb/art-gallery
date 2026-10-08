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
            <form action="sub_cat_master_insert.php" method="post" enctype="multipart/form-data">
              <div>
                <input type="text" placeholder="Sub Category Name" name="sub_cat_name" />
              </div>
			  <div>
                <input type="text" class="message-box" placeholder="Enter Description" name="sub_cat_description" />
              </div>
			  <div>
                <input type="file" placeholder="Subcategory Photo" name="sub_cat_photo" />
              </div>
			  <select class="myselect" name="cat_id" >
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
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->

<?php include("footer.php");?>