<?php
include("aheader.php");
?>
  <!-- contact section -->
  <section class="contact_section layout_padding" id="contactLink">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              Add cart
            </h2>
            <form action="add_cart_code.php" method="post" enctype="multipart/form-data">
              <div>
                <input type="text" placeholder="user_id" name="user_id" />
              </div>
              <div>
                <input type="text" placeholder="product_id" name="product_id" />
              </div>
              <div>
                <input type="file" placeholder="order_qty" name="order_qty" />
              </div>
			  <div>
                <input type="file" placeholder="Total Price" name="total_price" />
              </div>
			  
              
              <div class="btn_box">
                <center><button type="submit">
                  SAVE
                </button></center>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->
<?php
include("footer.php");
?>


 