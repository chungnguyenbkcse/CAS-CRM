<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['data_sources'] = array(
    'table' => 'data_sources', 
    'fields' => array(
        array('name' => 'id', 'type' => 'varchar', 'len' => '36',),
        array('name' => 'name', 'type' => 'varchar', 'len' => '255'),
    ), 'indices' => array(
        array('name' => 'data_sourcespk', 'type' => 'primary', 'fields' => array('id'))
    )
);