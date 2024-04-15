<?php
ob_start();
date_default_timezone_set('Asia/Manila');
$webroot = "C:xampp/htdocs/admin/include/init.php";
define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', $webroot.DS.'wedding-management-php'.DS.'admin');
define('INCLUDES_PATH', SITE_ROOT.DS.'include');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\Helper.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\config.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\database.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\db_object.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\Session.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\Accounts.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\Account_Details.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\Booking.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\Guest.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\Categories.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\Features.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\EventWedding.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\Gallery.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\Users.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\Events.php');
require_once('C:\xampp\htdocs\Wedding-Management-PHP\admin\include\Liquidation.php');
?>