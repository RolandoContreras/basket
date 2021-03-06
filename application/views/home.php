<!DOCTYPE html>
<html class="no-js" lang="es">
<?php $this->load->view("head");?>
<body class="home page-template-default page page-id-2 page-parent woocommerce-no-js btHasCrest bt_header_headline_Light_alternate btHasAltLogo btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btHideHeadline btLightSkin btBelowMenu btNoDashInSidebar noBodyPreloader btSoftRoundedButtons btTransparentLightHeader btNoSidebar ">
  <div class="btPageWrap" id="top">
    <div class="btVerticalHeaderTop">
      <div class="btVerticalMenuTrigger">&nbsp;
        <div class="bt_bb_icon">
          <a href="#" target="_self" data-ico-fa="&#xf0c9;" class="bt_bb_icon_holder"></a>
        </div>
      </div>
      <!--START LOGO-->
      <div class="btLogoArea">
        <div class="logo">
          <div class="logoInner">
              <a href="<?php echo site_url();?>">
                <img class="btMainLogo" data-hw="4" src="<?php echo site_url().'static/page_front/images/logo/logo_white.png';?>" alt="logo">
                <img class="btAltLogo" src="<?php echo site_url().'static/page_front/images/logo/logo_dark.png';?>" alt="logo">
            </a>
          </div>
        </div>
      </div>
      <!--END LOGO-->
    </div>
    <?php $this->load->view("header");?>
    <!-- /.mainHeader -->
    <div class="btContentWrap btClear">
      <div class="btContentHolder">
        <div class="btContent">
          <div class="bt_bb_wrapper">
            <section id="bt_bb_section5bcbd2ca3fd5a" data-parallax="0.6" data-parallax-offset="0" class="bt_bb_section bt_bb_top_spacing_extra_large bt_bb_bottom_spacing_large bt_bb_color_scheme_1 bt_bb_layout_boxed_1200 bt_bb_full_screen bt_bb_vertical_align_bottom bt_bb_parallax bt_bb_background_image"
                     style="background-image:url('<?php echo site_url().'static/page_front/images/fondo/fondo_basketball.jpg';?>');">
              <div class="bt_bb_port">
                <div class="bt_bb_cell">
                  <div class="bt_bb_cell_inner">
                    <div class="bt_bb_row">
                      <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_center bt_bb_vertical_align_bottom bt_bb_padding_normal" data-width="12">
                        <div class="bt_bb_column_content">
                          <header class="bt_bb_headline bt_bb_font_weight_normal bt_bb_color_scheme_10 bt_bb_dash_none bt_bb_size_extralarge bt_bb_superheadline bt_bb_align_inherit">
                            <h2><span class="bt_bb_headline_superheadline">LIGA DE BASKETBALL DE SURCO</span><span class="bt_bb_headline_content"><span><strong>UNA LIGA</strong> DIFERENTE</span></span>
                            </h2>
                          </header>
                          <div class="bt_bb_separator bt_bb_top_spacing_normal bt_bb_bottom_spacing_small bt_bb_border_style_none" style="margin-top:20px;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="bt_bb_row">
                      <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal" data-width="12">
                        <div class="bt_bb_column_content">
                          <div class="bt_bb_content_slider bt_bb_gap_no_gap bt_bb_arrows_size_small bt_bb_show_dots_hide bt_bb_height_auto bt_bb_multiple_slides">
                            <div class="slick-slider" data-slick='{ "lazyLoad": "progressive", "cssEase": "ease-out", "speed": "600", "prevArrow": "&lt;button type=\"button\" class=\"slick-prev\"&gt;", "nextArrow": "&lt;button type=\"button\" class=\"slick-next\"&gt;", "adaptiveHeight": true,"slidesToShow": 4,"autoplay": true, "autoplaySpeed": 3000, "responsive": [{ "breakpoint": 480, "settings": { "slidesToShow": 1, "slidesToScroll": 1 } },{ "breakpoint": 768, "settings": { "slidesToShow": 2, "slidesToScroll": 2 } },{ "breakpoint": 920, "settings": { "slidesToShow": 3, "slidesToScroll": 3 } }]}'>
                            <?php foreach ($teams as $value) { ?>
                                    <div class="bt_bb_content_slider_item" style="">
                                     <div class="bt_bb_content_slider_item_content content">
                                       <div class="bt_bb_scheduled_game bt_bb_color_scheme_10">
                                         <div class="bt_bb_scheduled_game_image">
                                             <img src="<?php echo site_url()."static/cms/images/teams/$value->img";?>" alt="<?php echo $value->name;?>"></div>
                                         <div class="bt_bb_scheduled_game_headline">
                                             <a class="bt_bb_scheduled_game_url">
                                                 <div class="bt_bb_scheduled_game_title"><?php echo strtoupper($value->name);?></div>
                                             </a>
                                             <div class="bt_bb_scheduled_game_subtitle">BASKETBALL CLUB</div>
                                         </div>
                                       </div>
                                       <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                                     </div>
                                   </div>     
                            <?php } ?>
                     </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!--RESULTADOS 1-->
  <section id="bt_bb_section5bcbd2ca42072" class="bt_bb_section bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_top_negative_margin_large">
    <div class="bt_bb_port">
      <div class="bt_bb_cell">
        <div class="bt_bb_cell_inner">
          <div class="bt_bb_row bt_bb_column_gap_20">
            <!--SCORE 1-->
            <div class="bt_bb_column col-md-6 col-sm-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_double bt_bb_highlight_shadow" data-width="6">
              <div class="bt_bb_column_content" style="background-color:rgba(255, 255, 255, 1);">
                <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                <div class="bt_bb_game_result">
                  <div class="bt_bb_game_result_supertitle">SAB, 27 OCT, SUB 16</div>
                  <div class="bt_bb_game_result_wrap">
                    <div class="bt_bb_game_result_team bt_bb_game_result_team_left">
                      <div class="bt_bb_game_result_crest">
                          <!--<img src="http://oxigeno.bold-themes.com/basketball/wp-content/uploads/sites/6/2017/10/races_logo_03.png" alt="65"/>-->
                          <img src="<?php echo site_url().'static/page_front/images/logo_aqui.png';?>" alt="logo defecto"/>
                      </div>
                      <div class="bt_bb_game_result_data">
                        <div class="bt_bb_game_result_value">
                          <div class="bt_bb_counter_holder bt_bb_size_large">
                            <div class="bt_bb_counter_icon_box">
                                <span data-ico-="&#038;#x;" class="bt_bb_icon_holder"></span>
                            </div>
                              <span class="bt_bb_counter animate" data-digit-length="2">
                                  <span class="p2 d6">
                                      <span class="n0">0</span>
                                  </span>
                                </span>
                          </div>
                        </div>
                        <div class="bt_bb_game_result_title">FORTALEZA</div>
                      </div>
                    </div>
                    <div class="bt_bb_game_result_team bt_bb_game_result_team_right">
                      <div class="bt_bb_game_result_data">
                        <div class="bt_bb_game_result_value">
                          <div class="bt_bb_counter_holder bt_bb_size_large">
                            <div class="bt_bb_counter_icon_box">
                                <span data-ico-="&#038;#x;" class="bt_bb_icon_holder"></span>
                            </div>
                              <span class="bt_bb_counter animate" data-digit-length="2">
                                  <span class="p2 d6">
                                      <span class="n0">0</span>
                                  </span>
                                </span>
                          </div>
                        </div>
                        <div class="bt_bb_game_result_title">LAKERS</div>
                      </div>
                      <div class="bt_bb_game_result_crest">
                          <img src="<?php echo site_url().'static/page_front/images/logo_aqui.png';?>" alt="logo defecto"/>
                      </div>
                    </div>
                  </div>
                  <div class="bt_bb_game_result_button">
                    <div class="bt_bb_button bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_size_small">
                      <a href="#" target="_self" class="bt_bb_link" title="GAME DETAILS">
                          <span class="bt_bb_button_text">DETALLES</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
              </div>
            </div>
            <!--SCORE 2-->
            <div class="bt_bb_column col-md-6 col-sm-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_double bt_bb_highlight_shadow" data-width="6">
              <div class="bt_bb_column_content" style="background-color:rgba(255, 255, 255, 1);">
                <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                <div class="bt_bb_game_result">
                  <div class="bt_bb_game_result_supertitle">SAB, 27 OCT, SUB 16</div>
                  <div class="bt_bb_game_result_wrap">
                    <div class="bt_bb_game_result_team bt_bb_game_result_team_left">
                      <div class="bt_bb_game_result_crest">
                          <img src="<?php echo site_url().'static/page_front/images/logo_aqui.png';?>" alt="logo defecto"/>
                      </div>
                      <div class="bt_bb_game_result_data">
                        <div class="bt_bb_game_result_value">
                          <div class="bt_bb_counter_holder bt_bb_size_large">
                            <div class="bt_bb_counter_icon_box">
                                <span data-ico-="&#038;#x;" class="bt_bb_icon_holder"></span>
                            </div>
                              <span class="bt_bb_counter animate" data-digit-length="2">
                                  <span class="p2 d6">
                                      <span class="n0">0</span>
                                  </span>
                                </span>
                          </div>
                        </div>
                        <div class="bt_bb_game_result_title">FORTALEZA</div>
                      </div>
                    </div>
                    <div class="bt_bb_game_result_team bt_bb_game_result_team_right">
                      <div class="bt_bb_game_result_data">
                        <div class="bt_bb_game_result_value">
                          <div class="bt_bb_counter_holder bt_bb_size_large">
                            <div class="bt_bb_counter_icon_box">
                                <span data-ico-="&#038;#x;" class="bt_bb_icon_holder"></span>
                            </div>
                              <span class="bt_bb_counter animate" data-digit-length="2">
                                  <span class="p2 d6">
                                      <span class="n0">0</span>
                                  </span>
                                </span>
                          </div>
                        </div>
                        <div class="bt_bb_game_result_title">FORTALEZA</div>
                      </div>
                      <div class="bt_bb_game_result_crest">
                          <img src="<?php echo site_url().'static/page_front/images/logo_aqui.png';?>" alt="logo defecto"/>
                      </div>
                    </div>
                  </div>
                  <div class="bt_bb_game_result_button">
                    <div class="bt_bb_button bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_size_small">
                      <a href="" target="_self" class="bt_bb_link" title="DETALLES">
                          <span class="bt_bb_button_text">DETALLES</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--RESULTADOS 2-->         
  <section id="bt_bb_section5bcbd2ca44e9d" class="bt_bb_section bt_bb_top_spacing_medium bt_bb_bottom_spacing_medium bt_bb_layout_boxed_1200 bt_bb_vertical_align_top">
    <div class="bt_bb_port">
      <div class="bt_bb_cell">
        <div class="bt_bb_cell_inner">
          <div class="bt_bb_row">
            <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal"
              data-width="12">
              <div class="bt_bb_column_content">
                <header class="bt_bb_headline bt_bb_font_weight_normal bt_bb_color_scheme_5 bt_bb_dash_none bt_bb_size_normal bt_bb_superheadline bt_bb_align_inherit">
                  <h2><span class="bt_bb_headline_superheadline">LIGA DE BASKETBALL DE SURCO</span>
                      <span class="bt_bb_headline_content">
                          <span>NUESTROS <strong>PRINCIPIOS</strong></span>
                      </span>
                  </h2>
                </header>
                <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
              </div>
            </div>
          </div>
          <div class="bt_bb_row">
            <div class="bt_bb_column col-md-3 col-sm-6 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal"
              data-width="3">
              <div class="bt_bb_column_content">
                <div class="bt_bb_service bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_size_large bt_bb_shape_circle bt_bb_align_inherit">
                  <a title="INTEGRIDAD" class="bt_bb_icon_holder">
                      <i class="fa fa-trophy" aria-hidden="true"></i>
                  </a>
                  <div class="bt_bb_service_content">
                    <div class="bt_bb_service_content_title">
                        <a>INTEGRIDAD</a></div>
                    <div class="bt_bb_service_content_text">
                        Estamos en una situación en la que hay una falta total de integridad en el deporte por tal se creó la liga de surco.
                    </div>
                  </div>
                </div>
                <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
              </div>
            </div>
            <div class="bt_bb_column col-md-3 col-sm-6 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal"
              data-width="3">
              <div class="bt_bb_column_content">
                <div class="bt_bb_service bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_size_large bt_bb_shape_circle bt_bb_align_inherit">
                  <a title="ORGANIZACIÓN" class="bt_bb_icon_holder"><i class="fa fa-handshake-o" aria-hidden="true"></i></a>
                  <div class="bt_bb_service_content">
                    <div class="bt_bb_service_content_title"><a>ORGANIZACIÓN</a></div>
                    <div class="bt_bb_service_content_text">
                        Contamos con profesionales con una larga trayectoria y experiencia dentro del deporte nacional e internacional.
                    </div>
                  </div>
                </div>
                <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
              </div>
            </div>
            <div class="bt_bb_column col-md-3 col-sm-6 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal"
              data-width="3">
              <div class="bt_bb_column_content">
                <div class="bt_bb_service bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_size_large bt_bb_shape_circle bt_bb_align_inherit">
                  <a title="TRANSPARENCIA" class="bt_bb_icon_holder"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                  <div class="bt_bb_service_content">
                    <div class="bt_bb_service_content_title"><a>TRANSPARENCIA</a></div>
                    <div class="bt_bb_service_content_text">Una gestión abierta, transparente y cercana es uno de los pilares fundamentales de nuestra liga.</div>
                  </div>
                </div>
                <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
              </div>
            </div>
            <div class="bt_bb_column col-md-3 col-sm-6 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal"
              data-width="3">
              <div class="bt_bb_column_content">
                <div class="bt_bb_service bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_size_large bt_bb_shape_circle bt_bb_align_inherit">
                  <a title="TRABAJO EN EQUIPO" class="bt_bb_icon_holder"><i class="fa fa-users" aria-hidden="true"></i></a>
                  <div class="bt_bb_service_content">
                    <div class="bt_bb_service_content_title"><a>TRABAJO EN EQUIPO</a></div>
                    <div class="bt_bb_service_content_text">Impulsamos a todos los miembros a colaborar y estar en la misma sintonía para poder alcanzar sus objetivos.</div>
                  </div>
                </div>
                <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--START NOTICIAS-->
  <?php 
  if(count($blog_last_home)>0){ ?>
  <section id="bt_bb_section5bcbd2ca50cfe" class="bt_bb_section bt_bb_top_spacing_large bt_bb_bottom_spacing_large bt_bb_color_scheme_2 bt_bb_layout_boxed_1200 bt_bb_vertical_align_top">
    <div class="bt_bb_port">
      <div class="bt_bb_cell">
        <div class="bt_bb_cell_inner">
          <div class="bt_bb_row">
            <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal"
              data-width="12">
              <div class="bt_bb_column_content">
                <header class="bt_bb_headline bt_bb_font_weight_normal bt_bb_color_scheme_5 bt_bb_dash_none bt_bb_size_normal bt_bb_superheadline bt_bb_align_inherit">
                    <h2>
                        <span class="bt_bb_headline_content">
                            <span>ÚLTIMAS <strong>NOTICIAS</strong></span>
                        </span>
                    </h2>
                </header>
                <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
              </div>
            </div>
          </div>
          <div class="bt_bb_row">
            <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal" data-width="12">
              <div class="bt_bb_column_content">
                <div class="bt_bb_latest_posts bt_bb_columns_4 bt_bb_gap_normal bt_bb_image_shape_rounded">
                    <?php 
                    foreach ($blog_last_home as $value) { 
                        $slug = convert_slug($value->title);?>
                        <div class="bt_bb_latest_posts_item">
                            <div class="bt_bb_latest_posts_item_image">
                                <img src='<?php echo site_url()."static/cms/images/blog/$value->img";?>' alt="<?php echo $value->title;?>" title="<?php echo $value->title;?>">
                                <span class="bt_bb_latest_posts_item_date">
                                    <span class="btDay">27</span>
                                    <span  class="btMonth">Oct</span> 
                                </span>
                            </div>
                            <div class="bt_bb_latest_posts_item_content">
                              <div class="bt_bb_latest_posts_item_category">
                                <ul class="post-categories">
                                  <li><a href="#" rel="category tag">Torneo</a></li>
                                  <li><a href="#" rel="category tag">Basketball</a></li>
                                </ul>
                              </div>
                              <h5 class="bt_bb_latest_posts_item_title">
                                  <a href="<?php echo site_url()."blog/$value->slug/$slug";?>"><?php echo $value->title;?></a>
                              </h5>
                              <div class="bt_bb_latest_posts_item_excerpt">
                                  <?php echo $value->summary;?>
                              </div>
                          </div>
                        </div>
                    <?php  } ?>
                  
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <?php } ?>
  <!--END NOTICIAS-->
  
  
  <!--START PATROCINADORES-->
  <?php 
  if(count($patrocinadores)>0){ ?>
      
  
          <section id="bt_bb_section5bd3d0f65dce6" data-parallax="0.6" data-parallax-offset="0" class="bt_bb_section bt_bb_top_spacing_large bt_bb_bottom_spacing_large bt_bb_color_scheme_1 bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_parallax bt_bb_background_image"
                   style="background-image:url('<?php echo site_url().'static/page_front/images/fondo/bg_patrocinadores.jpg';?>');">
            <div class="bt_bb_port">
              <div class="bt_bb_cell">
                <div class="bt_bb_cell_inner">
                  <div class="bt_bb_row">
                    <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal"
                      data-width="12">
                      <div class="bt_bb_column_content">
                        <header class="bt_bb_headline bt_bb_font_weight_normal bt_bb_color_scheme_10 bt_bb_dash_none bt_bb_size_normal bt_bb_subheadline bt_bb_align_inherit">
                          <h2>
                              <span class="bt_bb_headline_content">
                                  <span><strong>PATROCINADORES</strong></span>
                              </span>
                          </h2>
                          <div class="bt_bb_headline_subheadline">La liga de surco está orgullosa de tener innumerables patrocinadores apoyando la visión constantemente.</div>
                        </header>
                        <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                      </div>
                    </div>
                  </div>
                  <div class="bt_bb_row">
                    <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal"
                      data-width="12">
                      <div class="bt_bb_column_content">
                        <div class="bt_bb_content_slider bt_bb_gap_no_gap bt_bb_arrows_size_small bt_bb_show_dots_hide bt_bb_height_auto bt_bb_multiple_slides">
                          <div class="slick-slider" data-slick='{ "lazyLoad": "progresive", "cssEase": "ease-out", "speed": "600", "prevArrow": "&lt;button type=\"button\" class=\"slick-prev\"&gt;", "nextArrow": "&lt;button type=\"button\" class=\"slick-next\"&gt;", "adaptiveHeight": true,"slidesToShow": 6,"autoplay": true, "autoplaySpeed": 3000, "responsive": [{ "breakpoint": 480, "settings": { "slidesToShow": 1, "slidesToScroll": 1 } },{ "breakpoint": 768, "settings": { "slidesToShow": 2, "slidesToScroll": 2 } },{ "breakpoint": 920, "settings": { "slidesToShow": 3, "slidesToScroll": 3 } },{ "breakpoint": 1024, "settings": { "slidesToShow": 3, "slidesToScroll": 3 } }]}'>
                              <?php  foreach ($patrocinadores as $value) { 
                                        $categoria = convert_slug($value->categoria);
                                        $slug = convert_slug($value->name);?>
                                          <div class="bt_bb_content_slider_item_content content">
                                            <div class="bt_bb_image bt_bb_shape_square bt_bb_align_inherit bt_bb_hover_style_simple bt_bb_content_display_always bt_bb_content_align_middle">
                                                <span>
                                                    <a href='<?php echo site_url()."pages/$categoria/$slug";?>'><img src="<?php echo site_url()."static/cms/images/company/$value->img";?>" alt="<?php echo $value->name;?>"></a>
                                                </span>
                                            </div>
                                          </div>
                              <?php } ?>
                              </div>
                          </div>
                        </div>
                        <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </section>
  <?php } ?>
   <!--END PATROCINADORES-->
  <!--START ACERCA-->
  <section id="bt_bb_section5bcbd2ca5bfd5" class="bt_bb_section bt_bb_color_scheme_2 bt_bb_layout_boxed_right_1200 bt_bb_vertical_align_top bt_bb_top_negative_margin_extra_large bt_bb_highlight_shadow">
    <div class="bt_bb_port">
      <div class="bt_bb_cell">
        <div class="bt_bb_cell_inner">
            <div class="bt_bb_row">
              <div class="bt_bb_column col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_middle bt_bb_animation_fade_in animate bt_bb_padding_normal" data-width="6">
                <div class="bt_bb_column_content">
                  <div class="bt_bb_separator bt_bb_top_spacing_medium bt_bb_border_style_none"></div>
                      <header class="bt_bb_headline bt_bb_font_weight_normal bt_bb_color_scheme_5 bt_bb_dash_none bt_bb_size_large bt_bb_superheadline bt_bb_subheadline bt_bb_align_inherit">
                        <h2>
                            <span class="bt_bb_headline_content">
                                <span>ACERCA</span>
                            </span>
                        </h2>
                        <div class="bt_bb_headline_subheadline">
                            La Liga Mixta de Basketball de Surco es una asociación deportiva sin fines de lucro creada con el propósito de ser una alternativa para el desarrollo del básket en Lima. 
                        </div>
                      </header>
                      <div class="bt_bb_separator bt_bb_bottom_spacing_small bt_bb_border_style_none"></div>
                      <div class="bt_bb_text">
                        <p>Nos enfocamos principalmente en categorías formativas (Pre-Mini hasta U17), sin dejar de lado otras categorías como U19 y Master. Creemos que este tipo de enfoque organizado ayudará al desarrollo del básket peruano. Nuestros valores de integridad, transparencia, honestidad y organización aunados a nuestra visión y misión son el espíritu de nuestra Liga.</p>
                        <p>Nuestra Liga es reconocida por los organismos deportivos pertinentes del Perú. Contamos con un equipo de profesionales y estudiantes identificados con el espíritu de la Liga. Los animamos a ser parte de nuestra familia deportiva.
