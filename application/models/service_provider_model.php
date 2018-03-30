<?php
     
class service_provider_model extends CI_Model {
    
    
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
   
public function logout()
{
    
 
    header('Location:'.base_url().'');

    
    
    }
    
   public function confirm()
{
    
    $emails=$_SESSION['email'];
    $id=$_POST['id'];
   $emailh=$_POST['emailh'];
    $this->db->simple_query('UPDATE destination SET status=1 where id="'.$id.'"');
       
       
       ////// update
 //  $res= $this->db->simple_query('UPDATE ambulance SET rides= rides + 1 where email="'.$emails.'" ');   
 //  $res1= $this->db->simple_query('UPDATE ambulance SET availability=0 where email="'.$emails.'" '); 
     
       
       $data = array(
            'emails'=>$emails,
            'emailh'=>$emailh,
            'dest_id'=>$id,
             'active'=>1
           
            );
       $this->db->insert('accept', $data);
       header('Location:'.base_url().'login/success_serviceprovider/');
       
   }
    
    
   public function reject()
{
    
    $emails=$_SESSION['email'];
    
    $emailh=$_POST['email'];
     $id=$_POST['id'];
    $reason=$_POST['reason'];
       
    
    	$data = array(
            'emails'=>$emails,
            'emailh'=>$emailh,
            'dest_id'=>$id,
            'reason'=>$reason
            );
       $this->db->insert('reject', $data);
    
     $res= $this->db->simple_query('UPDATE ambulance SET blacked= blacked + 1 where email="'.$emails.'" ');  
       
       
   }
    
    
    public function complete()
{
    $dest_id=$_POST['dest_id'];
   $emails=$_SESSION['email'];
       $res= $this->db->simple_query('UPDATE ambulance SET rides= rides + 1 where email="'.$emails.'" ');   
  
 $res2= $this->db->simple_query('UPDATE accept SET active=0 where dest_id="'.$dest_id.'" ');  
       
        header('Location:'.base_url().'login/success_serviceprovider/');
        
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}