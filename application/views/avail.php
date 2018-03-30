<body>
<style>
/* Popup container - can be anything you want */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
    position: fixed;
    bottom: 0;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #207cca;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

@keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

    .searchbt {
                position: relative;
                padding:6px 10px;
                
                border:2px solid #207cca;
                background-color:#207cca;
                color:#fafafa;
        width:40%;}
        
</style>
     
	 <div class="stat col-xs-12" > <hr>
<center><button style="width:50%;color:#fafafa; background-color:#207cca;
    "  name="submit" id="myBtn" class="btn">GIVE COMMENTS</button></center></div>


<div id="myModal" class="modal">

 <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>
        
   <center>     
     <?php
  $email=$_SESSION['mails'];  
           //print rides accepted from driver        
                   $s=$this->db->simple_query('SELECT * FROM request where emailp="'.$_SESSION['mails'].'" and active=1');
                   if(mysqli_num_rows($s)>0)
                   {
                      
                    $row1=mysqli_fetch_array($s); 
                    echo "YOUR DRIVE!!!!! \n ";
                     echo $row1['emaild'];
                     $s2=$this->db->simple_query('SELECT * FROM driver where mail_d="'.$row1['emaild'].'"');
                        $row2=mysqli_fetch_array($s2);
                       echo $row2["name_d"];
                       echo "        PHONE NUMBER";
                       echo $row2["phone_d"];
                   }
                       //
//COMMENTS
	?></center>
            
        
        </h2>
    </div>
    
     
       
    <div class="modal-body">
      
     <center>
  
        
<form style="width:100%;text-align:right;margin-left:10%;margin_right:10%;" method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" class="form">
        <br>
        <input style="width:80%;"  type="number" placeholder="RATING OUT OF 5" name="rating"  required class="form-control"><br>
    <input style="width:80%;"  type="textarea" placeholder="COMMENTS" name="comm"  required class="form-control"><br>
   <center> <input style="width:30%;margin-left:30%;" class="searchbt"   type="submit" name="comments" value="SUBMIT COMMENTS"></center><br><br>
        
        
        
        
        
        </form>
	
	</center>
   
        
    </div>
    
  </div>
     
     
     
	

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>