<?php
function getStatesRo($sale_stage)
{
    $ck_login_language_20 = $_COOKIE['ck_login_language_20'];
    $lead_status_new_dom = array(
        '' => '',
        '1' => 'NONE',
        '2' => 'Not answering the phone',
        '3' => 'Call is not available',
        '4' => 'Busy, call back later',
        '5' => 'Considering',
        '6' => 'Support sip',
        '7' => 'Please contact again if needed',
        '8' => 'No shipper',
        '9' => 'No pos',
        '10' => 'High shipping fee',
        '11' => 'The office is far away, customers are not convenient to visit',
        '12' => 'Don\'t want to send card again',
        '13' => 'Card is locked/Expired/Delayed payment',
        '14' => 'Trading outside working hours',
        '15' => 'High deposit/withdrawal fees',
        '16' => 'Customers change their mind',
        '17' => 'Interested customers',
        '18' => 'Successful transaction',
        '19' => 'Wrong Rule',
        '20' => 'Cheat',
        '21' => 'RO error',
        '22' => 'Agent-CTV/Installment',
        '23' => 'BU not completed',
        '24' => 'Agent-CTV/Installment/Open Card/Loan',
        '25' => 'Done/withdrawn with another party',
        '26' => 'Find out and let me know',
        '27' => 'Waiting to receive card',
        '28' => 'No need',
        '29' => 'Subscriber',
        '30' => 'Press the wrong link',
        '31' => 'Wrong number',
    );

    if ($ck_login_language_20 == "vi_VN") {

        $lead_status_new_dom = array(
            '' => '',
            '1' => 'NONE',
            '2' => 'Không nghe ',
            '3' => 'Thuê bao',
            '4' => 'Đang bận hẹn gọi lại sau',
            '5' => 'Đang cân nhắc ',
            '6' => 'Hỗ trợ ship',
            '7' => 'Cần thì liên hệ lại',
            '8' => 'Không có shipper',
            '9' => 'Không có máy pos',
            '10' => 'Phí ship cao',
            '11' => 'Văn phòng xa, khách không tiện ghé',
            '12' => 'Không muốn gửi thẻ lại',
            '13' => 'Thẻ bị khoá/Hết hạn/Trễ hạn thanh toán',
            '14' => 'Giao dịch ngoài giờ làm việc',
            '15' => 'Phí đáo/rút cao',
            '16' => 'Khách hàng đổi ý',
            '17' => 'Khách hàng quan tâm',
            '18' => 'Giao dịch thành công',
            '19' => 'Sai Rule',
            '20' => 'Lừa đảo',
            '21' => 'Lỗi RO',
            '22' => 'Đại lý-CTV/Trả góp',
            '23' => 'BU không hoàn thành Lead',
            '24' => 'Đại lý-CTV/Trả góp/Mở thẻ/Vay',
            '25' => 'Đã đáo/rút với bên khác',
            '26' => 'Tìm hiểu thử cho biết',
            '27' => 'Đang chờ để nhận thẻ',
            '28' => 'Không nhu cầu',
            '29' => 'Thuê bao',
            '30' => 'Ấn nhầm link',
            '31' => 'Nhầm số',
        );
    }
    global $db;

    $query = "SELECT id, sale_stage_id, lead_status_id FROM relationship_sale_stage_lead_status WHERE sale_stage_id = '{$sale_stage}'";

    $list = array();

    $result = $db->query($query, false);
    if ($sale_stage == "0") {
        $list['0'] = 'Choose';
    }

    while (($row = $db->fetchByAssoc($result)) != null) {
        foreach ($lead_status_new_dom as $k => $v) {
            if ($k == $row['lead_status_id']) {
                $list[$k] = $v;
            }
        }
    }

    return $list;
}

