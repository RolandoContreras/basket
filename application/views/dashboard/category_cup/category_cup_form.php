<link href="<?php echo site_url();?>static/cms/css/uploadimg.css" rel="stylesheet" />
<script src="<?php echo site_url();?>static/cms/js/core/bootstrap-fileupload.js"></script>
<script src="static/cms/js/category_cup.js"></script>
<form method="post" id="upload_form" enctype="multipart/form-data" action="<?php echo site_url()."dashboard/categoria_torneo/validate";?>">
<div id="main_content" class="span7">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                <div class="navbar navbar-static navbar_as_heading">
                        <div class="navbar-inner">
                                <div class="container" style="width: auto;">
                                        <a class="brand"></i> Formulario Categorías - Torneo</a>
                                </div>
                        </div>
                </div>
              <input type="hidden" name="category_cup_id" id="category_cup_id" value="<?php echo isset($obj_category_cup)?$obj_category_cup->category_cup_id:"";?>">
              <strong>Nombre:</strong><br>              
              <input type="text" id="name" name="name" value="<?php echo isset($obj_category_cup->name)?$obj_category_cup->name:"";?>" class="input-xlarge-fluid" placeholder="Nombre">
              <br><br>
              <div class="well nomargin" style="width: 200px;">
                  <div class="inner">
                  <strong>Estado:</strong>
                  <select name="active" id="active">
                         <option value="1" <?php echo isset($obj_category_blog->active) == 1 ? "selected":"";?>>Activo</option>
                         <option value="0" <?php echo isset($obj_category_blog->active) == 0 ? "selected":"";?>>Inactivo</option>
                  </select>
                  </div>
              </div>
              <div id="uploaded_image"></div>
              <br><br>
              <br><br>
              <div class="subnav nobg">
                    <button class="btn btn-danger btn-small pull-left" type="reset" onclick="cancel_category_cup();">Cancelar</button>  
                    <button type="submit" name="upload" id="upload" class="btn btn-primary btn-small pull-right"  type="submit">Guardar</button>
               </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
</form>
