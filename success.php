<?php
session_start();

function getTop($title = "Result", $lang = "en")
{
    $html = "";
    $html .= "<!doctype html>\n";
    $html .= "<html lang=\"" . $lang . "\">\n";
    $html .= "<head>\n";
    $html .= "\t<title>" . $title . "</title>\n";
    $html .= "</head>\n";
    $html .= "<body>\n";
    return $html;
}

function getBottom()
{
    $html = "";
    $html .= "</body></html>";
    return $html;
}

print getTop();

if (isset($_SESSION['found_city'])) {
    $message = "City: " . $_SESSION['found_city'];
} else {
    $message = "Wrong Zip Code and City not found so, Redirecting to fill out the form again...";
    header("Refresh: 5; URL=index.php");
}

unset($_SESSION['found_city']);
unset($_SESSION['Wrong Zip Code']);

print $message;
print getBottom();
?>
