<?php
// Load thư viện
require_once 'vendor/autoload.php';


// Cấu hình webhook
$bot_api_key  = '6173643097:AAFUsQUZJfbs8lFL_fzmEmhRoBptAl8IEI0';
$bot_username = 'ChungNguyen10012000_bot';
$hook_url     = 'https://mkt.tranthu.vn/index.php?module=Leads&entryPoint=handle_telegram';

try {
    //echo "Success";
    $telegram = new \TelegramBot\Api\BotApi($bot_api_key);
    $telegram->setWebhook($hook_url);
} catch (\TelegramBot\Api\Exception $e) {
    //echo $e->getMessage($hook_url);
}


// Xử lý tin nhắn
$update = file_get_contents('php://input');
$update = json_decode($update, true);

$message = isset($update['message']) ? $update['message'] : null;

if ($message !== null) {
    //lấy thông tin về tin nhắn
    $message = isset($update['message']) ? $update['message'] : "";
    $messageId = isset($message['message_id']) ? $message['message_id'] : "";
    $chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
    $firstName = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
    $lastName = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
    $username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
    $date = isset($message['date']) ? $message['date'] : "";
    $text = isset($message['text']) ? $message['text'] : "";

    $str = $text;
    $find = 'Số';
    if ($chatId < 0) {
        if (strpos($str, $find) !== false) {
            $phone_number_primary = mb_substr($str,3,10);
            //$leadBean = BeanFactory::newBean('Leads');

            $query = "SELECT COUNT(*) AS total FROM leads WHERE deleted = 0 AND phone_number_primary = '{$phone_number_primary}'";
            $result = $GLOBALS['db']->query($query); 
            $data = $GLOBALS['db']->fetchByAssoc($result); 
            if ($data['total'] == 0) {

                $leadBean = BeanFactory::newBean('Leads');
                $leadBean->facebook_or_zalo_name = "telegram";
                $leadBean->assigned_user_id = "aacec1bd-6737-81e3-7365-631aa18cd430";
                $leadBean->phone_number_primary = $phone_number_primary;
                $leadBean->data_source_id = '1';
                $leadBean->save();

                

                $telegram->sendMessage($chatId, 'Dữ liệu đã được lưu vào MKTCRM với sđt: ' . $phone_number_primary);
            }
            else {
                $telegram->sendMessage($chatId, 'Xin lỗi, dữ liệu sđt đã tồn tại: '. $phone_number_primary);
            }

            
        } 
    }  
    // Xử lý tin nhắn ở đây
    

    
    //echo $text;
}


header("Content-Type: application/json");
echo json_encode(["status" => "success"]);