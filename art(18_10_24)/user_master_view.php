<?php include("aheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    
    <div class="container-fluid" style="background-color:#2f2021;">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              View Customer Data
            </h2>
            <table border='2' class="table table-bordered" >
			<tr>
			<th>User Id</th>
			<th>User Name</th>
			<th>User Address</th>
			<th>User City</th>
			<th>User Pincode</th>
			<th>User E-mail</th>
			<th>User Password</th>
			<th>User Mobile No.</th>
			
			<th>Delete</th>
			</tr>
			
			<?php
			include("connect.php");
			$q="select * from user_master";
			$res=mysqli_query($cn,$q);

			
			while($row=mysqli_fetch_array($res))
			{

			?>
			<tr>
			<td><?php print $row['user_id'];?></td>
			<td><?php print $row['user_name'];?></td>
			<td><?php print $row['user_address'];?></td>
			<td><?php print $row['user_city'];?></td>
			<td><?php print $row['user_pincode'];?></td>
			<td><?php print $row['user_email'];?></td>
			<td><?php print $row['user_password'];?></td>
			<td><?php print $row['user_mobile'];?></td>
			
			<td><a href="user_master_delete.php?user_id=<?php print $row['user_id'];?>" class="btn btn-danger">Delete</a></td>

			</tr>
			<?php
	
			}

			?>
			</table>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->

<?php include("footer.php");?>