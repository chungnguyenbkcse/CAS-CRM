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

        if ($is_group_ro == true) {
            $query_users = "SELECT * FROM users WHERE deleted = '0' AND id IN (SELECT user_id FROM securitygroups_users WHERE deleted = 0 AND securitygroup_id = '{$groupSecurityId}')";
            $result_users = $GLOBALS['db']->query($query_users);
            while($row_users = $GLOBALS['db']->fetchByAssoc($result_users)){
                $list[$row_users['id']] = $row_users['user_name'];
            }
        }

    }
    return $list;
}


function getRoForCreate()
{
    $list = array("0" => "Choose");
    $html = "";
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
            $query_1 = "SELECT * FROM ro_choose";
            $result_1 = $GLOBALS['db']->query($query_1);   
            $GLOBALS['log']->fatal("hello"); 
            while($rows = $GLOBALS['db']->fetchByAssoc($result_1)){
                $ro_name = $rows['lead_id'];
                $query_users2 = "SELECT * FROM users WHERE deleted = '0' AND id = '{$ro_name}' ";
                $result_users2 = $GLOBALS['db']->query($query_users2);
                while($row_users2 = $GLOBALS['db']->fetchByAssoc($result_users2)){
                    $ro_id = $row_users2['id'];
                    $query_users3 = "SELECT COUNT(*) AS total FROM users WHERE deleted = '0' AND id IN (SELECT user_id FROM securitygroups_users WHERE deleted = 0 AND securitygroup_id = '{$groupSecurityId}') AND id > '{$ro_id}' ORDER BY id ASC LIMIT 1 OFFSET 0";
                    $result_users3 = $GLOBALS['db']->query($query_users3);
                    $data = $GLOBALS['db']->fetchByAssoc($result_users3); 
                    if ($data['total'] == 0) {
                        $query_users1 = "SELECT * FROM users WHERE deleted = '0' AND id IN (SELECT user_id FROM securitygroups_users WHERE deleted = 0 AND securitygroup_id = '{$groupSecurityId}') ORDER BY id ASC LIMIT 1";
                        $result_users1 = $GLOBALS['db']->query($query_users1);
                        while($row_users1 = $GLOBALS['db']->fetchByAssoc($result_users1)){
                            $query_users = "SELECT * FROM users WHERE deleted = '0' AND id IN (SELECT user_id FROM securitygroups_users WHERE deleted = 0 AND securitygroup_id = '{$groupSecurityId}')";
                            $result_users = $GLOBALS['db']->query($query_users);
                            $idx = 0;
                            while($row_users = $GLOBALS['db']->fetchByAssoc($result_users)){
                                if ($row_users1['id'] == $row_users['id']) {
                                    $html = sprintf("<option value='%s' selected>%s</option>", $row_users['id'], $row_users['user_name']) .  $html;
                                }
                                else {
                                    $html .= sprintf("<option value='%s'>%s</option>", $row_users['id'], $row_users['user_name']);
                                }
                                
                                $idx += 1;
                            }
                        }
                    }
                    else {
                        $query_users1 = "SELECT * FROM users WHERE deleted = '0' AND id IN (SELECT user_id FROM securitygroups_users WHERE deleted = 0 AND securitygroup_id = '{$groupSecurityId}') AND id > '{$ro_id}' ORDER BY id ASC LIMIT 1 OFFSET 0";
                        $result_users1 = $GLOBALS['db']->query($query_users1);
                        while($row_users1 = $GLOBALS['db']->fetchByAssoc($result_users1)){
                            $query_users = "SELECT * FROM users WHERE deleted = '0' AND id IN (SELECT user_id FROM securitygroups_users WHERE deleted = 0 AND securitygroup_id = '{$groupSecurityId}')";
                            $result_users = $GLOBALS['db']->query($query_users);
                            $idx = 0;
                            while($row_users = $GLOBALS['db']->fetchByAssoc($result_users)){
                                if ($row_users1['id'] == $row_users['id']) {
                                    $html = sprintf("<option value='%s' selected>%s</option>", $row_users['id'], $row_users['user_name']) .  $html;
                                }
                                else {
                                    $html .= sprintf("<option value='%s'>%s</option>", $row_users['id'], $row_users['user_name']);
                                }
                                
                                $idx += 1;
                            }
                        }
                    }

                    
                }
                    
            }     
        }

    }
    return $html;
}

if (isset($_GET['ro_name'])) {
    $html = "";
    $states = getStates();
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
    $states = getRoForCreate();
    $states .= sprintf("<option value='%s'>%s</option>", '0', 'Choose');
    echo $states;
}

