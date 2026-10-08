<?php include("vheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              Customer Registration Form
            </h2>
            <form action="user_master_insert.php" method="post">
              <div>
                <input type="text" placeholder="Enter Name" name="user_name" />
              </div>
			  <div>
                <input type="text" class="message-box" placeholder="Enter Address" name="user_address" />
              </div>
			  <div>
                <input type="text" placeholder="Your City" name="user_city" />
              </div>
			  <div>
                <input type="text" placeholder="Your Pincode" name="user_pincode" />
              </div>
			  <div>
                <input type="email" placeholder="Your Email" name="user_email" />
              </div>
			  <div>
                <input type="password" placeholder="Your Password" name="user_password" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" name="user_mobile" />
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