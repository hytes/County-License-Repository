<?php if(!defined('BASEPATH')) exit('No direct script access');
    include APPPATH.'pesapal/OAuth.php'; 
    class Council extends CI_Controller{
            
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('url','form','file','dompdf'));
            $this->load->library(array('form_validation','session'));
            $this->load->model('council_model');
        }

        public function index()
        {
            $data['message']=TRUE;
            $this->load->view('partials/header');
            $this->load->view('login',$data);
            
        }

        //this is the login function
        public function authenticate(){
            $data=array(
            array('field'=>'username','label'=>'Username','rules'=>'required|trim'),
            array('field'=>'password','label'=>'Password','rules'=>'required|trim'));
            
            $this->form_validation->set_rules($data);
            
            if($this->form_validation->run()===FALSE){
                $data['message']=FALSE;
                $this->load->view('partials/header');
                $this->load->view('login',$data);
            }
            else{
                $username=$this->input->post('username');
                $password=$this->input->post('password');
                
                $response=$this->council_model->user_login($username,$password);
                
                if($response==TRUE){
                                    
                    $sess_data=array('username'=>$username,'logged_in'=>TRUE,'is_admin'=>false);
                    
                    $this->session->set_userdata($sess_data);
                    $data['userdetails']=$this->council_model->get_user($username);
                    $data['main_content']='home';
                    $this->load->view('partials/template',$data);
                }
                else{
                    //redirect('admin');
                    //this->index();
                    $data['message']=FALSE;
                    $this->load->view('partials/header');
                    $this->load->view('login',$data);
                    
                }
            }
        }   

    //logout function
    public function logout(){
            $this->session->set_userdata(array('logged_in'=>FALSE));
            $this->session->sess_destroy();
            
            $this->index();
    }   

        //sign up function
    public function signup(){
            $data['message']=TRUE;
            $this->load->view('partials/header');
            $this->load->view('signup',$data);
        }
        //function to insert a new contact into the db
        //process function
    public function process(){
        
            $data=array(array('field'=>'phone','label'=>'Mobile Number','rules'=>'required|numeric|trim'),
                array('field'=>'idnumber','label'=>'National ID Number','rules'=>'trim|is_unique[users.idnumber]}exact_length[8]|numeric'),
                array('field'=>'firstname','label'=>'First Name','rules'=>'required|alpha|trim'),
                array('field'=>'lastname','label'=>'Last Name','rules'=>'required|alpha|trim'),
                array('field'=>'address','label'=>'Address','rules'=>'trim|required'),
                array('field'=>'username','label'=>'Username','rules'=>'trim|is_unique[users.username]required'),
                array('field'=>'password','label'=>'Password','rules'=>'trim|required'),
                array('field'=>'confpassword','label'=>'Confirm Password','rules'=>'trim|required|matches[password]'),
                array('field'=>'email','label'=>'Email','rules'=>'trim|required|is_unique[users.email]|valid_email')
                
                
            );
        
        $this->form_validation->set_rules($data);
        if($this->form_validation->run() === FALSE){
            $data['message']=FALSE;
            $this->load->view('partials/header');
            $this->load->view('signup',$data);
        }
        else{
            $form_data=array(
            'firstname'=>  $this->input->post('firstname'),
            'lastname'=>  $this->input->post('lastname'),
            'idnumber'=>  $this->input->post('idnumber'),
            'phone'=>  $this->input->post('phone'),
            'address'=>  $this->input->post('address'),
            'username'=>  $this->input->post('username'),
            'password'=>  $this->input->post('password'),
            'email'=>  $this->input->post('email')
        );
        
        $config = array(
            'upload_path' => './uploads/',
            'allowed_types' => 'gif|jpeg|jpg|png',
            'maintain_ration'=>true,
            'height'=>150,
            'width'=>200
            );
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
            if ($this->upload->do_upload()) {
                $this->load->library('image_lib',$config);
            $this->image_lib->resize();
        
                $data = array(
                    'upload_data' => $this->upload->data()
                );
                
                $file_name = $data['upload_data']['file_name'];
                $form_data['img_path'] = $file_name;  
            }
            
            $this->council_model->sign_up($form_data);
            $this->index();           
        

        }
        
    }
    
