
<?php
print "<!DOCTYPE html>" . PHP_EOL;
print "<html>" . PHP_EOL;
print "<head>" . PHP_EOL;
print "\t<title>PHP Page</title>" . PHP_EOL;
print "</head>" . PHP_EOL;
print "<body>" . PHP_EOL;
print "<h1>Action PHP</h1>" . PHP_EOL;

// Check if both passwords are set
if (!isset($_POST['pass1']) || !isset($_POST['pass2'])) {
    print "<p>Password must be at least 8 characters, and both fields must be the same</p>";
    exit;
}

// Check if both passwords are empty or match
if (empty($_POST['pass1']) || empty($_POST['pass2']) || ($_POST['pass1'] !== $_POST['pass2'])) {
    print "<p>Error: Passwords do not match</p>";
    exit;
}

print "<p>Passwords matched</p>";

print "</body>" . PHP_EOL;
print "</html>" . PHP_EOL;
?>
