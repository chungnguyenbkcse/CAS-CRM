<?php
function checkPhoneNumber($phone_number)
{
    $query = "SELECT phone_number_primary FROM leads";
    $result = $GLOBALS['db']->query($query);
    $res = true;
    while($rows = $GLOBALS['db']->fetchByAssoc($result)){
        if ($rows['phone_number_primary'] == $phone_number) {
            $res = false;
        }
    }
    return $res;
}

function checkPhoneNumber1($id, $phone_number)
{
    $query = "SELECT phone_number_primary FROM leads WHERE id != '{$id}'";
    $result = $GLOBALS['db']->query($query);
    $res = true;
    while($rows = $GLOBALS['db']->fetchByAssoc($result)){
        if ($rows['phone_number_primary'] == $phone_number) {
            $res = false;
        }
    }
    return $res;
}

if (isset($_GET['phone_number'])) {
    $result = true;
    if (isset($_GET['id'])) {
        $result = checkPhoneNumber1($_GET['id'], $_GET['phone_number']);
    }
    else {
        $result = checkPhoneNumber($_GET['phone_number']);
    }

    echo $result;
}
