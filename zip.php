<?php

$zip = array(
          "54481" => "Stevens Point",
          "60610" => "Chicago",
          "53051" => "Menomonee Falls",
          "90210" => "Beverly Hills",
          "04330" => "Augusta"
      );


for practice

php

<?php

$zip = array(
    "54481" => "Stevens Point",
    "60610" => "Chicago",
    "53051" => "Menomonee Falls",
    "90210" => "Beverly Hills",
    "04330" => "Augusta"
);

// Assume the user submitted a zip code via a form
if (isset($_POST['zipCode'])) {
    $userZipCode = $_POST['zipCode'];

    // Check if the submitted zip code exists in the $zip array
    if (array_key_exists($userZipCode, $zip)) {
        $cityName = $zip[$userZipCode];
        echo "City corresponding to zip code $userZipCode is: $cityName";
    } else {
        echo "City not found for zip code $userZipCode";
    }
} else {
    echo "Please submit a zip code";
}
?>
