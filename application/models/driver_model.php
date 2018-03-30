<?php
     
class driver_model extends CI_Model {
    
    
public function adddetails()
{
 if(empty($_POST['rate']) || empty($_POST['time']) )
          {
			array("error","Fill in all credentials.");
           $res='';
			//return $res;
		  } 
    else
        {
        $rate=trim($_POST['rate']);
        $time=$_POST['time'];
        $email=$_SESSION['mails'];
        $flatt=$_POST['latity1'];
        $flong=$_POST['lonty1'];
        $tolatt=$_POST['latit'];
        $tolong=$_POST['lont'];
        
       
        
			$data = array(
           // 'id' => $id,
            'email'=>$email,
		   'rate' => $rate ,
		   'time'=> $time,
            'flatt'=>$flatt,
            'flong'=>$flong,
            'tolatt'=>$tolatt,
            'tolong'=>$tolong
            
                
			);
			$this->db->insert('driverl', $data);
    }
}
   
public function deletedetails()
{
    
    $email=$_SESSION['mails'];
     $this->db->where('email', $email);
    $this->db->delete('driverl');
    $this->db->where('emaild', $email);
    $this->db->delete('request');
    header('Location:'.base_url().'');

    
    
    }
    
   public function confirm()
{
    
    $emaild=$_SESSION['mails'];
    $emails=$_POST['email'];
    $this->db->simple_query('UPDATE request SET active=1 where emaild="'.$emaild.'" and emailp="'.$emails.'"');
       
       
       ////// update
   $res= $this->db->simple_query('UPDATE driver SET rides= rides + 1 where mail_d="'.$emaild.'" ');   
       
   }
    
    
   public function reject()
{
    
    $emaild=$_SESSION['mails'];
    $emails=$_POST['email'];
        $email=$_SESSION['mails'];
     $this->db->where('emailp', $emails);
     $this->db->where('emaild', $emaild);
    $this->db->delete('request');
       
       
   }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}