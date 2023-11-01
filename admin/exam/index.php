<?php
require_once("../../include/initialize.php");
if(!isset($_SESSION['ACCOUNT_ID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Quiz"; 
 $header=$view; 
switch ($view) {
	case 'list' :
		$content    = 'list.php';		
		break;

	case 'add' :
		$content    = 'add.php';		
		break;
	case 'grades' :
		$content    = 'viewgrade.php';		
		break;
	case 'addgrade' :
		$content    = 'addgrade.php';		
		break;

	case 'edit' :
		$content    = 'edit.php';		
		break;
    case 'question' :
		$content    = 'view.php';		
		break;
	 case 'addquestion' :
		$content    = 'addquestion.php';		
		break;

	default :
		$content    = 'list.php';		
}
require_once ("../theme/templates.php");
?>
  
