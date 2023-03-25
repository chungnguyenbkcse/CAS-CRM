<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['relationship_sale_stage_lead_status'] = array(
    'table' => 'relationship_sale_stage_lead_status', 
    'fields' => array(
        array('name' => 'id', 'type' => 'varchar', 'len' => '36',),
        array('name' => 'sale_stage_id', 'type' => 'varchar', 'len' => '36'),
        array('name' => 'lead_status_id', 'type' => 'varchar', 'len' => '36'),
    ), 'indices' => array(
        array('name' => 'relationship_sale_stage_lead_statuspk', 'type' => 'primary', 'fields' => array('id'))
    )
);