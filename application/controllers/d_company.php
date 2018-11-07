<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_company extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("company_model","obj_company");
    }   
                
    public function index(){  
           $this->get_session();
           $params = array(
                        "select" =>"company.company_id,
                                    company.name,
                                    category.name as categoria,
                                    company.website,
                                    company.phone,
                                    company.email,
                                    company.phone,
                                    company.description,
                                    company.date_start,
                                    company.date_end,
                                    company.img,
                                    company.active",
                        "join" => array('category, company.category_id = category.category_id'),
                        "where" => "company.active = 1",                
                        "order" => "company.company_id DESC"
               );
           //GET DATA FROM COMPANY
           $obj_company = $this->obj_company->search($params);
           
           /// PAGINADO
            $modulos ='empresas'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/empresas'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_company",$obj_company);
            $this->tmp_mastercms->render("dashboard/company/company_list");
    }
    
    public function validate(){
        
        //GET DATA
        $category_id = $this->input->post("category_id");
        $active = $this->input->post("active");
        
        $name = $this->input->post("name");
        $slug = convert_slug($name);
        $date = date("Y-m-d");
         //SAVE DATA IN TABLE    
        if($category_id == ""){
            $data = array(
                'name' => $name,
                'slug' => $slug,
                'date' => $date,
                'active' => $active,
                'status_value' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => $_SESSION['usercms']['user_id']
                ); 
            $this->obj_category->insert($data);
        }else{
            $data = array(
                'name' => $name,
                'slug' => $slug,
                'date' => $date,
                'active' => $active,
                'status_value' => 1,
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );
            $this->obj_category->update($category_id, $data);
        }
        redirect(site_url()."dashboard/categorias");
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
                    $this->obj_category->update($tag_id,$data);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function load($category_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($category_id != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "category.category_id = $category_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_category  = $this->obj_category->get_search_row($params); 
            //RENDER
            $this->tmp_mastercms->set("obj_category",$obj_category);
          }

            $modulos ='tags'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->render("dashboard/category/category_form");    
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