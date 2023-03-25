<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['service'] = array(
    'table' => 'service', 
    'fields' => array(
        array('name' => 'id', 'type' => 'varchar', 'len' => '36',),
        array('name' => 'name', 'type' => 'varchar', 'len' => '255'),
    ), 'indices' => array(
        array('name' => 'servicepk', 'type' => 'primary', 'fields' => array('id'))
    )
);