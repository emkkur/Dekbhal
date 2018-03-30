<?php
     
class signup_model extends CI_Model {
      public function __construct()
    {
            $this->load->database();
    }

	public function individual()
	{
 if (!isset($_POST['name']) || (!isset($_POST['homelocation'])) || (!isset($_POST['password'])) || (!isset($_POST['r_password'])) || (!isset($_POST['email'])) || (!isset($_POST['mobno']))  || (!isset($_POST['adproof'])) || (!isset($_POST['lproof'])) ||
            (!isset($_POST['vnumber'])))
		{
			$res=array("error","Fill in all credentials.");
			return $res;
		} 
		$name=trim($_POST['name']);
		$homelocation=trim($_POST['homelocation']);
        $password=trim($_POST['password']);
        $r_password=trim($_POST['r_password']);
        $email=trim($_POST['email']);
        $mobno=trim($_POST['mobno']);
        
        $adproof=trim($_POST['adproof']);
		$lproof=trim($_POST['lproof']);
        
        $vnumber=trim($_POST['vnumber']);
        $type='driver';
        $agency='individual';
       $lattitude=trim($_POST['latit']);
     $longitude=trim($_POST['lont']);
            
		if(strlen($password)<5)
			{
				$res=array("error","Password should have atleast 5 characters");
				return $res;
			}
		
			$data = array(
                'name' => $name ,
		          'homelocation' => $homelocation,
		          'password' => $password,
		          'email' => $email,
		          'mobno' => $mobno,
                  'aproof' =>$adproof,
                  'lproof' =>$lproof,
                  'number'=> $vnumber,
                  'rides'=>0,
                  'rating'=>0,
                  'agency'=>$agency,
                  'verify'=>0,
                  'availability'=>1,
                'lattitude'=>$lattitude,
            'longitude'=>$longitude
            
			);
			if($this->db->insert('ambulance', $data))
			{
				
				header('Location:'.base_url().'signup/success1/'.$data,$type);
				exit();
			}
			else
			{
				$res=array("error","Failed signup, contact admin or try again");
				return $res;
			}

	 
    }
    	public function hospital()
	{
		if(!isset($_POST['name']) || (!isset($_POST['id'])) || (!isset($_POST['password'])) || (!isset($_POST['r_password'])) || (!isset($_POST['email'])) || (!isset($_POST['mobno']))|| (!isset($_POST['faxno']))||(!isset($_POST['address']))|| (!isset($_POST['pincode'])))
		{
			$res=array("error","Fill in all credentials.");
			return $res;
		}
		//$id=uniqid();
		$name=trim($_POST['name']);
		$id=trim($_POST['id']);
        $password=trim($_POST['password']);
        $r_password=trim($_POST['r_password']);
        $email=trim($_POST['email']);
        $mobno=trim($_POST['mobno']);
        $faxno=trim($_POST['faxno']);
        $address=trim($_POST['address']);
        $pincode=trim($_POST['pincode']);
      //  $state=trim($_POST['state'])
    //    $district=trim($_POST['district'])
        $verify=0;
		$type='passenger';	
        $lattitude=trim($_POST['latit']);
        $longitude=trim($_POST['lont']);
       // $latLong = getLatLong($address);
      $latitude = $latLong['latitude'];
       $longitude = $latLong['longitude'];
		if(strlen($password)<5)
			{
				$res=array("error","Password should have atleast 5 characters");
				return $res;
			}
		
			$data = array(
           // 'id' => $id,
		   'name' => strtoupper($name) ,
		   'id' => $id,
		   'password' => $password,
		   'email' => $email,
		   'mobno' => $mobno,
		   'faxno' => $faxno,
		   'address' => $address,
		   'pincode' => $pincode,
		   //'state' => $state,
		   //'district' => $district,
            'verify'=>$verify,
            'lattitude'=>$latitude,
            'longitude'=>$longitude,
            'verify'=>0
			);
			if($this->db->insert('hospital', $data))
			{
				
				header('Location:'.base_url().'signup/success/'.$data,$type);
				exit();
			}
			else
			{
				$res=array("error","Failed signup, contact admin or try again");
				return $res;
			}



		} 
    
    
    
    public function agency()
    {
        
        if (!isset($_POST['name']) || !isset($_POST['password']) || !isset($_POST['r_password']) || !isset($_POST['email']) || !isset($_POST['mobno'])  || !isset($_POST['lproof']) ||!isset($_POST['limit1']))  
		{
			$res=array("error","Fill in all credentials.");
			return $res;
		} 
		
		//$id=uniqid();
		$agency=trim($_POST['name']);
		//$homelocation=trim($_POST['homelocation']);
        $password=trim($_POST['password']);
        $r_password=trim($_POST['r_password']);
        $email=trim($_POST['email']);
        $mobno=trim($_POST['mobno']);
        
       // $adproof=trim($_POST['adproof']);
		$lproof=trim($_POST['lproof']);
         $limit=trim($_POST['limit1']);
       // $vnumber=trim($_POST['vnumber']);
        $type='driver';
        //echo $limit;
        
          //echo $name;  
		if(strlen($password)<5)
			{
				$res=array("error","Password should have atleast 5 characters");
				return $res;
			}
  
while($limit>0)
{
    //'lattitude'=>$lattitude,
    //'longitude'=>$longitude
    $homelocation=trim($_POST['homelocation'.$limit]);
    $vnumber=trim($_POST['vnumber'.$limit]);
    $lattitude=trim($_POST['latit'.$limit]);
    $longitude=trim($_POST['lont'.$limit]);
			$data = array(
                //'name' => $name ,
		          'homelocation' => $homelocation,
		          'password' => $password,
		          'email' => $email,
		          'mobno' => $mobno,
                 // 'aproof' =>$adproof,
                  'lproof' =>$lproof,
                  'number'=> $vnumber,
                  'rides'=>0,
                  'rating'=>0,
                  'agency'=>$agency,
                  'verify'=>0,
                  'availability'=>1,
                'lattitude'=>000,
            'longitude'=>0000
			);
			$this->db->insert('ambulance', $data);
			
    $limit=$limit-1;


        
    }
        	header('Location:'.base_url().'signup/success/'.$data,$type);
				exit();
                
    }


    
    
    
   

    
    
}
?> 