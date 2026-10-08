<?php include("vheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    <div class="map_container">
      <div id="googleMap"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="padding-top:100px;padding-bottom:150px;">
          <div class="form_container">
            <h2>
              Login
            </h2>
            <form action="login_check.php" method="post">
              <div>
                <input type="email" placeholder="Enter Username" name="username" />
              </div>
			  <div>
                <input type="password" placeholder="Enter Password" name="password" />
              </div>
			  <div>
             <select name="usertype" class="myselect">
			 <option value="select_user">Select User</option>
			 <option value="admin">Administrator</option>
			 <option value="user">User</option>
			 </select>
              
              
              <div class="btn_box" >
                <button type="submit">
                  LOGIN
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