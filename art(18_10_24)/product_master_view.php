<?php include("aheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    
    <div class="container-fluid" style="background-color:#2f2021;">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              View Product
            </h2>
            <table class="table table-bordered table-striped table-responsive">
			<tr>
				<th>Product Id</th>
				<th>Product Name </th>
				<th>Product Description</th>
				<th>Product Photo</th>
				<th>Product Manufacturing Date</th>
				<th>Product Price</th>
				<th>Category Name</th>
				<th>Subcategory Name</th>
				<th>Artist Name</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
			include("connect.php");
			$q="select * from product_master";
			$res=mysqli_query($cn,$q);
			while($row=mysqli_fetch_array($res))
			{

			?>
			<tr>
				<td><?php print $row['product_id'];?></td>
				<td><?php print $row['product_name'];?></td>
				<td><?php print $row['product_description'];?></td>
				<td><img src="<?php print $row['product_photo'];?>" width="100px" height="100px"></td>
				<td><?php print $row['product_mfg_date'];?></td>
				<td><?php print $row['product_price'];?></td>
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
				<td>
				<?php 
				$sub_cat_id=$row['sub_cat_id'];
				$q2="select * from sub_cat_master where sub_cat_id=$sub_cat_id";
				$res2=mysqli_query($cn,$q2);

				if($row2=mysqli_fetch_array($res2))
				{
					print $row2['sub_cat_name'];
				}
				?>
				</td>
				<td>
				<?php 
				$artist_id=$row['artist_id'];
				$q3="select * from artist_master where artist_id=$artist_id";
				$res3=mysqli_query($cn,$q3);

				if($row3=mysqli_fetch_array($res3))
				{
					print $row3['artist_name'];
				}
				?>
				</td>
				<td><a href="product_master_edit.php?product_id=<?php print $row['product_id'];?>" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a></td>
				<td><a href="product_master_delete.php?product_id=<?php print $row['product_id'];?>" class="btn btn-danger" ><i class="fa fa-trash"></i>Delete</a></td>
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