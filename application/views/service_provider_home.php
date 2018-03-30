     <style>
              .req0{
                  
                  width:100%;
                  height:120px;
                  padding: 2%;
                  background-color:lightblue;
                  border-radius: 2%;
              }
              .req{
                  width:70%;
                  padding: 0;
                  
                  float: left;
              }
              .req1{
                  width:30%;
                  padding: 0;
                  
                  float: left;
              }
              .btk{
                  width:100%;
                  float: left;
              }
          </style>
<style type="text/css">

    
 .modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 50px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal1-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 90%;
    height: 600px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
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

.modal1-header {
    padding: 2px 16px;
    background-color: #207cca;
    color: white;
}

.modal1-body {padding: 2px 16px;}



       
    
</style>








<div class="container">

    
   

<div style="background-color:#" class="row">
  <div class="col-sm-3">
     <div class="photo-center"><center>
          <img style="width:50%;" class="photo" src="<?php echo base_url(); ?>images/prof.png" class="img-responsive"/>
         
        <h4 class="name"><?php echo $_SESSION['name']; ?>  <center><div class="active"></div></center></h4></center>
       
           
        </div>
  </div>
    
    <div class="col-sm-9">
         <p class="info">Driver</p>
        <p class="info"><?php echo $_SESSION['email']; ?></p>
        
        
        <form align="right" method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" class="form">
           <input type="submit" name="logout" class="btn" value="Logout" />
           </form>
        <hr> <center>
               <p id="myBtn1" style=" font-family: Open Sans; font-weight: 600;font-size: 12pt;
    text-align: center;
  color: #777;" >Hi ! My name is <?php echo $_SESSION['name'];?>
                .  More Detials</p></center>
                     
    </div>

    <div class="col-sm-12">   
    <hr>
      </div> 
 
    </div>
<div class="row">


