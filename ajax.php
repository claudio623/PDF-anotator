<?php 
include"../../../../config.php";

$dbhandle = mysql_connect($CFG->dbhost, $CFG->dbuser, $CFG->dbpass) 
  or die("Unable to connect to MySQL");

$selected = mysql_select_db($CFG->dbname,$dbhandle) 
  or die("Could not select examples");  

$result = mysql_query("DELETE FROM mdl_assignfeedback_pdf_annot WHERE submissionid='".$_GET["subsId"]."' AND pageno='".$_GET["pageno"]."' ");
$result = mysql_query("DELETE FROM mdl_assignfeedback_pdf_cmnt WHERE submissionid='".$_GET["subsId"]."' AND pageno='".$_GET["pageno"]."' ");




?>