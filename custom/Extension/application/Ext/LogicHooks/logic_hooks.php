<?php
$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_login'] = Array(); 
$hook_array['after_login'][] = Array(1, 'Add sale stage, lead status', 'custom/handle_login.php','HandleDB', 'addDataLead'); 

$hook_array['before_logout'] = Array(); 
$hook_array['before_logout'][] = Array(77, 'Remove sale stage, lead status', 'custom/handle_logout.php','HandleDB', 'removeDataLead'); 