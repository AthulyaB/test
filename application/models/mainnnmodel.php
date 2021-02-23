<?php
 class mainnnmodel extends CI_model
 {
 	public function regist($a)
 	{
 		$this->db->insert("newreg",$a);
 	}
 	public function encpassword($pass)
 	{
 		return password_hash($pass, PASSWORD_BCRYPT);
 	}
 	public function approve()
 	{
 		$this->db->select('*');
 		$qry=$this->db->get("newreg");
 		return $qry;
 	}
 	public function approvedetails($id)
 	{
 		$this->db->set('status','1');
 		$qry=$this->db->where("id",$id);
 		$qry=$this->db->update("newreg");
 		return $qry;
      
 	}
	public function rejectdetails($id)
	{
		$this->db->set('status','2');
 		$qry=$this->db->where("id",$id);
 		$qry=$this->db->update("newreg");
 		return $qry;

	}
	public function selectpass($email,$pass)
 	{
 		$this->db->select('password');
 		$this->db->from('newreg');
 		$this->db->where("email",$email);
 		$qry=$this->db->get()->row('password');
 		return $this->verifypass($pass,$qry);
 		
 	}
 	public function verifypass($pass,$qry)
 	{
 		return password_verify($pass,$qry);
 	}
 		public function getuserid($email)
 		{
 			$this->db->select('id');
 			$this->db->from("newreg");
 			$this->db->where("email","$email");
 			return $this->db->get()->row('id');
 		}
 		public function getuser($id)
 		{
 			$this->db->select(('*'));
 			$this->db->from("newreg");
 			$this->db->where("id",$id);
 			return $this->db->get()->row();
 		}

 }
 ?>