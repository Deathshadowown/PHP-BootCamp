#!/usr/bin/php
<?php
$string = implode(" ", $argv);
$string = trim(preg_replace('/\s\s+/', ' ', $string));
$arr = preg_split('/\s+/', $string);
unset($arr[0]);
sort($arr);
echo implode("\n", $arr). "\n";
?>
