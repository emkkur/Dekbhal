      <?php
if(!empty($val_all))
{
?>


<style>
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
        width: 100%;
   

}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 101%;
    background:white ;
    color:white;
    text-align: center;
    border-radius: 6px;
    padding: 0px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    min-height: 600px;
    max-height: 650px;
    margin-left: 0;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left:50%;
    margin-left: 0px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
    
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
    
        .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #207cca;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
 
  width:80%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
        height: 50px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
    .pg{
         
        color:black;
    }  
    
    
</style>









<center><div class="scol-xs-11 col-md-12 col-md-offset-0" >
<div class="row">
    <hr>
    <div class="popup" onclick="myFunction()">  
        <center><button style="width:60%" type="button" name="submit" id="button" class="button" ><hover>SHOW RESULTS
            
            </hover></button></center>
  
        
<div class="popuptext" id="myPopup">
        
<center>
	<div >
	<?php
	if(mysqli_num_rows($val_all)<1)
	{
		echo '<h2 class="text-muted pg">NO RESULTS TO SHOW</h2>';
	}
	else
	{
        echo '<h3 class="text-muted pg">SEARCH RESULTS ARE</h3>';
		echo '<form method="POST" action="'.base_url().'admin/get_excel" target="_blank">';
		echo '<input type="hidden" name="value" id="excel_hidden" value="">';
		
		echo '</form>';
		$i=1;
		//echo '<div class="table-responsive">';
		echo '<div id="excel_inside" class="table-responsive">';
			echo '<table width="100%" class="table  pg table-hover">';
			echo '<tr> <th>Name</th> <th>TYPE</th> <th>RATE</th> <th>Time</th><th></th><th></th>';
			//print_heading($val_all_2);
			echo ' </tr>';
        $lon1=$_SESSION['flatt1'];
        $lat1=$_SESSION['flong1'];
        $lon3=$_SESSION['tolatt1'];
        $lat3=$_SESSION['tolong1'];
        
			while($row=mysqli_fetch_array($val_all))
			{
				
                $lon2=$row['flatt'];
                $lat2=$row['flong'];
                $lon4=$row['tolatt'];
                $lat4=$row['tolong'];
                
 ////////////////DISTANCE//////////////////////////             
                
                
         
            
 
                
     $radlat1 = 3.14 * $lat1/180;
	$radlat2 = 3.14 * $lat2/180;
	$theta = $lon1-$lon2;
	$radtheta = 3.14 * $theta/180;
    $dist = sin($radlat1) * sin($radlat2) + cos($radlat1) * cos($radlat2) * cos($radtheta);
	$dist = acos($dist);
	$dist = $dist * 180/3.14;
	$dist = $dist * 60 * 1.1515;
	$dist = $dist * 1.609344; 
 
                
                
  /////////////////////////////////////              
                

            

  
                 
     $radlat3 = 3.14 * $lat3/180;
	$radlat4 = 3.14 * $lat4/180;
	$theta = $lon3-$lon4;
	$radtheta = 3.14 * $theta/180;
    $dist1 = sin($radlat3) * sin($radlat4) + cos($radlat3) * cos($radlat4) * cos($radtheta);
	$dist1 = acos($dist1);
	$dist1 = $dist1 * 180/3.14;
	$dist1 = $dist1 * 60 * 1.1515;
	$dist1 = $dist1 * 1.609344; 
    
                
                            
                
                
                
                
                
////////////////////////////////////////////////////////
                
   if( ($dist1<2))
   {
       $i=1;
  $val1=$this->db->simple_query('SELECT * FROM driver WHERE mail_d="'.$row['email'].'"');
    $res=mysqli_fetch_array($val1);
      
       echo '<td>'.$res['name_d'].'</td>';
       echo '<td>'.$res['type'].'</td>';
       echo '<td>'.$row['rate'].'</td>';
       echo '<td>'.$row['time'].'</td>';  
        ?>
       <form style="padding-left:7%;padding-right:7%;" method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
      
        <td><input type="text" name="email" class="btn" value="<?php echo $res['mail_d'] ; ?> " /> </td>
           <td> <input type="submit" name="to" class="btn" value="gotoprofile" /> </td>'
            <tr/>
        </form>
        <?php
   }
           
     

}


//echo distance(32.9697, -96.80322, 29.46786, -98.53506, "K") . " Kilometers<br>";
            
                
                
                
                
                
                
                
                
			}
			echo '</table>';
		echo '</div>';
		//echo '</div>';
	}
	?>
	
    </div></center>
	</div><!-- col classes -->
    </div>
	</div><!-- row class -->



    </div><br><br><br>
        
<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>
