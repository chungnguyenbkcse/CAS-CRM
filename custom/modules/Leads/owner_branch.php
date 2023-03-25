<?php

$ck_login_language_20 = $_COOKIE['ck_login_language_20'];
$lst = array();
if ($ck_login_language_20 == "vi_VN"){
    $lst = array(
        '' => '',
        '1' => 'NTT',
        '2' => 'Quận 10',
        '3' => 'Tân Bình',
        '4' => 'TELE',
        '5' => 'DL TB'
    );
}
else {
    $lst = array(
        '' => '',
        '1' => 'District 4',
        '2' => 'District 10',
        '3' => 'Tân Bình',
        '4' => 'TELE',
        '5' => 'DL TB'
    );
}

$html = "";
if (isset($_GET['id'])) {
    foreach($lst as $k => $v) {
        if ($_GET['id'] == $k){
            $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
        }
        else {
            $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
        }
    }
    echo $html;
}

    
