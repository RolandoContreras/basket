<?php 
    //INIT VAR
    $active_home = "";
    $active_about = "";
    $active_games = "";
    $active_blog = "";
    $active_contact = "";
    
    $url = explode("/",uri_string());
    $nav = $url[1];
    
    switch ($nav) {
        case 'home':
            $active_home = "current-menu-item";
            break;
        case 'about':
            $active_about = "current-menu-item";
            break;
        case 'games':
            $active_games = "current-menu-item";
            break;
        case 'blog':
            $active_blog = "current-menu-item";
            break;
        case 'contact':
            $active_contact = "current-menu-item";
            break;
        default:
            $active_home = "current-menu-item";
            break;
    }        
?>

<nav>
    <ul id="menu-primary-menu" class="menu">
        <li id="menu-item-1524" class="<?php echo $active_home;?> menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-2  menu-item-152">
            <a href="<?php echo site_url().'home';?>">Inicio</a>
        </li>
      <li id="menu-item-1519" class="<?php echo $active_about;?> menu-item  menu-item-object-page menu-item-has-children menu-item-1519">
          <a href="<?php echo site_url().'about';?>">Acerca</a>
      </li>
      <li id="menu-item-1525" class="<?php echo $active_games;?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1525">
        <a href="<?php echo site_url().'games';?>">Torneos</a>
            <ul class="sub-menu">
              <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                  <a href="<?php echo site_url().'games';?>">Apertura</a>
              </li>
            </ul>
      </li>
      <li id="menu-item-1525" class="<?php echo $active_games;?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1525">
        <a href="<?php echo site_url().'pages';?>">Páginas Amarillas Deportivas</a>
            <ul class="sub-menu">
              <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                  <a href="<?php echo site_url().'pages';?>">Ropa Deportiva</a>
              </li>
              <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                  <a href="<?php echo site_url().'pages';?>">Material Deportivo en general</a>
              </li>
              <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                  <a href="<?php echo site_url().'pages';?>">Pelotas</a>
              </li>
              <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                  <a href="<?php echo site_url().'pages';?>">Clubes</a>
              </li>
              <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                  <a href="<?php echo site_url().'pages';?>">Academias</a>
              </li>
              <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                  <a href="<?php echo site_url().'pages';?>">Banners, Diagramación y Publicidad</a>
              </li>
              <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                  <a href="<?php echo site_url().'pages';?>">Organización de Giras Deportivas</a>
              </li>
              <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                  <a href="<?php echo site_url().'pages';?>">Transporte</a>
              </li>
              <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                  <a href="<?php echo site_url().'pages';?>">Zapatillas</a>
              </li>
              <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                  <a href="<?php echo site_url().'pages';?>">Filmaciones</a>
              </li>
            </ul>
      </li>
      <li id="menu-item-1526" class="<?php echo $active_blog;?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1526">
          <a href="<?php echo site_url().'blog';?>">Blog</a>
            <ul class="sub-menu">
                <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                    <a href="<?php echo site_url().'games';?>">BÁSKET LIGA</a>
                </li>
                <li id="menu-item-1569" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1569">
                    <a href="#">BÁSKET NACIONAL</a>
                </li>
                <li id="menu-item-1569" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1569">
                    <a href="#">BÁSKET SUDAMERICANO</a>
                </li>
                <li id="menu-item-1569" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1569">
                    <a href="#">BÁSKET INTERNACIONAL</a>
                </li>
            </ul>
      </li>
      <li id="menu-item-1527" class="<?php echo $active_contact;?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1527">
          <a href="<?php echo site_url().'contact';?>">Contacto</a>
      </li>
    </ul>
  </nav>