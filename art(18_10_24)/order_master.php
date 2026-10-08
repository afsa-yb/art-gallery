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
              Order
            </h2>
            <form action="order_master_insert.php" method="post">
              <div>
                <input type="nuumber" placeholder="Order Quantity" name="order_quantity" />
              </div>
			  <div>
                <input type="text" placeholder="Total Price" name="total_price" />
              </div>
			  <div>
                <input type="date" placeholder="Order Date" name="order_date" />
              </div>
			  <select class="myselect" name="product_id">
			  <option value="0">Select Product</option>
			  <?php
			  include("connect.php");
			  $q="select * from product_master";
			  $res=mysqli_query($cn,$q);
			  while($row=mysqli_fetch_array($res))
			  {
			   ?> 
			   <option value="<?php print $row['product_id'];?>"><?php print $row['product_name'];?></option>
			  <?php
			  }			  
			  ?>
			  </select> 
			  
              <div class="btn_box">
                <button type="submit">
				
                  ORDER
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