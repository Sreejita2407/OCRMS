<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'OCRMS');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
require_once('C:/xampp/htdocs/project/include/config.php');
require_once('C:/xampp/htdocs/project/include/function.php');
require_once('C:/xampp/htdocs/project/include/session.php');
require_once('C:/xampp/htdocs/project/include/accounts.php');
require_once('C:/xampp/htdocs/project/include/autonumbers.php');
require_once('C:/xampp/htdocs/project/include/departments.php');
require_once('C:/xampp/htdocs/project/include/courses.php');
require_once('C:/xampp/htdocs/project/include/subjects.php');
require_once('C:/xampp/htdocs/project/include/sidebarFunction.php'); 
require_once('C:/xampp/htdocs/project/include/instructors.php');
require_once('C:/xampp/htdocs/project/include/schedules.php');
require_once('C:/xampp/htdocs/project/include/students.php');
require_once('C:/xampp/htdocs/project/include/classes.php');
require_once('C:/xampp/htdocs/project/include/studentsubjects.php');
require_once('C:/xampp/htdocs/project/include/studentschedule.php');
// require_once(LIB_PATH.DS."grades.php");
require_once('C:/xampp/htdocs/project/include/semester.php'); 
require_once('C:/xampp/htdocs/project/include/studentdetails.php');
require_once('C:/xampp/htdocs/project/include/ay.php');
require_once('C:/xampp/htdocs/project/include/exam.php');
require_once('C:/xampp/htdocs/project/include/percent.php');
require_once('C:/xampp/htdocs/project/include/grade.php');

require_once('C:/xampp/htdocs/project/include/database.php');
?>


