<?php
SESSION_start();

require_once("zip.php");


print getTop();
print $_city['found city'];
print getBottom();


function getTop($title = "success", $lang = "en") {
  $html = "";
  $html .= "<!doctype html>\n";
  $html .= "<html lang=\"" . $lang . "\">\n";
  $html .= "<head>\n";
  $html .= "\t<title>" . $title . "</title>\n";
  $html .= "</head>\n";
  $html .= "<body>\n";
  return $html;
}

function getBottom() {
  $html = "";
  $html .= "</body></html>";
  return $html;
}

print getTop();

if (isset($_POST['city']))  {
  $_city=$_POST['city'];
$message =  $_city;
}
else{
$_city ='Error: city not found.';
$message = $_city;
}
echo $message;

print getBottom();
?>


