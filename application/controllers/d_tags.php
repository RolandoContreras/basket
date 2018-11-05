<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_tags extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("tags_model","obj_tags");
    }   
                
    public function index(){  
           $this->get_session();
           $params = array(
                        "select" =>"tags.tag_id,
                                    tags.name,
                                    tags.date,
                                    tags.active,
                                    ",
                        "where" => "tags.status_value = 1",
                        "order" => "tags.tag_id DESC"
               );
           //GET DATA FROM CUSTOMER
           $obj_tags= $this->obj_tags->search($params);
           
           /// PAGINADO
            $modulos ='tags'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/tags'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_tags",$obj_tags);
            $this->tmp_mastercms->render("dashboard/tags/tags_list");
    }
    
    public function validate(){
        
        //GET CUSTOMER_ID
        $tag_id = $this->input->post("tag_id");
        $active = $this->input->post("active");
        $date = date("Y-m-d");
        //create array
                  
            //SAVE DATA IN TABLE    
        if($tag_id == ""){
            $data = array(
                'name' => $this->input->post('name'),
                'date' => $date,
                'active' => $active,
                'status_value' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => $_SESSION['usercms']['user_id']
                ); 
            $this->obj_tags->insert($data);
        }else{
            $data = array(
                'name' => $this->input->post('name'),
                'date' => $date,
                'active' => $active,
                'status_value' => 1,
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );
            $this->obj_tags->update($tag_id, $data);
        }
        redirect(site_url()."dashboard/tags");
    }
    
    public function delete(){
        //DELETE CUSTOMER
        if($this->input->is_ajax_request()){  
                $tag_id = $this->input->post("tag_id");
                if(count($tag_id) > 0){
                    $data = array(
                        'status_value' => 0,
                        'active' => 0,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_tags->update($tag_id,$data);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function load($tag_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($tag_id != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "tags.tag_id = $tag_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_tags  = $this->obj_tags->get_search_row($params); 
            //RENDER
            $this->tmp_mastercms->set("obj_tags",$obj_tags);
          }

            $modulos ='tags'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->render("dashboard/tags/tags_form");    
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