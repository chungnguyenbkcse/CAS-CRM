<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
function getStates($branch_id)
{
    $list = array();
    $query_securitygroups = "SELECT * FROM securitygroups WHERE deleted = 0";
    $result_securitygroups = $GLOBALS['db']->query($query_securitygroups);
    while($rows_securitygroups = $GLOBALS['db']->fetchByAssoc($result_securitygroups)){
        $is_group_ro = false;
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
                    if ($rows_get_name_action['name'] == 'mkt' && $rows_get_name_action['category'] == 'Leads') {
                        if ($rows_acl_roles_actions['access_override'] == -98) {
                            $is_group_ro = true;
                        }
                    }

                    if ($rows_get_name_action['name'] == 'branch' && $rows_get_name_action['category'] == 'Leads') {
                        if ($rows_acl_roles_actions['access_override'] == 96) {
                            $branch = '2';
                        }
                        else if ($rows_acl_roles_actions['access_override'] == 97) {
                            $branch = '3';
                        }
                        else if ($rows_acl_roles_actions['access_override'] == 94) {
                            $branch = '4';
                        }
                        else if ($rows_acl_roles_actions['access_override'] == 95) {
                            $branch = '5';
                        }
                        else {
                            $branch = '1';
                        }
                    }
                }
            }
        }

        if ($is_group_ro == true && $branch == $branch_id) {
            $query_ro_least_total = "SELECT COUNT(*) AS total FROM ro_least WHERE bu = '{$branch}'";
            $result_ro_least_total = $GLOBALS['db']->query($query_ro_least_total);
            $rows_ro_least_total = $GLOBALS['db']->fetchByAssoc($result_ro_least_total);
            $total_ro_least_total = $rows_ro_least_total['total'];
            if ($total_ro_least_total > 0) {
                $query_ro_least = "SELECT * FROM ro_least WHERE bu = '{$branch}'";
                $result_ro_least = $GLOBALS['db']->query($query_ro_least);
                $end_time = "";
                while($row_ro_least = $GLOBALS['db']->fetchByAssoc($result_ro_least)){
                    $end_time = $row_ro_least['time'];
                }

                $query_users_total = "SELECT COUNT(*) AS total FROM users WHERE deleted = '0' AND  date_entered > '{$end_time}' AND id IN (SELECT user_id FROM securitygroups_users WHERE deleted = 0 AND securitygroup_id = '{$groupSecurityId}') ORDER BY date_entered";
                $result_users_total = $GLOBALS['db']->query($query_users_total);
                $rows_users_total = $GLOBALS['db']->fetchByAssoc($result_users_total);
                $total_users = $rows_users_total['total'];

                if ($total_users > 0) {
                    $query_users = "SELECT * FROM users WHERE deleted = '0' AND  date_entered > '{$end_time}' AND id IN (SELECT user_id FROM securitygroups_users WHERE deleted = 0 AND securitygroup_id = '{$groupSecurityId}') ORDER BY date_entered";
                    $result_users = $GLOBALS['db']->query($query_users);
                    while($row_users = $GLOBALS['db']->fetchByAssoc($result_users)){
                        $list[$row_users['user_name']] = $row_users['user_name'];
                    }
                }
                else {
                    $query_users = "SELECT * FROM users WHERE deleted = '0' AND id IN (SELECT user_id FROM securitygroups_users WHERE deleted = 0 AND securitygroup_id = '{$groupSecurityId}') ORDER BY date_entered";
                    $result_users = $GLOBALS['db']->query($query_users);
                    while($row_users = $GLOBALS['db']->fetchByAssoc($result_users)){
                        $list[$row_users['user_name']] = $row_users['user_name'];
                    }
                }
            }
            else {
                $query_users = "SELECT * FROM users WHERE deleted = '0' AND id IN (SELECT user_id FROM securitygroups_users WHERE deleted = 0 AND securitygroup_id = '{$groupSecurityId}') ORDER BY date_entered";
                $result_users = $GLOBALS['db']->query($query_users);
                while($row_users = $GLOBALS['db']->fetchByAssoc($result_users)){
                    $list[$row_users['user_name']] = $row_users['user_name'];
                }
            }
        }

    }
    return $list;
}

if (isset($_GET['id'])) {
    if (isset($_GET['ro_name'])) {
        $html = "";
        $states = getStates($_GET['id']);
        foreach($states as $k => $v) {
            if ($_GET['ro_name'] == $k){
                $html .= sprintf("<option value='%s' selected>%s</option>", $k, $v);
            }
            else {
                $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
            }
        }
        echo $html;
    }
    else {
        $html = "";
        $states = getStates($_GET['id']);
        foreach($states as $k => $v) {
            $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
        }
        $html .= sprintf("<option value='0'>Choose</option>", $k, $v);
        echo $html;
    }
}
