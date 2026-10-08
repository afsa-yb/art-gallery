<?php include("aheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              Category
            </h2>
            <form action="cat_master_edit_code.php" method="post" enctype="multipart/form-data">
			
			<?php
			include("connect.php");
			$cat_id=$_GET['cat_id'];
			
			$q="select * from cat_master where cat_id=$cat_id";
			
			$res=mysqli_query($cn,$q);
			if($row=mysqli_fetch_array($res))
			{
			?>
			  <div>
				<input type="hidden" name="cat_id" value="<?php print $cat_id;?>">
              <div>
			  <div>
                <input type="text" value="<?php print $row['cat_name'];?>" name="cat_name" />
              </div>
			  
			  <div>
                <input type="text" class="message-box" value="<?php print $row['cat_description'];?>" name="cat_description" />
              </div>
			  
			  <div>
                <input type="file" placeholder="Category Photo" name="cat_photo" />
              </div>
              
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