// ...

    //home  
    public function home(){
        $username = $this->session->userdata('username');
        $data['message']=TRUE;
        $data['userdetails']=$this->council_model->get_user($username);
        $data['main_content']='home';
        $this->load->view('partials/template',$data);
    }
    
    
    //contacts us
    public function contactus(){
        $username = $this->session->userdata('username');
        $data['message']=TRUE;
        $data['userdetails']=$this->council_model->get_user($username);
        $data['main_content']='contact';
        $this->load->view('partials/template',$data);
    }
        
        public function contact_save(){
        
            $data=array(
                array('field'=>'phone','label'=>'Mobile Number','rules'=>'required|numeric|trim'),
                array('field'=>'name','label'=>'Name','rules'=>'required|trim'),
                array('field'=>'message','label'=>'Message','rules'=>'trim|required'),
                array('field'=>'email','label'=>'Email','rules'=>'trim|required|valid_email'));
            
            $this->form_validation->set_rules($data); 
            
            if($this->form_validation->run() === FALSE){
        $username = $this->session->userdata('username');
        $data['message']=FALSE;
        $data['userdetails']=$this->council_model->get_user($username);
        $data['main_content']='contact';
        $this->load->view('partials/template',$data);
        
            }
            else{
                $date=Date('Y-m-d');
                $data=array(
                    'name'=>  $this->input->post('name'),
                    'phone'=>  $this->input->post('phone'),
                    'date'=>  $date,
                    'message'=>  $this->input->post('message'),
                    'email'=>  $this->input->post('email'));  
                
                $this->council_model->contactSave($data);
                $this->success(); 
                
                }
        }
        
        //success
        public function success(){
        $username = $this->session->userdata('username');
        $data['message']=TRUE;
        $data['userdetails']=$this->council_model->get_user($username);
        $data['main_content']='success';
        $this->load->view('partials/template',$data);            
        }

       //housing
    public function housing(){
        $username = $this->session->userdata('username');
        $data['message']=TRUE;
        $data['userdetails']=$this->council_model->get_user($username);
        $data['main_content']='housing';
        $this->load->view('partials/template',$data);
    }
        
        //save payment details
        public function housing_pay(){
            $data=array(
                array('field'=>'fraction','label'=>'fraction','rules'=>'trim|required'),
                array('field'=>'location','label'=>'Location','rules'=>'trim|required'),
                array('field'=>'houseno','label'=>'House Number','rules'=>'trim|required'));
               
            
            $this->form_validation->set_rules($data); 
            
            if($this->form_validation->run() === FALSE){
        $username = $this->session->userdata('username');
        $data['message']=FALSE;
        $data['userdetails']=$this->council_model->get_user($username);
        $data['main_content']='housing';
        $this->load->view('partials/template',$data);
        
            }
            else{
                $date=Date('Y-m-d');
                $type='housing';
                $data=array(
                    'username'=>  $this->session->userdata('username'),
                    'type'=>  $type,
                    'date'=>  $date,
                    'fraction'=>  $this->input->post('fraction'),
                     'location'=>  $this->input->post('location'),
                    'houseno'=>  $this->input->post('houseno'));  
                
                $this->council_model->housingSave($data);
                //$this->success(); 
                //
                //pesapal params
                
                
                $token = $params = NULL;
                
                $consumer_key = 'cZEPzbBfgW2ojJEtHoF1j5BrrvILd8P2';
                $consumer_secret = '+VyQ1iOcv+h/6xHgGQH/9NWH1u0=';
                $signature_method = new OAuthSignatureMethod_HMAC_SHA1();
                $iframelink = 'http://localhost/council/index.php/council/getPaymentReport';

                //get form details
                $amount = $this->input->post('amount');
                $amount = number_format($amount, 2);//format amount to 2 decimal places

                $desc = $this->input->post('description');
                $type = $this->input->post('type'); //default value = MERCHANT
                $reference = $this->input->post('reference');//unique order id of the transaction, generated by merchant
                $first_name = $this->input->post('firstname');
                $last_name = $this->input->post('lastname');
                $email = $this->input->post('email');
                $phonenumber = $this->input->post('phone');//ONE of email or phonenumber is required

                $callback_url = ' http://127.0.0.1:8080/council/home.php.'; //redirect url, the page that will handle the response from pesapal.

                $post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" xmlns=\"http://www.demo.pesapal.com\" />";
                $post_xml = htmlentities($post_xml);

                $consumer = new OAuthConsumer($consumer_key, $consumer_secret);

                //post transaction to pesapal
                $iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
                $iframe_src->set_parameter("oauth_callback", $callback_url);
                $iframe_src->set_parameter("pesapal_request_data", $post_xml);
                $iframe_src->sign_request($signature_method, $consumer, $token);

                //display pesapal - iframe and pass iframe_src
                //$this->success();
                echo "<iframe src=".$iframe_src." width='100%' height='620px' scrolling='no' frameBorder='0'><p>Browser unable to load iFrame</p><iframe>";
       
            
                }            
        }
        
        //licenses
  
        //save payment details
            //licenses
    public function licenses(){
        $username = $this->session->userdata('username');
        $data['message']=TRUE;
        $data['userdetails']=$this->council_model->get_user($username);
        $data['main_content']='licenses';
        $this->load->view('partials/template',$data);
    }
        
        //save payment details
        public function license_pay(){
            $data=array(
                array('field'=>'bname','label'=>'Business Name','rules'=>'trim|is_unique[licenses.bname]required'), 
                 array('field'=>'blocation','label'=>'Business Number','rules'=>'trim|required'),               
                array('field'=>'ltype','label'=>'License Number','rules'=>'trim|required'));
            
            $this->form_validation->set_rules($data); 
            if($this->form_validation->run() === FALSE){
        $username = $this->session->userdata('username');
        $data['message']=FALSE;
        $data['userdetails']=$this->council_model->get_user($username);
        $data['main_content']='licenses';
        $this->load->view('partials/template',$data);
        
            }
            else{
                $date=Date('Y-m-d');
                $data=array(
                    'username'=>  $this->session->userdata('username'),
                    'ltype'=>  $this->input->post('ltype'),
                     'bname'=>  $this->input->post('bname'),
                      'blocation'=>  $this->input->post('blocation'),
                    'date'=>  $date,
                  
                    );  
                
                $this->council_model->licensesSave($data);
                //$this->success(); 
                //
                //pesapal params
                //
                //pesapal params
                
                
                $token = $params = NULL;
                
                $consumer_key = 'cZEPzbBfgW2ojJEtHoF1j5BrrvILd8P2';
                $consumer_secret = '+VyQ1iOcv+h/6xHgGQH/9NWH1u0=';
                $signature_method = new OAuthSignatureMethod_HMAC_SHA1();
                $iframelink = 'http://localhost/council/index.php/council/getLicenseReport';

                //get form details
                $amount = $this->input->post('amount');
                $amount = number_format($amount, 2);//format amount to 2 decimal places

                $desc = $this->input->post('description');
                $type = $this->input->post('type'); //default value = MERCHANT
                $reference = $this->input->post('reference');//unique order id of the transaction, generated by merchant
                $first_name = $this->input->post('firstname');
                $last_name = $this->input->post('lastname');
                $email = $this->input->post('email');
                $phonenumber = $this->input->post('phone');//ONE of email or phonenumber is required

                $callback_url = 'http://127.0.0.1:8080/report/landsreport.php'; //redirect url, the page that will handle the response from pesapal.

                $post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" xmlns=\"http://www.demo.pesapal.com\" />";
                $post_xml = htmlentities($post_xml);

                $consumer = new OAuthConsumer($consumer_key, $consumer_secret);

                //post transaction to pesapal
                $iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
                $iframe_src->set_parameter("oauth_callback", $callback_url);
                $iframe_src->set_parameter("pesapal_request_data", $post_xml);
                $iframe_src->sign_request($signature_method, $consumer, $token);

                //display pesapal - iframe and pass iframe_src
                //$this->success();
                echo "<iframe src=".$iframe_src." width='100%' height='620px' scrolling='no' frameBorder='0'><p>Browser unable to load iFrame</p><iframe>";
       
            
                }            
        } 

       //lands
    public function permit(){
        $username = $this->session->userdata('username');
        $data['message']=TRUE;
        $data['userdetails']=$this->council_model->get_user($username);
        $data['main_content']='lands';
        $this->load->view('partials/template',$data);
    }
        
        //save payment details
        public function lands_pay(){
            $data=array(
                array('field'=>'bname','label'=>'Business Name','rules'=>'trim|is_unique[lands.bname]required'),
                 array('field'=>'blocation','label'=>'Business Location','rules'=>'trim|required'),
                array('field'=>'ltype','label'=>'License Number','rules'=>'trim|required'));
            
            $this->form_validation->set_rules($data); 
            
            if($this->form_validation->run() === FALSE){
        $username = $this->session->userdata('username');
        $data['message']=FALSE;
        $data['userdetails']=$this->council_model->get_user($username);
        $data['main_content']='lands';
        $this->load->view('partials/template',$data);
        
            }
            else{
                $date=Date('Y-m-d');
                $data=array(
                    'username'=>  $this->session->userdata('username'),
                    'date'=>  $date,
              
                    'bname'=>  $this->input->post('bname'),
                    'blocation'=>  $this->input->post('blocation'),
                    'ltype'=>  $this->input->post('ltype'));  
                
                $this->council_model->landsSave($data);
                //$this->success(); 
                //
                //pesapal params
                
                
                $token = $params = NULL;
                
                $consumer_key = 'cZEPzbBfgW2ojJEtHoF1j5BrrvILd8P2';
                $consumer_secret = '+VyQ1iOcv+h/6xHgGQH/9NWH1u0=';
                $signature_method = new OAuthSignatureMethod_HMAC_SHA1();
                $iframelink = 'http://localhost/council/index.php/council/getLandsReport';

                //get form details
                $amount = $this->input->post('amount');
                $amount = number_format($amount, 2);//format amount to 2 decimal places

                $desc = $this->input->post('description');
                $type = $this->input->post('type'); //default value = MERCHANT
                $reference = $this->input->post('reference');//unique order id of the transaction, generated by merchant
                $first_name = $this->input->post('firstname');
                $last_name = $this->input->post('lastname');
                $email = $this->input->post('email');
                $phonenumber = $this->input->post('phone');//ONE of email or phonenumber is required

                $callback_url = 'http://localhost/reports/landsreport.php'; //redirect url, the page that will handle the response from pesapal.

                $post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" xmlns=\"http://www.pesapal.com\" />";
                $post_xml = htmlentities($post_xml);

                $consumer = new OAuthConsumer($consumer_key, $consumer_secret);

                //post transaction to pesapal
                $iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
                $iframe_src->set_parameter("oauth_callback", $callback_url);
                $iframe_src->set_parameter("pesapal_request_data", $post_xml);
                $iframe_src->sign_request($signature_method, $consumer, $token);

                //display pesapal - iframe and pass iframe_src
                //$this->success();
                echo "<iframe src=".$iframe_src." width='100%' height='620px' scrolling='no' frameBorder='0'><p>Browser unable to load iFrame</p><iframe>";
       
            
                }            
        }
        
        public function getLands(){
            $username = $this->session->userdata('username');
            $response=$this->council_model->get_lands($username);
            if($response==FALSE){
                $username = $this->session->userdata('username');
        $data['message']=FALSE;
        $data['userdetails']=$this->council_model->get_user($username);
                $data['landdetails']=$this->council_model->get_lands($username);
        $data['main_content']='view_lands';
        $this->load->view('partials/template',$data); 
            }
            else{
                $username = $this->session->userdata('username');
        $data['message']=TRUE;
        $data['userdetails']=$this->council_model->get_user($username);
                $data['landdetails']=$this->council_model->get_lands($username);
        $data['main_content']='view_lands';
        $this->load->view('partials/template',$data); 
            }
        }
        
        public function getPayments(){
            $username = $this->session->userdata('username');
            $response=$this->council_model->get_payments($username);
            if($response==FALSE){
                $username = $this->session->userdata('username');
        $data['message']=FALSE;
        $data['userdetails']=$this->council_model->get_user($username);
                $data['paymentdetails']=$this->council_model->get_payments($username);
        $data['main_content']='view_payments';
        $this->load->view('partials/template',$data); 
            }
            else{
                $username = $this->session->userdata('username');
        $data['message']=TRUE;
        $data['userdetails']=$this->council_model->get_user($username);
                $data['paymentdetails']=$this->council_model->get_payments($username);
        $data['main_content']='view_payments';
        $this->load->view('partials/template',$data); 
            }
        }
       
        
      public function getLicenses(){
            $username = $this->session->userdata('username');
            $response=$this->council_model->get_licenses($username);
            if($response==FALSE){
                $username = $this->session->userdata('username');
        $data['message']=FALSE;
        $data['userdetails']=$this->council_model->get_user($username);
                $data['licensedetails']=$this->council_model->get_licenses($username);
        $data['main_content']='view_licenses';
        $this->load->view('partials/template',$data); 
            }
            else{
                $username = $this->session->userdata('username');
        $data['message']=TRUE;
        $data['userdetails']=$this->council_model->get_user($username);
                $data['licensedetails']=$this->council_model->get_licenses($username);
        $data['main_content']='view_licenses';
        $this->load->view('partials/template',$data); 
            }
        }
    public function getProfile(){
        $username = $this->session->userdata('username');
        $data['message']=TRUE;
        $data['userdetails']=$this->council_model->get_user($username);
        $data['main_content']='view_profile';
        $this->load->view('partials/template',$data);
    }
        
        public function updateProfile(){
            $data=array(
                array('field'=>'phone','label'=>'Mobile Number','rules'=>'required|numeric|trim'),
                array('field'=>'idnumber','label'=>'National ID Number','rules'=>'trim|required|numeric'),
        array('field'=>'firstname','label'=>'First Name','rules'=>'required|trim'),
                array('field'=>'lastname','label'=>'Last Name','rules'=>'required|trim'),
                array('field'=>'address','label'=>'Address','rules'=>'trim|required'),
                array('field'=>'username','label'=>'Username','rules'=>'trim|required'),
                array('field'=>'password','label'=>'Password','rules'=>'trim|required'),
                array('field'=>'confpassword','label'=>'Confirm Password','rules'=>'trim|required|matches[password]'),
                array('field'=>'email','label'=>'Email','rules'=>'trim|required|valid_email')           
            );
            
            $this->form_validation->set_rules($data);
            if($this->form_validation->run() === FALSE){
        $username = $this->session->userdata('username');
        $data['message']=FALSE;
        $data['userdetails']=$this->council_model->get_user($username);
        $data['main_content']='view_profile';
        $this->load->view('partials/template',$data);
                }
                else{
                    $username = $this->session->userdata('username');
                    $this->council_model->update_profile($username);
                    $this->success();
                    }
        }
        
        
