<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['lead_status'] = array(
    'table' => 'lead_status', 
    'fields' => array(
        array('name' => 'id', 'type' => 'varchar', 'len' => '36',),
        array('name' => 'name', 'type' => 'varchar', 'len' => '255'),
    ), 'indices' => array(
        array('name' => 'lead_statuspk', 'type' => 'primary', 'fields' => array('id'))
    )
);