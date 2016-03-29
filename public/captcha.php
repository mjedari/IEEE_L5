<?php

$captcha = '';
// Create string
for ($i = 0; $i < 3; $i++) {
    $captcha .= chr(rand(97, 122));
}
for ($i = 0; $i < 2; $i++) {
    $captcha .= chr(rand(48, 57));
}
$text = str_shuffle($captcha);
setcookie('name', $text, time() + (3600 * 3), "/contact"); // 3

// Set the content-type
header('Content-Type: image/png');

// Create the image
$im = imagecreatetruecolor(100, 35);

// Create some colors
$bgcolor = imagecolorallocate($im, 190, 183, 183);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 399, 34, $bgcolor);


// Replace path by your own font path
$font = 'fonts/calibriz.ttf';

// Add some shadow to the text
imagettftext($im, 20, -3, 18, 21, $grey, $font, $text);

// Add the text
imagettftext($im, 20, 10, 10, 30, $black, $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
?>
