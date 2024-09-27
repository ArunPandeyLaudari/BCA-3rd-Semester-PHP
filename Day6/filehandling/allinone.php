<?php
// Define the filename
$filename = 'example.txt';

// 1. Writing to a file
echo "Writing to the file...\n";
$file = fopen($filename, 'w') or die('Unable to open file!');
$text = "Hello, this is a test.\nThis is the second line.\n";
fwrite($file, $text);
fclose($file);
echo "Data written to the file successfully.\n";

// 2. Appending to a file
echo "Appending to the file...\n";
$file = fopen($filename, 'a') or die('Unable to open file!');
$text = "This is an appended line.\n";
fwrite($file, $text);
fclose($file);
echo "Data appended to the file successfully.\n";

// 3. Reading from a file
echo "Reading from the file...\n";
$file = fopen($filename, 'r') or die('Unable to open file!');
while(!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
echo "Data read from the file successfully.\n";

// 4. Deleting the file
echo "Deleting the file...\n";
if (file_exists($filename)) {
    unlink($filename);
    echo "File deleted successfully.\n";
} else {
    echo "File does not exist.\n";
}
?>