public function contact_saveHome(){
        
            $data=array(
                array('field'=>'phone','label'=>'Mobile Number','rules'=>'required|numeric|trim'),
                array('field'=>'name','label'=>'Name','rules'=>'required|trim'),
                array('field'=>'message','label'=>'Message','rules'=>'trim|required'),
                array('field'=>'email','label'=>'Email','rules'=>'trim|required|valid_email'));
            
            $this->form_validation->set_rules($data); 
            
            if($this->form_validation->run() === FALSE){
            $data['message']=FALSE;
            $this->load->view('partials/header');
            $this->load->view('successHome',$data);
        
            }
            else{
                $date=Date('Y-m-d');
                $data=array(
                    'name'=>  $this->input->post('name'),
                    'phone'=>  $this->input->post('phone'),
                    'date'=>  $date,
                    'message'=>  $this->input->post('message'),
                    'email'=>  $this->input->post('email'));  
                
                $this->council_model->contactSave($data);
                $data['message']=TRUE;
                $this->load->view('partials/header');
                $this->load->view('successHome',$data);                

                }
        }
        

        public function generatePdf(){

                    $data['title']='Transaction report';
                    $data['message']='Testing pdf is successful !';
                    $username = $this->session->userdata('username');
                    $data['message']=TRUE;
                    $data['userdetails']=$this->council_model->get_user($username);
                    $data['paymentdetails']=$this->council_model->get_payments($username);
                    $html=$this->load->view('reports/housingreport.php',$data,TRUE); 
                    pdf_create($html, ' Transaction Report',TRUE);
                //$html = $this->load->view('reports/housingreport', $data,TRUE);
        
        
        }

                public function getPaymentReport(){
                    $data['title']='Transaction report';
                    $data['message']='Testing pdf is successful !';
                    $username = $this->session->userdata('username');
                    $data['message']=TRUE;
                    $data['userdetails']=$this->council_model->get_user($username);
                    $data['paymentdetails']=$this->council_model->get_payments($username);
                    $this->load->view('reports/housingreport',$data); 
                }
                
                public function housingHome(){
                    $data['message']=TRUE;
                    $this->load->view('partials/header');
                    $this->load->view('housingHome',$data);
                }
                
                public function getLicenseReport(){
                    $data['title']='Transaction report';
                    $data['message']='Testing pdf is successful !';
                    $username = $this->session->userdata('username');
                    $data['message']=TRUE;
                    $data['userdetails']=$this->council_model->get_user($username);
                    $data['licensedetails']=$this->council_model->get_licenses($username);
                    $this->load->view('reports/licensesreport',$data); 
                }
                
                public function getLandsReport(){
                    $data['title']='Transaction report';
                    $data['message']='Testing pdf is successful !';
                    $username = $this->session->userdata('username');
                    $data['message']=TRUE;
                    $data['userdetails']=$this->council_model->get_user($username);
                    $data['landdetails']=$this->council_model->get_lands($username);
                    $this->load->view('reports/landsreport',$data); 
                }
                         
}