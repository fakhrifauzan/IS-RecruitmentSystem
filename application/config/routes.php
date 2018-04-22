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
$route['default_controller'] = 'landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Auth
$route['auth'] = 'Auth/index';
$route['login'] = 'Auth/login';
$route['logout'] = 'Auth/logout';

//PUBLIC 
$route['vacancy/(:any)'] = 'landing/show/$1';
$route['vacancy/(:any)/submit'] = 'submission/create/$1';
$route['submission/submit'] = 'submission/store';
$route['applicants/(:any)/profile'] = 'submission/profile/$1';

//APPLICANTS
$route['applicants'] = 'akun/dashboard';
$route['applicants/dashboard'] = 'akun/dashboard';

//EMPLOYEE
$route['employee'] = 'akun/dashboard';
$route['employee/dashboard'] = 'akun/dashboard';
$route['employee/submission'] = 'employee/submission/index';
$route['employee/submission/(:any)'] = 'employee/submission/show/$1';
$route['employee/submission/(:any)/setVerified'] = 'employee/submission/setVerified/$1';
$route['employee/submission/(:any)/setInReview'] = 'employee/submission/setInReview/$1';
$route['employee/submission/(:any)/setInterview'] = 'employee/submission/setInterview/$1';

//MANAGER
$route['manager'] = 'akun/dashboard';
$route['manager/dashboard'] = 'akun/dashboard';
$route['manager/submission'] = 'manager/submission/index';
$route['manager/submission/(:any)'] = 'manager/submission/show/$1';
$route['manager/submission/(:any)/setOffer'] = 'manager/submission/setOffer/$1';
$route['manager/vacancy'] = 'manager/vacancy/index';
$route['manager/vacancy/create'] = 'manager/vacancy/create';
$route['manager/vacancy/store'] = 'manager/vacancy/store';
$route['manager/vacancy/update'] = 'manager/vacancy/update';
$route['manager/vacancy/(:any)/edit'] = 'manager/vacancy/edit/$1';
$route['manager/vacancy/(:any)/delete'] = 'manager/vacancy/destroy/$1';
$route['manager/vacancy/(:any)/changeStatus'] = 'manager/vacancy/changeStatus/$1';
$route['manager/vacancy/(:any)'] = 'manager/vacancy/show/$1';

//EXECUTIVE
$route['executive'] = 'akun/dashboard';
$route['executive/dashboard'] = 'akun/dashboard';
$route['executive/charts'] = 'executive/submission/index';

//AJAX API
$route['ajax/dataJagung'] = 'ajaxapi/getdatajagung';