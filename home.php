<?php
$name = $_POST["name"] . "\n";
$email = $_POST["email"] . "\n";
$message = $_POST["message"] . "\n";
$files = scandir('data');
sort($files);
$i = 1;
foreach ($files as $value) {
    if ($value == "$i.txt") {
        $i = $i + 1;
    }
}
$file = fopen("data/$i.txt", "w");
fwrite($file, $name);
fwrite($file, $email);
fwrite($file, $message);
fclose($file);
?>