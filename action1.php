<?php
if(!isset($_POST['pass1']) || !isset($_POST['pass2'])){
print "Password must be at least 8 characters and both field must be same";
exit;
}
if (empty($_POST['pass1']) === empty ($_POST['pass2'])){
	print "Password matched";
	exit;
}