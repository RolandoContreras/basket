<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    public function __construct(){
     parent::__construct();
        $this->load->model("blog_model","obj_blog");
        $this->load->model("company_model","obj_company");
        $this->load->model("category_model","obj_category");
        $this->load->model("category_blog_model","obj_category_blog");
        $this->load->model("category_cup_model","obj_category_cup");
    } 

    public function index(){
        //URL 
        $data['name'] = "Páginas Amarillas";
        $data['slug'] = "pages";
        //GET DATA COMPANY
        $data['company'] =  $this->company();
        //GET DATA PAGINAS AMARILLAS
        $data['paginas_amarillas'] =  $this->paginas_amarillas();
        //GET BLOG CATEGORY
        $data['blog_category'] =  $this->blog_category();
        //GET CUP CATEGORY
        $data['cup_category'] =  $this->cup_category();
        //GET LAST BLOG
        $data['blog_last'] =  $this->blog_last();
        //SEND RENDER
        $this->load->view('pages',$data);
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
    
    public function categories(){
        //URL 
        
        $url = uri_string();
        $nav = explode("/", $url);
        $category = $nav[2]; 
        
        //GET DATA BY POST
        $params = array(
                        "select" =>"company.company_id,
                                    company.name,
                                    category.name as categoria,
                                    company.website,
                                    company.email,
                                    company.phone,
                                    company.date_start,
                                    company.date_end,
                                    company.img,
                                    company.active",
                        "join" => array('category, company.category_id = category.category_id'),
                        "where" => "category.slug = '$category' and company.active = 1",                
                        "order" => "company.company_id DESC"
               );
           //GET DATA FROM CUSTOMER
        $obj_company = $this->obj_company->search($params);
        
        $data['name'] = convert_query($category);
        $data['slug'] = $category;
        //GET DATA COMPANY
        $data['company'] =  $obj_company;
        //GET DATA PAGINAS AMARILLAS
        $data['paginas_amarillas'] =  $this->paginas_amarillas();
        //GET BLOG CATEGORY
        $data['blog_category'] =  $this->blog_category();
        //GET CUP CATEGORY
        $data['cup_category'] =  $this->cup_category();
        //GET LAST BLOG
        $data['blog_last'] =  $this->blog_last();
        //SEND RENDER
        $this->load->view('pages',$data);
    }
    
    public function company(){
        //GET DATA BY POST
        $params = array(
                        "select" =>"company.company_id,
                                    company.name,
                                    category.name as categoria,
                                    company.website,
                                    company.email,
                                    company.phone,
                                    company.date_start,
                                    company.date_end,
                                    company.img,
                                    company.active",
                        "join" => array('category, company.category_id = category.category_id'),
                        "where" => "company.active = 1",                
                        "order" => "company.company_id DESC"
               );
           //GET DATA FROM CUSTOMER
           $obj_company = $this->obj_company->search($params);
           return $obj_company;
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