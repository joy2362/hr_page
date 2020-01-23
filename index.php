<!DOCTYPE html>
<html>
<head>
	<title>hr</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!--google font-->
  <link href="https://fonts.googleapis.com/css?family=Gelasio|Lato|Playfair+Display|Roboto|Source+Sans+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<!--navbar design start-->
	<nav class="navbar navbar-expand-lg navbar-light" style="background: #6FA362;">
	<div class="container-fluid">
	<!--logo-->
  <a class="navbar-brand" href="#"><img src="image/logo1.jpg" class="logo"></a>
  <!--make navbar collapseable-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	<!--left side element-->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link text-white" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="employee" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Employee
        </a>
        <div class="dropdown-menu" aria-labelledby="employee">
          <a class="dropdown-item" href="#">Edit profile</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="attendance" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Attendance
        </a>
        <div class="dropdown-menu" aria-labelledby="attendance">
          <a class="dropdown-item" href="#">Employee Late Entry</a>
          <a class="dropdown-item" href="#">Employee Early Exit</a>
          <a class="dropdown-item" href="#">Employee Late Exit</a>
          <a class="dropdown-item" href="#">Late Attendance Reason</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="leave" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Leave
        </a>
        <div class="dropdown-menu" aria-labelledby="leave">
          <a class="dropdown-item" href="#">Leave Request</a>
          <a class="dropdown-item" href="#">My Leaves</a>
          <a class="dropdown-item" href="#">Application Status</a>
          <a class="dropdown-item" href="#">Leave Status</a>
          <a class="dropdown-item" href="#">Cancled Leaves</a>
          <a class="dropdown-item" href="#">View Alternate Holiday</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="movement" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Movement
        </a>
        <div class="dropdown-menu" aria-labelledby="movement">
          <a class="dropdown-item" href="#">Movement Application</a>
          <a class="dropdown-item" href="#">Movement History</a>
          <a class="dropdown-item" href="#">All Movement</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="employee" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bit Submit: Statement
        </a>
        <div class="dropdown-menu" aria-labelledby="employee">
          <a class="dropdown-item" href="#">Visiting Card List</a>
        </div>
      </li>
	<li class="nav-item">
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
	    </form>
    </li>
    <!--profile info-->
  </ul>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link  text-white dropleft" href="#" id="profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          zahid <i class="fas fa-lock"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="profile">
        	<p class="dropdown-header">Profile</p>
          <div class="text-center">
        	   <img src="image/male.png" alt="pfofile picture" class="border border-primary rounded-sm pro_pic ">
          </div >
        	<div class="text-center">
	        	<h2 class="pro_name">abdullah zahid</h2>
          </div>
	        	<p>abdullahzahidjoy@gmail.com</p>
        	<div class="dropdown-divider"></div>
          <button class="btn btn-primary float-right btn-sm">Sign out</button>
        </div>
      </li>
    </ul>
  </div>
  </div>
