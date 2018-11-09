<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Council_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
		//login function for admin
	public function user_login($username,$password){
		$query=$this->db->get_where('users',
		array('username'=>$username,'password'=>$password));
		
		return ($query->num_rows()==1)? TRUE: FALSE;
	}
	
	//sign up
	public function sign_up($data){
		$this->db->insert('users',$data);
		return TRUE;
	}
	
	//get user based on username
    public function get_user($username){
            $this->db->select('id,username,address,password,firstname,lastname,phone,idnumber,email,img_path');
			$this->db->where('username',$username);
            $query=$this->db->get('users');
            
            if($query->num_rows() > 0){
                return $query->row_array();
            }
     }
     
     	//contacts
	public function contactSave($data){
		$this->db->insert('messages',$data);
		return TRUE;
	}
        
        //contacts
	public function housingSave($data){
		$this->db->insert('payments',$data);
		return TRUE;
	}
       
        //licenses
       public function licensesSave($data){
           $this->db->insert('licenses',$data);
           return TRUE;
       }
       
        //licenses
       public function landsSave($data){
           $this->db->insert('lands',$data);
           return TRUE;
       } 
       
       	//get user based on username
    public function get_lands($username){
            $this->db->select('id,ltype,plotno,bname,blocation,date,username');
			$this->db->where('username',$username);
            $query=$this->db->get('lands');
            
            if($query->num_rows() > 0){
                return $query->result_array();
            }
            else{
                return FALSE;
            }
     }
     
    public function get_payments($username){
            $this->db->select('id,fraction,location,houseno,date,username');
			$this->db->where('username',$username);
            $query=$this->db->get('payments');
            
            if($query->num_rows() > 0){
                return $query->result_array();
            }
            else{
                return FALSE;
            }
     }
    public function get_licenses($username){
            $this->db->select('id,ltype,bname,blocation,date,username');
			$this->db->where('username',$username);
            $query=$this->db->get('licenses');
            
            if($query->num_rows() > 0){
                return $query->result_array();
            }
            else{
                return FALSE;
            }
     }
     
     public function update_profile($username){
         $data=array(
            'firstname'=>  $this->input->post('firstname'),
            'lastname'=>  $this->input->post('lastname'),
            'idnumber'=>  $this->input->post('idnumber'),
            'phone'=>  $this->input->post('phone'),
            'address'=>  $this->input->post('address'),
            'username'=>  $this->input->post('username'),
            'password'=>  $this->input->post('password'),
            'email'=>  $this->input->post('email'));
         $this->db->where('username',$username);
         $this->db->update('users',$data);
         return TRUE;
     }
     
	
}