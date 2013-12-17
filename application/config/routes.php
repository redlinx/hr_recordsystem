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


<<<<<<< HEAD
$route['default_controller']	= "upload";
=======
$route['default_controller']	= "login";

>>>>>>> aa66e310187b22d139dfd3bcbb82dde11624fbb9


$route['home'] 					= "home";
$route['home/add'] 				= 'home/register';
$route['home/management']		= 'home/management';
$route['home/view/(:any)'] 		= '/home/view/$1';
$route['home/delete/(:any)'] 	= '/home/delete/$1';
$route['404_override'] 			= '';
<<<<<<< HEAD

$route['home/update/(:any)']    ='/home/update/$1';
$route['default_controller'] 	= "upload";
$route['404_override'] = '';

=======
>>>>>>> aa66e310187b22d139dfd3bcbb82dde11624fbb9


