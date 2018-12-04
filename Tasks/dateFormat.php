<?php
$timestamp = strtotime('2 November, 2018');
$expectedFormatDate = date('d F, Y', $timestamp); 
echo $expectedFormatDate;