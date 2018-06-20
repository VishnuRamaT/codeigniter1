<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			
			$this->load->database();
            $this->load->model('login_model');
            $this->load->helper('url');
            $this->load->library('session');
            
    }
    public function home(){
       
        $this->session->sess_destroy();  
        //$this->session->set_userdata('USER_SESSION', null);

            $this->load->view('home');


    }

    public function login(){
       
                 
                $list['msg']="";
                if (count($_POST) > 0) {

                $user=$this->input->post('col1');
                $pass=$this->input->post('col2');
                
                $row= $this->login_model->rowwise($user,$pass);
                if(count($row)>0){
                        $list['msg']= "Login Succesful";
                        $this->session->set_userdata('name',$user);
                        $this->session->set_userdata('USER_SESSION', 'active');
                        
                        redirect(base_url('login/after'));
                       // $this->load->view('after_login');
                }
                 else if($user!=null && $pass!=null)
                 $list['msg']=  "Invalid username or password";

                 

    }
    $this->load->view('login_view',$list);
    

}
public function after(){
    if(!$this->session->userdata('USER_SESSION')) 
        {
            $this->load->view('after_login');
        }else
           
            redirect(base_url('login/login'));
}

public function insert()
        {
           
                $list['msg']=null;
                if (count($_POST) > 0) {
                    $user=$this->input->post('col1');
                    $pass=$this->input->post('col2');
                    $cpass=$this->input->post('col3');
                
                    if($pass==$cpass){

                        $data = array(
                                'col1' => $this->input->post('col1'),
                                'col2' => $this->input->post('col2'),
                                
                        );
                        $this->login_model->inputdata($data);
                        $this->session->set_userdata('name',$user );
                        redirect(base_url('login/after'));
                    }
                    else
                    $list['msg']=  "Passwords doesn't match";
                }
                $this->load->view('register',$list);
                
            


        }

        public function update($val=null)
        {
            if(!$this->session->userdata('USER_SESSION')) 
        {
            redirect(base_url('login/login'));
        }
        else{
           $row= $this->login_model->specific($val);
           foreach ($row as $row)
                $col=$row['col2'];
            
              
            if (count($_POST) > 0) {
                    if($col==$this->input->post('col1')) {
                    
                    if( $this->input->post('col2')!=null && $this->input->post('col3'!=null))
                         $this->session->set_userdata('msg', 'empty password!');

                    else if($this->input->post('col2')==$this->input->post('col3') ) {
                        $data['col2']=  $this->input->post('col2');
                        $this->session->set_userdata('msg', 'Password Changed!');
                        $this->login_model->updatedata($data,$val);
                        
                        //redirect(base_url('test/showdata'));
                    }
                    else
                    $this->session->set_userdata('msg', 'password doesnt match!');
                }
                else 
                         $this->session->set_userdata('msg', 'Invalid password!'); 

            }
            

                 $this->load->view('change_paswrd');


        }
    }

    
}