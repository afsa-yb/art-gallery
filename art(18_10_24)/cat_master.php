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
            <form action="cat_master_insert.php" method="post" enctype="multipart/form-data">
			<div>
                <input type="text" placeholder="Enter Name" name="cat_name" />
              </div>
			  
			  <div>
                <input type="text" class="message-box" placeholder="Enter Description" name="cat_description" />
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
			   
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->

<?php include("footer.php");?>