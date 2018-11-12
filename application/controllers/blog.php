<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function __construct(){
     parent::__construct();
     $this->load->model("blog_model","obj_blog");
     $this->load->model("category_model","obj_category");
     $this->load->model("tags_model","obj_tag");
     $this->load->model("category_blog_model","obj_category_blog");
     $this->load->model("category_cup_model","obj_category_cup");
    } 

    public function index(){
        //GET DATA BLOG
        $data['blog'] =  $this->blog();
        //GET DATA PAGINAS AMARILLAS
        $data['paginas_amarillas'] =  $this->paginas_amarillas();
        //GET BLOG CATEGORY
        $data['blog_category'] =  $this->blog_category();
        //GET CUP CATEGORY
        $data['cup_category'] =  $this->cup_category();
        //GET TAGS
        $data['tags'] =  $this->tags();
        //SEND RENDER
        $this->load->view('blog',$data);
    }
    
    public function categories(){
        //URL 
        $url = uri_string();
        $nav = explode("/", $url);
        $category = $nav[2]; 
        
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
                        "where" => "category_blog.slug = '$category' and blog.active = 1 and blog.status_value = 1",                
                        "order" => "blog.blog_id DESC"
            );
        $obj_blog = $this->obj_blog->search($params);
        
        $data['name'] = convert_query($category);
        $data['slug'] = $category;
        //GET DATA COMPANY
        $data['blog'] =  $obj_blog;
        //GET DATA PAGINAS AMARILLAS
        $data['paginas_amarillas'] =  $this->paginas_amarillas();
        //GET BLOG CATEGORY
        $data['blog_category'] =  $this->blog_category();
        //GET CUP CATEGORY
        $data['cup_category'] =  $this->cup_category();
        //GET TAGS
        $data['tags'] =  $this->tags();
        //SEND RENDER
        $this->load->view('blog',$data);
    }
    
    public function blog_detail(){
        //URL 
        $url = uri_string();
        $nav = explode("/", $url);
        $category = $nav[2]; 
        $title = convert_query($nav[3]);
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
                        "where" => "blog.title like '%$title%' and category_blog.slug = '$category' and blog.active = 1",                
                        "order" => "blog.blog_id DESC"
            );
        $obj_blog = $this->obj_blog->get_search_row($params);
        $data['name'] = convert_query($category);
        $data['slug'] = $category;
        //GET DATA COMPANY
        $data['blog'] =  $obj_blog;
        //GET DATA PAGINAS AMARILLAS
        $data['blog_last'] =  $this->blog_last();
        
        //GET DATA PAGINAS AMARILLAS
        $data['paginas_amarillas'] =  $this->paginas_amarillas();
        //GET BLOG CATEGORY
        $data['blog_category'] =  $this->blog_category();
        //GET CUP CATEGORY
        $data['cup_category'] =  $this->cup_category();
        //GET TAGS
        $data['tags'] =  $this->tags();
        //SEND RENDER
        $this->load->view('blog_detail',$data);
    }
    
    public function blog(){
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
                        "order" => "blog.blog_id DESC"
            );
           //GET DATA FROM CUSTOMER
           $obj_blog = $this->obj_blog->search($params);
           return $obj_blog;
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
    
    public function tags(){
        //GET DATA BY POST
        $params = array(
                        "select" =>"tags.tag_id,
                                    tags.name",
                        "where" => "tags.status_value = 1 and tags.active = 1",
                        "order" => "tags.tag_id DESC"
               );
           //GET DATA FROM CUSTOMER
           $obj_tag= $this->obj_tag->search($params);
           return $obj_tag;
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
}