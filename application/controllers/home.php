<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function __construct() {
        parent::__construct();
       // $this->load->model('dbmodel');
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        //$this->load->library("pagination");
    }

    public function index(){
       
        $this->load->view('templates/header');
        $this->load->view('templates/reservation_template');
        $this->load->view('templates/body');
        
        $this->load->view('templates/footer');
        
        
    }

       
        
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */