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
            $scope = array('scope' => 'manage_pages,publish_stream');
            $data['loginUrl'] = $facebook->getLoginUrl($scope);
        }
        else
        {
           $data['logoutUrl'] = $facebook->getLogoutUrl();
           $this->home_model->saveuser($user);
           
        }
        $this->load->view('home/index',$data);
        
    }
    
}