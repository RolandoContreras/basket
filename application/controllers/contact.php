<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("category_model","obj_category");
    } 

    public function index(){
        //GET DATA PAGINAS AMARILLAS
        $data['paginas_amarillas'] =  $this->paginas_amarillas();
        $this->load->view('contact',$data);
    }
    
    public function paginas_amarillas(){
        //GET DATA BY POST
        $params = array(
                        "select" =>"category.category_id,
                                    category.name,
                                    category.slug",
                        "where" => "category.status_value = 1 and category.active = 1",
                        "order" => "category.category_id ASC"
               );
           //GET DATA FROM CUSTOMER
           $obj_category= $this->obj_category->search($params);
           return $obj_category;
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