<?php include("aheader.php");?>
<!-- contact section -->
  <section class="contact_section " id="contactLink">
    
    <div class="container-fluid" style="background-color:#2f2021;">
      <div class="row">
        <div class="col-md-12">
          <div class="form_container">
            <h2>
              View Subcategory
            </h2>
            <table class="table table-bordered">
<tr>
<th>Subcategory Id</th>
<th>Subcategory Name </th>
<th>Subcategory Description</th>
<th>Subcategory Photo</th>
<th>Category Name</th>
<th>Edit</th>
<th>Delete</th>


</tr>
<?php
include("connect.php");
$q="select * from sub_cat_master";
$res=mysqli_query($cn,$q);

while($row=mysqli_fetch_array($res))
{

?>
<tr>
<td><?php print $row['sub_cat_id'];?></td>
<td><?php print $row['sub_cat_name'];?></td>
<td><?php print $row['sub_cat_description'];?></td>
<td><img src="<?php print $row['sub_cat_photo'];?>" width="100px" height="100px"></td>
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
<td><a href="sub_cat_master_edit.php?sub_cat_id=<?php print $row['sub_cat_id'];?>" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a></td>
<td><a href="sub_cat_master_delete.php?sub_cat_id=<?php print $row['sub_cat_id'];?>" class="btn btn-danger" ><i class="fa fa-trash"></i>Delete</a></td>

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