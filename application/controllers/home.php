<?php
require('src/facebook.php');
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }
    function index()
    {
        $data['feat'] = $this->home_model->getfeatured();
        $config['per_page'] = 9;
        $data['recent'] = $this->home_model->getrecent($this->uri->segment(3),$config['per_page']);
        $this->load->library('pagination');

        $config['base_url'] = site_url('home/index');
        $config['total_rows'] = $this->home_model->getrecentnum();
        
        
        $this->pagination->initialize($config);
        
        
        $facebook = new Facebook(array(
          'appId' => '495120577271677',
          'secret' => 'd2a9fc7096fcc1fbf2033aa814b7bd5c',
          'cookie' => false
        ));
        $user = $facebook->getUser();
        if($user && !$this->session->userdata('fbid'))
        {
            $this->session->set_userdata('fbid',$user);
        }
        else
        if($user)
        {
            if($this->session->userdata('fbid')!=$user)
            {
                $this->session->set_userdata('fbid',$user);
            }
        }
        if(!$user)
        {
            $scope = array('scope' => 'manage_pages,publish_stream,email');
            $data['loginUrl'] = $facebook->getLoginUrl($scope);
        }
        else
        {
           $data['logoutUrl'] = $facebook->getLogoutUrl();
           $data['user_profile'] = $facebook->api('/me');
           $this->home_model->saveuser($user);
           
        }
        $this->load->view('home/index',$data);
        
    }
    
    function detail($id)
    {
       $f = $this->home_model->detail($id);
       $data['f']= $f;
       $this->load->view('home/detail',$data);
    }
    
    function test()
    {
            $this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$to='justdoit2045@gmail.com';
			$this->email->from('shakti_banskar@yahoo.com', 'Shakti Banskar');
			$this->email->to($to);
            
            $this->email->subject("Project Demo");
			$this->email->message("Assalam Alaikum,<br><br>"."Since, its already been 15 days of your start, please prepare for the demo on 18th of January and deliver the project till 25th of January. My collegues are asking me again and again about the site of NIEF.<br/><br/>Jazakallahu khair,<br/>Shakti Banskar.");
            			
			$this->email->send();
    }
}