<?php
require 'vendor/autoload.php';

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

class MyWebSocket implements MessageComponentInterface {
    public function onOpen(ConnectionInterface $conn) {
        // Khi một kết nối được mở, hãy thực hiện các hành động mong muốn tại đây
        echo "New connection! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        // Xử lý tin nhắn được nhận từ client ở đây

        $res = "";
        
        if ($_COOKIE['role'] == 'MKT' || $_COOKIE['role'] == 'SUPER_MKT') {
            $user = BeanFactory::getBean('Users', $_COOKIE['ck_login_id_20']);
            $query = "SELECT * FROM leads WHERE sale_stage = '10' AND deleted = 0";
            $result = $GLOBALS['db']->query($query);
            while($rows = $GLOBALS['db']->fetchByAssoc($result)){
                if ($rows['owned_branch'] != null && $rows['owned_branch'] != "") {
                    if ($rows['ro_name'] != null && $rows['ro_name'] != "") {
                        if (checkTime($rows['day_shared_RO']) > 900 && $rows['sale_stage'] != '' && $rows['lead_status'] != '' && $rows['is_record'] == 0) {
                            $res .= $rows['facebook_or_zalo_name'];
                            echo $res;
                            $query_1 = "UPDATE leads SET sale_stage = '11', lead_status = '23' WHERE id = '{$rows['id']}'";
                            $GLOBALS['db']->query($query_1);
                        }
                    }
                    else {
                        if (checkTime($rows['MKT_day_shared_BU']) > 900 && $rows['sale_stage'] != '' && $rows['lead_status'] != '' && $rows['is_record'] == 0) {
                            $res .= $rows['facebook_or_zalo_name'];
                            echo $res;
                            $query_1 = "UPDATE leads SET sale_stage = '11', lead_status = '23' WHERE id = '{$rows['id']}'";
                            $GLOBALS['db']->query($query_1);
                        }
                    }
                }
            }
            echo $res;
        }
        else if ($_COOKIE['role'] == 'RO') {
            if (isset($_COOKIE['ck_login_id_20'])) {
                $user = BeanFactory::getBean('Users', $_COOKIE['ck_login_id_20']);
                $query = "SELECT * FROM leads WHERE ro_name = '{$user->id}' AND sale_stage = '10' AND deleted = 0";
                $result = $GLOBALS['db']->query($query);
                while($rows = $GLOBALS['db']->fetchByAssoc($result)){
                    if ($rows['modified_user_id'] != $user->id) {
                        if (checkTime($rows['day_shared_RO']) > 900 && $rows['sale_stage'] != '' && $rows['lead_status'] != '' && $rows['is_record'] == 0) {
                            $res .= $rows['facebook_or_zalo_name'];
                            echo $res;
                            $query_1 = "UPDATE leads SET sale_stage = '11', lead_status = '23' WHERE id = '{$rows['id']}'";
                            $GLOBALS['db']->query($query_1);
                        }
                    }
                }
                echo $res;
            }
        }
        
    }

    public function onClose(ConnectionInterface $conn) {
        // Khi một kết nối bị đóng, hãy thực hiện các hành động mong muốn tại đây
        echo "Connection closed! ({$conn->resourceId})\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        // Xử lý lỗi xảy ra trong quá trình xử lý kết nối
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }

    public function checkTime($date2) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $now = new DateTime();
        $date1 = new DateTime($date2);
        $difference_in_seconds = $now->format('U') - $date1->format('U');
        return $difference_in_seconds;
    }

    public function getRO($user_id) {
        $list = array("0" => "Choose");
        $query_securitygroups = "SELECT * FROM securitygroups WHERE deleted = 0";
        $result_securitygroups = $GLOBALS['db']->query($query_securitygroups);
        while($rows_securitygroups = $GLOBALS['db']->fetchByAssoc($result_securitygroups)){
            $is_group_ro = false;
            $is_group_ho = false;
            $branch = '';
            $groupSecurityId = $rows_securitygroups['id'];
            $query_securitygroups_acl_roles = "SELECT role_id FROM securitygroups_acl_roles WHERE deleted = 0 AND securitygroup_id = '{$groupSecurityId}'";
            $result_securitygroups_acl_roles = $GLOBALS['db']->query($query_securitygroups_acl_roles);
            while ($rows_securitygroups_acl_roles = $GLOBALS['db']->fetchByAssoc($result_securitygroups_acl_roles)) {
                $role_id = $rows_securitygroups_acl_roles['role_id'];
                $query_acl_roles_actions = "SELECT action_id, access_override  FROM acl_roles_actions WHERE deleted = 0 AND role_id = '{$role_id}'";
                $result_acl_roles_actions = $GLOBALS['db']->query($query_acl_roles_actions);
                while ($rows_acl_roles_actions = $GLOBALS['db']->fetchByAssoc($result_acl_roles_actions)) {
                    $action_id = $rows_acl_roles_actions['action_id'];
                    $query_get_name_action = "SELECT name, category FROM acl_actions WHERE deleted = 0 AND id = '{$action_id}'";
                    $result_get_name_action = $GLOBALS['db']->query($query_get_name_action);
                    while ($rows_get_name_action = $GLOBALS['db']->fetchByAssoc($result_get_name_action)) {
                        if ($rows_get_name_action['name'] == 'ro' && $rows_get_name_action['category'] == 'Leads') {
                            if ($rows_acl_roles_actions['access_override'] == 89) {
                                $is_group_ro = true;
                            }
                        }

                        if ($rows_get_name_action['name'] == 'ho' && $rows_get_name_action['category'] == 'Leads') {
                            if ($rows_acl_roles_actions['access_override'] == 89) {
                                $is_group_ho = true;
                            }
                        }

                    }
                }
            }

            if ($is_group_ro == true) {
                $query_users = "SELECT * FROM users WHERE deleted = '0' AND id > '{$user_id}' IN (SELECT user_id FROM securitygroups_users WHERE deleted = 0 AND securitygroup_id = '{$groupSecurityId}') ORDER BY date_entered";
                $result_users = $GLOBALS['db']->query($query_users);
                while($row_users = $GLOBALS['db']->fetchByAssoc($result_users)){
                    $list[$row_users['user_name']] = $row_users['user_name'];
                }
            }

        }
        return $list;
    }
}

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new MyWebSocket()
        )
    ),
    8080
);

echo "WebSocket server is running...\n";

$server->run();
