<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("comments_model","obj_comments");
    } 

    public function index(){
        $this->load->view('contact');
    }
    
    public function send_messages(){
         //GET DATA BY POST
        if($this->input->is_ajax_request()){   
            $name = $this->input->post("name");
            $email = $this->input->post("email");
            $asunto = $this->input->post("asunto");
            $comments = $this->input->post("comments");
            
            //status_value 0 means (not read)
                $data = array(
                    'name' => $name,
                    'email' => $email,
                    'subject' => $asunto,
                    'comment' => $comments,
                    'date_comment' => date("Y-m-d H:i:s"),
                    'active' => 1,
                    'status_value' => 1,
                );
                $this->obj_comments->insert($data);
                echo json_encode($data);            
                exit();
        }
    }     
        
}