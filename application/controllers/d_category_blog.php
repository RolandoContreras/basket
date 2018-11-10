<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_category_blog extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("category_blog_model","obj_category_blog");
    }   
                
    public function index(){  
           $this->get_session();
           
           $params = array(
                        "select" =>"category_blog.category_blog_id,
                                    category_blog.name,
                                    category_blog.date,
                                    category_blog.active",
                        "where" => "category_blog.status_value = 1",
                        "order" => "category_blog.category_blog_id DESC"
               );
           //GET DATA FROM CUSTOMER
           $obj_category_blog= $this->obj_category_blog->search($params);
           
           /// PAGINADO
            $modulos ='categoria_blog'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/categoria_blog'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_category_blog",$obj_category_blog);
            $this->tmp_mastercms->render("dashboard/category_blog/category_blog_list");
    }
    
    public function validate(){
        
        //GET DATA
        $category_blog_id = $this->input->post("category_blog_id");
        $active = $this->input->post("active");
        $name = $this->input->post("name");
        $slug = convert_slug($name);
        $date = date("Y-m-d");
         //SAVE DATA IN TABLE    
        if($category_blog_id == ""){
            $data = array(
                'name' => $name,
                'slug' => $slug,
                'date' => $date,
                'active' => $active,
                'status_value' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => $_SESSION['usercms']['user_id']
                ); 
            $this->obj_category_blog->insert($data);
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
            $this->obj_category_blog->update($category_blog_id, $data);
        }
        redirect(site_url()."dashboard/categoria_blog");
    }
    
    public function delete_category(){
        //DELETE CUSTOMER
        if($this->input->is_ajax_request()){  
                $category_blog_id = $this->input->post("category_blog_id");
                if(count($category_blog_id) > 0){
                    $data = array(
                        'status_value' => 0,
                        'active' => 0,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_category_blog->update($category_blog_id,$data);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function load($category_blog_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($category_blog_id != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "category_blog.category_blog_id = $category_blog_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_category_blog  = $this->obj_category_blog->get_search_row($params); 
            //RENDER
            $this->tmp_mastercms->set("obj_category_blog",$obj_category_blog);
          }

            $modulos ='categoria_blog'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->render("dashboard/category_blog/category_blog_form");    
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