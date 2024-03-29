<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'CUser/home';
$route['home'] = 'CUser/home';
$route['contact'] = 'CUser/contact';
$route['register'] = 'CUser/register';
$route['action_login'] = 'CUser/action_login';
$route['action_register'] = 'CUser/register';
$route['login'] = 'CUser/action_login';
$route['logout'] = 'CUser/logout';
$route['dashboard'] = 'CUser/dashboard';
$route['contribute'] = 'CUser/contribute';
$route['add-campaign'] = 'CUser/add_campaign';
$route['add-gift'] = 'CUser/add_gift';
$route['add-donasi'] = 'CUser/add_donasi';
$route['save-ticket-transaction'] = 'CUser/save_ticket_transaction';

$route['admin'] = 'CAdmin/login';
$route['action_login_admin'] = 'CAdmin/action_login';

$route['404_override'] = 'controllererror';
$route['translate_uri_dashes'] = FALSE;
