<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainnn extends CI_Controller
 {
 	public function newreg()
 	{
 		$this->load->view('newreg');

 	}
 	public function newregist()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("fname","Firstname",'required');
		$this->form_validation->set_rules("lname","Lastname",'required');
		$this->form_validation->set_rules("uname","Username",'required');
		$this->form_validation->set_rules("pswd","Password",'required');
		$this->form_validation->set_rules("mobile","mobile",'required');
		$this->form_validation->set_rules("email","email",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainnnmodel');
			$pass=$this->input->post("pswd");
			$encpass=$this->mainnnmodel->encpassword($pass);
				$a=array("firstname"=>$this->input->post("fname"),
					
					"lastname"=>$this->input->post("lname"),
					"username"=>$this->input->post("uname"),
					"password"=>$encpass,
					"mobile"=>$this->input->post("mobile"),
					"email"=>$this->input->post("email"));

					
				$this->mainnnmodel->regist($a);
				redirect (base_url().'Mainnn/newreg');
        }
	}
	public function approve()
	{

		$this->load->model('mainnnmodel');
		$data['n']=$this->mainnnmodel->approve();
		$this->load->view('regview',$data);
	}
	public function approvedetails()
	{
		$this->load->model('mainnnmodel');
		$id=$this->uri->segment(3);
		$this->mainnnmodel->approvedetails($id);
		redirect('Mainnn/approve','refresh');
	}
	public function rejectdetails()
	{
		$this->load->model('mainnnmodel');
		$id=$this->uri->segment(3);
		$this->mainnnmodel->rejectdetails($id);
		redirect('Mainnn/approve','refresh');
	}
	public function log()
 	{
 		$this->load->view('log');

 	}
 	public function logg()
    {
    	$this->load->library('form_validation');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
			$this->load->model('mainnnmodel');
			$email=$this->input->POST("email");
			$pass=$this->input->POST("password");
			$result=$this->mainnnmodel->selectpass($email,$pass);
            if($result)
            {

            $id=$this->mainnnmodel->getuserid($email);	

			$user=$this->mainnnmodel->getuser($id);
			$this->load->library(array('session'));
			$this->session->set_userdata(array('id'=>(int)$user->id,'status'=>$user->status));
			if($_SESSION['status']=='1')
			{
				redirect(base_url().'Mainnn/new');
			}
			else
			{
				echo"waiting for Approval";
			}
		}

			else
			{
			echo "Inavalid user";


		}
			}

			else{

			 redirect('Mainnn/log','refresh');
			}
		}
		public function new()
		{
			$this->load->view('new');
		}
 }