<?php
session_start();

print "<!DOCTYPE html>" . PHP_EOL;
print "<html>" . PHP_EOL;
print "<head>" . PHP_EOL;
print "\t<title>PHP Page</title>" . PHP_EOL;
print "</head>" . PHP_EOL;
print "<body>" . PHP_EOL;
print "\t<form method=\"POST\" action=\"action.php\">" . PHP_EOL;
print "\t\t<label for=\"zip\">Zip Code:</label><br>" . PHP_EOL;
print "\t\t<input type=\"text\" name=\"zip\">" . PHP_EOL;
print "\t\t<input type=\"submit\" name=\"submit\">" . PHP_EOL;
print "\t</form>" . PHP_EOL;
print "</body>" . PHP_EOL;
print "</html>" . PHP_EOL;
?>
