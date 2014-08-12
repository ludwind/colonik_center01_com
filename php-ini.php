<?php
/*
Plugin Name: PHP Settings
Plugin URI: http://wpsecurity.net
Description: Attempts to set the max upload size and script timeout settings in the server's PHP config
Author: Mark - WPSecurity.net
Version: 1.0
Author URI: http://mpsecurity.net
*/
ini_set('upload_max_size','1000M');
ini_set('post_max_size','995M');
ini_set('max_execution_time,'300');
?>