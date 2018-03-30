<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {


	public function index()
	{
		$data['title']="Signup |ADC";
	//	$this->load->model('log_out_model'); 

		$this->load->view('head',$data);
		$this->load->view('signup_select_view',$data);
		$this->load->view('foot',$data);
	}
public function individual()
{
    
   	$this->load->helper('form');
		
		$data['title']="Signup |ADC";
		$data['result']=array("NULL","");
		if(isset($_POST['submit']))
		{
           // 
			//$this->load->model('signup_model');
          //  $this->load->view('success_signup_view');
            $this->load->model('signup_model');
		$data['result']=$this->signup_model->individual();
		}
		$this->load->view('head',$data);
		$this->load->view('signup_individual_view',$data);
		$this->load->view('js_signup_view');
		$this->load->view('foot',$data); 
    
}

public function agency()
{
    
   	$this->load->helper('form');
		
		$data['title']="Signup |ADC";
		$data['result']=array("NULL","");
		if(isset($_POST['submit']))
		{
			$this->load->model('signup_model');
			$data['result']=$this->signup_model->agency();
		}
		$this->load->view('head',$data);
		$this->load->view('signup_agency_view',$data);
		$this->load->view('js_signup_view');
		$this->load->view('foot',$data); 
    
}
	public function hospital()
	{
		$this->load->helper('form');
		
		$data['title']="Signup |ADC";
		$data['result']=array("NULL","");
		if(isset($_POST['submit']))
		{
			$this->load->model('signup_model');
			$data['result']=$this->signup_model->hospital();
		}
		$this->load->view('head',$data);
		$this->load->view('signup_hospital_view',$data);
		$this->load->view('js_signup_view');
		$this->load->view('foot',$data);
	}

	public function success($data)
	{
	    
        $this->load->view('head',$data);
		$this->load->view('success_signup_view',$data);
		$this->load->view('foot',$data);
	}
    public function success1($data)
	{
	    
        $this->load->view('head',$data);
		$this->load->view('success_signup_view1',$data);
		$this->load->view('foot',$data);
	}
    public function to()
{
    

     $this->load->view('head');

		$this->load->view('dp');
		$this->load->view('foot');
 if(isset($_POST['request']))
 {
     
     $this->load->model('passenger_model');
     $this->passenger_model->request();
 }
    
}
    
}
