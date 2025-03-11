<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



//==================================== authorization ====================================
//logout 
$route['logout']                    = 'auth/logout';
//login
$route['proses-login']              = 'auth/login/proses';
//forgot password
$route['forgot-password']           = 'auth/forgotPassword';
$route['proses-forgot-password']    = 'auth/forgotPassword/proses';
//reset password 
$route['reset-password']            = 'auth/resetPassword';
$route['proses-reset-password']     = 'auth/resetPassword/proses';
//register
$route['register']                  = 'auth/register';
$route['proses-register']           = 'auth/register/proses';
//==================================== end authorization ===============================
//==================================== identifikasi ====================================
$route['dashboard']                 = 'dashboard/dashboard';
//data testing
$route['data-testing']              = 'data-testing/dataTesting';
$route['img-original']              = 'data-testing/dataTesting/original';
$route['img-gs']                    = 'data-testing/dataTesting/grayscale';
$route['img-zoom']                  = 'data-testing/dataTesting/zoom';
$route['img-edge']                  = 'data-testing/dataTesting/edge';
$route['img-median-filter']         = 'data-testing/dataTesting/medianfilter';
$route['img-slider']                = 'data-testing/dataTesting/slider';
//data training
$route['data-training']             = 'data-training/dataTraining';
$route['data-training-proses']      = 'data-training/dataTraining/editGambar';     
//==================================== end identifikasi ====================================