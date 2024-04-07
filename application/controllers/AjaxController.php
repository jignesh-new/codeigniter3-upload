<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load any necessary models or libraries
    }

    public function load_content() {
        // Your server-side logic to load the content goes here
        $target = $this->input->get('target');
        $this->load->model('Crud');
		$data['get']=$this->Crud->fetch();
		
       
        // For simplicity, just return the target as content
        if($target=='fetch'){
            $data['content'] = 'Dynamic content for ' . $target;
            // Load the ajax_content view without the layout
            $this->load->view('content', $data, FALSE);
        }elseif($target=='add'){
            $this->load->view('form');
        }    
    }
    public function form() {
        $this->load->view('form');
    }
}
