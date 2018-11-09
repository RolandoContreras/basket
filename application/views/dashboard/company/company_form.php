<link href="<?php echo site_url();?>static/cms/css/uploadimg.css" rel="stylesheet" />
<script src="<?php echo site_url();?>static/cms/js/core/bootstrap-fileupload.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="static/cms/js/category.js"></script>
<form method="post" id="upload_form" enctype="multipart/form-data" action="<?php echo site_url()."dashboard/empresas/validate";?>">
<div id="main_content" class="span7">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                <div class="navbar navbar-static navbar_as_heading">
                        <div class="navbar-inner">
                                <div class="container" style="width: auto;">
                                        <a class="brand"></i> Formulario Empresas</a>
                                </div>
                        </div>
                </div>
                <div class="well nomargin" style="width: 600px;">
                    <div class="inner">
                    <strong>Categorías:</strong>
                        <select name="category_id" id="category_id">
                        <option value="">[ Seleccionar ]</option>
                            <?php foreach ($obj_category as $value ): ?>
                        <option value="<?php echo $value->category_id;?>"
                            <?php 
                                if(isset($obj_company->company_id)){
                                        if($obj_company->company_id==$value->category_id){
                                            echo "selected";
                                        }
                                }else{
                                          echo "";
                                } ?>>
                            <?php echo $value->name;?>
                        </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <br/>
                </div>
              <br>
              <input type="hidden" name="company_id" id="company_id" value="<?php echo isset($obj_company)?$obj_company->company_id:"";?>">
              <strong>Nombre:</strong><br>              
              <input type="text" id="name" name="name" value="<?php echo isset($obj_company->name)?$obj_company->name:"";?>" class="input-xlarge-fluid" placeholder="Nombre">
              <br><br>
              <strong>Website:</strong><br>              
              <input type="text" id="website" name="website" value="<?php echo isset($obj_company->website)?$obj_company->website:"";?>" class="input-xlarge-fluid" placeholder="Sitio Web">
              <br><br>
              <strong>Teléfono:</strong><br>              
              <input type="text" id="phone" name="phone" value="<?php echo isset($obj_company->phone)?$obj_company->phone:"";?>" class="input-xlarge-fluid" placeholder="Teléfono">
              <br><br>
              <strong>E-mail:</strong><br>              
              <input type="text" id="email" name="email" value="<?php echo isset($obj_company->email)?$obj_company->email:"";?>" class="input-xlarge-fluid" placeholder="E-mail">
              <br><br>
              <strong>Descripción:</strong><br>              
              <input type="text" id="description" name="description" value="<?php echo isset($obj_company->description)?$obj_company->description:"";?>" class="input-xlarge-fluid" placeholder="Descripción">
              <br><br>
              <strong>Fecha de Inicio:</strong><br>              
              <input type="text" id="date_start" name="date_start" value="<?php echo isset($obj_company->date_start)?$obj_company->date_start:"";?>" class="input-xlarge-fluid" placeholder="Fecha de Inicio">
              <br><br>
              <strong>Fecha de Termino:</strong><br>              
              <input type="text" id="date_end" name="date_end" value="<?php echo isset($obj_company->date_end)?$obj_company->date_end:"";?>" class="input-xlarge-fluid" placeholder="Fecha de Termino">
              <br><br>
              <?php 
              if(isset($obj_news->news_id)){ ?>
              <img src='<?php echo site_url()."static/backoffice/images/new/$obj_company->img";?>' width="100" />
              <input type="hidden" name="img2" id="img2" value="<?php echo isset($obj_company)?$obj_company->img:"";?>">
              <br><br>
              <?php } ?>
              <strong>Logo: Imagen 617 x 617</strong><br>   
              <input type="file" value="Upload Imagen de Envio" name="image_file" id="image_file">
              <br><br>
              <div class="well nomargin" style="width: 200px;">
                  <div class="inner">
                  <strong>Estado:</strong>
                  <select name="active" id="active">
                         <option value="1" <?php echo isset($obj_company->active) == 1 ? "selected":"";?>>Activo</option>
                         <option value="0" <?php echo isset($obj_company->active) == 0 ? "selected":"";?>>Inactivo</option>
                  </select>
                  </div>
              </div>
              <div id="uploaded_image"></div>
              <br><br>
              <br><br>
              <div class="subnav nobg">
                    <button class="btn btn-danger btn-small pull-left" type="reset" onclick="cancel_company();">Cancelar</button>  
                    <button type="submit" name="upload" id="upload" class="btn btn-primary btn-small pull-right"  type="submit">Guardar</button>
               </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
</form>
<script>
  $( function() {
    $( "#date_start" ).datepicker();
    $( "#date_end" ).datepicker();
  } );
</script>