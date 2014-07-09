<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('dbmodel');
        $this->load->model('dboffers');
        $this->load->model('dbalbum');
        $this->load->model('viewmodel');
        $this->load->model('dbsetting');
        $this->load->model('model1');
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        //$this->load->library("pagination");
    }

    public function index(){
        $data['event'] = $this->viewmodel->get_max_events();
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"]);
        $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['allpostquery'] = $this->viewmodel->get_all_post();
      
        $data['meta'] = $this->dbsetting->get_meta_data();
        $data['headerdescription']= $this->viewmodel->get_header_description();
      
        $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
       
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
        
            parse_str($setting);  //parsing from database gadget table settings field.
           
            
           
             $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);  
             
        }
      $data["query"] = $this->dboffers->get_all_posts_for_pages();
//       $data['headerlogo']= $this->viewmodel->get_header_logo();
//       $data['headertitle']= $this->viewmodel->get_header_title();
//       $data['meta'] = $this->dbsetting->get_meta_data();
//       $data['slidequery'] = $this->viewmodel->get_slider();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/reservation_template');
        $this->load->view('templates/body',$data);        
        $this->load->view('templates/footer',$data);
        
        
    }

    function reservation()
    {
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"]);
        $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['allpostquery'] = $this->viewmodel->get_all_post();
      
        $data['meta'] = $this->dbsetting->get_meta_data();
        $data['headerdescription']= $this->viewmodel->get_header_description();
      
        $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
       
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
        
            parse_str($setting);  //parsing from database gadget table settings field.
           
            
           
             $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);  
             
        }
      $data["query"] = $this->dboffers->get_all_posts_for_pages();
        $this->load->view('templates/header',$data);
       $this->load->view('pages/reservation',$data);        
        $this->load->view('templates/footer',$data); 
    }
    
    function wildlife()
    {
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"]);
        $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['allpostquery'] = $this->viewmodel->get_all_post();
      
        $data['meta'] = $this->dbsetting->get_meta_data();
        $data['headerdescription']= $this->viewmodel->get_header_description();
      
        $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
       
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
        
            parse_str($setting);  //parsing from database gadget table settings field.
           
            
           
             $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);  
             
        }
      $data["query"] = $this->dboffers->get_all_posts_for_pages();
        $this->load->view('templates/header',$data);
       $this->load->view('pages/wildlife',$data);        
        $this->load->view('templates/footer',$data); 
    }
    
    function services()
    {
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"]);
        $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['allpostquery'] = $this->viewmodel->get_all_post();
      
        $data['meta'] = $this->dbsetting->get_meta_data();
        $data['headerdescription']= $this->viewmodel->get_header_description();
      
        $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
       
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
        
            parse_str($setting);  //parsing from database gadget table settings field.
           
            
           
             $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);  
             
        }
      $data["query"] = $this->dboffers->get_all_posts_for_pages();
        $this->load->view('templates/header',$data);
       $this->load->view('pages/services',$data);        
        $this->load->view('templates/footer',$data); 
    }
    
    
        
    function location()
    {
         $data['meta'] = $this->dbsetting->get_meta_data();
       $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"]);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['faviconicon']= $this->viewmodel->get_favicon_icon();
        $data['headerdescription']= $this->viewmodel->get_header_description();
        $data['albumquery'] = $this->viewmodel->get_album();
       $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
             parse_str($setting);
            
        }
       $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);
        
        $this->load->view('templates/header',$data);
       $this->load->view('pages/location',$data);        
        $this->load->view('templates/footer',$data);
        
     
    }
    
    public function page($id)
    {
        $nav= $this->uri->uri_string();
        $assc_id= str_replace('view/','', $nav);
        $data['meta'] = $this->dbsetting->get_meta_data();
        $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"]);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['faviconicon']= $this->viewmodel->get_favicon_icon();
        $data['commentallowquery']= $this->viewmodel->get_comment_allow();
        $data['headerdescription']= $this->viewmodel->get_header_description();
        $data['selectedpagequery'] = $this->viewmodel->get_desired_page($id);
       $data['commentallowquery']= $this->viewmodel->get_comment_allow();
        $data['likeallowquery']= $this->viewmodel->get_like_allow();
        $data['shareallowquery']= $this->viewmodel->get_share_allow();
       $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
             parse_str($setting);
            
        }
         $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);
        
