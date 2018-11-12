<link href="<?php echo site_url();?>static/cms/css/uploadimg.css" rel="stylesheet" />
<script src="<?php echo site_url();?>static/cms/js/core/bootstrap-fileupload.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="static/cms/js/blog.js"></script>
<form method="post" id="upload_form" enctype="multipart/form-data" action="<?php echo site_url()."dashboard/blog/validate";?>">
<div id="main_content" class="span7">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                <div class="navbar navbar-static navbar_as_heading">
                        <div class="navbar-inner">
                                <div class="container" style="width: auto;">
                                        <a class="brand"></i> Formulario Blog</a>
                                </div>
                        </div>
                </div>
                <div class="well nomargin" style="width: 600px;">
                    <div class="inner">
                    <strong>Categorías:</strong>
                        <select name="category_blog_id" id="category_blog_id">
                        <option value="">[ Seleccionar ]</option>
                            <?php foreach ($obj_category_blog as $value ): ?>
                        <option value="<?php echo $value->category_blog_id;?>"
                            <?php 
                                if(isset($obj_blog->blog_id)){
                                        if($obj_blog->category_blog_id==$value->category_blog_id){
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
              <input type="hidden" name="blog_id" id="blog_id" value="<?php echo isset($obj_blog)?$obj_blog->blog_id:"";?>">
              <strong>Nombre:</strong><br>              
              <input type="text" id="title" name="title" value="<?php echo isset($obj_blog->title)?$obj_blog->title:"";?>" class="input-xlarge-fluid" placeholder="Título">
              <br><br>
              <strong>Sumilla:</strong><br/>
              <textarea name="summary" id="summary" rows="10" cols="80">
                <?php if(isset($obj_blog->summary) != ""){
                    echo $obj_blog->summary;
                } ?>
              </textarea>
              <script>
                    CKEDITOR.replace('summary');
              </script> 
              <br><br>
              <strong>Descripción:</strong><br/>
              <textarea name="description" id="description" rows="10" cols="80">
                <?php if(isset($obj_blog->description) != ""){
                    echo $obj_blog->description;
                } ?>
              </textarea>
              <script>
                    CKEDITOR.replace('description');
              </script> 
              <br><br>
              <?php 
              if(isset($obj_blog->blog_id)){ ?>
              <img src='<?php echo site_url()."static/cms/images/blog/$obj_blog->img";?>' width="100" />
              <input type="hidden" name="img2" id="img2" value="<?php echo isset($obj_blog)?$obj_blog->img:"";?>">
              <br><br>
              <?php } ?>
              <strong>Imagen Logo: Imagen 1920 x 1280</strong><br>   
              <input type="file" value="Upload Imagen de Envio" name="image_file" id="image_file">
              <br><br>
              <strong>Vídeo Link:</strong><br>              
              <input type="text" id="video" name="video" value="<?php echo isset($obj_blog->video)?$obj_blog->video:"";?>" class="input-xlarge-fluid" placeholder="Vídeo">
              <br><br>
              <div class="well nomargin" style="width: 200px;">
                  <div class="inner">
                  <strong>Estado:</strong>
                  <select name="active" id="active">
                         <option value="1" <?php echo isset($obj_blog->active) == 1 ? "selected":"";?>>Activo</option>
                         <option value="0" <?php echo isset($obj_blog->active) == 0 ? "selected":"";?>>Inactivo</option>
                  </select>
                  </div>
              </div>
              <div id="uploaded_image"></div>
              <br><br>
              <br><br>
              <div class="subnav nobg">
                    <button class="btn btn-danger btn-small pull-left" type="reset" onclick="cancel_blog();">Cancelar</button>  
                    <button type="submit" name="upload" id="upload" class="btn btn-primary btn-small pull-right"  type="submit">Guardar</button>
               </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
</form>