<div id="myModal1" class="col-sm-12 modal1">

  <!-- Modal content -->
  <div class="modal1-content">
    <div class="modal1-header">
      <span class="close1">&times;</span>
      <h2><?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="modal1-body name">
        <div style="width:100%;float:left;">  
        <table width="100%"  >
          <tr>
              <td colspan="2">PROFILE</td>
          </tr>
        
        
      <?php
        
        $m=$_SESSION['email'];
       $s2=$this->db->simple_query('SELECT * FROM ambulance where email="'.$_SESSION['email'].'"');
                        $row2=mysqli_fetch_array($s2);
                        
                        echo '<tr>';
                        echo '<td> Name </td>';    
                       echo '<td>'.$row2["name"].'</td>';
                        echo '</tr>';
            echo '<td> Agency </td>';
                        echo '<td>' .$row2["agency"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Phone </td>';
                       echo '<td>' .$row2["mobno"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Email </td>';
                        echo '<td>'.$row2["email"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Homelocation </td>';
                        echo '<td>' .$row2["agency"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Adhar No </td>';
                        echo '<td>' .$row2["aproof"].'</td>';
                        echo '</tr>';
                      
                        echo '<tr>';
                        echo '<td> Licence No </td>';
                        echo '<td>' .$row2["lproof"].'</td>';
                        echo '</tr>';
            echo '<tr>';
                        echo '<td> Rides</td>';
                        echo '<td>' .$row2["rides"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Rating </td>';
                        echo '<td>' .$row2["rating"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Vhechle No </td>';
                        echo '<td>' .$row2["number"].'</td>';
                        echo '</tr>';
                        
                        echo '<tr>';
                        echo '<td> No of Rides </td>';
                        echo '<td>' .$row2["rides"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        /*echo '<td> Rate </td>';
                        echo '<td>' .$row2["rate"].'</td>'; 
                        echo '</tr>';
                        */
        
        ?>
        </table></div>
               </div><br>
            </div><br></div>    
    
</div>
    
    
    
    







<div class="container">    

  <div class="row">
    <div class="col-sm-12">
      
           <button style="width:100%;" type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"> CLICK HERE TO CHANGE HOME LOCATION</button>
        
    </div>
    <div id="demo" class="collapse col-sm-12">   <br>
          <form style="padding-left:7%;padding-right:7%;" method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
                <input type="hidden" class="form-group" id="latit" name="latit" >
    <input type="hidden" class="form-group" id="lont" name="lont" >
           <input type="text"  id="txtAddress" placeholder="service available location"  name="homelocation" required class="form-control"  onchange="GetLocation();"  value="">
            <input style="width:40%;float:left;" type="submit" name="changehome"  class="btn">
        </form>
     </div>
  <hr>
    </div> 
    
     
    
    
  </div>
  
</div>

<div class="container "> <hr>   
  

  <div class="row">
      
      
      <div class="col-sm-6">
          <h4>REQUESTS</h4>
     
          
          
          
          
  
        
			
    <?php        
            
            $val2=$this->db->simple_query('SELECT * FROM destination WHERE status=0');
                  while ($res=mysqli_fetch_array($val2))
                      
                  {
            //echo $res['email'];
        $val3=$this->db->simple_query('SELECT * FROM hospital WHERE email="'.$res['email'].'"');
        $res1=mysqli_fetch_array($val3);
        
                 echo '<div class="req0">      
    <div class="req">';?>
       <?php   echo ' Name :'.$res1['name'].'<br>'; ?>
                       <form style="padding-left:7%;padding-right:7%;" method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
      
                           <?php  echo 'EMAIL :'.$res1['email'].'<br>'; ?>
        <?php  echo 'Mobile Number : '.$res1['mobno'].'<br>'; ?>
        <?php  echo 'DESTINATION : '.$res['destination'].'<br>'; ?>
        <?php  echo '</div>';?>
        <div  class="req1"><center>
            <input type="hidden" name="id" class="btn" value="<?php echo $res['id'] ; ?> " /> 
         <input type="hidden" name="emailh" class="btn" value="<?php echo $res1['email'] ; ?> " /> 
            
             <input style="width:80%;" type="submit" name="confirm" class="btn" value="CONFIRM" /> <br><br>
             <input style="width:80%;" type="submit" name="reject" class="btn" value="DELETE" /> 
             </center>
          </div>
      <?php  echo '</div>';?>
        <?php  echo '<br>';?>                   
        </form>
            
             <?php
                   
                   
                  }       
                   
                   ?>
            
          
          
          
          
      </div>
      
      <div class="col-sm-6">
          
          <h4>CONFIRMED</h4>
           <?php
                
                   
                  
                   
                   
         $val2=$this->db->simple_query('SELECT * FROM accept WHERE emails="'.$_SESSION['email'].'" AND active=1');
                  while ($res=mysqli_fetch_array($val2))
                      
                  {
            //echo $res['email'];
        $val3=$this->db->simple_query('SELECT * FROM destination WHERE id="'.$res['dest_id'].'"');
        $res1=mysqli_fetch_array($val3);
        
                 echo '<div class="req0">      
    <div class="req">';?>
       
                       <form class="form-control" method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
      
                           <?php  echo 'EMAIL :'.$res1['email'].'<br>'; ?>
        
        <?php  echo ' DESTINATION: '.$res1['destination'].'<br>'; ?>
        <?php  echo '</div>';?>
  
        <div  class="req1"><center> 
        <input type="hidden" name="dest_id" class="btn" value="<?php echo $res['dest_id'] ; ?> " />
           <input type="submit" name="complete" class="btn" value="RIDE FINISHED" /> 
      
            </center></div>
     <?php  echo '<br>';?>
        </form>
        <?php
                   
                   
                   
                  }
     
                   
                   ?>
     
  
          
          
      </div>
      
    

    </div> 
    
    <div class="col-sm-12">
          <hr></div>
</div>

<div class="container">
    <div class="col-sm-12">

   
  <h4>WHERE ARE YOU NOW</h4>  
    <center>       
    
 
    
    <div class="img-responsive" id="dvMap" style="width:100%; height: 250px"></div><br><p style=" font-family: Open Sans; font-weight: 600;font-size: 12pt;
    text-align: center;
  color: #777;">YOU ARE HERE</p>
              
      </center>     

        <hr>
        
    </div> 
</div>

<?php /*
<div class="container "> <hr>   
  

  <div class="row">
      
      
      <div class="col-sm-12">
          <center>abhay</center>
      </div>
    </div>
</div>
*/?>
<br>






















   



  
    
    
    

   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAORYYMaGpcWUPC2Apw6nKxfIxVNegkMNg&callback=initMap"
  type="text/javascript"></script>

    <script type="text/javascript">
    <!--
        function GetLocation() {
            var geocoder = new google.maps.Geocoder();
            var address = document.getElementById("txtAddress").value;
            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var tolatt = results[0].geometry.location.lat();
                    var tolong = results[0].geometry.location.lng();
                   alert("Latitude: " + tolatt + "\nLongitude: " + tolong);
                
                     var dlat = document.getElementById("latit");
                        dlat.value = tolatt;
                    var dlot = document.getElementById("lont");
                        dlot.value = tolong;
                    
                    
                } else {
                    alert("Request failed.")
                }
            });
        };
        //-->
    </script>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     <?php //code for location ?>
    
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKzjwtu-tyyJQtPP3rFPxPRCgtZHgmKfs&callback=initMap"
  type="text/javascript"></script>

<script type="text/javascript">
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (p) {
        var directionsService = new google.maps.DirectionsService();
        var directionsDisplay = new google.maps.DirectionsRenderer();
        var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
        var mapOptions = {
            center: LatLng,
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
        var marker = new google.maps.Marker({
            position: LatLng,
            map: map,
            title: "<div style = 'height:60px;width:200px'><b>Your location:</b><br />Latitude: " + p.coords.latitude + "<br />Longitude: " + p.coords.longitude
        });
        directionsDisplay.setMap(map);
        document.getElementById('dist').addEventListener('click', function(){
            var lat1 = document.getElementById("latity").value;
     var lon1 = document.getElementById("lonty").value;
     window.lat2 = document.getElementById("latit").value;
     window.lon2 = document.getElementById("lont").value;
    
      var dist=0;  
     //    
	var radlat1 = Math.PI * lat1/180;
	var radlat2 = Math.PI * window.lat2/180;
	var theta = lon1-window.lon2;
	var radtheta = Math.PI * theta/180;
    dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
	dist = Math.acos(dist);
	dist = dist * 180/Math.PI;
	dist = dist * 60 * 1.1515;
	dist = dist * 1.609344; 
  alert("distance is: " + dist ); 
       
            var LatLng2 = new google.maps.LatLng(window.lat2, window.lon2);
            var route = [
          LatLng,
          LatLng2
        ];
            
            var request = {
    origin: LatLng,
    destination: LatLng2,
    travelMode: 'DRIVING'
  };
  directionsService.route(request, function(result, status) {
    if (status == 'OK') {
      directionsDisplay.setDirections(result);
    }
  });
//        var polyline = new google.maps.Polyline({
//            path: route,
//            geodesic: true,
//            strokeColor: "#ff0000",
//            strokeOpacity: 0.6,
//            strokeWeight: 5
//        });
//
//        polyline.setMap(map);
        });
        google.maps.event.addListener(marker, "click", function (e) {
            var infoWindow = new google.maps.InfoWindow();
            infoWindow.setContent(marker.title);
            infoWindow.open(map, marker);
        });
        
        
    });
} else {
    alert('Geo Location feature is not supported in this browser.');
}
</script>    
    
    <?php //code for location ?>
