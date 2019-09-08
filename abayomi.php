
<?php  

$myfile = fopen("snoopyomex.txt, "w") or die("Unable to open file!");
$txt="name\n";
fwrite($myfile, $txt);
$txt="email\n";
fwrite($myfile, $txt);
$txt="phonenumber\n";
fwrite($myfile, $txt);
$txt="subject\n";
fwrite($myfile, $txt);
$txt="message\n";
fwrite($myfile, $txt);
fclose($myfile);

?>
    