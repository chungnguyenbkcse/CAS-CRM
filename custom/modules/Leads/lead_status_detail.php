<?php 
function getStates($lead_status_id) {
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
            '17' => 'Khác hàng quan tâm',
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
    foreach ($lead_status_new_dom as $k => $v) {
        if ($k == $lead_status_id) {
            return $v;
        }
    }
}
if (isset($_GET['id'])){
    $states = getStates($_GET['id']);
    echo $states;
}