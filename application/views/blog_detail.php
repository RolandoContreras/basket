<!DOCTYPE html>
<html class="no-js" lang="es">
<?php $this->load->view("head");?>
<body class="post-template-default single single-post postid-283 single-format-standard woocommerce-no-js btHasCrest bt_header_headline_Light_alternate btHasAltLogo btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btLightSkin btBelowMenu btNoDashInSidebar noBodyPreloader btSoftRoundedButtons btTransparentLightHeader btWithSidebar btSidebarRight ">
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
        style="background-image:url(<?php echo site_url().'static/page_front/images/fondo/fondo_tablero.jpg';?>)" data-parallax="0.8" data-parallax-offset="0">
        <div class="bt_bb_port port">
          <div class="bt_bb_cell">
            <div class="bt_bb_cell_inner">
              <div class="bt_bb_row">
                <div class="bt_bb_column">
                  <div class="bt_bb_column_content">
                    <header class="bt_bb_headline bt_bb_size_large bt_bb_superheadline bt_bb_subheadline">
                      <h1>
                            <span class="bt_bb_headline_superheadline">
                                <span class="btBreadCrumbs">
                                    <span class="btArticleCategories">
                                        <a href="#" class="btArticleCategory awards">Awards</a>
                                        <a href="#" class="btArticleCategory basketball">Basketball</a>
                                    </span>
                                </span>
                            </span>
                          <span class="bt_bb_headline_content">
                              <span><?php echo $blog->title;?></span>
                          </span>
                      </h1>
                      <div class="bt_bb_headline_subheadline">
                          <span class="btArticleDate"><?php echo formato_fecha($blog->date);?></span>
                          <a class="btArticleComments">0</a>
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
          <article class="btPostSingleItemStandard gutter noPhoto post-283 post type-post status-publish format-standard has-post-thumbnail hentry category-awards category-basketball">
            <div class="port">
              <div class="btPostContentHolder">
                <div class="btArticleContent ">
                  <div class="bt_bb_wrapper">
                  <section id="bt_bb_section5be8cfd32a9cd" class="bt_bb_section bt_bb_top_spacing_medium bt_bb_bottom_spacing_medium bt_bb_layout_boxed_1200 bt_bb_vertical_align_top">
                    <div class="bt_bb_port">
                      <div class="bt_bb_cell">
                        <div class="bt_bb_cell_inner">
                          <div class="bt_bb_row bt_bb_column_gap_40">
                            <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal" data-width="12">
                              <div class="bt_bb_column_content">
                                <div class="bt_bb_separator bt_bb_bottom_spacing_small bt_bb_border_style_none"></div>
                                <?php 
                                if($blog->video != ""){ ?>
                                    <div class="bt_bb_video bt_bb_disable_controls_yes">
                                        <div class="bt-video-container">
                                          <div style="width: 100%;" class="wp-video">
                                              <video class="wp-video-shortcode" id="video-283-1" width="640" height="360" preload="metadata" controls="controls">
                                                  <source type="video/youtube" src="<?php echo $blog->video;?>"/>
                                              </video>
                                          </div>
                                        </div>
                                      </div>
                                <?php  } ?>
                                <div class="bt_bb_separator bt_bb_bottom_spacing_small bt_bb_border_style_none"></div>
                                <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                                <div class="bt_bb_text">
                                  <p><?php echo $blog->description;?></p>
                                </div>
                                <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                                <div class="bt_bb_image bt_bb_shape_square bt_bb_align_inherit bt_bb_hover_style_simple bt_bb_content_display_always bt_bb_content_align_middle">
                                    <span>
                                        <img src='<?php echo site_url()."static/cms/images/blog/$blog->img";?>' alt="<?php echo $blog->title;?>">
                                    </span>
                                </div>
                                <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                              <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                </section>
              </div>
            </div>
        </div>
      </div>
      </article>
        <!--START  COMMENT-->   
        <section class="gutter btPrevNextNavSection">
            <div class="port">
                <div class="btPrevNextNav">
                    <a class="btPrevNext btPrev">
                        <div class="btPrevNextImage" style="background-image:url('<?php echo site_url().'static/page_front/images/avatar/avatar.jpg';?>');"></div>
                            <div class="btPrevNextItem">
                                <div class="btPrevNextDir">Lima 24/nov 2018</div>
                                <div class="btPrevNextTitle">Rolando Contreras</div>
                                <div class="btPrevNextDir">Oxygen latest basketball camps and schools</div>
                            </div>
                    </a>
                </div>
            </div>
        </section>    
      <!--END  COMMENT-->
      <!--START FORM COMMENT-->      
      <section class="btComments gutter">
        <div class="port">
          <div class="btCommentsContent">
            <div id="comments" class="btCommentsBox">
              <div id="respond" class="comment-respond">
                <h3 id="reply-title" class="comment-reply-title">Deja un comentario
                </h3>
                        <form method="post" action="javascript:void(0);" onsubmit="send_messages();" enctype="multipart/form-data" class="comment-form">
                          <p class="comment-notes">Su dirección de correo electrónico no será publicado. Obligatorio los campos marcados *</p>
                          <div class="pcItem">
                              <label for="comment">Comentario <span class="required">*</span></label>
                                <p>
                                    <textarea id="comment" name="comment" cols="30" rows="8" onkeyup="fade_comments(this.value);"></textarea>
                                </p>
                                <span id="message_comment" class="field-validation-error" style="display:none;">El comentario es requerido</span>
                          </div>
                          <div class="pcItem">
                                <label for="author">Nombre *</label>
                                <p>
                                    <input id="name" name="name" onkeyup="fade_name(this.value);" type="text"/>
                                    <span id="message_name" class="field-validation-error" style="display:none;">El nombre es requerido</span>
                                </p>
                          </div>
                          <div class="pcItem">
                                <label for="email">Email *</label>
                                <p>
                                    <input id="email" name="email" onkeyup="fade_email(this.value);" type="text"/>
                                    <span id="message_email" class="field-validation-error" style="display:none;">El email es requerido</span>
                                </p>
                          </div>
                          <div class="pcItem">
                                    <div class="g-recaptcha" data-sitekey="6LfyrngUAAAAAKwjII5fDYGUB4dF0sP_cmp3T5Ej"></div>
                                    <span id="message_capcha" class="field-validation-error" style="display:none;">Captcha no verificado</span>
                          </div>
                          <p class="form-submit">
                            <div class="pcItem">
                              <p>
                                  <button type="submit" class="btCommentSubmit" data-ico-fa="&#xf1d8;">
                                      <span class="btnInnerText">Enviar Comentario</span>
                                  </button>
                              </p>
                            </div>
                          </p>
                        </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--END FORM COMMENT-->      
    </div>
    <aside class="btSidebar">
      <div class="btBox widget_search">
        <div class="btSearch">
          <div class="bt_bb_icon">
            <a href="#" target="_self" data-ico-fa="&#xf002;" class="bt_bb_icon_holder"></a>
          </div>
          <div class="btSearchInner gutter" role="search">
            <div class="btSearchInnerContent port">
              <form action="#" method="get">
                  <input type="text" name="s" placeholder="Buscar..." class="untouched">
                <button type="submit" data-icon="&#xf105;"></button>
              </form>
              <div class="btSearchInnerClose">
                <div class="bt_bb_icon">
                  <a href="#" target="_self" data-ico-fa="&#xf00d;" class="bt_bb_icon_holder"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btBox widget_bt_bb_recent_posts">
        <h4><span>Últimos Posts</span></h4>
        <div class="btImageTextWidgetWraper">
          <ul>
              <?php 
              foreach ($blog_last as $value) { 
                  $slug = convert_slug($value->title);?>
                <li>
                  <div class="btImageTextWidget">
                    <div class="btImageTextWidgetImage">
                      <a href="#">
                          <img width="160" height="160" src='<?php echo site_url()."static/cms/images/blog/$value->img";?>' class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="<?php echo site_url()."static/cms/images/blog/$value->img";?> 160w, <?php echo site_url()."static/cms/images/blog/$value->img";?> 180w, <?php echo site_url()."static/cms/images/blog/$value->img";?> 300w, <?php echo site_url()."static/cms/images/blog/$value->img";?> 600w, <?php echo site_url()."static/cms/images/blog/$value->img";?> 320w, <?php echo site_url()."static/cms/images/blog/$value->img";?> 640w, <?php echo site_url()."static/cms/images/blog/$value->img";?> 1280w" sizes="(max-width: 160px) 100vw, 160px" /></a>
                    </div>
                    <div class="btImageTextWidgetText">
                      <header class="bt_bb_headline bt_bb_size_small bt_bb_superheadline">
                          <h4><span class="bt_bb_headline_superheadline"><?php echo formato_fecha($value->date);?></span>
                            <span class="bt_bb_headline_content">
                                <span>
                                    <a href="<?php echo site_url()."blog/$value->slug/$slug";?>" title="<?php echo $value->title;?>"><?php echo $value->title;?></a>
                                </span>
                            </span>
                        </h4>
                      </header>
                    </div>
                  </div>
                </li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <div class="btBox widget_categories">
          <h4><span>Categorías</span></h4>
          <ul>
             <?php 
             foreach ($blog_category as $value) { ?>
                <li class="cat-item cat-item-15">
                    <a href='<?php echo site_url()."blog/$value->slug";?>'><?php echo $value->name;?></a>
                </li>
             <?php } ?>

          </ul>
      </div>
        <div class="btBox widget_categories">
            <h4><span>Tags</span></h4>
            <ul>
                <?php 
                foreach ($tags as $value) { 
                    $tag_slug = convert_slug($value->name);
                    ?>
                    <li class="cat-item cat-item-15">
                        <a href='#'><?php echo $value->name;?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </aside>
  </div>
  </div>
  <!-- /START FOOTER -->
  <?php $this->load->view("footer");?>
  <!-- /END Footer -->
  </div>
  <!-- /pageWrap -->
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="<?php echo site_url().'static/page_front/js/blog_detail.js';?>"></script>
  <link rel='stylesheet' id='mediaelement-css' href='<?php echo site_url().'static/page_front/css/mediaelementplayer-legacy.min.css?ver=4.2.6-78496d1';?>' type='text/css' media='all' />
  <link rel='stylesheet' id='wp-mediaelement-css' href='<?php echo site_url().'static/page_front/css/wp-mediaelement.min.css?ver=4.9.8';?>' type='text/css' media='all' />
  <script src='<?php echo site_url().'static/page_front/js/comment-reply.min.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/scripts.js?ver=5.0.3';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/fancySelect.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/header.misc.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/misc.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/hide.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/wp-embed.min.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/bt_bb_elements.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.6-78496d1';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/mediaelement/mediaelement-migrate.min.js?ver=4.9.8';?>'></script>
  <script src='<?php echo site_url().'static/page_front/js/mediaelement/video_shortcode.js?ver=4.9.8';?>'></script>
</body>
</html>