<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

global $app_list_strings;
$configurator = new Configurator();
$searchdefs ['Leads'] =
    array(
        'layout' =>
            array(
                'basic_search' =>
                    array(
                        0 =>
                            array(
                                'name' => 'search_name',
                                'label' => 'LBL_NAME',
                                'type' => 'name',
                            ),
                        1 =>
                            array(
                                'name' => 'current_user_only',
                                'label' => 'LBL_CURRENT_USER_FILTER',
                                'type' => 'bool',
                            ),
                        array(
                            'name' => 'open_only',
                            'label' => 'LBL_OPEN_ITEMS',
                            'type' => 'bool',
                            'default' => false,
                            'width' => '10%'
                        ),
                        array('name' => 'favorites_only', 'label' => 'LBL_FAVORITES_FILTER', 'type' => 'bool',),
                    ),
                'advanced_search' =>
                    array(
                        'citizen_identification' =>
                            array(
                                'name' => 'citizen_identification',
                                'default' => true,
                                'width' => '10%',
                            ),
                        'phone_number_primary' =>
                            array(
                                'name' => 'phone_number_primary',
                                'default' => true,
                                'width' => '10%',
                            ),
                        'card_bark_type' =>
                            array(
                                'name' => 'card_bark_type',
                                'default' => true,
                                'width' => '10%',
                            ),
                        'bank' =>
                            array(
                                'name' => 'bank',
                                'default' => true,
                                'width' => '10%',
                            ),
                        'sale_stage' =>
                            array(
                                'name' => 'sale_stage',
                                'default' => true,
                                'width' => '10%',
                            ),
                        'lead_status' =>
                            array(
                                'name' => 'lead_status',
                                'default' => true,
                                'width' => '10%',
                            ),
                        'email' =>
                            array(
                                'name' => 'email',
                                'default' => false,
                                'label' => 'LBL_CARD_NUMBER',
                                'width' => '10%',
                            ),
                        'data_sources' =>
                            array(
                                'name' => 'data_sources',
                                'default' => false,
                                'label' => 'LBL_DATA_SOURCES',
                                'width' => '10%',
                            ),
                        'date_modified' =>
                            array(
                                'name' => 'date_modified',
                                'default' => false,
                                'label' => 'LBL_DATE_MODIFIED',
                                'width' => '10%',
                            ),


                    ),
            ),
        'templateMeta' =>
            array(
                'maxColumns' => '3',
                'maxColumnsBasic' => '4',
                'widths' =>
                    array(
                        'label' => '10',
                        'field' => '30',
                    ),
            ),
    );

if ($configurator->isConfirmOptInEnabled() || $configurator->isOptInEnabled()) {
    $searchdefs['Leads']['layout']['advanced_search']['optinprimary'] =
        array(
            'name' => 'optinprimary',
            'label' => 'LBL_OPT_IN_FLAG_PRIMARY',
            'type' => 'enum',
            'options' => $app_list_strings['email_confirmed_opt_in_dom'],
            'default' => true,
            'width' => '10%',
        );
}