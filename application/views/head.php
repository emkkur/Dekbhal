<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>ADC</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
	<link rel="shortcut icon" href="<?php echo base_url();?>images/logo1.png" type="image/x-icon" />
<style type="text/css">
	body{
        background-color: aliceblue;
        
		background-repeat: no-repeat;
        background-position: center;
        position: relative;
      overflow-x: hidden;
        
    
	}
	.bg{
        
	height: 80px;
  padding-bottom: 10px;
	margin-bottom: 30px;
	background: #207cca;
 border-bottom: 2px solid;
	
	border-color: black;
  background-size: cover;
		position:fixed;
		width: 100%;
       
	}
   
.searchbtn {
                position: relative;
                
                
                border:2px solid #207cca;
                background-color:#207cca;
                color:#fafafa;
                width:100%;
                max-width:120px;
                height:68px;              
    
}
.logo
    {
        width:20%;
        height: 80px;
    }
 .title{
    width:60%;
     height: 80px;
  }
    .snup{
      width:20%; 
        height: 80px;
    }

@media screen and (min-width: 601px) {
 .title{
    font-size: 80px;
  }
}

@media screen and (max-width: 600px) {
  .title {
    font-size: 30px;
  }
}
    
</style>
</head>

				
				  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
				  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
				  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
				  <script>
				  $(function() {
				    $( "#datepicker" ).datepicker({
				      changeYear: true,
				      changeMonth: true,
				      yearRange: "-50:+0",
					  dateFormat: "dd-mm-yy"
					});
				  });
				  </script>
				

<body  style=" min-height:700px;width:100%">


    
    <nav style="background-color:#207cca;" class="navbar navbar-expand-md sticky-top navbar-dark">
  <!-- Brand -->
  
  <a class="navbar-brand" href="<?php echo base_url();?>"><img height="50px" src="<?php echo base_url();?>images/logo.png"  title="Home"></a>
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div  class="collapse  navbar-collapse" id="collapsibleNavbar">
     

    <ul class=" navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="https://innovate.mygov.in/sih2018/">SIH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CODE_BLOODED_18</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#myModal" href="#">LOGIN</a>
      </li> 
            <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       SIGNUP
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="<?php echo base_url();?>signup/hospital">Hospital</a>
        <a class="dropdown-item" href="<?php echo base_url();?>signup/individual">Individual ambulance</a>
        <a class="dropdown-item" href="<?php echo base_url();?>signup/agency">Agency registration</a>
    </li>
    </ul>
  </div> 
</nav>
    
    


    
    
    
    
    
    
    
  

    <div class="modal row fade" id="myModal" role="dialog">
    <div class="modal-dialog col-sm-12 modal-lg">
      <div class="modal-content">
        <div class="modal-header">
             <h4 class="modal-title">LOG IN</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
          
        <div class="modal-body">
          
            
            
            
            
        <form method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
        
	<div >
		<label style=" font-family: Open Sans;
  font-weight: 600;
  font-size: 12pt;
    float: left;
  color: black;">EMAIL </label>
		 <input class="form-control"  type="text" name="username" required style="text-transform:uppercase" class="searchb">
		</div>
	<div class="form-group">
		<label  style=" font-family: Open Sans;
  font-weight: 600;
  font-size: 12pt;
    float: left;
  color: black;">Password</label>
		<input class="form-control" type="password" name="password" required class="searchb">
	</div>
            <div class="form-group">
	<input class="btn btn-primary" type="submit" style="min-width:120px;float:left;" name="ambulance" value="Individual Login" class="searchbt">&nbsp
                
	<input class="btn btn-primary" type="submit" style="min-width:120px;float:left;" name="agency" value="Agency Login" class="searchbt">&nbsp
        
                <input class="btn btn-primary" type="submit" style="min-width:120px;float:right;"  name="hospital" value="Hospital Login" class="searchbt img-responsive"></div>
	</form>	<br>
            
            
            
            
        </div>
        
      </div>
    </div>
  </div>

