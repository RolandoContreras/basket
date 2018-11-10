<?php 
    //INIT VAR
    $active_home = "";
    $active_about = "";
    $active_games = "";
    $active_pages = "";
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
        case 'games':
            $active_games = "current-menu-item";
            break;
        case 'pages':
            $active_pages = "current-menu-item";
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
        <a href="#">Torneos</a>
            <ul class="sub-menu">
              <?php foreach ($cup_category as $value) { ?>
                    <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                        <a href="<?php echo site_url().'torneo/'.$value->slug;?>"><?php echo strtoupper($value->name);?></a>
                    </li>
             <?php } ?>   
            </ul>
      </li>
      <li id="menu-item-1525" class="<?php echo $active_pages;?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1525">
        <a href="<?php echo site_url().'pages';?>">Páginas Amarillas Deportivas</a>
            <ul class="sub-menu">
             <?php foreach ($paginas_amarillas as $value) { ?>
                    <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                        <a href="<?php echo site_url().'pages/'.$value->slug;?>"><?php echo strtoupper($value->name);?></a>
                    </li>
             <?php } ?>   
            </ul>
      </li>
      <li id="menu-item-1526" class="<?php echo $active_blog;?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1526">
          <a href="<?php echo site_url().'blog';?>">Blog</a>
            <ul class="sub-menu">
                <?php foreach ($blog_category as $value) { ?>
                    <li id="menu-item-1559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1559">
                        <a href="<?php echo site_url().'blog/'.$value->slug;?>"><?php echo strtoupper($value->name);?></a>
                    </li>
             <?php } ?>   
            </ul>
      </li>
      <li id="menu-item-1527" class="<?php echo $active_contact;?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1527">
          <a href="<?php echo site_url().'contact';?>">Contacto</a>
      </li>
    </ul>
  </nav>