

<br><br><br>
<h1>
    
    <?php
   // echo $_SESSION['mails'];
    //echo $_SESSION['name'];
    ?></h1>
    <!DOCTYPE html>
<style type="text/css">
.container {
  max-width: 12500px;
  margin: 30px auto 30px;
  padding: 0 !important;
  width: 90%;
  background-color: #fff;
  box-shadow: 0 3px 6px rgba(0,0,0,0.10), 0 3px 6px rgba(0,0,0,0.10);
    
}


header {
  background: #eee;
  background-image:url("<?php echo base_url(); ?>images/road.jpg");
  background-repeat: no-repeat;

  background-size: cover;
  background-color: red;
  height: 200px;
}

header i {
  position: relative;
  cursor: pointer;
  right: -96%;
  top: 25px;
  font-size: 18px !important;
  color: #fff;
}

@media (max-width:800px) {
  header {
    height: 150px;
  } 
  
  header i {
    right: -90%;
  }
}

main {
      padding: 10px 10px 0px 0px;
}

.center {
  display: flex;
  align-items: center;
  justify-content: center;
  
}

.photo {
  width: 200px;
  height: 200px;
  margin-top: -120px;
  border-radius: 100px;
  border: 4px solid #fff;
}

.active {
  width: 20px;
  height: 20px;
  border-radius: 20px;
  
  right: calc(50% - 70px);
  top: 75px;
  background-color: #FFC107;
  border: 3px solid #fff;
}

@media (max-width:990px) {
  .active {
    right: calc(50% - 60px);
    top: 50px;
  } 
}

.star-ratings-css {
  background-color:;
  unicode-bidi: bidi-override;
  color: #c5c5c5;
  font-size: 25px;
  height: 25px;
  width: 100px;
  margin: 0 auto;
  position: relative;
  padding: 0;
  text-shadow: 0px 1px 0 #a2a2a2;
  
  &-top {
    color: #84e71a;
    padding: 0;
    position: absolute;
    z-index: 1;
    display: block;
    top: 0;
    left: 0;
    overflow: hidden;
  }
  &-bottom {
    padding: 0;
    display: block;
    z-index: 0;}
}

.name {
  margin-top: 20px;
  font-family: "Open Sans";
  font-weight: 600;
  font-size: 18pt;
  color: #777;
}
    @media only screen and (max-width:700px){
        .name {
  margin-top: 20px;
  font-family: "Open Sans";
  font-weight: 600;
  font-size: 12pt;
  color: #777;
}
   
    }

.info {
  margin-top: -5px;
  margin-bottom: 5px;
  font-family: 'Product Sans', sans-serif;
  font-size: 11pt;
  color: #aaa;
}

.stats {
  margin-top: 25px;
  text-align: center;
  padding-bottom: 20px;
  border-bottom: 1px solid #ededed;
  font-family: 'Product Sans', sans-serif;
}


.number-stat {
  padding: 0px;
  font-size: 14pt;
  font-weight: bold;
  font-family: 'Product Sans', sans-serif;
  color: #aaa;
}

.desc-stat {
  margin-top: -15px;
  font-size: 10pt;
  color: #bbb;
}

.desc {
  text-align: center;
  margin-top: 25px;
  margin: 25px 40px;
  color: #999;
  font-size: 11pt;
  font-family: "Open Sans";
  padding-bottom: 25px;
  border-bottom: 1px solid #ededed;
}

.social {
  margin: 5px 0 12px 0;
  text-align: center;
  display: inline-block;
  font-size: 20pt;
}

.social i {
  cursor: pointer;
  margin: 0 15px;
}

