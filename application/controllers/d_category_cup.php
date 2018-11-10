<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_category_cup extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("category_cup_model","obj_category_cup");
    }   
                
    public function index(){  
           $this->get_session();
           
           $params = array(
                        "select" =>"category_cup.category_cup_id,
                                    category_cup.name,
                                    category_cup.date,
                                    category_cup.active",
                        "where" => "category_cup.status_value = 1",
                        "order" => "category_cup.category_cup_id DESC"
               );
           //GET DATA FROM CUSTOMER
           $obj_category_cup= $this->obj_category_cup->search($params);
           
           /// PAGINADO
            $modulos ='categorias_torneo'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/categorias_torneo'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_category_cup",$obj_category_cup);
            $this->tmp_mastercms->render("dashboard/category_cup/category_cup_list");
    }
    
    public function validate(){
        
        //GET DATA
        $category_cup_id = $this->input->post("category_cup_id");
        $active = $this->input->post("active");
        $name = $this->input->post("name");
        $date = date("Y-m-d");
         //SAVE DATA IN TABLE    
        if($category_cup_id == ""){
            $data = array(
                'name' => $name,
                'date' => $date,
                'active' => $active,
                'status_value' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => $_SESSION['usercms']['user_id']
                ); 
            $this->obj_category_cup->insert($data);
        }else{
            $data = array(
                'name' => $name,
                'date' => $date,
                'active' => $active,
                'status_value' => 1,
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );
            $this->obj_category_cup->update($category_cup_id, $data);
        }
        redirect(site_url()."dashboard/categoria_torneo");
    }
    
    public function delete_category(){
        //DELETE CUSTOMER
        if($this->input->is_ajax_request()){  
                $category_cup_id = $this->input->post("category_cup_id");
                if(count($category_cup_id) > 0){
                    $data = array(
                        'status_value' => 0,
                        'active' => 0,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_category_cup->update($category_cup_id,$data);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function load($category_cup_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($category_cup_id != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "category_cup.category_cup_id = $category_cup_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_category_cup = $this->obj_category_cup->get_search_row($params); 
            //RENDER
            $this->tmp_mastercms->set("obj_category_cup",$obj_category_cup);
          }

            $modulos ='categoria_torneo'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->render("dashboard/category_cup/category_cup_form");    
    }
    
    public function get_session(){          
        if (isset($_SESSION['usercms'])){
            if($_SESSION['usercms']['logged_usercms']=="TRUE" && $_SESSION['usercms']['status']==1){               
                return true;
            }else{
                redirect(site_url().'dashboard');
            }
        }else{
            redirect(site_url().'dashboard');
        }
    }
}
?>