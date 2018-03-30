<?php
     
class passenger_model extends CI_Model {
    
    
public function searchvehicle()
{
 
   
          
        $email=$_SESSION['mails'];
        $flatt=$_POST['latity1'];
        $flong=$_POST['lonty1'];
    $tolong=$_POST['lont'];
    $tolatt=$_POST['latit'];
       $this->session->flatt1 = $flatt;
     $this->session->flong1 = $flong;
      $this->session->tolatt1= $tolatt;
     $this->session->tolong1 = $tolong;
    
        
			$data = array(
           // 'id' => $id,
            'email'=>$email,
		  
            'flatt'=>$flatt,
            'flang'=>$flong,
            'tlatt'=>$tolatt,
            'tolang'=>$tolong
            
                
			);
$this->db->insert('passengerl', $data);
    $val=$this->db->simple_query('Select * from driverl');
    return $val;
    
    
    
    
       
}
    
   
public function deletedetails()
{
    
    $email=$_SESSION['mails'];
     $this->db->where('email', $email);
    $this->db->delete('passengerl');
     $this->db->where('emailp', $email);
    $this->db->delete('request');
    header('Location:'.base_url().'');

    
   
}
    
public function gotoprofile()
{
    
    $email=$_SESSION['mailt'];
    
    $to=$this->db->simple_query('SELECT * FROM driver WHERE mail_d="'.$email.'" ');
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