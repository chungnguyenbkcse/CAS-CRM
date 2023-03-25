<?php
function getStates()
{
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

        if ($is_group_ho == true) {
            $query_users = "SELECT * FROM users WHERE deleted = '0' AND id IN (SELECT user_id FROM securitygroups_users WHERE deleted = 0 AND securitygroup_id = '{$groupSecurityId}')";
            $result_users = $GLOBALS['db']->query($query_users);
            while($row_users = $GLOBALS['db']->fetchByAssoc($result_users)){
                $list[$row_users['id']] = $row_users['user_name'];
            }
        }

    }
    return $list;
}

if (isset($_GET['ho_name'])) {
    $html = "";
    $states = getStates();
    foreach($states as $k => $v) {
        if ($_GET['ho_name'] == $k){
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
    $states = getStates();
    foreach($states as $k => $v) {
        $html .= sprintf("<option value='%s'>%s</option>", $k, $v);
    }
    echo $html;
}

