<?php session_start();//connexion bdd	
		
	try
	{
		$bdd = new PDO("mysql:host=localhost;dbname=rs;charset=utf8","root","");
	
	}
		catch(Exeption $e)
	{
		die("erreur de connection");
	}
	?>
<?php

define('WEBROOT',dirname(__FILE__));
define('BASE_URL',dirname($_SERVER['SCRIPT_NAME']));
define('ROOT',dirname(WEBROOT));
define('DS',DIRECTORY_SEPARATOR);
define('CORE',ROOT.DS.'core');



	if (!isset($_GET['page']) || $_GET['page'] == "")
	{
		$page = "inscription";
	}
	else
	{
		if (!file_exists("contenu/".$_GET['page'].".php"))
		{
			$page = "error";
		}
		else
        {
            $page=$_GET['page'];
        }
    }

ob_start();
include "contenu/".$page.".php";
$contenu = ob_get_contents();
ob_end_clean();	

require 'layout.php';


?>