//        $this->load->view('menuview/header',$data);
//        $this->load->view('menuview/menu',$data);
//        $this->load->view('menuview/event',$data);
//        $this->load->view('menuview/slider',$data);
//       // $this->load->view('menuview/selectedPage',$data);
//        $this->load->view('menuview/footer',$data);  
        
         $this->load->view('templates/header',$data);
       $this->load->view('pages/page',$data);        
        $this->load->view('templates/footer',$data);
        
    }
        
     public function photos()
    {
        $data['meta'] = $this->dbsetting->get_meta_data();
       $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"]);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['faviconicon']= $this->viewmodel->get_favicon_icon();
        $data['headerdescription']= $this->viewmodel->get_header_description();
        $data['albumquery'] = $this->viewmodel->get_album();
       $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
             parse_str($setting);
            
        }
       $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);
        
        $this->load->view('templates/header',$data);
       $this->load->view('pages/gallery',$data);        
        $this->load->view('templates/footer',$data);
        
    }
    
    public function photo($id=0)
    {
        $data['meta'] = $this->dbsetting->get_meta_data();
        $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"]);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['faviconicon']= $this->viewmodel->get_favicon_icon();
        $data['headerdescription']= $this->viewmodel->get_header_description();
        $data['albumquery'] = $this->viewmodel->get_album();
        $data['albumdata'] = $this->viewmodel->get_album_data($id);
        $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
             parse_str($setting);
           
        }
       $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);
        
        $data['selectedalbumquery'] =  $this->viewmodel->get_selected_album($id);
        
        
        $this->load->view('templates/header',$data);
       $this->load->view('pages/photos',$data);        
        $this->load->view('templates/footer',$data); 
        
    }
    
    public function eventDetails($id = 0) {
        
        $data['events'] = $this->viewmodel->get_events_by_id($id);
        $data['event'] = $this->viewmodel->get_max_events();
       $data['meta'] = $this->dbsetting->get_meta_data();
        $limit['post_limit']=$this->viewmodel->get_max_post_to_show();
        $data['postquery'] = $this->viewmodel->get_post($limit["post_limit"]);
        $limit['page_limit']=$this->viewmodel->get_max_page_to_show();
        $data['pagequery'] = $this->viewmodel->get_page($limit["page_limit"]);
        $data['slidequery'] = $this->viewmodel->get_slider();
        $data['headerquery']= $this->viewmodel->get_design_setup();
        $data['headertitle']= $this->viewmodel->get_header_title();
        $data['headerColor']= $this->viewmodel->get_header_color();
         $data['sidebarColor']= $this->viewmodel->get_sidebar_color();
        $data['headerlogo']= $this->viewmodel->get_header_logo();
        $data['faviconicon']= $this->viewmodel->get_favicon_icon();
        $data['headerdescription']= $this->viewmodel->get_header_description();
        $data['albumquery'] = $this->viewmodel->get_album();
        $data['albumdata'] = $this->viewmodel->get_album_data($id);
        $data['gadget'] = $this->model1->get_gaget();                    //for all gadget
        $data['recentPost']= $this->model1->get_gaget_recentPost();   //for recent post gadget.
         foreach ($data['recentPost'] as $dat)
        {
             $setting = $dat->setting;
             parse_str($setting);
           
        }
       $data['noOfRecentPost'] = $this->viewmodel->recentpost_get_post($post);
        
        $data['selectedalbumquery'] =  $this->viewmodel->get_selected_album($id);
        
        
        $this->load->view('templates/header',$data);
       $this->load->view('pages/event', $data);       
        $this->load->view('templates/footer',$data); 
        

        
        
    }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */