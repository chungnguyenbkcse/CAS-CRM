<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');

class HandleDB
{
    function addDataLead()
    {
        global $current_language;
        global $current_user;
        setcookie("url_web", "", time() - 3600);
        setcookie("url_web", 'http://cas.tranthu.vn/', time() + (86400 * 30), "/");
        $user = BeanFactory::getBean('Users', $current_user->id);
        setcookie("sip", "", time() - 3600);
        setcookie("sip", $user->sip, time() + (86400 * 30), "/");
        $query_securitygroups_users = "SELECT securitygroup_id FROM securitygroups_users WHERE deleted = 0 AND user_id = '{$user->id}'";
        $result_securitygroups_users = $GLOBALS['db']->query($query_securitygroups_users);
        $lst = "";
        $security = "";
        if ($user->is_admin == 0) {
            while ($rows_securitygroups_users = $GLOBALS['db']->fetchByAssoc($result_securitygroups_users)){
                $groupSecurityId = $rows_securitygroups_users['securitygroup_id'];
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
                                if ($rows_acl_roles_actions['access_override'] == 89) {
                                    $lst =  "MKT";
                                    $security =  $groupSecurityId;
                                    break;
                                }
                            }

                            else if ($rows_get_name_action['name'] == 'ro' && $rows_get_name_action['category'] == 'Leads') {
                                if ($rows_acl_roles_actions['access_override'] == 89) {
                                    $lst =  "RO";
                                    $security =  $groupSecurityId;
                                    break;
                                }
                            }

                            else if ($rows_get_name_action['name'] == 'ho' && $rows_get_name_action['category'] == 'Leads') {
                                if ($rows_acl_roles_actions['access_override'] == 89) {
                                    $lst =  "HO";
                                    $security =  $groupSecurityId;
                                    break;
                                }
                            }

                            else if ($rows_get_name_action['name'] == 'super_mkt' && $rows_get_name_action['category'] == 'Leads') {
                                if ($rows_acl_roles_actions['access_override'] == 89) {
                                    $lst =  "SUPER_MKT";
                                    $security =  $groupSecurityId;
                                    break;
                                }
                            }
                            
                        }
                    }
                }
            }
        }

        if ($lst != ""){
            $cookie_name = "role";
            $cookie_value = $lst;
            // Set the expiration date to one hour ago
            setcookie("role", "", time() - 3600);
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    
            $cookie_name_1 = "security_group";
            $cookie_value_1 = $security;
            // Set the expiration date to one hour ago
            setcookie("security_group", "", time() - 3600);
            setcookie($cookie_name_1, $cookie_value_1, time() + (86400 * 30), "/");
        }
        else {
            $cookie_name = "role";
            $cookie_value = "ADMIN";
            // Set the expiration date to one hour ago
            setcookie("role", "", time() - 3600);
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        }

        $GLOBALS['log']->fatal($_COOKIE['role']);

        $query_1x = "SELECT COUNT(*) AS total  FROM relationship_sale_stage_lead_status";
        $result_1x = $GLOBALS['db']->query($query_1x);
        $row_1x = $GLOBALS['db']->fetchByAssoc($result_1x);
        $total_1x = $row_1x['total'];

        if ($total_1x == 0) {
            $query_6 = "INSERT INTO relationship_sale_stage_lead_status (id, sale_stage_id, lead_status_id)
                        VALUES  ('1', '1', '1'),
                                ('2', '2', '2'),
                                ('3', '3', '3'),
                                ('4', '4', '4'),
                                ('7', '6', '7'),
                                ('8', '6', '8'),
                                ('9', '6', '9'),
                                ('10', '6', '10'),
                                ('11', '6', '11'),
                                ('12', '6', '12'),
                                ('13', '6', '13'),
                                ('14', '6', '14'),
                                ('15', '6', '15'),
                                ('16', '6', '16'),
                                ('17', '5', '17'),
                                ('18', '7', '18'),
                                ('19', '8', '19'),
                                ('20', '8', '20'),
                                ('21', '8', '21'),
                                ('22', '9', '22'),
                                ('23', '10', '1'),
                                ('24', '11', '23'),
                                ('25', '2', '3'),
                                ('26', '2', '4'),
                                ('27', '3', '2'),
                                ('28', '3', '4'),
                                ('29', '4', '1'),
                                ('30', '4', '3'),
                                ('31', '9', '24'),
                                ('32', '6', '25'),
                                ('33', '2', '26'),
                                ('34', '3', '26'),
                                ('35', '4', '26'),
                                ('36', '2', '27'),
                                ('37', '3', '27'),
                                ('38', '4', '27'),
                                ('39', '8', '28'),
                                ('40', '8', '29'),
                                ('41', '8', '30'),
                                ('42', '8', '31');
            ";
            $GLOBALS['db']->query($query_6);
        }
    }
}
