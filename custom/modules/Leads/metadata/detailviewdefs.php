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

$viewdefs['Leads'] =
  array(
    'DetailView' =>
    array(
      'templateMeta' =>
      array(
        'form' =>
        array(
          'hidden' =>
          array(
            0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
            1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
            2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
            3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
            4 => '<input type="hidden" name="lead_status_id" id = "lead_status_id" value="{$bean->lead_status}">',
            5 => '<input type="hidden" name="lead_id" id = "lead_id" value="{$bean->id}">',
            6 => '<input type="hidden" name="ro_name_val" id = "ro_name_val" value="{$bean->ro_name}">',
            7 => '<input type="hidden" name="owner_branch_val" id = "owner_branch_val" value="{$bean->owned_branch}">',
            8 => '<input type="hidden" name="lead_fullname" id = "lead_fullname" value="{$bean->fullname}">',
            9 => '<input type="hidden" name="ro_name_val" id = "ro_name_val" value="{$bean->ro_name}">',
            10 => '<input type="hidden" name="ho_name_val" id = "ho_name_val" value="{$bean->ho_name}">',
          ),
          'buttons' =>
          array(
              'SEND_CONFIRM_OPT_IN_EMAIL' => EmailAddress::getSendConfirmOptInEmailActionLinkDefs('Leads'),
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 =>
            array(
              'customCode' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}<input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'" name="convert" value="{$MOD.LBL_CONVERTLEAD}">{/if}',
              'sugar_html' =>
              array(
                'type' => 'button',
                'value' => '{$MOD.LBL_CONVERTLEAD}',
                'htmlOptions' =>
                array(
                  'title' => '{$MOD.LBL_CONVERTLEAD_TITLE}',
                  'accessKey' => '{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}',
                  'class' => 'button',
                  'onClick' => 'document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'',
                  'name' => 'convert',
                  'id' => 'convert_lead_button',
                ),
                'template' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}[CONTENT]{/if}',
              ),
            ),
            4 => 'FIND_DUPLICATES',
            5 =>
            array(
              'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
              'sugar_html' =>
              array(
                'type' => 'submit',
                'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'htmlOptions' =>
                array(
                  'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                  'class' => 'button',
                  'id' => 'manage_subscriptions_button',
                  'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';',
                  'name' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                ),
              ),
            ),
            'AOS_GENLET' =>
            array(
              'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_PRINT_AS_PDF}">',
            ),
          ),
          'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
          'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
        ),
        'maxColumns' => '2',
        'widths' =>
        array(
          0 =>
          array(
            'label' => '10',
            'field' => '30',
          ),
          1 =>
          array(
            'label' => '10',
            'field' => '30',
          ),
        ),
        'includes' =>
        array(
          0 =>
          array(
            'file' => 'custom/modules/Leads/detailview.js',
          ),
        ),
        'useTabs' => true,
        'tabDefs' =>
        array(
          'LBL_CONTACT_INFORMATION_MKT' =>
          array(
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_CONTACT_INFORMATION_RO' =>
          array(
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ADVANCED' =>
          array(
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ASSIGNMENT' =>
          array(
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
        ),
      ),
      'panels' =>
      array(
        'LBL_CONTACT_INFORMATION_MKT' =>
        array(
          0 => array(
            0 => 'facebook_or_zalo_name',
            1 => "data_sources",
          ),
          1 =>
          array(
            0 => "card_bark_type",
          ),
          2 =>
          array(
            0 => 'service',
            1 => 'bank',
          ),
          3 =>
          array(
            0 => 'receiving_branch',
            1 => "payment_day"
          ),
          4 =>
          array(
            0 => 'transaction_amount',
            1 => 'date_entered',
          ),
          5 =>
          array(
            0 => 'fee',
            1 => '',
          ),
          6 =>
          array(
            0 => 'sale_stage',
            1 => 'lead_status',
          ),
          7 =>
          array(
            0 => 'owned_branch',
            1 => 'ro_name',
          ),
          8 =>
          array(
            0 => "note",
            1 => '',
          ),
        ),
        'LBL_CONTACT_INFORMATION_RO' =>
        array(
          0 =>
          array(
            0 => 'fullname',
            1 => 'bank',
          ),
          1 =>
          array(
            0 => 'citizen_identification',
            1 => 'card_bark_type',
          ),
          2 =>
          array(
            0 => "citizen_identification_issuance_date",
            1 => 'real_transaction_amount',
          ),
          3 =>
          array(
            0 => "citizen_identification_issuance_place",
            1 => "real_fee"
          ),
          4 =>
          array(
            0 => "address_follow_citizen_identification",
            1 => "payment_day"
          ),
          5 =>
          array(
            0 => "birthday",
            1 => "successful_trading_day"
          ),
          6 =>
          array(
            0 => "career"
          ),
          7 =>
          array(
            0 => "district_customer_live",
            1 => "sale_stage"
          ),
          8 =>
          array(
            0 => array(
              'name' => 'service',
              'label' => 'LBL_SERVICE_2',
            ),
            
            1 => "ho_name"
          ),
          9 =>
          array(
            0 => "lead_status",
            1 => "day_ro_modified_sale_stage"
          )
        ),
        'LBL_PANEL_ADVANCED' =>
        array(
          0 =>
          array(
            0 => 'status',
            1 => 'lead_source',
          ),
          1 =>
          array(
            0 => 'status_description',
            1 => 'lead_source_description',
          ),
          2 =>
          array(
            0 => 'opportunity_amount',
            1 => 'refered_by',
          ),
          3 =>
          array(
            0 =>
            array(
              'name' => 'campaign_name',
              'label' => 'LBL_CAMPAIGN',
            ),
          ),
        ),
        'LBL_PANEL_ASSIGNMENT' =>
        array(
          0 =>
          array(
            0 =>
            array(
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            ),
            1 =>
            array(
              'name' => 'date_entered',
              'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            ),
          ),
        ),
      ),
    ),
  );
