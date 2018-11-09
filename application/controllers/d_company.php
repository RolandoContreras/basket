<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_company extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("company_model","obj_company");
        $this->load->model("category_model","obj_category");
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
        $company_id = $this->input->post("company_id");
        $category_id = $this->input->post("category_id");
        $name = $this->input->post("name");
        $website = $this->input->post("website");
        $phone = $this->input->post("phone");
        $email = $this->input->post("email");
        $description = $this->input->post("description");
        $active = $this->input->post("active");
        //GET DATE
        $date1 = $this->input->post('date_start');
        $date2 = $this->input->post('date_end');
        //SET DATE BD
        $date_start = formato_fecha_db($date1);
        $date_end = formato_fecha_db($date2);
         //SAVE DATA IN TABLE 
        $img2 = $this->input->post("img");
        
        if(isset($_FILES["image_file"]["name"])){
                $config['upload_path']          = './static/cms/images/company';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2000;
                $this->load->library('upload', $config);
                    if ( ! $this->upload->do_upload('image_file')){
                         $error = array('error' => $this->upload->display_errors());
                          echo '<div class="alert alert-danger">'.$error['error'].'</div>';
                    }else{
                        $data = array('upload_data' => $this->upload->data());
                    }
            }
        //SET IMG NAME
        $img = $_FILES["image_file"]["name"];    
        if($company_id != ""){
            //VERIFI IF IMG ITS CLEAR
            if($img == ""){
                $img = $img2;
            }
            
            $data = array(
                'category_id' => $category_id,
                'name' => $name,
                'website' => $website,
                'phone' => $phone,
                'email' => $email,
                'description' => $description,
                'date_start' => $date_start,
                'date_end' => $date_end,
                'img' => $img,
                'active' => $active,
                'status_value' => 1,
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );
            $this->obj_company->update($company_id, $data);
        }else{
            $data = array(
                'category_id' => $category_id,
                'name' => $name,
                'website' => $website,
                'phone' => $phone,
                'email' => $email,
                'description' => $description,
                'date_start' => $date_start,
                'date_end' => $date_end,
                'img' => $img,
                'active' => $active,
                'status_value' => 1,
                'status_value' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => $_SESSION['usercms']['user_id']
                ); 
            $this->obj_company->insert($data);
        }
        redirect(site_url()."dashboard/empresas");
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
                    $this->obj_company->update($tag_id,$data);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function load($company_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($company_id != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "company.company_id = $company_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_company  = $this->obj_company->get_search_row($params); 
            //RENDER
            $this->tmp_mastercms->set("obj_company",$obj_company);
          }
            //GET CATERGORIAS
            $params = array(
                            "select" =>"*",
                             "where" => "status_value = 1",
            ); 
            $obj_category  = $this->obj_category->search($params); 
          
            $modulos ='empresas'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 
            
            $this->tmp_mastercms->set("obj_category",$obj_category);
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->render("dashboard/company/company_form");    
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