function getStatesBuAndMkt($sale_stage)
{
    $ck_login_language_20 = $_COOKIE['ck_login_language_20'];
    $lead_status_new_dom = array(
        '' => '',
        '1' => 'NONE',
        '2' => 'Not answering the phone',
        '3' => 'Call is not available',
        '4' => 'Busy, call back later',
        '5' => 'Considering',
        '6' => 'Support sip',
        '7' => 'Please contact again if needed',
        '8' => 'No shipper',
        '9' => 'No pos',
        '10' => 'High shipping fee',
        '11' => 'The office is far away, customers are not convenient to visit',
        '12' => 'Don\'t want to send card again',
        '13' => 'Card is locked/Expired/Delayed payment',
        '14' => 'Trading outside working hours',
        '15' => 'High deposit/withdrawal fees',
        '16' => 'Customers change their mind',
        '17' => 'Interested customers',
        '18' => 'Successful transaction',
        '19' => 'Wrong Rule',
        '20' => 'Cheat',
        '21' => 'RO error',
        '22' => 'Agent-CTV/Installment',
        '23' => 'BU not completed',
        '24' => 'Agent-CTV/Installment/Open Card/Loan',
        '25' => 'Done/withdrawn with another party',
        '26' => 'Find out and let me know',
        '27' => 'Waiting to receive card',
        '28' => 'No need',
        '29' => 'Subscriber',
        '30' => 'Press the wrong link',
        '31' => 'Wrong number',
        '32' => 'Cancel the card',
    );

    if ($ck_login_language_20 == "vi_VN") {

        $lead_status_new_dom = array(
            '' => '',
            '1' => 'NONE',
            '2' => 'Không nghe ',
            '3' => 'Thuê bao',
            '4' => 'Đang bận hẹn gọi lại sau',
            '5' => 'Đang cân nhắc ',
            '6' => 'Hỗ trợ ship',
            '7' => 'Cần thì liên hệ lại',
            '8' => 'Không có shipper',
            '9' => 'Không có máy pos',
            '10' => 'Phí ship cao',
            '11' => 'Văn phòng xa, khách không tiện ghé',
            '12' => 'Không muốn gửi thẻ lại',
            '13' => 'Thẻ bị khoá/Hết hạn/Trễ hạn thanh toán',
            '14' => 'Giao dịch ngoài giờ làm việc',
            '15' => 'Phí đáo/rút cao',
            '16' => 'Khách hàng đổi ý',
            '17' => 'Khách hàng quan tâm',
            '18' => 'Giao dịch thành công',
            '19' => 'Sai Rule',
            '20' => 'Lừa đảo',
            '21' => 'Lỗi RO',
            '22' => 'Đại lý-CTV/Trả góp',
            '23' => 'BU không hoàn thành Lead',
            '24' => 'Đại lý-CTV/Trả góp/Mở thẻ/Vay',
            '25' => 'Đã đáo/rút với bên khác',
            '26' => 'Tìm hiểu thử cho biết',
            '27' => 'Đang chờ để nhận thẻ',
            '28' => 'Không nhu cầu',
            '29' => 'Thuê bao',
            '30' => 'Ấn nhầm link',
            '31' => 'Nhầm số',
            '32' => 'Hủy thẻ',
        );
    }
    global $db;

    $query = "SELECT id, sale_stage_id, lead_status_id FROM relationship_sale_stage_lead_status WHERE sale_stage_id = '{$sale_stage}'";
    $list = array();

    $result = $db->query($query, false);
    if ($sale_stage == "0") {
        $list['0'] = 'Choose';
    }

    while (($row = $db->fetchByAssoc($result)) != null) {
        foreach ($lead_status_new_dom as $k => $v) {
            if ($k == $row['lead_status_id']) {
                $list[$k] = $v;

            }
        }
    }

    return $list;
}

