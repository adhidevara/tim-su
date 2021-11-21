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
|	https://codeigniter.com/userguide3/general/routing.html
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
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] 		= 'C_login';
$route['login']				 		= 'C_login/login';
$route['register']			 		= 'C_login/regist_tim';

$route['dashboard-tim']	     		= 'C_tim';
$route['tasks']			     		= 'C_tim/vTasks';
$route['progress']			 		= 'C_tim/vProgress';
$route['create-progress']	 		= 'C_tim/vCreateProgress';
$route['discussion']		 		= 'C_tim/vDiscussion';
$route['detail-discussion/(:any)']	= 'C_tim/vDetailDiscussion/$1';
$route['materi-news-event']			= 'C_tim/vMNE';

$route['dashboard-mentor']	 		= 'C_mentor';
$route['pick-tim']			 		= 'C_mentor/vPickTims';
$route['review-tasks']			    = 'C_mentor/vTasks';
$route['cek-progress']			 	= 'C_mentor/vProgress';
$route['create-task']	 			= 'C_mentor/vCreateTask';
$route['discussion-mentor']	 		= 'C_mentor/vDiscussion/';
$route['detail-discussion-mentor/(:any)']	= 'C_mentor/vDetailDiscussion/$1';
$route['materi-news-event-mentor']	= 'C_mentor/vMNE';

$route['dashboard-admin']	 		= 'C_admin';
$route['manage-tasks']		 		= 'C_admin/vTasks';
$route['manage-user']		 		= 'C_admin/vUsers';
$route['manage-progress']			= 'C_admin/vProgress';
$route['manage-discussion']		 	= 'C_admin/vDiscussion';
$route['manage-detail-discussion/(:any)']		= 'C_admin/vDetailDiscussion/$1';
$route['manage-detail-discussionnon/(:any)']	= 'C_admin/vDetailDiscussionNon/$1';
$route['manage-materi-news-event-mentor']		= 'C_admin/vMNE';

$route['404_override'] 				= 'C_login';
$route['translate_uri_dashes'] 		= FALSE;
