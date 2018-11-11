<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
     parent::__construct();
     $this->load->model("category_model","obj_category");
     $this->load->model("category_blog_model","obj_category_blog");
     $this->load->model("category_cup_model","obj_category_cup");
     $this->load->model("team_model","obj_team");
    } 

    public function index(){
        //GET DATA PAGINAS AMARILLAS
        $data['paginas_amarillas'] =  $this->paginas_amarillas();
        //GET BLOG CATEGORY
        $data['blog_category'] =  $this->blog_category();
        //GET CUP CATEGORY
        $data['cup_category'] =  $this->cup_category();
        //GET ALL TEAMS
        $data['teams'] =  $this->teams();
        //SEND RENDER
        $this->load->view('home',$data);
    }
    
    public function teams(){
        //GET DATA BY POST
        $params = array(
                        "select" =>"teams.team_id,
                                    teams.name,
                                    teams.img",
                        "where" => "teams.status_value = 1 and teams.active = 1",
                        "order" => "teams.team_id DESC"
               );
           //GET DATA FROM CUSTOMER
           $obj_team= $this->obj_team->search($params);
           return $obj_team;
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