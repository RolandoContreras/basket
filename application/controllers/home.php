<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
     parent::__construct();
     $this->load->model("category_model","obj_category");
     $this->load->model("category_blog_model","obj_category_blog");
    } 

    public function index(){
        //GET DATA PAGINAS AMARILLAS
        $data['paginas_amarillas'] =  $this->paginas_amarillas();
        //GET BLOG CATEGORY
        $data['blog_category'] =  $this->blog_category();
        //SEND RENDER
        $this->load->view('home',$data);
    }
    
    public function blog_category(){
        //GET DATA BY POST
        $params = array(
                        "select" =>"category_blog.category_blog_id,
                                    category_blog.name",
                        "where" => "category_blog.status_value = 1 and category_blog.active = 1",
                        "order" => "category_blog.category_blog_id ASC"
               );
           //GET DATA FROM CUSTOMER
           $obj_category_blog= $this->obj_category_blog->search($params);
           return $obj_category_blog;
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
}