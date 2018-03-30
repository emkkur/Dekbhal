<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    

	    public function success_hospital()
    {
            $i=1;
        $this->load->view('head');
        $data['title']="Search";
		$this->load->view('hospital_home',$data);
		//$this->load->view('foot',$data);
        $this->load->model("hospital_model");
       $this->load->view('foot',$data);
            
         if(isset($_POST['search']))
		{
            
          
      /*$data['val_all'] =*/
             $this->hospital_model->searchvehicle();
          $this->load->view('search_view',$data);
      
            if(isset($_POST['to']))
            {
                
                $this->load->view('head');
                $email=$_POST['email'];
                $this->session->mailt = $email;
                $this->load->model("hospital_model");
                 $this->hospital_model->gotoprofile();
                
            }
            
            
        }
             
        
        
   if(isset($_POST['logout']))
            {
                
                $this->hospital_model->logout();
         
            }
      
      
            if(isset($_POST['to']))
            {
                echo "hi";
                $this->load->view('head');
                $email=$_POST['email'];
                $this->session->mailt = $email;
                $this->load->model("hospital_model");
                 $data['val_all'] = $this->hospital_model->gotoprofile();
                
            }
            
         if(isset($_POST['refresh']))
            {
             
             $this->load->view("avail");
              $this->load->model("hospital_model");
                
             
             } 
            if(isset($_POST['comments']))
             {
                 
                 
                 $this->hospital_model->addcomments(); 
                 
                 
             }
       
    }
    
        public function success_serviceprovider()
    {
        
        $this->load->view('head');
		
		$this->load->model('service_provider_model');
		$this->load->view('service_provider_home');
		$this->load->view('foot');
            
         if(isset($_POST['submit']))
		{
          $this->service_provider_model->adddetails();
         
        }
            if(isset($_POST['logout']))
            {
                
            $this->service_provider_model->logout();
         
            }
            
            if(isset($_POST['confirm']))
            {
                
            $this->service_provider_model->confirm();
         
            }
            if(isset($_POST['reject']))
            {
                
            $this->service_provider_model->reject();
         
            }
            if(isset($_POST['complete']))
            {
                $dest_id=$_POST['dest_id'];
//                echo $dest_id;
               $this->service_provider_model->complete();
            }
            
    }
    
    
         
    
        public function success_agency()
    {
        
        $this->load->view('head');
		
		$this->load->model('agency_model');
		$this->load->view('agency_home_view');
		$this->load->view('foot');
            
         if(isset($_POST['submit']))
		{
          $this->service_provider_model->adddetails();
         
        }
            if(isset($_POST['logout']))
            {
                
            $this->agency_model->logout();
         
            }
            
            if(isset($_POST['confirm']))
            {
                
            $this->agency_model->confirm();
         
            }
            if(isset($_POST['reject']))
            {
                
            $this->service_provider_model->reject();
         
            }
            if(isset($_POST['complete']))
            {
                $dest_id=$_POST['dest_id'];
//                echo $dest_id;
               $this->agency_model->complete();
            }
            
    }
    
    
         
    
    
    

}
