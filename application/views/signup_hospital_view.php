<div class="container text-center"> 
    <div   class="row">
   <div  class="col-sm-12">
        <br><h2 align="left">HOSPITAL SIGNUP</h2><hr>  
    
   </div> 
   <hr>
</div>
    <form method="POST" action="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" class="form">
<div class="row">
     <?php
if($result[0]!="NULL")
{
	if($result[0]=="success")
	{
		echo '<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert">&times;</a>';
		echo $result[1];
		echo '</div>';
	}
	if($result[0]=="error")
	{
		echo '<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>Error! </strong>';
		echo $result[1];
		echo '</div>';
	}
}
?> 
   

  <div class="col-sm-4">
     
      
     <p class="text-justify" style="padding:0% 5% 0% 5%"></p>
      
      <div align="left" class="form-group">
         <label  for="name" class="control-label">HOSPITAL NAME</label>
        <div class="cols-sm-10">
        
		<input type="text" placeholder="Hospital name" name="name" style="text-transform:uppercase;" required class="form-control" value="<?php echo set_value('name'); ?>">
        </div>
    </div>
    <div align="left" class="form-group">
		<label for="id" class=" control-label">HOSPITAL ID </label>
		<input type="text" placeholder="HOSPITAL ID" name="id" required class="form-control"  value="<?php echo set_value('id'); ?>">
	</div>
    <div align="left" class="form-group">
		<label for="email" class=" control-label">EMAIL ID </label>
		<input type="text" placeholder="HOSPITAL ID" name="email" required class="form-control"  value="<?php echo set_value('email'); ?>">
        
	</div>
        <div align="left" class="form-group">
		<label for="address" class=" control-label">Address</label>
		<input type="textarea" placeholder="ADDRESS" id="txtAddress" name="address" required class="form-control" onchange="GetLocation();"  value="<?php echo set_value('address'); ?>">
	</div>

   <div align="left" class="form-group">
		<label for="address" class=" control-label">PINCODE</label>
		<input type="text" placeholder="PINCODE" name="pincode" required class="form-control"  value="<?php echo set_value('address'); ?>">
	</div>

  </div>
     <div align="left" class="col-sm-4">
     <p class="text-justify" style="padding:0% 5% 0% 5%"></p>
         
      
     <div align="left" class="form-group">
		<label for="mobno" class=" control-label">Mobile number </label>
		<div class="input-group">
    	<span class="input-group-addon">+91</span>
		<input type="text" name="mobno" placeholder="ENTER  PHONE NUMBER" required class="form-control" maxlength="10" value="<?php echo set_value('mobno'); ?>">
         </div></div>
    
        
         <div align="left" class="form-group">
		<label for="faxno" class=" control-label">FAX number </label>
		<div class="input-group">
    	
		<input type="text" name="faxno" placeholder="ENTER YOUR FAX NUMBER" required class="form-control" maxlength="10" value="<?php echo set_value('faxno'); ?>">
             </div></div>
         
         
	<div align="left" class="form-group">
		<label for="password" class="2 control-label">Password </label>
		<input type="password" placeholder="ENTER YOUR PASSWORD" id="password" name="password" required class="form-control" >
		<p class="text-danger fbk" id="psw_fbk">The password should atleast be 5 characters</p>
	</div>
	<div align="left" class="form-group">
		<label for="r_password" class=" control-label">Password Again</label>
		<input type="password" placeholder="CONFIRM YOUR PASSWORD" id="r_password" name="r_password" required class="form-control" >
		<p class="text-danger fbk" id="r_psw_fbk"> The passwords doesn't match</p>
	</div>
	

     <input type="hidden" id="latit" name="latit" value=""/>
    <input type="hidden" id="lont" name="lont" value=""/>
    
    
   
                        
    
    <input type="checkbox" name="accept" onclick="GetLocation();">
    <label>I ACCEPT TERMS AND CONDITIONS</label>
	
	<div class="form-group">
		<input type="submit" name="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" value="REGISTER">
            </div>
           

  </div>
    
  <div class="col-sm-4">
 
   <center><iframe width="90%"  src="https://www.youtube.com/watch?v=mV2RDqSoi2g">
</iframe></center>
    <center><b>About Smart India Hackethon</b></center>

  </div>
    

                
</div>
</form>
</div>


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
