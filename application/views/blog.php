<!DOCTYPE html>
<html class="no-js" lang="es">
<?php $this->load->view("head");?>
<body class="blog woocommerce-no-js btHasCrest bt_header_headline_Light_alternate btHasAltLogo btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btLightSkin btBelowMenu btNoDashInSidebar noBodyPreloader btSoftRoundedButtons btTransparentLightHeader btWithSidebar btSidebarRight ">
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
                                <span>Blog</span>
                            </span>
                        </h1>
                      <div class="bt_bb_headline_subheadline">Mantente conectado de todas las actividades y noticias que suceden en la liga.</div>
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
        <?php if(count($blog) > 0){ ?>
        <div class="btContent">
          <?php  foreach ($blog as $value) { 
              $slug = convert_slug($value->title);
              ?>
          <article class="btPostSingleItemStandard btPostListStandard gutter btArticleListItem animate bt_bb_animation_fade_in bt_bb_animation_move_up post-282 post type-post status-publish format-standard has-post-thumbnail hentry category-basketball category-coaches">
            <div class="port">
              <div class="btArticleContentHolder">
                <div class="btArticleMedia ">
                  <div class="btMediaBox">
                    <div class="bt_bb_slider bt_bb_height_auto bt_bb_show_dots_bottom">
                      <div class="slick-slider" data-slick='{ "lazyLoad": "progressive", "cssEase": "ease-out", "speed": "300", "adaptiveHeight": true, "dots": true, "prevArrow": "&lt;button type=\"button\" class=\"slick-prev\"&gt;", "nextArrow": "&lt;button type=\"button\" class=\"slick-next\"&gt;","autoplay": true, "autoplaySpeed": 3000}'>
                        <div class="bt_bb_slider_item">
                            <img src='<?php echo site_url()."static/cms/images/blog/$value->img";?>' alt="<?php echo $value->title;?>">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /btArticleMedia -->
                <div class="btArticleHeadline">
                  <header class="bt_bb_headline bt_bb_size_normal bt_bb_superheadline bt_bb_subheadline">
                    <h2><span class="bt_bb_headline_superheadline">
                            <span class="btArticleCategories">
                                <a href="#" class="btArticleCategory basketball">Basketball</a>
                                <a href="#" class="btArticleCategory coaches">Liga</a></span></span>
                      <span class="bt_bb_headline_content">
                          <span>
                              <a href='<?php echo site_url()."blog/$value->slug/$slug";?>' title="<?php echo $value->title;?>"><?php echo $value->title;?></a>
                          </span>
                      </span>
                    </h2>
                    <div class="bt_bb_headline_subheadline">
                        <span class="btArticleDate"><?php echo formato_fecha($value->date);?></span>
                        <a href="#" class="btArticleComments">0</a></div>
                  </header>
                </div>
                <!-- /btArticleHeadline -->
                <div class="btArticleContent">
                  <p><?php echo $value->summary;?></p>
                </div>
                <div class="btArticleShareEtc">
                    <div class="btReadMoreColumn">
                        <div class="bt_bb_button bt_bb_icon_position_right bt_bb_style_outline bt_bb_size_small">
                            <a href="<?php echo site_url()."blog/$value->slug/$slug";?>" class="bt_bb_link" title="CONTINÚE LEYENDO">
                                <span class="bt_bb_button_text">CONTINÚE LEYENDO</span>
                                <span  data-ico-fa="&#xf061;" class="bt_bb_icon_holder"></span>
                            </a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </article>
          <?php  } ?>  
          <div class="btPagination boldSection gutter ">
            <div class="port">
              <div class="paging onRight">
                <p class="">
                    <a href="#">Posts Anteriores &nbsp;<span  data-ico-fa="&#xf061;" class="bt_bb_icon_holder"></span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
       <?php }else{ ?>
    

        <div class="btContent">
            <section class="btNoSearchResults bt_bb_section bt_bb_top_spacing_large bt_bb_bottom_spacing_large gutter">
		<div class="bt_bb_port">
			<div class="bt_bb_cell">
				<div class="bt_bb_cell_inner">
					<div class="bt_bb_row" data-structure="12">
						<div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal animated" data-width="12">
							<div class="bt_bb_column_content">
								<header class="bt_bb_headline bt_bb_size_medium bt_bb_subheadline">
                                                                    <h2>
                                                                        <span class="bt_bb_headline_content">
                                                                            <span>
                                                                                <a href="<?php echo site_url().'pages';?>" title="Lo sentimos, no hay resultados para esta categoría">Lo sentimos, no hay resultados para esta categoría</a>
                                                                            </span>
                                                                        </span>
                                                                    </h2>
                                                                </header>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
            </section>
	</div>
          <?php } ?>      
        <!-- /boldthemes_content -->
        <aside class="btSidebar">
          <div class="btBox widget_search">
            <div class="btSearch">
              <div class="bt_bb_icon">
                <a href="#" target="_self" data-ico-fa="&#xf002;" class="bt_bb_icon_holder"></a>
              </div>
              <div class="btSearchInner gutter" role="search">
                <div class="btSearchInnerContent port">
                  <form action="#" method="get">
                      <input type="text" name="s" placeholder="Buscar por..." class="untouched">
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
      <!-- /contentHolder -->
    </div>
    <!-- /contentWrap -->
    <!-- /START FOOTER -->
    <?php $this->load->view("footer");?>
    <!-- /END FOOTER -->
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