function getStatesSuperMkt($sale_stage)
{
    $ck_login_language_20 = $_COOKIE['ck_login_language_20'];
    $lead_status_new_dom = array(
        '' => '',
        '1' => 'NONE',
        '2' => 'Not answering the phone',
        '3' => 'Call is not available',
        '4' => 'Busy, call back later',
        '5' => 'Considering',
        '6' => 'Support sip',
        '7' => 'Please contact again if needed',
        '8' => 'No shipper',
        '9' => 'No pos',
        '10' => 'High shipping fee',
        '11' => 'The office is far away, customers are not convenient to visit',
        '12' => 'Don\'t want to send card again',
        '13' => 'Card is locked/Expired/Delayed payment',
        '14' => 'Trading outside working hours',
        '15' => 'High deposit/withdrawal fees',
        '16' => 'Customers change their mind',
        '17' => 'Interested customers',
        '18' => 'Successful transaction',
        '19' => 'Wrong Rule',
        '20' => 'Cheat',
        '21' => 'RO error',
        '22' => 'Agent-CTV/Installment',
        '23' => 'BU not completed',
        '24' => 'Agent-CTV/Installment/Open Card/Loan',
        '25' => 'Done/withdrawn with another party',
        '26' => 'Find out and let me know',
        '27' => 'Waiting to receive card',
        '28' => 'No need',
        '29' => 'Subscriber',
        '30' => 'Press the wrong link',
        '31' => 'Wrong number',
        '32' => 'Cancel the card',
    );

    if ($ck_login_language_20 == "vi_VN") {

        $lead_status_new_dom = array(
            '' => '',
            '1' => 'NONE',
            '2' => 'Không nghe ',
            '3' => 'Thuê bao',
            '4' => 'Đang bận hẹn gọi lại sau',
            '5' => 'Đang cân nhắc ',
            '6' => 'Hỗ trợ ship',
            '7' => 'Cần thì liên hệ lại',
            '8' => 'Không có shipper',
            '9' => 'Không có máy pos',
            '10' => 'Phí ship cao',
            '11' => 'Văn phòng xa, khách không tiện ghé',
            '12' => 'Không muốn gửi thẻ lại',
            '13' => 'Thẻ bị khoá/Hết hạn/Trễ hạn thanh toán',
            '14' => 'Giao dịch ngoài giờ làm việc',
            '15' => 'Phí đáo/rút cao',
            '16' => 'Khách hàng đổi ý',
            '17' => 'Khách hàng quan tâm',
            '18' => 'Giao dịch thành công',
            '19' => 'Sai Rule',
            '20' => 'Lừa đảo',
            '21' => 'Lỗi RO',
            '22' => 'Đại lý-CTV/Trả góp',
            '23' => 'BU không hoàn thành Lead',
            '24' => 'Đại lý-CTV/Trả góp/Mở thẻ/Vay',
            '25' => 'Đã đáo/rút với bên khác',
            '26' => 'Tìm hiểu thử cho biết',
            '27' => 'Đang chờ để nhận thẻ',
            '28' => 'Không nhu cầu',
            '29' => 'Thuê bao',
            '30' => 'Ấn nhầm link',
            '31' => 'Nhầm số',
            '32' => 'Hủy thẻ',
        );
    }
    global $db;

    $query = "SELECT id, sale_stage_id, lead_status_id FROM relationship_sale_stage_lead_status WHERE sale_stage_id = '{$sale_stage}'";
    $list = array();

    $result = $db->query($query, false);
    if ($sale_stage == "0") {
        $list['0'] = 'Choose';
    }

    while (($row = $db->fetchByAssoc($result)) != null) {
        foreach ($lead_status_new_dom as $k => $v) {
            if ($k == $row['lead_status_id']) {
                $list[$k] = $v;
            }
        }
    }

    return $list;
}


if (isset($_COOKIE['role'])){
    $role = $_COOKIE['role'];
    if ($role == "MKT"){
        $html = "";
            # code...
            $states = getStatesBuAndMkt($_GET['id']);
            echo print_r($states);
            foreach ($states as $k => $v) {
                if ($_GET['lead_status_id'] == "0") {
                    echo $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                    exit();
                } else if ($_GET['lead_status_id'] == $k) {
                    $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                } else {
                    $html .= sprintf("<option value='%s' >%s</option>", $k, $v);
                }
            }
        echo $html;        
    }
    else if ($role == "RO"){
        $html = "";
        # code...
        $states = getStatesRo($_GET['id']);
        foreach ($states as $k => $v) {
            if ($_GET['lead_status_id'] == $k) {
                $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
            }
            else {
                $html .= sprintf("<option value='%s' >%s</option>", $k, $v);
            }
        }
        echo $html;
    }

    else if ($role == "BU_Q10"){
        $html = "";
            # code...
            $states = getStatesBuAndMkt($_GET['id']);
            echo print_r($states);
            foreach ($states as $k => $v) {
                if ($_GET['lead_status_id'] == "0") {
                    echo $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                    exit();
                } else if ($_GET['lead_status_id'] == $k) {
                    $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                } else {
                    $html .= sprintf("<option value='%s' >%s</option>", $k, $v);
                }
            }
        echo $html;
    }
    else if ($role == "BU_TB"){
        $html = "";
            # code...
            $states = getStatesBuAndMkt($_GET['id']);
            echo print_r($states);
            foreach ($states as $k => $v) {
                if ($_GET['lead_status_id'] == "0") {
                    echo $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                    exit();
                } else if ($_GET['lead_status_id'] == $k) {
                    $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                } else {
                    $html .= sprintf("<option value='%s' >%s</option>", $k, $v);
                }
            }
        echo $html;
    }

    else if ($role == "BU_NTT"){
        $html = "";
            # code...
            $states = getStatesBuAndMkt($_GET['id']);
            echo print_r($states);
            foreach ($states as $k => $v) {
                if ($_GET['lead_status_id'] == "0") {
                    echo $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                } else if ($_GET['lead_status_id'] == $k) {
                    $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                } else {
                    $html .= sprintf("<option value='%s' >%s</option>", $k, $v);
                }
            }
        echo $html;
    }

    else {
        $html = "";
            # code...
            $states = getStatesSuperMkt($_GET['id']);
            echo print_r($states);
            foreach ($states as $k => $v) {
                if ($_GET['lead_status_id'] == "0") {
                    echo $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                    exit();
                } else if ($_GET['lead_status_id'] == $k) {
                    $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
                } else {
                    $html .= sprintf("<option value='%s' >%s</option>", $k, $v);
                }
            }
        echo $html;
    }
}