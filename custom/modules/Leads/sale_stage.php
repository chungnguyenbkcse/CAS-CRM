<?php
$ck_login_language_20 = $_COOKIE['ck_login_language_20'];

if ($ck_login_language_20 == "vi_VN") {
    $sale_stage_dom = array (
        '0' => 'Choose',
        '1' => 'New',
        '2' => 'Theo dõi 1',
        '3' => 'Theo dõi 2',
        '4' => 'Theo dõi 3',
        '5' => 'Hẹn',
        '6' => 'Từ chối',
        '7' => 'Đồng ý giao dịch',
        '8' => 'Cancel',
        '9' => 'Bán chéo sp',
        '10' => 'Chuyển BU',
        '11' => 'Sai quy định'
    );

    if (isset($_COOKIE['role'])) {
        if (isset($_GET['id'])) {
            if ($_COOKIE['role'] == "RO"){
                $html = "";
                # code...
                $states = $sale_stage_dom;
                foreach ($states as $k => $v) {
                    if ($_GET['id'] == $k) {
                        $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                    } else {
                        $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
                    }
                }
                echo $html;
            }
            else if ($_COOKIE['role'] == "MKT" || $_COOKIE['role'] == "BU_Q10" || $_COOKIE['role'] == "BU_NTT" || $_COOKIE['role'] == "BU_TB") {
                $html = "";
                # code...
                $states = $sale_stage_dom;
                foreach ($states as $k => $v) {
                    if ($_GET['id'] == $k) {
                        $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                    } else {
                        $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
                    }
                }
                echo $html;
            }
    
            else {
                $html = "";
                # code...
                $states = $sale_stage_dom;
                foreach ($states as $k => $v) {
                    if ($_GET['id'] == $k) {
                        $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                    } else {
                        $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
                    }
                }
                echo $html;
            }
            
        }
    }
}
else {
    $sale_stage_dom = array (
        '0' => 'Choose',
        '1' => 'New',
        '2' => 'Follow 1',
        '3' => 'Follow 2',
        '4' => 'Follow 3',
        '5' => 'Appointment',
        '6' => 'Refuse',
        '7' => 'Agree to the transaction',
        '8' => 'Cancel',
        '9' => 'Cross-selling', 
        '10' => 'Transfer BU',
        '11' => 'Improperly'
    );


    if (isset($_COOKIE['role'])) {
        if (isset($_GET['id'])) {
            if ($_COOKIE['role'] == "RO"){
                $html = "";
                # code...
                $states = $sale_stage_dom;
                foreach ($states as $k => $v) {
                    if ($_GET['id'] == $k) {
                        $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                    } else {
                        $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
                    }
                }
                echo $html;
            }
            else if ($_COOKIE['role'] == "MKT" || $_COOKIE['role'] == "BU_Q10" || $_COOKIE['role'] == "BU_NTT" || $_COOKIE['role'] == "BU_TB") {
                $html = "";
                # code...
                $states = $sale_stage_dom;
                foreach ($states as $k => $v) {
                    if ($_GET['id'] == $k) {
                        $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                    } else {
                        $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
                    }
                }
                echo $html;
            }
    
            else {
                $html = "";
                # code...
                $states = $sale_stage_dom;
                foreach ($states as $k => $v) {
                    if ($_GET['id'] == $k) {
                        $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                    } else {
                        $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
                    }
                }
                echo $html;
            }
            
        }
    }


}

