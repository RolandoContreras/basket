<link href="<?php echo site_url();?>static/cms/css/uploadimg.css" rel="stylesheet" />
<script src="<?php echo site_url();?>static/cms/js/core/bootstrap-fileupload.js"></script>
<script src="static/cms/js/team.js"></script>
<form method="post" id="upload_form" enctype="multipart/form-data" action="<?php echo site_url()."dashboard/equipos/validate";?>">
<div id="main_content" class="span7">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                <div class="navbar navbar-static navbar_as_heading">
                        <div class="navbar-inner">
                                <div class="container" style="width: auto;">
                                        <a class="brand"></i> Formulario Equipos</a>
                                </div>
                        </div>
                </div>
              <input type="hidden" name="team_id" id="team_id" value="<?php echo isset($obj_team)?$obj_team->team_id:"";?>">
              <strong>Nombre:</strong><br>
              <input type="text" id="name" name="name" value="<?php echo isset($obj_team->name)?$obj_team->name:"";?>" class="input-xlarge-fluid" placeholder="Nombre">
              <br><br>             
              <strong>Descripción:</strong><br/>
              <textarea name="description" id="description" rows="10" cols="80">
                <?php if(isset($obj_team->description) != ""){
                    echo $obj_team->description;
                } ?>
              </textarea>
              <script>
                    CKEDITOR.replace('description');
              </script> 
              <br><br>
              <?php 
              if(isset($obj_team->team_id)){ ?>
                <img src='<?php echo site_url()."static/cms/images/teams/$obj_team->img";?>' width="100" />
                <input type="hidden" name="img2" id="img2" value="<?php echo isset($obj_team)?$obj_team->img:"";?>">
                <br><br>
              <?php } ?>
              <strong>Logo: Imagen 300 x 300</strong><br>   
              <input type="file" value="Upload Imagen de Envio" name="image_file" id="image_file">
              <br><br>
              <div class="well nomargin" style="width: 200px;">
                  <div class="inner">
                  <strong>Estado:</strong>
                  <select name="active" id="active">
                         <option value="1" <?php echo isset($obj_team->active) == 1 ? "selected":"";?>>Activo</option>
                         <option value="0" <?php echo isset($obj_team->active) == 0 ? "selected":"";?>>Inactivo</option>
                  </select>
                  </div>
              </div>
              <div id="uploaded_image"></div>
              <br><br>
              <br><br>
              <div class="subnav nobg">
                    <button class="btn btn-danger btn-small pull-left" type="reset" onclick="cancel_team();">Cancelar</button>  
                    <button type="submit" name="upload" id="upload" class="btn btn-primary btn-small pull-right"  type="submit">Guardar</button>
               </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
</form>
