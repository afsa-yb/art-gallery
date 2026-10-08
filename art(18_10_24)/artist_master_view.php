<?php include("aheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    <div class="container-fluid" style="background-color:#2f2021;">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              View Artist Data
            </h2>
            <table class="table table-bordered">
			<tr>
				<th>Artist Id</th>
				<th>Artist Name</th>
				<th>Artist Description</th>
				<th>Artist Address</th>
				<th>Artist City</th>
				<th>Artist Pincode</th>
				<th>Artist Mobile</th>
				<th>Artist Email</th>
				<th>Artist Password</th>
				<th>Category Name</th>
				
				<th>Delete</th>
			</tr>

			<?php
				include("connect.php");
				$q="select * from artist_master";
				$res=mysqli_query($cn,$q);

				while($row=mysqli_fetch_array($res))
				{

			?>
				<tr>
					<td><?php print $row['artist_id'];?></td>
					<td><?php print $row['artist_name'];?></td>
					<td><?php print $row['artist_description'];?></td>
					<td><?php print $row['artist_address'];?></td>
					<td><?php print $row['artist_city'];?></td>
					<td><?php print $row['artist_pincode'];?></td>
					<td><?php print $row['artist_mobile'];?></td>
					<td><?php print $row['artist_email'];?></td>
					<td><?php print $row['artist_password'];?></td>
					<td>
					<?php 
					$cat_id=$row['cat_id'];
					$q1="select * from cat_master where cat_id=$cat_id";
					$res1=mysqli_query($cn,$q1);

					if($row1=mysqli_fetch_array($res1))
					{
						print $row1['cat_name'];
					}
					?>
					</td>
					
					<td><a href="artist_master_delete.php?artist_id=<?php print $row['artist_id'];?>" class="btn btn-danger" >Delete</a></td>
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