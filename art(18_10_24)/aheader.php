<?php
session_start();
if($_SESSION["username"]==null)
{
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Artgallery | Admin Panel</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!--slick slider stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- slick slider -->

  <link rel="stylesheet" href="css/slick-theme.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
<!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              <img src="images/logo.png"  width="80px" height="80px">
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="admin_home.php">Dashboard <span class="sr-only">(current)</span></a>
                </li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Category
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="cat_master.php">Add Category</a>
					<a class="dropdown-item" href="cat_master_view.php">View Category</a>
				</div>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Sub Category
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="sub_cat_master.php">Add Subcategory</a>
					<a class="dropdown-item" href="sub_cat_master_view.php">View Subcategory</a>
				</div>
				</li>
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Product
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="product_master.php">Add Product</a>
					<a class="dropdown-item" href="product_master_view.php">View Product</a>
				</div>
				</li>
                <li class="nav-item">
                  <a class="nav-link" href="user_master_view.php">User</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="artist_master_view.php">Artist</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="order_master_view.php">Order</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="feedback_master_view.php">Feedback</a>
                </li>
               </ul>
            </div>
            <div class="quote_btn-container">
              <a href="logout.php">
                <span>
                  Logout
                </span>
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
