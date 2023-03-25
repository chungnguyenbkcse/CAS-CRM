<?php
$user_id = $_GET['ro_id'];
$query_1 = "SELECT * FROM users WHERE deleted = 0 AND id = '{$user_id}'";
$result_1 = $GLOBALS['db']->query($query_1);   
$res = "";
while($rows = $GLOBALS['db']->fetchByAssoc($result_1)){
    $res .= $rows['sip'];
}

echo $res;