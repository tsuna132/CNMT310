<?php
require_once('zip.php');



if (isset($_POST['zip'])) {
  print getTop();
  print "Not authorized";
  print getBottom();
  exit;
}

if (isset($_POST['zip']))  {
  $userZip = $_POST['zip'];
if(array_key_exists($userZip,$zip)){
$_city['found city'] = $zip[$userZip];
exit;
}
else{
$_city['error'] ='Not found.Fill out the form.';


 exit;
} 
}



