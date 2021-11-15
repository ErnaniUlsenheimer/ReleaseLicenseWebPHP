<?php 
session_start();
require_once("vendor/autoload.php");
use \Slim\Slim;
use Percolore\PageAdmin;
use Percolore\Page;
use Percolore\Model\Recurso;
use Percolore\Model\Empresa;
use Percolore\Model\LogLicense;
use Percolore\Model\Security;

$app = new Slim();

$app->config('debug', true);
require_once("site.php");

require_once("reguserController.php");
require_once("reportController.php");
require_once("licenseController.php");

$app->run();

 ?>