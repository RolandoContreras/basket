<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function __construct(){
     parent::__construct();
     $this->load->model("category_model","obj_category");
    } 

    public function index(){
        //GET DATA PAGINAS AMARILLAS
        $data['paginas_amarillas'] =  $this->paginas_amarillas();
        $this->load->view('about',$data);
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