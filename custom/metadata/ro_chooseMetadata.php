<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['ro_choose'] = array(
    'table' => 'ro_choose', 
    'fields' => array(
        array('name' => 'lead_id', 'type' => 'varchar', 'len' => '36')
    ), 'indices' => array(
        array('name' => 'ro_choosepk', 'type' => 'primary', 'fields' => array('lead_id'))
    )
);