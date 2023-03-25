<?php
$viewdefs['Leads'] =
  array(
    'EditView' =>
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
            8 => '<input type="hidden" name="phone_number_primaryx" id = "phone_number_primaryx" value="{$bean->phone_number_primary}">',
            9 => '<input type="hidden" name="sale_stages_val" id = "sale_stages_val" value="{$bean->sale_stage}">',
            10 => '<input type="hidden" name="ho_name_val" id = "ho_name_val" value="{$bean->ho_name}">',
          ),
          'buttons' =>
          array(
            0 => array(
              'customCode' => '
              <input 
                title="Save" 
                accesskey="a" 
                class="button primary" 
                onclick="
                  var _form = document.getElementById(\'EditView\'); 
                  _form.action.value=\'Save\'; 
                  if(check_form(\'EditView\'))
                    SUGAR.ajaxUI.submitForm(_form);
                    return false;" 
                type="submit" 
                name="button" 
                value="Save" 
                id="SAVE"
              >'
            ),
            1 => 'CANCEL',
          ),
          'headerTpl' => 'include/EditView/header.tpl',
          'footerTpl' => 'include/EditView/footer.tpl',
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
            'file' => 'custom/modules/Leads/editview.js',
          )
        ),
        'javascript' => '
        <script type="text/javascript" src="include/SugarEmailAddress/SugarEmailAddress.js"></script>
        <script type="text/javascript">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>
        ',
        'useTabs' => false,
        'tabDefs' =>
        array(
          'LBL_CONTACT_INFORMATION' =>
          array(
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ADVANCED' =>
          array(
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
        ),
      ),
      'panels' =>
      array(
        'LBL_EDIT_ROLE_MKT' =>
        array(
          0 => array(
            0 => 'facebook_or_zalo_name',
            1 => "data_sources",
          ),
          1 =>
          array(
            0 => array(
              'name' => 'phone_number_primary',
              'label' => 'LBL_PHONE_NUMBER_PRIMARY',
              'displayParams' =>
              array(
                'required' => true,
              ),
              'customCode' => '  
                <div class="row">
                  <div class="col-xs-6 input_phone_number_primary">
                    <input id="phone_number_primary" type="text" title value="{$fields.phone_number_primary.value}" name="phone_number_primary""> 
                  </div>
                  <div class="col-xs-3 btn-phone">
                    <i class="glyphicon glyphicon-earphone"></i>
                  </div>

                  <div class="col-xs-3 btn-phone">
                    <img src="icons8-zalo-48.png" alt="zalo" width="36px" height="36px">
                  </div>
                </div>
                ',
            ),
            1 => "card_bark_type",
          ),
          2 =>
          array(
            0 => array(
              'name' => 'is_record',
              'label' => 'LBL_IS_RECORD',
              'customCode' => '  
                <div class="row">
                  <div class="col-xs-7 btn-record">
                  </div>
                </div>
                ',
            ),
            1 => 'service',
          ),
          3 =>
          array(
            0 => 'bank',
            1 => 'payment_day',
          ),
          4 =>
          array(
            0 => "transaction_amount",
            1 => 'fee',
          ),
          5 =>
          array(
            0 => 'sale_stage',
            1 => 'lead_status',
          ),
          6 =>
          array(
            0 => 'owned_branch',
            1 => 'ro_name',
          ),
          7 =>
          array(
            0 => "contact_date",
            1 => "note",
          )
        ),
        'LBL_EDIT_ROLE_RO' =>
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
            0 => array(
              'name' => 'phone_number_extra',
              'customCode' => '  
                <div class="row">
                  <div class="col-xs-6 input_phone_number_extra">
                    <input id="phone_number_extra" type="text" title value="{$fields.phone_number_extra.value}" name="phone_number_extra""> 
                  </div>
                  <div class="col-xs-3 btn-phone_number_extra">
                    <i class="glyphicon glyphicon-earphone"></i>
                  </div>

                  <div class="col-xs-3 btn-phone">
                    <img src="icons8-zalo-48.png" alt="zalo_extra" width="36px" height="36px">
                  </div>
                </div>
                ',
            ),
            1 => "career"
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
            1 => array(
              'name' => 'status',
              'customCode' => '  
              <div class="col-xs-12 card-number-list">
                <div class="col-xs-12 card-number-add-line-container emailaddresses" id="{$module}emailAddressesTable{$index}">
                  <button type="button" class="btn btn-danger card-number-add-button" title="{$app_strings.LBL_ID_FF_ADD_EMAIL} " {$other_attributes}>
                    <span class="suitepicon suitepicon-action-plus"></span><span></span>
                  </button>
                </div>
              </div>
              <input type="hidden" name="useEmailWidget" value="true">
              ',
            ),
          ),
          9 =>
          array(
            0 => "ho_name",
            1 => "note",
          ),
          10 =>
          array(
            0 => "lead_status",
            1 => "MKT_day_shared_BU",
          ),
          11 =>
          array(
            0 => array(
              'name' => 'day_ro_modified_sale_stage',
              'customCode' => '  
                <div class="row">
                  <div class="col-xs-12">
                    <p>{$fields.day_ro_modified_sale_stage.value}</p>
                  </div>
                </div>
                ',
            ),
            1 => ""
          ),
        ),
      ),
    ),
  );
