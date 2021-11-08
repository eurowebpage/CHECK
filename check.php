<?php
$filename = "check.php";
if (is_readable($filename) && is_writable($filename))
{
echo "<p>File has read and write permissions.</p>";
}
else {
echo "<p>File has not read and write permissions.</p>";
}
?>
