<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$dictionary['relationship_card_lead'] = array(
    'table' => 'relationship_card_lead', 
    'fields' => array(
        array('name' => 'id', 'type' => 'varchar', 'len' => '36',),
        array('name' => 'lead_id', 'type' => 'varchar', 'len' => '36'),
        array('name' => 'card_number', 'type' => 'varchar', 'len' => '255'),
    ), 'indices' => array(
        array('name' => 'relationship_card_leadpk', 'type' => 'primary', 'fields' => array('id'))
    )
);