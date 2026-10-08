<?php include("aheader.php");?>

<!-- contact section -->
  <section class="contact_section " id="contactLink">
    
    <div class="container-fluid" style="background-color:#2f2021;">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              View Category
            </h2>
            <table border='2' class="table table-bordered">
<tr>
<th>Category Id</th>
<th>Category Name </th>
<th>Category Description</th>
<th>Category Photo</th>
<th>Edit</th>
<th>Delete</th>


</tr>
<?php
include("connect.php");
$q="select * from cat_master";
$res=mysqli_query($cn,$q);

while($row=mysqli_fetch_array($res))
{

?>
<tr>
<td><?php print $row['cat_id'];?></td>
<td><?php print $row['cat_name'];?></td>
<td><?php print $row['cat_description'];?></td>
<td><img src="<?php print $row['cat_photo'];?>" width="100px" height="100px"></td>
<td><a href="cat_master_edit.php?cat_id=<?php print $row['cat_id'];?>" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a></td>
<td><a href="cat_master_delete.php?cat_id=<?php print $row['cat_id'];?>" class="btn btn-danger" ><i class="fa fa-trash"></i>Delete</a></td>

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