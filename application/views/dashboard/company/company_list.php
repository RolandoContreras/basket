<script src="static/cms/js/core/bootstrap-modal.js"></script>
<script src="static/cms/js/core/bootbox.min.js"></script>
<script src="static/cms/js/core/jquery-1.11.1.min.js"></script>
<script src="static/cms/js/core/jquery.dataTables.min.js"></script>
<link href="static/cms/css/core/jquery.dataTables.css" rel="stylesheet"/>

<!-- main content -->
<div id="main_content" class="span9">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                    <div class="navbar navbar-static navbar_as_heading">
                            <div class="navbar-inner">
                                    <div class="container" style="width: auto;">
                                            <a class="brand">EMPRESAS</a>
                                            <button class="btn btn-small" onclick="add_company();"><i class="fa fa-plus"></i> Nueva</button>
                                    </div>
                            </div>
                    </div>
                
             <!--<form>-->
                <div class="well nomargin" style="width: 100% !important;">
                    <!--- INCIO DE TABLA DE RE4GISTRO -->
                   <table id="table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>CODIGO</th>
                                <th>NAME</th>
                                <th>CATEGORÍA</th>
                                <th>WEBSITE</th>
                                <th>EMAIL</th> 
                                <th>LOGO</th> 
                                <th>FECHA INICIO</th> 
                                <th>FECHA FINAL</th> 
                                <th>LOGO</th> 
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($obj_company as $value): ?>
                                <td align="center"><?php echo $value->company_id;?></td>
                                <td align="center" style="color:#fff;" class="label-success"><?php echo $value->name;?></td>
                                <td align="center" style="color:#fff;" class="label-warning"><?php echo $value->categoria;?></td>
                                <td align="center"><?php echo $value->website;?></td>
                                <td align="center"><?php echo $value->email;?></td>
                                <td align="center">
                                    <img src="<?php echo site_url()."static/cms/images/company/$value->img";?>" alt="<?php echo $value->name;?>" width="60"/>
                                </td>
                                <td align="center"><?php echo formato_fecha_barras($value->date_start);?></td>
                                <td align="center" style="color:#fff;" class="label-info"><?php echo formato_fecha_barras($value->date_end);?></td>
                                <td align="center">
                                    <?php if ($value->active == 1) {
                                        $valor = "Activo";
                                        $stilo = "label label-success";
                                    }elseif($value->active == 0){
                                        $valor = "Inactivo";
                                        $stilo = "label label-important";
                                    } ?>
                                    <span class="<?php echo $stilo ?>"><?php echo $valor;?></span>
                                </td>
                                <td>
                                    <div class="operation">
                                            <div class="btn-group">
                                                <button class="btn btn-small" onclick="edit_company('<?php echo $value->company_id;?>');"><i class="fa fa-edit"></i> Editar</button>
                                                <button class="btn btn-small" onclick="delete_company('<?php echo $value->company_id;?>');"><i class="fa fa-trash-o"></i> Eliminar</button>
                                          </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>
           <!--</form>-->         
        </div>
    </div>
</div><!-- main content -->
</div>
<script type="text/javascript">
   $(document).ready(function() {
    $('#table').dataTable( {
         "order": [[ 0, "desc" ]]
    } );
} );
</script>
<script src="static/cms/js/company.js"></script>