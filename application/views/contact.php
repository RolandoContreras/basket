<!DOCTYPE html>
<html class="no-js" lang="es">
<?php $this->load->view("head");?>
<body class="page-template-default page page-id-28 page-parent woocommerce-no-js btHasCrest bt_header_headline_Light_alternate btHasAltLogo btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btLightSkin btBelowMenu btNoDashInSidebar noBodyPreloader btSoftRoundedButtons btTransparentLightHeader btNoSidebar ">
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
      <section class="bt_bb_section gutter bt_bb_vertical_align_top btPageHeadline bt_bb_background_image bt_bb_background_overlay_dark_solid bt_bb_parallax btDarkSkin "
        style="background-image:url(<?php echo site_url().'static/page_front/images/fondo/fondo_tablero.jpg';?>)" data-parallax="0.8"
        data-parallax-offset="0">
        <div class="bt_bb_port port">
          <div class="bt_bb_cell">
            <div class="bt_bb_cell_inner">
              <div class="bt_bb_row">
                <div class="bt_bb_column">
                  <div class="bt_bb_column_content">
                    <header class="bt_bb_headline bt_bb_size_large bt_bb_superheadline bt_bb_subheadline">
                        <h1>
                            <span class="bt_bb_headline_content">
                                <span>Contacto</span>
                            </span>
                        </h1>
                      <div class="bt_bb_headline_subheadline">
                        ¿Quieres ser parte de la liga de basketball de surco? No dudes en contactar con nosotros para obtener más información.
                      </div>
                    </header>
                  </div>
                  <!-- /rowItemContent -->
                </div>
                <!-- /rowItem -->
              </div>
              <!-- /boldRow -->
            </div>
            <!-- boldCellInner -->
          </div>
          <!-- boldCell -->
        </div>
        <!-- port -->
      </section>
      <div class="btContentHolder">

        <div class="btContent">
          <div class="bt_bb_wrapper">
            <section id="bt_bb_section5bd8ae8d21b83" class="bt_bb_section bt_bb_top_spacing_large bt_bb_bottom_spacing_large bt_bb_layout_boxed_1200 bt_bb_vertical_align_top">
              <div class="bt_bb_port">
                <div class="bt_bb_cell">
                  <div class="bt_bb_cell_inner">
                    <div class="bt_bb_row">
                      <div class="bt_bb_column col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal"
                        data-width="6">
                        <div class="bt_bb_column_content">
                          <div class="bt_bb_text">
                            <div role="form" class="wpcf7" id="wpcf7-f1518-p28-o1" lang="en-US" dir="ltr">
                              <div class="screen-reader-response"></div>
                              <form method="post" class="wpcf7-form" action="javascript:void(0);" onsubmit="send_messages();" enctype="multipart/form-data">
                                <div style="display: none;">
                                </div>
                                <p>
                                    <label> Nombres (*)<br />
                                        <span class="wpcf7-form-control-wrap your-name">
                                        <input type="text" name="name" id="name" onkeyup="fade_name(this.value);" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" /></span> 
                                        <span id="message_name" class="field-validation-error" style="display:none;">El nombre es requerido</span>
                                    </label>
                                </p>
                                <p>
                                    <label> E-mail (*)<br />
                                        <span class="wpcf7-form-control-wrap your-email">
                                            <input type="email" name="email" id="email" onkeyup="fade_email(this.value);" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"/>
                                            <span id="message_email" class="field-validation-error" style="display:none;">El email es requerido</span>
                                        </span> 
                                    </label>
                                </p>
                                <p>
                                    <label> Asunto (*)<br />
                                        <span class="wpcf7-form-control-wrap your-subject">
                                            <input type="text" name="asunto" id="asunto" onkeyup="fade_asunto(this.value);" size="40" class="wpcf7-form-control wpcf7-text"/>
                                            <span id="message_asunto" class="field-validation-error" style="display:none;">El asunto es requerido</span>
                                        </span> 
                                    </label>
                                </p>
                                <p>
                                    <label> Mensaje (*)<br />
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea name="comments" id="comments" onkeyup="fade_comments(this.value);" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
                                        <span id="message_comments" class="field-validation-error" style="display:none;">El mensaje es requerido</span>
                                    </span> 
                                    </label>
                                </p>
                                <div class="g-recaptcha" data-sitekey="6LfyrngUAAAAAKwjII5fDYGUB4dF0sP_cmp3T5Ej"></div>
                                <p>
                                    <span id="message_capcha" class="field-validation-error" style="display:none;">Captcha no verificado</span>
                                </p>
                                <p>
                                    <button type="submit" class="wpcf7-form-control wpcf7-submit">Enviar</button>
                                </p>
                                <div id="messages" class="alert alert-success" style="text-align: center; display: none;">El mensaje fue enviado correctamente.</div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="bt_bb_column col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_padding_normal" data-width="6">
                        <div class="bt_bb_column_content">
                          <div class="bt_bb_image bt_bb_shape_square bt_bb_align_inherit bt_bb_hover_style_simple bt_bb_content_display_always bt_bb_content_align_middle"><span><img src="http://oxigeno.bold-themes.com/basketball/wp-content/uploads/sites/6/2017/11/home_inner_03.jpg" alt="http://oxigeno.bold-themes.com/basketball/wp-content/uploads/sites/6/2017/11/home_inner_03.jpg"></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section id="bt_bb_section5bd8ae8d23974" class="bt_bb_section bt_bb_top_spacing_large bt_bb_bottom_spacing_medium bt_bb_color_scheme_2 bt_bb_layout_boxed_1200 bt_bb_vertical_align_top">
              <div class="bt_bb_port">
                <div class="bt_bb_cell">
                  <div class="bt_bb_cell_inner">
                    <div class="bt_bb_row">
                      <div class="bt_bb_column col-md-3 col-sm-6 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal"
                        data-width="4">
                        <div class="bt_bb_column_content">
                          <div class="bt_bb_service bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_size_large bt_bb_shape_circle bt_bb_align_inherit">
                            <a title="Coliseo" class="bt_bb_icon_holder"> <i class="fa fa-map" aria-hidden="true"></i></a>
                            <div class="bt_bb_service_content">
                              <div class="bt_bb_service_content_title">
                                  <a>Coliseo</a>
                              </div>
                              <div class="bt_bb_service_content_text">Av. Angamos Este 2689, San Borja<br /> Coliseo Eduardo Dibós</div>
                            </div>
                          </div>
                          <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                        </div>
                      </div>
                      <div class="bt_bb_column col-md-3 col-sm-6 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal" data-width="4">
                        <div class="bt_bb_column_content">
                          <div class="bt_bb_service bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_size_large bt_bb_shape_circle bt_bb_align_inherit">
                            <a title="Escríbenos" class="bt_bb_icon_holder"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a>
                            <div class="bt_bb_service_content">
                              <div class="bt_bb_service_content_title">
                                  <a>Escríbenos</a>
                              </div>
                              <div class="bt_bb_service_content_text">
                                  equipos@ligabasketdesurco.com<br /> info@ligabasketdesurco.com
                              </div>
                            </div>
                          </div>
                          <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                        </div>
                      </div>
                      <div class="bt_bb_column col-md-3 col-sm-6 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal" data-width="4">
                        <div class="bt_bb_column_content">
                          <div class="bt_bb_service bt_bb_color_scheme_6 bt_bb_style_filled bt_bb_size_large bt_bb_shape_circle bt_bb_align_inherit">
                            <a title="Llámenos" class="bt_bb_icon_holder"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            <div class="bt_bb_service_content">
                              <div class="bt_bb_service_content_title"><a>Llámenos</a></div>
                              <div class="bt_bb_service_content_text">+ 51 999 999 999<br /> + 51 999 999 999</div>
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
          </div>
        </div>
        <!-- /boldthemes_content -->

      </div>
      <!-- /contentHolder -->
    </div>
    <!-- /contentWrap -->
  <!-- /START FOOTER -->
  <?php $this->load->view("footer");?>
  <!-- /END Footer -->
  </div>
  <!-- /pageWrap -->
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="<?php echo site_url().'static/page_front/js/contact.js';?>"></script>
  <script src="<?php echo site_url().'static/page_front/js/jquery-3.2.1.min.js';?>"></script>
  <script  src='<?php echo site_url().'static/page_front/js/comment-reply.min.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/scripts.js?ver=5.0.3';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/fancySelect.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/header.misc.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/misc.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/hide.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/wp-embed.min.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/googlemaps-scrollprevent.min.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/bt_bb_elements.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/instafeed.min.js?ver=4.9.8';?>'></script>
</body>
</html>