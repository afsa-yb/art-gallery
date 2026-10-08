<?php 
include("aheader.php");
?>
  <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
			<div class="form_container">
                <h2  style="color:#ffff;"> DASHBOARD</h2>
                
                            </div>

        </div>
             
             <div class="row">
            
                 <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-history fa-5x"></i>
							<?php
							include("connect.php");
							$q="select count(*)from cat_master";
							$res=mysqli_query($cn,$q);
							if($row=mysqli_fetch_array($res))
							{
								print "<h3>".$row[0]."</h3>";
								
								
							}
							?>
							Category
                        </div>
                    </div>
					                 <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-history fa-5x"></i>
							<?php
							include("connect.php");
							$q="select count(*)from sub_cat_master";
							$res=mysqli_query($cn,$q);
							if($row=mysqli_fetch_array($res))
							{
								print "<h3>".$row[0]."</h3>";
								
								
							}
							?>
							Subcategory
                        </div>
                    </div>
              
               <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-briefcase fa-5x"></i>
							<?php
							include("connect.php");
							$q="select count(*)from product_master";
							$res=mysqli_query($cn,$q);
							if($row=mysqli_fetch_array($res))
							{
								print "<h3>".$row[0]."</h3>";
								
								
							}
							?>
							Product
                            
                        </div>
                    </div>
					
					<div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-briefcase fa-5x"></i>
							<?php
							include("connect.php");
							$q="select count(*)from order_master";
							$res=mysqli_query($cn,$q);
							if($row=mysqli_fetch_array($res))
							{
								print "<h3>".$row[0]."</h3>";
								
								
							}
							?>
							Order
                            
                        </div>
                    </div>
					
					<div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-briefcase fa-5x"></i>
							<?php
							include("connect.php");
							$q="select count(*)from user_master";
							$res=mysqli_query($cn,$q);
							if($row=mysqli_fetch_array($res))
							{
								print "<h3>".$row[0]."</h3>";
								
								
							}
							?>
							User
                            
                        </div>
                    </div>
					<div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-briefcase fa-5x"></i>
							<?php
							include("connect.php");
							$q="select count(*)from artist_master";
							$res=mysqli_query($cn,$q);
							if($row=mysqli_fetch_array($res))
							{
								print "<h3>".$row[0]."</h3>";
								
								
							}
							?>
							Artist
                            
                        </div>
                    </div>
					
					<div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-briefcase fa-5x"></i>
							<?php
							include("connect.php");
							$q="select count(*)from feedback_master";
							$res=mysqli_query($cn,$q);
							if($row=mysqli_fetch_array($res))
							{
								print "<h3>".$row[0]."</h3>";
								
								
							}
							?>
							Feedback
                            
                        </div>
                    </div>

        </div> 
</div>		
        </div>  
	</div>		
  
		
		

 <?php
include("footer.php");
?>