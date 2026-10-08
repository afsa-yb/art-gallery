<?php include("vheader.php");?>
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
              Artist Registration Form
            </h2>
            <form action="artist_master_insert.php" method="post">
              <div>
                <input type="text" placeholder="Your Name" name="artist_name" />
              </div>
			  <div>
                <input type="text" class="message-box" placeholder="Enter Description" name="artist_description" />
              </div>
			  <div>
                <input type="text" class="message-box" placeholder="Enter Address" name="artist_address" />
              </div>
			  <div>
                <input type="text" placeholder="Enter City" name="artist_city" />
              </div>
			  <div>
                <input type="text" placeholder="Enter Pincode" name="artist_pincode" />
              </div>
			  <div>
                <input type="text" placeholder="Phone Number" name="artist_mobile" />
              </div>
			  <div>
                <input type="email" placeholder="Enter Email" name="artist_email" />
              </div>
			  <div>
                <input type="password" placeholder="Enter Password" name="artist_password" />
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
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->

<?php include("footer.php");?>