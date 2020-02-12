<?php
ini_set('error_reporting', E_ALL);
	
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	$PARAM_hote='localhost'; 
    $PARAM_port='3306';
    $PARAM_nom_bd='contact'; 
    $PARAM_utilisateur='root'; 
    $PARAM_mot_passe=''; 
    try
    {
        $db = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
    }
    
    catch(Exception $e)
    {
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
    }

	$error = "";
	$error404 = "";
	$page = "home";
	$inactive = 600; 

// spl_autoload_register(function($class) {
//     include 'models/' . $class . '.class.php';
// });
session_start();
$access = ["home","crea_contact"];
$accessUser = ["home","logout"];
$accessAdmin = ["home","login","accueil","logout","crea_user","compte"];
if(isset($_SESSION["admin"]) && $_SESSION['admin'] == 1)
{
    if(isset($_GET["page"]) && in_array($_GET["page"], $accessAdmin))
    {
        $page = $_GET["page"];
    }
    else{
        $page='accueil';
    }
}	
else if(isset($_SESSION['user']))
{
    if(isset($_GET["page"]) && in_array($_GET["page"], $accessUser))
    {
        $page = $_GET["page"];
    }
}
else
{
    if((isset($_GET["page"]) && in_array($_GET["page"], $access)) || $page != 'home')
    {
        $page = $_GET["page"];
    } 
}


// 	$traitementList = ["login"=>"user","accueil"=>"file","logout"=>"user","crea_user"=>"user","compte"=>"user"];

	
// 	if(isset($traitementList[$page]))
// 	{
// 		require("apps/traitement_".$traitementList[$page].".php");
// 	}


	require'apps/skel.php'; 
	

	
?>