</p>
                      </div>
                      <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                      <div class="bt_bb_button bt_bb_icon_position_left bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_size_medium bt_bb_width_inline bt_bb_shape_inherit bt_bb_align_inherit">
                          <a href="#" target="_self" class="bt_bb_link" title="JOIN THE CLUB">
                              <span class="bt_bb_button_text">ÚNETE</span></a>
                      </div>
                      <div class="bt_bb_button bt_bb_icon_position_left bt_bb_color_scheme_4 bt_bb_style_outline bt_bb_size_medium bt_bb_width_inline bt_bb_shape_inherit bt_bb_align_inherit">
                          <a href="<?php echo site_url().'about'?>" class="bt_bb_link" title="MÁS INFORMACIÓN">
                              <span class="bt_bb_button_text">MÁS INFORMACIÓN</span>
                          </a>
                      </div>
                      <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                  </div>
              </div>
              <div class="bt_bb_column col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_padding_normal" data-width="6">
                <div class="bt_bb_column_content">
                  <div class="bt_bb_image bt_bb_shape_square bt_bb_align_inherit bt_bb_hover_style_simple bt_bb_content_display_always bt_bb_content_align_middle">
                      <span>
                          <img src="<?php echo site_url().'static/page_front/images/fondo/bg_about.jpg';?>" alt="Acerca">
                      </span>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!--END ACERCA-->
  </div>
  </div>
  <!-- /boldthemes_content -->
  </div>
  <!-- /contentHolder -->
  </div>
  <!-- /START FOOTER -->
  <?php $this->load->view("footer");?>
  <!-- /END Footer -->
  </div>
  <!-- /pageWrap -->
  <script type='text/javascript' src='<?php echo site_url().'static/page_front/js/comment-reply.min.js?ver=4.9.8';?>'></script>
  <script type='text/javascript' src='<?php echo site_url().'static/page_front/js/scripts.js?ver=5.0.3';?>'></script>
  <script type='text/javascript' src='<?php echo site_url().'static/page_front/js/fancySelect.js?ver=4.9.8';?>'></script>
  <script type='text/javascript' src='<?php echo site_url().'static/page_front/js/header.misc.js?ver=4.9.8';?>'></script>
  <script type='text/javascript' src='<?php echo site_url().'static/page_front/js/misc.js?ver=4.9.8';?>'></script>
  <script type='text/javascript' src='<?php echo site_url().'static/page_front/js/hide.js?ver=4.9.8';?>'></script>
  <script type='text/javascript' src='<?php echo site_url().'static/page_front/js/wp-embed.min.js?ver=4.9.8';?>'></script>
  <script type='text/javascript' src='<?php echo site_url().'static/page_front/js/googlemaps-scrollprevent.min.js?ver=4.9.8';?>'></script>
  <script type='text/javascript' src='<?php echo site_url().'static/page_front/js/bt_bb_elements.js?ver=4.9.8';?>'></script>
  <script type='text/javascript' src='<?php echo site_url().'static/page_front/js/instafeed.min.js?ver=4.9.8';?>'></script>
</body>
</html>