<?php
  //作者林友哲版权所有 393562235@qq.com
session_start();
error_reporting(E_ALL);
//ob_implicit_flush(1); SERVER模式下开启
if(!defined('IN_OpenIBC')){
define('IN_OpenIBC', TRUE);
}
include_once('./config/bts_cf_php.php');
include_once('./FucHub/bts_str_fh.php');
include_once('./config/btspd_cf.php');
include_once('./FucHub/bts_bas_fh.php');
include_once('./FucHub/bts_client_fh.php');
if($bts_mysqli_d=='1'){
	include_once('./config/bts_cf_mysqli.php');
	include_once('./FucHub/bts_mysqli_fh.php');
	include_once('./run/mysqli.php');
}
