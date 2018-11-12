<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_blog extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("blog_model","obj_blog");
        $this->load->model("category_blog_model","obj_category_blog");
        
    }   
                
    public function index(){  
           $this->get_session();
           $params = array(
                        "select" =>"blog.blog_id,
                                    blog.title,
                                    blog.category_blog_id,
                                    category_blog.name as categoria,
                                    blog.summary,
                                    blog.description,
                                    blog.date,
                                    blog.img,
                                    blog.video,
                                    blog.active",
                        "join" => array('category_blog, category_blog.category_blog_id = blog.category_blog_id'),
                        "where" => "blog.status_value = 1",                
                        "order" => "blog.blog_id DESC"
            );
           //GET DATA FROM CUSTOMER
           $obj_blog = $this->obj_blog->search($params);
           
           /// PAGINADO
            $modulos ='blog'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/blog'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_blog",$obj_blog);
            $this->tmp_mastercms->render("dashboard/blog/blog_list");
    }
    
    public function validate(){
        
        //GET DATA
        $blog_id = $this->input->post("blog_id");
        $category_blog_id = $this->input->post("category_blog_id");
        $title = $this->input->post("title");
        $sumilla = $this->input->post("summary");
        $description = $this->input->post("description");
        $video = $this->input->post("video");
        $date = date("Y-m-d");
        $img2 = $this->input->post("img2");
        $active = $this->input->post("active");
        
        //VERIFY IF ISSET IMG FILE
        if(isset($_FILES["image_file"]["name"])){
                $config['upload_path']          = './static/cms/images/blog';
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
        //GET DATA TO $IMG    
        $img = $_FILES["image_file"]["name"];  
         //SAVE DATA IN TABLE    
        if($blog_id != ""){
            //VERIFY DATA OF IMG
            if($img == ""){
                $img = $img2;
            }
            $data = array(
                'category_blog_id' => $category_blog_id,
                'title' => $title,
                'summary' => $sumilla,
                'description' => $description,
                'video' => $video,
                'img' => $img,
                'date' => $date,
                'active' => $active,
                'status_value' => 1,
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );
            $this->obj_blog->update($blog_id, $data);
        }else{
            $data = array(
               'category_blog_id' => $category_blog_id,
                'title' => $title,
                'summary' => $sumilla,
                'description' => $description,
                'video' => $video,
                'img' => $img,
                'date' => $date,
                'active' => $active,
                'status_value' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => $_SESSION['usercms']['user_id']
                ); 
            $this->obj_blog->insert($data);
        }
        redirect(site_url()."dashboard/blog");
    }
    
    public function delete_blog(){
        //DELETE CUSTOMER
        if($this->input->is_ajax_request()){  
                $blog_id = $this->input->post("blog_id");
                if(count($blog_id) > 0){
                    $data = array(
                        'status_value' => 0,
                        'active' => 0,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_blog->update($blog_id,$data);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function load($blog_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($blog_id != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "blog.blog_id = $blog_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_blog  = $this->obj_blog->get_search_row($params); 
            //RENDER
            $this->tmp_mastercms->set("obj_blog",$obj_blog);
          }
          
          //GET CATERGORIAS_BLOG
            $params = array(
                            "select" =>"*",
                             "where" => "status_value = 1 and active = 1",
            ); 
            $obj_category_blog  = $this->obj_category_blog->search($params); 
            
            $modulos ='blog'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set("obj_category_blog",$obj_category_blog);
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->render("dashboard/blog/blog_form");    
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