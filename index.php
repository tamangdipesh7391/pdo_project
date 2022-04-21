
<?php
require_once ("config/config.php");
require_once ("config/db.php");



$url=isset($_GET['url']) ? $_GET['url'] :'home';

$url=str_replace('.php', '', $url);

$url.='.php';

$pagePath=root('pages/'.$url);

require_once root('includes/header.php');
 

if(file_exists($pagePath) && is_file($pagePath)){ 
	 
	require_once $pagePath;

	
}else {
	
	echo "<h1>Page not found 404</h1>";
}
require_once root('includes/footer.php');
