<link href="<?php echo site_url();?>static/cms/css/uploadimg.css" rel="stylesheet" />
<script src="<?php echo site_url();?>static/cms/js/core/bootstrap-fileupload.js"></script>
<script src="<?php echo site_url();?>static/cms/js/tags.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- main content -->

<form id="customer-form" name="customer-form" enctype="multipart/form-data" method="post" action="<?php echo site_url()."dashboard/tags/validate";?>">
<div id="main_content" class="span7">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                <div class="navbar navbar-static navbar_as_heading">
                        <div class="navbar-inner">
                                <div class="container" style="width: auto;">
                                        <a class="brand"></i> Formulario de Tags</a>
                                </div>
                        </div>
                </div>
                <!--GET CUSTOMER ID-->
              <input type="hidden" name="tag_id" id="tag_id" value="<?php echo isset($obj_tags)?$obj_tags->tag_id:"";?>">
              <br><br>
              <strong>Nombre:</strong><br>
              <input type="text" id="name" name="name" value="<?php echo isset($obj_tags->name)?$obj_tags->name:"";?>" class="input-xlarge-fluid" placeholder="Nombre">
              <br><br>
                <div class="well nomargin" style="width: 200px;">
                <div class="inner">
                <strong>Estado:</strong>
                    <select name="active" id="active">
                                <option value="">[ Seleccionar ]</option>
                                <option value="0" <?php if(isset($obj_tags)){
                                    if($obj_tags->active == 0){ echo "selected";}
                                }else{echo "";} ?>>Inactivo</option>
                                <option value="1" <?php if(isset($obj_tags)){
                                    if($obj_tags->active == 1){ echo "selected";}
                                }else{echo "";} ?>>Activo</option>
                    </select>
                </div>
                </div>
                <br><br>
                <br><br>
                <div class="subnav nobg">
                    <button class="btn btn-danger btn-small pull-left" type="reset" onclick="cancelar_tags();">Cancelar</button>                    
                    <button class="btn btn-primary btn-small pull-right"  type="submit">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
</form>
