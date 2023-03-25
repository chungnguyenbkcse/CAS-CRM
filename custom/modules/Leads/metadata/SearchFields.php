<?php
// created: 2022-12-09 14:07:49
$searchFields['Leads'] = array (
  'first_name' => 
  array (
    'query_type' => 'default',
  ),
  'last_name' => 
  array (
    'query_type' => 'default',
  ),
  'search_name' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
    ),
    'force_unifiedsearch' => true,
  ),
  'account_name' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'leads.account_name',
    ),
  ),
  'lead_source' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'options' => 'lead_source_dom',
    'template_var' => 'LEAD_SOURCE_OPTIONS',
  ),
  'do_not_call' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'input_type' => 'checkbox',
  ),
  'phone' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'phone_mobile',
      1 => 'phone_work',
      2 => 'phone_other',
      3 => 'phone_fax',
      4 => 'phone_home',
    ),
  ),
  'email' => 
  array (
    'db_field' => ['id'],
    'operator' => 'subquery',
    'query_type' => 'format',
    'subquery' => 'SELECT eabr.lead_id FROM relationship_card_lead eabr WHERE eabr.card_number = \'{0}\'',
  ),
  'optinprimary' => 
  array (
    'type' => 'enum',
    'options' => 'email_confirmed_opt_in_dom',
    'query_type' => 'default',
    'operator' => 'subquery',
    'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND eabr.primary_address = \'1\' AND ea.confirm_opt_in LIKE',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_OPT_IN_FLAG_PRIMARY',
  ),
  'favorites_only' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'checked_only' => true,
    'subquery' => 'SELECT favorites.parent_id FROM favorites
			                    WHERE favorites.deleted = 0
			                        and favorites.parent_type = \'Leads\'
			                        and favorites.assigned_user_id = \'{1}\'',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'assistant' => 
  array (
    'query_type' => 'default',
  ),
  'website' => 
  array (
    'query_type' => 'default',
  ),
  'address_street' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_street',
      1 => 'alt_address_street',
    ),
  ),
  'address_city' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_city',
      1 => 'alt_address_city',
    ),
  ),
  'address_state' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_state',
      1 => 'alt_address_state',
    ),
  ),
  'address_postalcode' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_postalcode',
      1 => 'alt_address_postalcode',
    ),
  ),
  'address_country' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_country',
      1 => 'alt_address_country',
    ),
  ),
  'current_user_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'assigned_user_id',
    ),
    'my_items' => true,
    'vname' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
  ),
  'assigned_user_id' => 
  array (
    'query_type' => 'default',
  ),
  'status' => 
  array (
    'query_type' => 'default',
    'options' => 'lead_status_dom',
    'template_var' => 'STATUS_OPTIONS',
  ),
  'open_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'status',
    ),
    'operator' => 'not in',
    'closed_values' => 
    array (
      0 => 'Dead',
      1 => 'Recycled',
      2 => 'Converted',
    ),
    'type' => 'bool',
  ),
  'range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
);


function composeQuery($searchTag) {
  return "SELECT  leads.id , leads.assigned_user_id , 
                  leads.facebook_or_zalo_name , leads.fullname , 
                  leads.account_name , leads.account_id  , 
                  jt0.user_name assigned_user_name , jt0.created_by assigned_user_name_owner  , 
                  'Users' assigned_user_name_mod, leads.date_entered , 
                  leads.created_by  FROM leads  
                  LEFT JOIN leads_cstm ON leads.id = leads_cstm.id_c   
                  LEFT JOIN  users jt0 ON leads.assigned_user_id=jt0.id AND jt0.deleted=0 AND jt0.deleted=0 
                  WHERE (
                    leads.id IN (SELECT eabr.lead_id FROM relationship_card_lead eabr WHERE eabr.card_number = '{$searchTag}')  
                    AND leads.deleted=0 ORDER BY leads.facebook_or_zalo_name ASC LIMIT 0,21)
        ";
}