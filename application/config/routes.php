<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Auth';
$route['register'] = 'Auth/register';
$route['logout'] = 'Auth/logout';
$route['admin/dashboard'] = 'admin/Dashboard';
$route['admin/profile'] = 'admin/Profile';
$route['admin/profile/edit'] = 'admin/Profile/editProfile';
$route['admin/profile/change_password'] = 'admin/Profile/changePassword';
$route['admin/products'] = 'admin/Product';
$route['admin/product/create'] = 'admin/Product/addProduct';
$route['admin/product/edit/(:any)'] = 'admin/Product/editProduct/$1';
$route['admin/product/delete/(:any)'] = 'admin/Product/deleteProduct/$1';
$route['admin/product/glb/(:any)'] = 'admin/Product/addGlbToProduct/$1';
$route['admin/transaction'] = 'admin/Transaction';
$route['admin/transaction/packed'] = 'admin/Transaction/getAllOrderPacked';
$route['admin/transaction/shipped'] = 'admin/Transaction/getAllOrderShipped';
$route['admin/transaction/received'] = 'admin/Transaction/getAllOrderReceived';
$route['admin/transaction/(:any)'] = 'admin/Transaction/getTransactionDetail/$1';
$route['admin/transaction/packed/(:any)'] = 'admin/Transaction/changeStatusPacked/$1';
$route['admin/transaction/shipped/(:any)'] = 'admin/Transaction/changeStatusShipped/$1';
$route['products'] = 'Product';
$route['products/(:num)'] = 'Product/$1';
$route['product/(:any)'] = 'Product/getDetailProduct/$1';
$route['product/ar/(:any)'] = 'Product/showARProduct/$1';
$route['products/index/(:num)'] = 'Product/index/$1';
$route['products/(:num)'] = 'Product/index/';
$route['cart'] = 'Cart';
$route['cart/add'] = 'Cart/addItemCart';
$route['cart/edit/(:any)'] = 'Cart/editQtyItemCart/$1';
$route['cart/delete/(:any)'] = 'Cart/deleteItemCart/$1';
$route['checkout'] = 'Checkout';
$route['transaction/send'] = 'Transaction/addTransaction';
$route['confirmation'] = 'Confirmation';
$route['dashboard'] = 'Dashboard';
$route['orders'] = 'Order';
$route['orders/detail/(:any)'] = 'Order/getDetailOrder/$1';
$route['order/accept/(:any)'] = 'Order/changeStatusAccept/$1';
$route['profile'] = 'Profile';
$route['profile/edit'] = 'Profile/editProfile';
$route['profile/change_password'] = 'Profile/changePassword';