.social i:nth-child(1)  { color: #4267b2; }
.social i:nth-child(2)  { color: #1da1f2; }
.social i:nth-child(3)  { color: #bd081c; }
.social i:nth-child(4)  { color: #36465d; }

.right {
  padding: 0 25px 0 25px !important;
}

.nav {
  display: inline-flex;
}

.nav li {
  margin: 40px 30px 0 10px;
  cursor: pointer;
  font-size: 13pt;
  text-transform: uppercase;
  font-family: 'Product Sans', sans-serif;
  font-weight: 500;
  color: #888;
}

.nav li:hover, .nav li:nth-child(1)  { 
  color: #999;
  border-bottom: 2px solid #999;
}

.follow {
  position: absolute;
  right: 8%;
  top: 35px;
  font-size: 11pt;
  background-color: #42b1fa;
  color: #fff;
  padding: 8px 15px;
  cursor: pointer;
  transition: all .4s;
  font-family: 'Product Sans', sans-serif;
  font-weight: 400;
}

.follow:hover {
  box-shadow: 0 0 15px rgba(0,0,0,0.2), 0 0 15px rgba(0,0,0,0.2);
}

@media (max-width:990px) {
  .nav {
    display: none;
  }
  
  .follow {
    width: 50%;
    margin-left: 25%;
    display: block;
    position: unset;
    text-align: center;
  }
}
.gallery  {
  margin-top: 35px;
}

.gallery div {
  margin-bottom: 30px;
}

.gallery img {
  box-shadow: 0 3px 6px rgba(0,0,0,0.10), 0 3px 6px rgba(0,0,0,0.10);
  width: auto; 
  height: auto;
  cursor: pointer;
  max-width: 100%;
}
        .searchb {
                padding:8px 15px;
                background:rgba(50, 50, 50, 0.2);
                border:2px solid #dbdbdb;
                width:80%;
}
.searchbt {
                position: relative;
                padding:6px 12px;
                left:00%;
                border:2px solid #207cca;
                background-color:#207cca;
                color:#fafafa;
                width:40%;
}

   
    }
    
.logbutton {
    border: 1px solid #ccc;
    margin-top: 28px;
    padding: 6px 12px;
    color: #666;
    text-shadow: 0 1px #fff;
    cursor: pointer;
    -moz-border-radius: 3px 3px;
    -webkit-border-radius: 3px 3px;
    border-radius: 3px 3px;
    -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    box-shadow: 0 1px #fff inset, 0 1px #ddd;
    background: #f5f5f5;
    background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
    background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
    
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
    width: 80%;
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
  <header>
    <i class="fa fa-bars" aria-hidden="true"></i>
  </header>
  <main>
    <!div class="row">
      <div >
       <center><div class="photo-center">
          <img class="photo" src="<?php echo base_url(); ?>images/prof.png" class="img-responsive"/>
         
        <h4 class="name"><?php echo $_SESSION['name']; ?>  <center><div class="active"></div></center></h4>
        <p class="info">Driver</p>
        <p class="info"><?php echo $_SESSION['mails']; ?></p>
              <form method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" class="form">
           <input type="submit" name="logout" class="btn" value="Logout" />
           </form>
        </div></center>
        
          <div class="stat col-xs-12" >
           <div > <hr> <center>
        
               <p id="myBtn" style=" font-family: Open Sans; font-weight: 600;font-size: 12pt;
    text-align: center;
  color: #777;" >Hi ! My name is <?php echo $_SESSION['name'];?>
                .  More Detials</p></center>
        
       <div id="myModal" class="modal1">

  <!-- Modal content -->
  <div class="modal1-content">
    <div class="modal1-header">
      <span class="close">&times;</span>
      <h2><?php echo $_SESSION['mails']; ?></h2>
    </div>
    <div class="modal1-body name">
       
      <div style="width:50%;float:left;">  
        <table width="100%"  >
          <tr>
              <td colspan="2">PROFILE</td>
          </tr>
          
        
        
      <?php
        
        $m=$_SESSION['mails'];
       $s2=$this->db->simple_query('SELECT * FROM driver where mail_d="'.$_SESSION['mails'].'"');
                        $row2=mysqli_fetch_array($s2);
                        
                        echo '<tr>';
                        echo '<td> Name </td>';    
                       echo '<td>'.$row2["name_d"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Phone </td>';
                       echo '<td>' .$row2["phone_d"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Email </td>';
                        echo '<td>'.$row2["mail_d"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Age </td>';
                        echo '<td>' .$row2["age"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Adhar No </td>';
                        echo '<td>' .$row2["adproof"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Gender </td>';
                        echo '<td>' .$row2["gender"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Licence No </td>';
                        echo '<td>' .$row2["lproof"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Vehicle Type </td>';
                        echo '<td>' .$row2["type"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Vhechle No </td>';
                        echo '<td>' .$row2["vnumber"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> RC No </td>';
                        echo '<td>' .$row2["rcbook"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> No of Rides </td>';
                        echo '<td>' .$row2["rides"].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<td> Rate </td>';
                        echo '<td>' .$row2["rate"].'</td>'; 
                        echo '</tr>';
                        
        
        ?>
        </table></div>
       <div style="width:50%;float:left;">  
      <table width="100%"  >
          <tr>
              <td colspan="2">COMMENTS</td>
          </tr>
          <tr>
              <td>Email</td>
              <td>Comment</td>
          </tr>
        <tr>
          
             <?php
        $to=$this->db->simple_query('SELECT * FROM comments WHERE emaild="'.$_SESSION['mails'].'" ');
  while ($row1=mysqli_fetch_array($to))
  {
      
     echo '<tr>';
      //////////////////////SHOWING COMMENTS
         echo '<td>';
      echo $row1['emailp'];
      echo '</td>';
      echo '<td>';
     echo $row1['comment'];
     echo '</td>';
   
     echo '</tr>';
     
  }
     
     ?>
            
        </table> </div> 
       
    </div>
        
  
  </div>
              </div>

              
              </div><hr></div>
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

          
      
               
               
               <div class="stats row">
          <div class="stat col-xs-6" style="position:relative;height:320px;">
            
              <h3><p style="margin-top: 20px; font-family: Open Sans;
  font-weight: 600;
  font-size: 17pt;
    text-align: left;
  color: #777;
     padding-left:10%;">ENTER DETAILS </p></h3>
 <center>        
<form  method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" class="form">
                                 <textarea class="searchb" id="txtAddress" rows="3" onchange="GetLocation();" cols="25"></textarea><br/>
                                <p style=" font-family: Open Sans;
  font-weight: 600;
  font-size: 10pt;
    text-align: left;
  color: #777;
                                          padding-left:10%;">RATE</p>
                                <input type="number" class="searchb" name="rate" placeholder="ENTER RATE PER KM">
    <br />
                  <p style=" font-family: Open Sans;
  font-weight: 600;
  font-size: 10pt;
    text-align: left;
  color: #777;
     padding-left:10%;">TIME</p>
                                <input type="time" class="searchb" name="time" placeholder="ENTER TIME" value="time when driving starts">
    <br />

                                
                                 
   
<input type="hidden" id="latity" name="latity1" value=""/>
                                
     <input type="hidden" id="lonty" name="lonty1" value=""/>
    
    <input type="hidden" id="latit" name="latit" value=""/>
    <input type="hidden" id="lont" name="lont" value=""/><br>
    
     <input  class="searchbt" type="button" id="dist" value="Route" />
    
    <input  class="searchbt" type="submit" name="submit"  value="SET" />
    
    
                            
</form>
              
     
              
              
              
              
              
              
              </center>
   
          </div>
                      
<div class="stat col-xs-6" style="padding-right: 50px;">       
    
    
   <center>
    
           
    <br><br> 
    
        
    
    
    <div class="img-responsive" id="dvMap" style="width: 400px; height: 250px"></div><br><p style=" font-family: Open Sans; font-weight: 600;font-size: 12pt;
    text-align: center;
  color: #777;">YOU ARE HERE</p>
              
      </center>     

        </div><hr>
                             
          </div>
          
 <div class="stat col-xs-12" style="padding-right: 50px;">           
     <br>  <p style=" font-family: Open Sans; font-weight: 600;font-size: 16pt;
    text-align: center;
  color: #777;">REQUSTS</p>   
           <?php
                   
                   
                   
                   echo '<table class="table table-hover" border=0>';
			echo '<tr> <th>Name</th> <th>Email</th> <th>Confirm</th> <th>Delete</th>';
			//print_heading($val_all_2);
			echo ' </tr>';
                   
                   
         $val2=$this->db->simple_query('SELECT * FROM request WHERE emaild="'.$_SESSION['mails'].'" AND active=0');
                  while ($res=mysqli_fetch_array($val2))
                      
                  {
        
                 echo '<td>'.$res['emailp'].'</td>'; ?>
                       <form style="padding-left:7%;padding-right:7%;" method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
      
        <td><input type="text" name="email" class="btn" value="<?php echo $res['emailp'] ; ?> " /> </td>
           <td> <input type="submit" name="confirm" class="btn" value="CONFIRM" /> </td>
        
            <td> <input type="submit" name="reject" class="btn" value="DELETE" /> </td>
            <tr/>
        </form>
        <?php
                   
                   echo '<tr></tr>';
                   
                  }
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   ?>
     
          </div>
                   
                   
<script>
var x = document.getElementById("demo");


    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }


function showPosition(position) {
    var flatt;
    var flong;
  // x.innerHTML = "Latitude: " + position.coords.latitude + 
    //"<br>Longitude: " + position.coords.longitude;
    flatt=position.coords.latitude;
    flong= position.coords.longitude;
    
   // document.write (latt);
   // document.write (long);
   var dlat = document.getElementById("latity");
                        dlat.value = flatt;
  var dlng = document.getElementById("lonty");
                        dlng.value = flong;
  
    
}
</script>

    <?php //code for location ?>
    
    
    
    
    
    
  
    
    
    

   
   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHul_f3ptwPGWxEz0VNB15K2QqHvov8Sw&callback=initMap"
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
                  // alert("Latitude: " + tolatt + "\nLongitude: " + tolong);
                    var dlat = document.getElementById("latit");
                        dlat.value = tolatt;
                    var dlot = document.getElementById("lont");
                        dlot.value = tolong;
                    
                } else {
                    alert("location not found.")
                }
            });
        };
        


        
    </script>
    
    
    
  <script type="text/javascript">

    
    function distance() {
        
                

        
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
       
        
}
    
    
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

      <!/div>
