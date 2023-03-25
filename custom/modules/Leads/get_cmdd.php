<?php
function checkPhoneNumber($cmdd)
{
    $query = "SELECT citizen_identification FROM leads";
    $result = $GLOBALS['db']->query($query);
    $res = true;
    while($rows = $GLOBALS['db']->fetchByAssoc($result)){
        if ($rows['citizen_identification'] == $cmdd) {
            $res = false;
        }
    }
    return $res;
}

function checkPhoneNumber1($id, $cmdd)
{
    $query = "SELECT citizen_identification FROM leads WHERE id != '{$id}'";
    $result = $GLOBALS['db']->query($query);
    $res = true;
    while($rows = $GLOBALS['db']->fetchByAssoc($result)){
        if ($rows['citizen_identification'] == $cmdd) {
            $res = false;
        }
    }
    return $res;
}

if (isset($_GET['cmdd'])) {
    $result = true;
    if (isset($_GET['id'])) {
        $result = checkPhoneNumber1($_GET['id'], $_GET['cmdd']);
    }
    else {
        $result = checkPhoneNumber($_GET['cmdd']);
    }

    echo $result;
}
