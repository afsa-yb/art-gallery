<?php include("rheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    <div class="map_container">
      <div id="googleMap"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
            <h2>
              Customer Registration Form
            </h2>
            <form action="user_master_edit_code.php" method="post">
			
			<?php
			include("connect.php");
			$user_id=$_GET['user_id'];
			
			$q="select * from user_master where user_id=$user_id";
			
			$res=mysqli_query($cn,$q);
			if($row=mysqli_fetch_array($res))
			{
			?>
			  <div>
				<input type="hidden" name="user_id" value="<?php print $user_id;?>">
              <div>
                <input type="text" value="<?php print $row['user_name'];?>" name="user_name" />
              </div>
			  <div>
                <input type="text" class="message-box" value="<?php print $row['user_address'];?>" name="user_address" />
              </div>
			  <div>
                <input type="text" value="<?php print $row['user_city'];?>" name="user_city" />
              </div>
			  <div>
                <input type="text" value="<?php print $row['user_pincode'];?>" name="user_pincode" />
              </div>
			  <div>
                <input type="email" value="<?php print $row['user_email'];?>" name="user_email" />
              </div>
			  <div>
                <input type="password" value="<?php print $row['user_password'];?>" name="user_password" />
              </div>
              <div>
                <input type="text" value="<?php print $row['user_mobile'];?>" name="user_mobile" />
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