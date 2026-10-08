<?php include("rheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              Feedback Form
            </h2>
            <form action="feedback_master_insert.php" method="post">
              
			  <div>
                <input type="text" class="message-box" placeholder="Enter Message" name="feedback_msg" />
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