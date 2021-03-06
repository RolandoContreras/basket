<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("blog_model","obj_blog");
        $this->load->model("category_model","obj_category");
        $this->load->model("category_blog_model","obj_category_blog");
        $this->load->model("category_cup_model","obj_category_cup");
    } 

    public function index(){
        //GET DATA PAGINAS AMARILLAS
        $data['paginas_amarillas'] =  $this->paginas_amarillas();
        //GET BLOG CATEGORY
        $data['blog_category'] =  $this->blog_category();
        //GET CUP CATEGORY
        $data['cup_category'] =  $this->cup_category();
        //GET LAST BLOG
        $data['blog_last'] =  $this->blog_last();
        //SEND RENDER
        $this->load->view('contact',$data);
    }
    
    public function paginas_amarillas(){
        //GET DATA BY POST
        $params = array(
                        "select" =>"category.category_id,
                                    category.name,
                                    category.slug",
                        "where" => "category.status_value = 1 and category.active = 1",
                        "order" => "category.name ASC"
               );
           //GET DATA FROM CUSTOMER
           $obj_category= $this->obj_category->search($params);
           return $obj_category;
    }
    
    public function blog_last(){
        //GET DATA BY POST
        $params = array(
                        "select" =>"blog.blog_id,
                                    blog.title,
                                    blog.category_blog_id,
                                    category_blog.name as categoria,
                                    category_blog.slug,
                                    blog.summary,
                                    blog.description,
                                    blog.date,
                                    blog.img,
                                    blog.video,
                                    blog.active",
                        "join" => array('category_blog, category_blog.category_blog_id = blog.category_blog_id'),
                        "where" => "blog.active = 1 and blog.status_value = 1",                
                        "limit" => "3",                
                        "order" => "blog.blog_id DESC"
            );
           //GET DATA FROM CUSTOMER
           $obj_blog = $this->obj_blog->search($params);
           return $obj_blog;
    }
    
    public function blog_category(){
        //GET DATA BY POST
        $params = array(
                        "select" =>"category_blog.category_blog_id,
                                    category_blog.name,
                                    category_blog.slug",
                        "where" => "category_blog.status_value = 1 and category_blog.active = 1",
                        "order" => "category_blog.category_blog_id ASC"
               );
           //GET DATA FROM CUSTOMER
           $obj_category_blog= $this->obj_category_blog->search($params);
           return $obj_category_blog;
    }
    
    public function cup_category(){
        //GET DATA BY POST
        $params = array(
                        "select" =>"category_cup.category_cup_id,
                                    category_cup.name,
                                    category_cup.slug",
                        "where" => "category_cup.status_value = 1 and category_cup.active = 1",
                        "order" => "category_cup.category_cup_id ASC"
               );
           //GET DATA FROM CUSTOMER
           $obj_category_cup= $this->obj_category_cup->search($params);
           return $obj_category_cup;
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