<?php
if(!isset($_POST['pass1']) || !isset($_POST['pass2'])){
print "go away";
exit;
}
if (empty($_POST['pass1']) || empty ($_POST['pass2'])){
	print "Please cillout both fiends";
	exit;