<?php  

use \Percolore\PageAdmin;
use \Percolore\Model\Recurso;
use \Percolore\Model\Empresa;
use \Percolore\Model\Usuario;
use \Percolore\Model\LogLicense;


$app->get('/Activation', function() {

	header("Location: /Activation/Home");
    exit;
	 
});
$app->get('/', function() {
//	$loglic = LogLicense::getLogLicense(1, '2021-09-01 00:00:00', '2021-09-09 00:00:00');
//	var_dump($loglic);
//  $md5 = md5('d25a725fe71b', false);    
//	print_r($md5);

	header("Location: /Activation");
    exit;

});

$app->get('/Activation/Home', function() {
	 $page = new PageAdmin([
        "header"=>true,
        "footer"=>true
    ]);
    $page->setTpl("index");       
	 
});


$app->get('/Activation/User', function() {
	 $page = new PageAdmin([
        "header"=>true,
        "footer"=>true
    ]);
    $page->setTpl("reguser");       
	 
});


$app->get('/Activation/Report', function() {
	 $page = new PageAdmin([
        "header"=>true,
        "footer"=>true
    ]);
    $page->setTpl("report");       
	 
});

$app->get('/Activation/License', function() {
     $page = new PageAdmin([
        "header"=>true,
        "footer"=>true
    ]);
    $page->setTpl("license");       
     
});




?>