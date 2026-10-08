<?php include("aheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    
    <div class="container-fluid" style="background-color:#2f2021;">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              View Feedback
            </h2>
            <table class="table table-bordered">
			<tr>
			<th>Feedback Id</th>
			<th>Feedback Message</th>
			<th>Feedback Date</th>
			<th>User Name</th>
			<th>Delete</th>
			</tr>
			<?php
			include("connect.php");
			$q="select * from feedback_master";
			$res=mysqli_query($cn,$q);

			while($row=mysqli_fetch_array($res))
			{

			?>
			<tr>
			<td><?php print $row['feedback_id'];?></td>
			<td><?php print $row['feedback_msg'];?></td>
			<td><?php print $row['feedback_date'];?></td>
			<td>
			<?php 
				$user_id=$row['user_id'];
				$q1="select * from user_master where user_id=$user_id";
				$res1=mysqli_query($cn,$q1);

				if($row1=mysqli_fetch_array($res1))
				{
					print $row1['user_name'];
				}
					?>
			</td>
			
			
			<td><a href="feedback_master_delete.php?feedback_id=<?php print $row['feedback_id'];?>" class="btn btn-danger" ><i class="fa fa-trash"></i>Delete</a></td>
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