<?php include '../database.php';
    session_start(); 
if(!isset($_SESSION['aid']))
echo"<script>window.location='../adminlogin.php'</script>";
?>
<html>
<head>
<title>learning online</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" />
  <link href="../css/icofont.css" rel="stylesheet" />
    <link href="../css/style.pink.css" rel="stylesheet" />
   <!--<link rel="shortcut icon" type="image/png" href="../favicon.png"/>-->
  </head>
  <body>
       
        
      <div class="page">
      <!-- Main Navbar-->

      <header class="header">
        <nav class="navbar" style="background-image:linear-gradient(to bottom right,#040348,#0f3b57,#0d6183,#0077b3,#298fbd,#228298,#0e81b9);">
          
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="../index.php" class="navbar-brand d-none d-sm-inline-block">
                 <h3> <div class="brand-text d-none d-lg-inline-block"><i class="icofont icofont-architecture-alt text-white"></i><span style="color:white">Smart</span><strong style="color:#8fd400">Learning</strong></div></h3>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
           
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Languages dropdown    -->
               
                <!-- Logout    -->
                <li class="nav-item"><a href="logout.php" class="nav-link logout text-white"> <span class="d-none d-sm-inline">Logout<i class="icofont icofont-logout"></i></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          
          <!-- Sidebar Navidation Menus--><span class="heading text-dark"><b></b></span>
          <ul class="list-unstyled">
            
             <li ><a href="dashboard.php"> <i class="icofont icofont-dashboard-web"></i>Dashboard</a></li>
              <li><a href="#Masters" aria-expanded="false" data-toggle="collapse"> <i class="icofont icofont-listing-box"></i>Add Content </a>
              <ul id="Masters" class="collapse list-unstyled ">
               
                <li><a href="coursecategories.php">Course Categories</a></li>
                <li><a href="coursetypes.php">Course Types</a></li>
                 <li><a href="addcourse.php">Course</a></li>
                  </ul>
              
              
    </li>
      <li> <a href="allcoursecategories.php"> <i class="icofont icofont-file-text"></i>View Course Categories</a></li>
                
                     
           <li><a href="allcoursetypes.php"> <i class="icofont icofont-list"></i>View Course Types </a></li>          
          <li><a href="allcourses.php"> <i class="icofont icofont-numbered"></i>View Courses</a></li>
    
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
              
            <li> <a href="logout.php"> <i class="icofont icofont-logout"></i>logout </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->

