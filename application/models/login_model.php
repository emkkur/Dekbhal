<?php
     
class login_model extends CI_Model {
      public function __construct()
    {
            $this->load->database();
    }

	public function login_hospital()
	{

	   if(!isset($_POST['username']) || !isset($_POST['password']) )
          {
			array("error","Fill in all credentials.");
           $res='';
			//return $res;
		  } 
    else
        {
        $username=trim($_POST['username']);
        $password=$_POST['password'];
        $val=$this->db->simple_query('SELECT * FROM hospital WHERE email="'.$username.'" and password="'.$password.'" LIMIT 1');
		if(mysqli_num_rows($val)<1)
			return 10;
        else
        {
         $row=mysqli_fetch_array($val);
             
            $name=$row['name'];
             $this->session->name=$name;
             
         
		$this->session->email = $username;
        
        $res=$username;
        //var_dump($_SESSION)
       // return $res;
        header('Location:'.base_url().'login/success_hospital/');

     }
    }
     }
  	public function login_ambulance()
	{

	   if(!isset($_POST['username']) || !isset($_POST['password']) )
          {
			array("error","Fill in all credentials.");
           $res='';
			//return $res;
		  } 
    else
        {
        $username=trim($_POST['username']);
        $password=$_POST['password'];
        $val=$this->db->simple_query('SELECT * FROM ambulance WHERE email="'.$username.'" and password="'.$password.'" LIMIT 1');
		if(mysqli_num_rows($val)<1)
			return 10;
	    else
        {
         $row=mysqli_fetch_array($val);
             
            $name=$row['name'];
             $this->session->name=$name;
             
         
		$this->session->email = $username;
        
        $res=$username;
        //var_dump($_SESSION)
       // return $res;
        header('Location:'.base_url().'login/success_serviceprovider/');

     }

     }
     }  
    
    
    public function login_agency()
	{

	   if(!isset($_POST['username']) || !isset($_POST['password']) )
          {
			array("error","Fill in all credentials.");
           $res='';
			//return $res;
		  } 
    else
        {
        $username=trim($_POST['username']);
        $password=$_POST['password'];
        $val=$this->db->simple_query('SELECT * FROM ambulance WHERE email="'.$username.'" and password="'.$password.'" LIMIT 1');
		if(mysqli_num_rows($val)<1)
			return 10;
        else
        {
         $row=mysqli_fetch_array($val);
             
            $name=$row['name'];
             $this->session->name=$name;
             
         
		$this->session->email = $username;
        
        $res=$username;
        //var_dump($_SESSION)
       // return $res;
        header('Location:'.base_url().'login/success_agency/');

     }
    }
     }
    
    
    
}
?> 