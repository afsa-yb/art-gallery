<?php include("aheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              Artist Registration Form
            </h2>
            <form action="artist_master_edit_code.php" method="post">
			
			<?php
			include("connect.php");
			$artist_id=$_GET['artist_id'];
			
			$q="select * from artist_master where artist_id=$artist_id";
			
			$res=mysqli_query($cn,$q);
			if($row=mysqli_fetch_array($res))
			{
			?>
			  <div>
				<input type="hidden" name="artist_id" value="<?php print $artist_id;?>">
              <div>
              <div>
                <input type="text" value="<?php print $row['artist_name'];?>" name="artist_name" />
              </div>
			  <div>
                <input type="text" class="message-box" value="<?php print $row['artist_description'];?>" name="artist_description" />
              </div>
			  <div>
                <input type="text" class="message-box" value="<?php print $row['artist_address'];?>" name="artist_address" />
              </div>
			  <div>
                <input type="text" value="<?php print $row['artist_city'];?>" name="artist_city" />
              </div>
			  <div>
                <input type="text" value="<?php print $row['artist_pincode'];?>" name="artist_pincode" />
              </div>
			  <div>
                <input type="text" value="<?php print $row['artist_mobile'];?>" name="artist_mobile" />
              </div>
			  <div>
                <input type="email" value="<?php print $row['artist_email'];?>" name="artist_email" />
              </div>
			  <div>
                <input type="password" value="<?php print $row['artist_password'];?>" name="artist_password" />
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
                <button>
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