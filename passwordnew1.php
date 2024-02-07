
<?php
print "<!DOCTYPE html>". PHP_EOL;
print "<html>" . PHP_EOL;
print "<head>" . PHP_EOL;
print "\t<title>PHP Page</title>" . PHP_EOL; 
print "</head>" . PHP_EOL;
print "<body>" . PHP_EOL;
print "<h1>Action PHP </h1>" . PHP_EOL;

print "<form action=\"action.php\" method=\"POST\">";

print "Password: <input type=\"password\" name=\"pass1\">";
print "<br>";

print "Password (Again): <input type=\"password\" name=\"pass2\">";
print "<br>";

print "<input type=\"submit\" value=\"Go\" name=\"submit\">";
print "</form>\n";

print "</body>". PHP_EOL;
print "</html>". PHP_EOL;
?>