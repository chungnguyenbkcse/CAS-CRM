<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['ro_least'] = array(
    'table' => 'ro_least', 
    'fields' => array(
        array('name' => 'id', 'type' => 'varchar', 'len' => '36'),
        array('name' => 'time', 'type' => 'datetime'),
        array('name' => 'bu', 'type' => 'varchar', 'len' => '255'),
    ), 'indices' => array(
        array('name' => 'ro_leastpk', 'type' => 'primary', 'fields' => array('id'))
    )
);