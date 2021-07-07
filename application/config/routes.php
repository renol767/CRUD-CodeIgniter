<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'karyawan';

$route['karyawan'] = 'karyawan/index';
$route['karyawan/create'] = 'karyawan/create';
$route['karyawan/edit'] = 'karyawan/edit';
$route['karyawan/search'] = 'karyawan/search';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



