<?php
     
class hospital_model extends CI_Model {
    
    
public function searchvehicle()
{
 
   
          
        $email=$_SESSION['email'];
       
    $longitude=$_POST['lont'];
    $lattitude=$_POST['latit'];
    $destination=$_POST['destination'];
    
      $this->session->lattitude= $lattitude;
     $this->session->tolong1 = $longitude;
    
        
			$data = array(
           // 'id' => $id,
            'email'=>$email,
		  
            'lattitude'=>$lattitude,
            'longitude'=>$longitude,
           'destination'=>$destination,
            'status'=>0
                
			);
$this->db->insert('destination', $data);
  //  $val=$this->db->simple_query('Select * from destination');
   //return $val;
    
    
    
    
       
}
    
   
public function logout()
{
    
    
    header('Location:'.base_url().'');

    
   
}
    
public function gotoprofile()
{
    
    $email=$_SESSION['mailt'];
    
    $to=$this->db->simple_query('SELECT * FROM hospital WHERE mail="'.$email.'" ');
    $row1=mysqli_fetch_array($to);
    
    $this->session->namet = $row1['name_d'];
     $this->session->ratet = $row1['rate'];
     $this->session->ridet = $row1['rides'];
         
     header('Location:'.base_url().'signup/to/');
    
}

public function request()
{
   
  $emailp=$_SESSION['mails'];
    $emaild=$_SESSION['mailt'];
    /////////////////////update
            
			$data = array(
           // 'id' => $id,
            'emailp'=>$emailp,
            'emaild'=>$emaild,
            'active'=>0
                
			);
$this->db->insert('request', $data);
 header('Location:'.base_url().'login/successp/');    
}
    
public function addcomments()
{
    
    
    $emailp=$_SESSION['mails'];
                 $emaild=$_SESSION['mailt'];
                 $rate=$_POST['rating'];
                 $comm=$_POST['comm'];
                 $data= array (
                 
                 'emailp'=>$emailp,
                 'emaild'=>$emaild,
                
                'comment'=>$comm     
                 );
    $this->db->insert('comments',$data);
       $res= $this->db->simple_query('UPDATE driver SET rate= ((rate+"'.$rate.'")/rides) where mail_d="'.$emaild.'" ');   
    
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}