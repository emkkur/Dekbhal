<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {


	public function index()
	{
		
		$data['title']="ADC";
		//$this->load->model('check_for_cookie'); 

		$this->load->view('head',$data);
		$this->load->view('front_page_special',$data);
		$this->load->view('foot',$data);
        $this->load->model('login_model');
             $this->load->model('login_model');
        if(isset($_POST['ambulance']))
		{
          $res=$this->login_model->login_ambulance();
		}
		else
			$data['code']=99;
        if(isset($_POST['hospital']))
		{
			
            $res=$this->login_model->login_hospital();
        }
        else
			$data['code']=99;
    
		   
     if(isset($_POST['agency']))
		{
			
            $res=$this->login_model->login_agency();
        }
        else
			$data['code']=99;
    
    }


}
