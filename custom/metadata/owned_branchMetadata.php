<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['owned_branch'] = array(
    'table' => 'owned_branch', 
    'fields' => array(
        array('name' => 'id', 'type' => 'varchar', 'len' => '36',),
        array('name' => 'name', 'type' => 'varchar', 'len' => '255'),
    ), 'indices' => array(
        array('name' => 'owned_branchpk', 'type' => 'primary', 'fields' => array('id'))
    )
);