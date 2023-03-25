<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['bank'] = array(
    'table' => 'bank', 
    'fields' => array(
        array('name' => 'id', 'type' => 'varchar', 'len' => '36',),
        array('name' => 'name', 'type' => 'varchar', 'len' => '255'),
    ), 'indices' => array(
        array('name' => 'bankpk', 'type' => 'primary', 'fields' => array('id'))
    )
);