</nav>
<!--end navbar-->
<!--main content start-->
	<div class="container">
    <!--this is breadcrumb section-->
		<div class="row">
      <div class="col-sm-4 pt-3">
        <nav aria-label="breadcrumb ">
          <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item">You are here:</li>
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </nav>
      </div>
      <div class="col-sm-6"></div>
      <div class="col-sm-2 pt-4 pl-2">
        <a href="#" class="text-dark"><i class="fas fa-sliders-h"></i> Filter</a>
        <a href="#" class="text-dark"><i class="fas fa-shield-alt"></i> Get Help</a>
      </div>
    </div>
    <hr>
    <!--end breadcrumb section-->
    <!--this is dashboard section-->
    <div class="row">
      <div class="col-sm-4">
        <h2 class="pl-3">Dashboard</h2>
      </div>
      <div class="col-sm-4"></div>
      <div class="col-sm-4"></div>
    </div>
    <hr>
    <div class="row shadow p-4 mb-4">
      <div class="col-sm-2 m-2">
        <div class=" h-50 bg-primary attendance text-center  pt-2 pb-2">
          <a href="#" class="text-white">100%</a>
        </div>
        <div class="bg-dark text-center pt-2 pb-2">
          <a href="#" class="">Attendance</a>
        </div>
      </div>
      <div class="col-sm-2 m-2">
        <div class=" h-50 bg-warning attendance text-center  pt-2 pb-2">
          <a href="#" class="text-white">20%</a>
        </div>
        <div class="bg-dark text-center pt-2 pb-2">
          <a href="#" class="">Late Entry</a>
        </div>
      </div>
      <div class="col-sm-2 m-2">
        <div class=" h-50 bg-info attendance text-center  pt-2 pb-2">
          <a href="#" class="text-white">100%</a>
        </div>
        <div class="bg-dark text-center pt-2 pb-2">
          <a href="#" class="">Late Exit</a>
        </div>
      </div>
      <div class="col-sm-2 m-2">
        <div class=" h-50 bg-danger attendance text-center  pt-2 pb-2">
          <a href="#" class="text-white">10%</a>
        </div>
        <div class="bg-dark text-center pt-2 pb-2">
          <a href="#" class="">Absent</a>
        </div>
      </div>
       <div class="col-sm-2 m-2">
        <div class=" h-50 bg-secondary attendance text-center  pt-2 pb-2">
          <a href="#" class="text-white">0%</a>
        </div>
        <div class="bg-dark text-center pt-2 pb-2">
          <a href="#" class="">Total Leave</a>
        </div>
      </div>
    </div>
    <!--dashboard section end-->
    <!--content start-->
    <div class="row">
      <!--profile section-->
      <div class="col-sm-3">
        <div class=" shadow mb-3">
          <div class="rounded-sm profile text-center">
            <img src="image/male.jpg">
          </div>
          <hr>
          <div class="text-center name pb-4">
           <h2>Abdullah zahid</h2>
           <h3>Web Developer</h3>
           <p><i class="fas fa-phone-square-alt"></i> 01780134797</p>
           <a href="#"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
         <div class="card shadow mb-3">
          <div class="card-header">
            <i class="fas fa-list-ul"></i> Skills
          </div>
          <div class="card-body Project_height">
            <!--card body contant goes here-->
          </div>
        </div>
         <div class="card shadow mb-3">
          <div class="card-header">
            <i class="fab fa-think-peaks"></i> Experience
          </div>
          <div class="card-body Project_height">
            <!--card body contant goes here-->
          </div>
        </div>
        <div class="card shadow mb-3">
          <div class="card-header">
            <i class="fas fa-forward"></i> Education
          </div>
          <div class="card-body">
            <div class="card">
              <div class="card-header">Name of Degree</div>
              <div class="card-body"></div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary float-right btn-sm">View Details</button>
          </div>
        </div>
    </div>
      <div class="col-sm-6 ">
        <div class="card shadow mb-3">
          <div class="card-header">
            <div class="float-left">
              <i class="fas fa-user"></i> Short Bio
            </div>
            <div class="float-right ">
              <a href="#"><i class="fas fa-cog text-dark"></i></a>
            </div>
          </div>
          <div class="card-body bio_height">
            <!--card body contant goes here-->
          </div>
        </div>
        <div class="card shadow mb-3">
          <div class="card-header">
            <div class="float-left">
              <i class="fas fa-star"></i> Ongoing Project
            </div>
            <div class="float-right">
              <a href="#"><i class="fas fa-cog text-dark"></i></a>
            </div>
          </div>
          <div class="card-body Project_height">
            <!--card body contant goes here-->
          </div>
        </div>
        <div class="card shadow mb-3">
          <div class="card-header">  
            <i class="fas fa-tags"></i> Work History
          </div>
        </div>
        <div class="card shadow mb-3">
          <div class="card-header">  
            <i class="fas fa-user"></i> Employee Address
          </div>
          <div class="card-body ">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Present Address</th>
                  <th>Permanent Address</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td >145/3-1,matikata Dhaka cantonment dhaka-1206 </td>
                  <td >145/3-1,matikata Dhaka cantonment dhaka-1206 </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
          <div class="card shadow mb-3">
          <div class="card-header">  
            <i class="fas fa-user"></i> Employee Contact Information
          </div>
          <div class="card-body ">
            <table class="table table-bordered contact_info">
              <thead>
                <tr>
                  <th>Mobile no</th>
                  <th class="text-center">Email</th>
                  <th>Home Phone</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td >01780134797</td>
                  <td >md987954@gmail.com</td>
                  <td >01780134797</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-sm-3 ">
        <div class="bg_color mb-3 text-white p-2">         
          <div class="cal_logo pl-3  pt-1 float-left w-25 ">
            <i class="fas fa-calendar-alt"></i>
          </div>
          <div class="entry_time pl-4 ">
            <h2>IN AT 9:10:15 p.m.</h2>
            <p>Today(24/01/2020)</p>
          </div>
        </div>
         <div class="card shadow mb-3">
          <div class="card-header">
            <div class="float-left">
              Leaves
            </div>
            <div class="float-right">
              <a href="#"><i class="fas fa-mug-hot text-dark"></i></a>
            </div>
          </div>
          <div class="card-body ">
           <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 Total Leaves
                <span class="badge badge-primary badge-pill">12</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 Leave Enjoyed
                <span class="badge badge-primary badge-pill">0</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Current Leave Balance
                <span class="badge badge-primary badge-pill">99</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="card shadow mb-3">
          <div class="card-header show_att"> 
            Show Attendance
          </div>
        </div>
      </div>
    </div>
	</div>
  <!--end main content-->
  <footer class="text-center text-white pt-1 pb-1">&copy; 2020 - PlanWay iT - All Rights Reserved.</footer>
	<!-- javascript library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>