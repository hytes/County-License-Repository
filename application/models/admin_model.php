<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
		//login function for admin
	public function admin_login($username,$password){
		$query=$this->db->get_where('admins',
		array('username'=>$username,'password'=>$password));
		
		return ($query->num_rows()==1)? TRUE: FALSE;
	}
        
	public function get_users(){
		$this->db->select('id,username,firstname,lastname,phone,email,idnumber,address,img_path');
		$this->db->order_by('id');
		$query=$this->db->get('users');
		
		if($query->num_rows() > 0){
			return $query->result_array();
		}
                else{
                    return FALSE;
                }
	} 
        
	public function get_housing(){
		$this->db->select('id,username,houseno,fraction,location,date');
		$this->db->order_by('id');
		$query=$this->db->get('payments');
		
		if($query->num_rows() > 0){
			return $query->result_array();
		}
                else{
                    return FALSE;
                }
	}  
	public function get_licenses(){
		$this->db->select('id,username,bname,blocation,ltype,date');
		$this->db->order_by('id');
		$query=$this->db->get('licenses');
		
		if($query->num_rows() > 0){
			return $query->result_array();
		}
                else{
                    return FALSE;
                }
	} 
	public function get_lands(){
		$this->db->select('id,username,bname,blocation,ltype,date');
		$this->db->order_by('id');
		$query=$this->db->get('lands');
		
		if($query->num_rows() > 0){
			return $query->result_array();
		}
                else{
                    return FALSE;
                }
	}

	public function get_messages(){
		$this->db->select('id,name,phone,email,message,date');
		$this->db->order_by('id');
		$query=$this->db->get('messages');
		
		if($query->num_rows() > 0){
			return $query->result_array();
		}
                else{
                    return FALSE;
                }
        }         
}
