<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_teams extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("team_model","obj_team");
    }   
                
    public function index(){  
           $this->get_session();
           $params = array(
                        "select" =>"teams.team_id,
                                    teams.name,
                                    teams.description,
                                    teams.img,
                                    teams.date,
                                    teams.active",
                        "where" => "teams.status_value = 1",
                        "order" => "teams.team_id DESC"
               );
           //GET DATA FROM CUSTOMER
           $obj_team = $this->obj_team->search($params);
           
           /// PAGINADO
            $modulos ='equipos'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/equipos'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_team",$obj_team);
            $this->tmp_mastercms->render("dashboard/team/team_list");
    }
    
    public function validate(){
        
        //GET DATA
        $team_id = $this->input->post("team_id");
        $name = $this->input->post("name");
        $description = $this->input->post("description");
        $active = $this->input->post("active");
        $date = date("Y-m-d");
        $img2 = $this->input->post("img2");
        
        //VERIFY IF ISSET IMG FILE
        if(isset($_FILES["image_file"]["name"])){
                $config['upload_path']          = './static/cms/images/teams';
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
        if($team_id != ""){
            //VERIFY DATA OF IMG
            if($img == ""){
                $img = $img2;
            }
            $data = array(
                'name' => $name,
                'description' => $description,
                'img' => $img,
                'date' => $date,
                'active' => $active,
                'status_value' => 1,
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );
            $this->obj_team->update($team_id, $data);
        }else{
            $data = array(
                'name' => $name,
                'description' => $description,
                'img' => $img,
                'date' => $date,
                'active' => $active,
                'status_value' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => $_SESSION['usercms']['user_id']
                ); 
            $this->obj_team->insert($data);
        }
        redirect(site_url()."dashboard/equipos");
    }
    
    public function delete_team(){
        //DELETE CUSTOMER
        if($this->input->is_ajax_request()){  
                $team_id = $this->input->post("team_id");
                if(count($team_id) > 0){
                    $data = array(
                        'status_value' => 0,
                        'active' => 0,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_team->update($team_id,$data);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function load($team_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($team_id != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "teams.team_id = $team_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_team  = $this->obj_team->get_search_row($params); 
            //RENDER
            $this->tmp_mastercms->set("obj_team",$obj_team);
          }

            $modulos ='equipos'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->render("dashboard/team/team_form");    
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