<?php if(!defined('BASEPATH')) exit('No direct script access');

    class Admin extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url','form','file'));
			$this->load->library(array('form_validation','session'));
			$this->load->model('admin_model');
		}
                
                public function index(){
                        $this->load->view('admin/header');
                        $this->load->view('admin/menu');
                        $this->load->view('admin/adminhome');
                        $this->load->view('admin/footer');                    
                }
		//this is the login function
		public function authenticate(){
			$data=array(
			array('field'=>'username','label'=>'Username','rules'=>'required|trim'),
			array('field'=>'password','label'=>'Password','rules'=>'required|trim'));
			
			$this->form_validation->set_rules($data);
			
			if($this->form_validation->run()===FALSE){
                            redirect('council');
			}
			else{
				$username=$this->input->post('username');
				$password=$this->input->post('password');
				$response=$this->admin_model->admin_login($username,$password);
				if($response==TRUE){                                   
					$sess_data=array('username'=>$username,'logged_in'=>TRUE,'is_admin'=>true);
					$this->session->set_userdata($sess_data);
                                        $this->load->view('admin/header');
                                        $this->load->view('admin/menu');
					$this->load->view('admin/adminhome');
                                        $this->load->view('admin/footer');
				}
                                else{
                                    redirect('council');
                                }
			}
		}	

	//logout function
	public function logout(){
            $this->session->set_userdata(array('logged_in'=>FALSE));
            $this->session->sess_destroy();
            redirect('council');
	}
        
        public function getLands(){
            
            $response=$this->admin_model->get_lands();
            if($response==FALSE){
               
		$data['message']=FALSE;
                $data['landdetails']=$this->admin_model->get_lands();
                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/lands',$data);
                $this->load->view('admin/footer');
            }
            else{
		$data['message']=TRUE;
                $data['landdetails']=$this->admin_model->get_lands();
                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/lands',$data);
                $this->load->view('admin/footer');
            }
        }
        
        public function getMessages(){
            
            $response=$this->admin_model->get_messages();
            if($response==FALSE){
               
		$data['message']=FALSE;
                $data['messagedetails']=$this->admin_model->get_messages();
                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/messages',$data);
                $this->load->view('admin/footer');
            }
            else{
		$data['message']=TRUE;
                $data['messagedetails']=$this->admin_model->get_messages();
                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/messages',$data);
                $this->load->view('admin/footer');
            }
        }        
        public function getUsers(){
            
            $response=$this->admin_model->get_users();
            if($response==FALSE){
		$data['message']=FALSE;
                $data['usersdetails']=$this->admin_model->get_users();
                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/users',$data);
                $this->load->view('admin/footer');
            }
            else{
		$data['message']=TRUE;
                $data['usersdetails']=$this->admin_model->get_users();
                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/users',$data);
                $this->load->view('admin/footer');
            }
        } 
        
         public function getPayments(){
            $response=$this->admin_model->get_housing();
            if($response==FALSE){
		$data['message']=FALSE;
                $data['paymentdetails']=$this->admin_model->get_housing();
                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/housing',$data);
                $this->load->view('admin/footer');
            }
            else{
		$data['message']=TRUE;
                $data['paymentdetails']=$this->admin_model->get_housing();
                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/housing',$data);
                $this->load->view('admin/footer');
            }
        }
        
        public function getLicenses(){
            
            $response=$this->admin_model->get_licenses();
            if($response==FALSE){
		$data['message']=FALSE;
                $data['licensedetails']=$this->admin_model->get_licenses();
                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/licenses',$data);
                $this->load->view('admin/footer');
            }
            else{
		$data['message']=TRUE;
                $data['licensedetails']=$this->admin_model->get_licenses();
                $this->load->view('admin/header');
                $this->load->view('admin/menu');
                $this->load->view('admin/licenses',$data);
                $this->load->view('admin/footer');
            }
        }        
        
        }