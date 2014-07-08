<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('dbmodel');
        $this->load->model('dboffers');
        $this->load->model('dbalbum');
        $this->load->model('viewmodel');
        $this->load->model('dbsetting');
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        //$this->load->library("pagination");
    }

    public function index(){
       $data["query"] = $this->dboffers->get_all_posts_for_pages();
       $data['headerlogo']= $this->viewmodel->get_header_logo();
       $data['headertitle']= $this->viewmodel->get_header_title();
       $data['meta'] = $this->dbsetting->get_meta_data();
       $data['slidequery'] = $this->viewmodel->get_slider();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/reservation_template');
        $this->load->view('templates/body',$data);        
        $this->load->view('templates/footer');
        
        
    }

    function reservation()
    {
        $this->load->view('templates/header');
       $this->load->view('pages/reservation');        
        $this->load->view('templates/footer'); 
    }
    
    function wildlife()
    {
        $this->load->view('templates/header');
       $this->load->view('pages/wildlife');        
        $this->load->view('templates/footer'); 
    }
    
    function services()
    {
        $this->load->view('templates/header');
       $this->load->view('pages/services');        
        $this->load->view('templates/footer'); 
    }
    
    function gallery()
    {
        $data['media'] = $this->dbalbum->get_all_media();
        $data['album'] = $this->dbalbum->get_album();
        $this->load->view('templates/header');
       $this->load->view('pages/gallery',$data);        
        $this->load->view('templates/footer'); 
    }
        
    function location()
    {
        $this->load->view('templates/header');
       $this->load->view('pages/location');        
        $this->load->view('templates/footer'); 
    }
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */