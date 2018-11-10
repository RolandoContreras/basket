<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
// example: '/en/about' -> use controller 'about'
$route['default_controller'] = "home";
$route['404_override'] = 'errors/error_404';


$route['(\w{2})/(.*)'] = '$2';
$route['(\w{2})'] = $route['default_controller'];

$route['home'] = 'home';
$route['about'] = 'about';
$route['games'] = 'games';
$route['blog'] = 'blog';

$route['contact'] = 'contact';
$route['contact/send_messages'] = 'contact/send_messages';

$route['home/send_messages'] = 'home/send_messages';

$route['login'] = 'login';
$route['login/validate'] = 'login/validate';

$route['contact/send_messages'] = 'contact/send_messages';

$route['register/afiliate/([0-9a-z_-]+)'] = "register/index/$1";

//MANAGER - DASHBOARD
$route['dashboard'] = "dashboard";
$route['dashboard/validate'] = "dashboard/validate";

$route['dashboard/panel'] = "panel";
$route['dashboard/panel/guardar_btc'] = "panel/guardar_btc";
$route['dashboard/panel/masive_messages'] = "panel/masive_messages";
$route['dashboard/panel/cambiar_status'] = "panel/cambiar_status";
$route['dashboard/panel/cambiar_status_invest'] = "panel/cambiar_status_invest";

$route['dashboard/categorias'] = "d_category";
$route['dashboard/categorias/load'] = "d_category/load";
$route['dashboard/categorias/load/([0-9]+)'] = "d_category/load/$1";
$route['dashboard/categorias/validate'] = "d_category/validate";
$route['dashboard/categorias/delete'] = "d_category/delete";

$route['dashboard/categoria_blog'] = "d_category_blog";
$route['dashboard/categoria_blog/load'] = "d_category_blog/load";
$route['dashboard/categoria_blog/load/([0-9]+)'] = "d_category_blog/load/$1";
$route['dashboard/categoria_blog/validate'] = "d_category_blog/validate";
$route['dashboard/categoria_blog/delete_category'] = "d_category_blog/delete_category";

$route['dashboard/categoria_torneo'] = "d_category_cup";
$route['dashboard/categoria_torneo/load'] = "d_category_cup/load";
$route['dashboard/categoria_torneo/load/([0-9]+)'] = "d_category_cup/load/$1";
$route['dashboard/categoria_torneo/validate'] = "d_category_cup/validate";
$route['dashboard/categoria_torneo/delete_category'] = "d_category_cup/delete_category";

$route['dashboard/empresas'] = "d_company";
$route['dashboard/empresas/load'] = "d_company/load";
$route['dashboard/empresas/load/([0-9]+)'] = "d_company/load/$1";
$route['dashboard/empresas/validate'] = "d_company/validate";
$route['dashboard/empresas/delete'] = "d_company/delete";

$route['dashboard/tags'] = "d_tags";
$route['dashboard/tags/load'] = "d_tags/load";
$route['dashboard/tags/load/([0-9]+)'] = "d_tags/load/$1";
$route['dashboard/tags/validate'] = "d_tags/validate";
$route['dashboard/tags/delete'] = "d_tags/delete";

$route['dashboard/noticias'] = "d_news";
$route['dashboard/noticias/load'] = "d_news/load";
$route['dashboard/noticias/load/([0-9]+)'] = "d_news/load/$1";
$route['dashboard/noticias/validate'] = "d_news/validate";
$route['dashboard/noticias/delete_news'] = "d_news/delete_news";

$route['dashboard/comentarios'] = "d_comments";
$route['dashboard/comentarios/cambiar_status'] = "d_comments/change_status";
$route['dashboard/comentarios/cambiar_status_no'] = "d_comments/change_status_no";

$route['dashboard/usuarios'] = "d_users";
$route['dashboard/usuarios/load'] = "d_users/load";
$route['dashboard/usuarios/load/([0-9]+)'] = "d_users/load/$1";
$route['dashboard/usuarios/validate'] = "d_users/validate";
$route['dashboard/usuarios/delete'] = "d_users/delete";

/* End of file routes.php */
/* Location: ./application/config/routes.php */