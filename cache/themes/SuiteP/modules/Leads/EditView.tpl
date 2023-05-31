

<script>
    {literal}
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    {/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
{$PAGINATION}
</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">   
<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">   
<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">   
<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">   
<input type="hidden" name="lead_status_id" id = "lead_status_id" value="{$bean->lead_status}">   
<input type="hidden" name="lead_id" id = "lead_id" value="{$bean->id}">   
<input type="hidden" name="ro_name_val" id = "ro_name_val" value="{$bean->ro_name}">   
<input type="hidden" name="owner_branch_val" id = "owner_branch_val" value="{$bean->owned_branch}">   
<input type="hidden" name="phone_number_primaryx" id = "phone_number_primaryx" value="{$bean->phone_number_primary}">   
<input type="hidden" name="sale_stages_val" id = "sale_stages_val" value="{$bean->sale_stage}">   
<input type="hidden" name="ho_name_val" id = "ho_name_val" value="{$bean->ho_name}">   
<div class="buttons">
<input 
title="Save" accesskey="a" class="button primary" onclick="
var _form = document.getElementById('EditView'); 
_form.action.value='Save'; 
if(check_form('EditView'))
SUGAR.ajaxUI.submitForm(_form);
return false;" type="submit" name="button" value="Save" id="SAVE"/>
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Leads'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Leads", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
{$PAGINATION}
</div>
</td>
</tr>
</table>
{sugar_include include=$includes}
<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_EDIT_ROLE_MKT' module='Leads'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_EDIT_ROLE_MKT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="facebook_or_zalo_name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FACEBOOK_OR_ZALO_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_FACEBOOK_OR_ZALO_NAME' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="facebook_or_zalo_name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.facebook_or_zalo_name.value) <= 0}
{assign var="value" value=$fields.facebook_or_zalo_name.default_value }
{else}
{assign var="value" value=$fields.facebook_or_zalo_name.value }
{/if}
<input type='text' name='{$fields.facebook_or_zalo_name.name}'
id='{$fields.facebook_or_zalo_name.name}' size='30'
maxlength='255'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="data_sources">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DATA_SOURCES">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATA_SOURCES' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="data_sources"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.data_sources.name}"
id="{$fields.data_sources.name}"
title=''              
>
{if isset($fields.data_sources.value) && $fields.data_sources.value != ''}
{html_options options=$fields.data_sources.options selected=$fields.data_sources.value}
{else}
{html_options options=$fields.data_sources.options selected=$fields.data_sources.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phone_number_primary">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHONE_NUMBER_PRIMARY">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PHONE_NUMBER_PRIMARY' module='Leads'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="phone_number_primary"  >
{counter name="panelFieldCount"  print=false}
<div class="row">
<div class="col-xs-6 input_phone_number_primary">
<input tabindex="0"  id="phone_number_primary" type="text" title value="{$fields.phone_number_primary.value}" name="phone_number_primary""> 
</div>
<div class="col-xs-3 btn-phone">
<i class="glyphicon glyphicon-earphone"></i>
</div>
<div class="col-xs-3 btn-phone">
<img src="icons8-zalo-48.png" alt="zalo" width="36px" height="36px">
</div>
</div>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="card_bark_type">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TYPE_CARD_BANK">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE_CARD_BANK' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="card_bark_type"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.card_bark_type.name}"
id="{$fields.card_bark_type.name}"
title=''              
>
{if isset($fields.card_bark_type.value) && $fields.card_bark_type.value != ''}
{html_options options=$fields.card_bark_type.options selected=$fields.card_bark_type.value}
{else}
{html_options options=$fields.card_bark_type.options selected=$fields.card_bark_type.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="is_record">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_IS_RECORD">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_IS_RECORD' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="is_record"  >
{counter name="panelFieldCount"  print=false}
<div class="row">
<div class="col-xs-7 btn-record">
</div>
</div>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="service">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SERVICE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SERVICE' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="service"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.service.name}"
id="{$fields.service.name}"
title=''              
>
{if isset($fields.service.value) && $fields.service.value != ''}
{html_options options=$fields.service.options selected=$fields.service.value}
{else}
{html_options options=$fields.service.options selected=$fields.service.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="bank">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_BANK">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_BANK' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="bank"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.bank.name}"
id="{$fields.bank.name}"
title=''              
>
{if isset($fields.bank.value) && $fields.bank.value != ''}
{html_options options=$fields.bank.options selected=$fields.bank.value}
{else}
{html_options options=$fields.bank.options selected=$fields.bank.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="payment_day">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PAYMENT_DAY">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PAYMENT_DAY' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="payment_day"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.payment_day.value) <= 0}
{assign var="value" value=$fields.payment_day.default_value }
{else}
{assign var="value" value=$fields.payment_day.value }
{/if}  
<input type='text' name='{$fields.payment_day.name}' 
id='{$fields.payment_day.name}' size='30'  value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="transaction_amount">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TRANSACTION_AMOUNT">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_TRANSACTION_AMOUNT' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="double" field="transaction_amount"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.transaction_amount.value) <= 0}
{assign var="value" value=$fields.transaction_amount.default_value }
{else}
{assign var="value" value=$fields.transaction_amount.value }
{/if}  
<input type='text' name='{$fields.transaction_amount.name}'
id='{$fields.transaction_amount.name}'
size='30'
maxlength='255'value='{sugar_number_format var=$value  }'
title=''
tabindex='0'
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="fee">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FEE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_FEE' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="double" field="fee"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.fee.value) <= 0}
{assign var="value" value=$fields.fee.default_value }
{else}
{assign var="value" value=$fields.fee.value }
{/if}  
<input type='text' name='{$fields.fee.name}'
id='{$fields.fee.name}'
size='30'
maxlength='255'value='{sugar_number_format var=$value  }'
title=''
tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="sale_stage">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SALE_STAGE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SALE_STAGE' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="sale_stage"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.sale_stage.name}"
id="{$fields.sale_stage.name}"
title=''              
>
{if isset($fields.sale_stage.value) && $fields.sale_stage.value != ''}
{html_options options=$fields.sale_stage.options selected=$fields.sale_stage.value}
{else}
{html_options options=$fields.sale_stage.options selected=$fields.sale_stage.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="lead_status">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LEAD_STATUS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_LEAD_STATUS' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="lead_status"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.lead_status.name}"
id="{$fields.lead_status.name}"
title=''              
>
{if isset($fields.lead_status.value) && $fields.lead_status.value != ''}
{html_options options=$fields.lead_status.options selected=$fields.lead_status.value}
{else}
{html_options options=$fields.lead_status.options selected=$fields.lead_status.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="owned_branch">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_OWNED_BRANCH">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_OWNED_BRANCH' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="owned_branch"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.owned_branch.name}"
id="{$fields.owned_branch.name}"
title=''              
>
{if isset($fields.owned_branch.value) && $fields.owned_branch.value != ''}
{html_options options=$fields.owned_branch.options selected=$fields.owned_branch.value}
{else}
{html_options options=$fields.owned_branch.options selected=$fields.owned_branch.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="ro_name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_RO_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_RO_NAME' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="ro_name"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.ro_name.name}"
id="{$fields.ro_name.name}"
title=''              
>
{if isset($fields.ro_name.value) && $fields.ro_name.value != ''}
{html_options options=$fields.ro_name.options selected=$fields.ro_name.value}
{else}
{html_options options=$fields.ro_name.options selected=$fields.ro_name.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="contact_date">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CONTACT_DATE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CONTACT_DATE' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="contact_date"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.contact_date.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.contact_date.name}" id="{$fields.contact_date.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.contact_date.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.contact_date.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.contact_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="note">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NOTE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_NOTE' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="note"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.note.value)}
{assign var="value" value=$fields.note.default_value }
{else}
{assign var="value" value=$fields.note.value }
{/if}
<textarea  id='{$fields.note.name}' name='{$fields.note.name}'
    rows="4"
    cols="60"
    title='' tabindex="0" 
     >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_EDIT_ROLE_RO' module='Leads'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_EDIT_ROLE_RO">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="fullname">


<div class="col-xs-12 col-sm-4 label" data-label="">

{minify}
&nbsp;

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="" field=""  >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="bank">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_BANK">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_BANK' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="bank"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.bank.name}"
id="{$fields.bank.name}"
title=''              
>
{if isset($fields.bank.value) && $fields.bank.value != ''}
{html_options options=$fields.bank.options selected=$fields.bank.value}
{else}
{html_options options=$fields.bank.options selected=$fields.bank.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="citizen_identification">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CITIZEN_IDENTIFICATION">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CITIZEN_IDENTIFICATION' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="citizen_identification"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.citizen_identification.value) <= 0}
{assign var="value" value=$fields.citizen_identification.default_value }
{else}
{assign var="value" value=$fields.citizen_identification.value }
{/if}
<input type='text' name='{$fields.citizen_identification.name}'
id='{$fields.citizen_identification.name}' size='30'
maxlength='255'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="card_bark_type">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TYPE_CARD_BANK">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE_CARD_BANK' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="card_bark_type"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.card_bark_type.name}"
id="{$fields.card_bark_type.name}"
title=''              
>
{if isset($fields.card_bark_type.value) && $fields.card_bark_type.value != ''}
{html_options options=$fields.card_bark_type.options selected=$fields.card_bark_type.value}
{else}
{html_options options=$fields.card_bark_type.options selected=$fields.card_bark_type.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="citizen_identification_issuance_date">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CITIZEN_IDENTIFICATION_ISSUANCE_DATE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CITIZEN_IDENTIFICATION_ISSUANCE_DATE' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="citizen_identification_issuance_date"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.citizen_identification_issuance_date.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.citizen_identification_issuance_date.name}" id="{$fields.citizen_identification_issuance_date.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.citizen_identification_issuance_date.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.citizen_identification_issuance_date.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.citizen_identification_issuance_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="real_transaction_amount">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_REAL_TRANSACTION_AMOUNT">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_REAL_TRANSACTION_AMOUNT' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="double" field="real_transaction_amount"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.real_transaction_amount.value) <= 0}
{assign var="value" value=$fields.real_transaction_amount.default_value }
{else}
{assign var="value" value=$fields.real_transaction_amount.value }
{/if}  
<input type='text' name='{$fields.real_transaction_amount.name}'
id='{$fields.real_transaction_amount.name}'
size='30'
maxlength='255'value='{sugar_number_format var=$value  }'
title=''
tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="citizen_identification_issuance_place">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CITIZEN_IDENTIFICATION_ISSUANCE_PLACE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CITIZEN_IDENTIFICATION_ISSUANCE_PLACE' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="citizen_identification_issuance_place"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.citizen_identification_issuance_place.value) <= 0}
{assign var="value" value=$fields.citizen_identification_issuance_place.default_value }
{else}
{assign var="value" value=$fields.citizen_identification_issuance_place.value }
{/if}
<input type='text' name='{$fields.citizen_identification_issuance_place.name}'
id='{$fields.citizen_identification_issuance_place.name}' size='30'
maxlength='255'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="real_fee">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_REAL_FEE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_REAL_FEE' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="double" field="real_fee"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.real_fee.value) <= 0}
{assign var="value" value=$fields.real_fee.default_value }
{else}
{assign var="value" value=$fields.real_fee.value }
{/if}  
<input type='text' name='{$fields.real_fee.name}'
id='{$fields.real_fee.name}'
size='30'
maxlength='255'value='{sugar_number_format var=$value  }'
title=''
tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="address_follow_citizen_identification">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ADDRESS_FOLLOW_CITIZEN_IDENTIFICATION">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_FOLLOW_CITIZEN_IDENTIFICATION' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="address_follow_citizen_identification"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.address_follow_citizen_identification.value) <= 0}
{assign var="value" value=$fields.address_follow_citizen_identification.default_value }
{else}
{assign var="value" value=$fields.address_follow_citizen_identification.value }
{/if}
<input type='text' name='{$fields.address_follow_citizen_identification.name}'
id='{$fields.address_follow_citizen_identification.name}' size='30'
maxlength='255'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="payment_day">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PAYMENT_DAY">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PAYMENT_DAY' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="payment_day"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.payment_day.value) <= 0}
{assign var="value" value=$fields.payment_day.default_value }
{else}
{assign var="value" value=$fields.payment_day.value }
{/if}  
<input type='text' name='{$fields.payment_day.name}' 
id='{$fields.payment_day.name}' size='30'  value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="birthday">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_BIRTHDAY">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_BIRTHDAY' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="birthday"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.birthday.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.birthday.name}" id="{$fields.birthday.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.birthday.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.birthday.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.birthday.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="successful_trading_day">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SUCCESSFUL_TRADING_DAY">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUCCESSFUL_TRADING_DAY' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="successful_trading_day"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.successful_trading_day.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.successful_trading_day.name}" id="{$fields.successful_trading_day.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.successful_trading_day.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.successful_trading_day.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.successful_trading_day.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phone_number_extra">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHONE_NUMBER_EXTRA">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PHONE_NUMBER_EXTRA' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="phone_number_extra"  >
{counter name="panelFieldCount"  print=false}
<div class="row">
<div class="col-xs-6 input_phone_number_extra">
<input tabindex="0"  id="phone_number_extra" type="text" title value="{$fields.phone_number_extra.value}" name="phone_number_extra""> 
</div>
<div class="col-xs-3 btn-phone_number_extra">
<i class="glyphicon glyphicon-earphone"></i>
</div>
<div class="col-xs-3 btn-phone">
<img src="icons8-zalo-48.png" alt="zalo_extra" width="36px" height="36px">
</div>
</div>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="career">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CAREER">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CAREER' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="career"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.career.value) <= 0}
{assign var="value" value=$fields.career.default_value }
{else}
{assign var="value" value=$fields.career.value }
{/if}
<input type='text' name='{$fields.career.name}'
id='{$fields.career.name}' size='30'
maxlength='255'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="district_customer_live">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DISTRICT_CUSTOMER_LIVE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DISTRICT_CUSTOMER_LIVE' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="district_customer_live"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.district_customer_live.value) <= 0}
{assign var="value" value=$fields.district_customer_live.default_value }
{else}
{assign var="value" value=$fields.district_customer_live.value }
{/if}
<input type='text' name='{$fields.district_customer_live.name}'
id='{$fields.district_customer_live.name}' size='30'
maxlength='255'        value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="sale_stage">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SALE_STAGE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SALE_STAGE' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="sale_stage"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.sale_stage.name}"
id="{$fields.sale_stage.name}"
title=''              
>
{if isset($fields.sale_stage.value) && $fields.sale_stage.value != ''}
{html_options options=$fields.sale_stage.options selected=$fields.sale_stage.value}
{else}
{html_options options=$fields.sale_stage.options selected=$fields.sale_stage.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="service">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SERVICE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SERVICE_2' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="service"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.service.name}"
id="{$fields.service.name}"
title=''              
>
{if isset($fields.service.value) && $fields.service.value != ''}
{html_options options=$fields.service.options selected=$fields.service.value}
{else}
{html_options options=$fields.service.options selected=$fields.service.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="status">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATUS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="status"  >
{counter name="panelFieldCount"  print=false}
<div class="col-xs-12 card-number-list">
<div class="col-xs-12 card-number-add-line-container emailaddresses" id="{$module}emailAddressesTable{$index}">
<button type="button" class="btn btn-danger card-number-add-button" title="{$app_strings.LBL_ID_FF_ADD_EMAIL} " {$other_attributes}>
<span class="suitepicon suitepicon-action-plus"></span><span></span>
</button>
</div>
</div>
<input tabindex="0"  type="hidden" name="useEmailWidget" value="true">
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="ho_name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_HO_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_HO_NAME' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="ho_name"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.ho_name.name}"
id="{$fields.ho_name.name}"
title=''              
>
{if isset($fields.ho_name.value) && $fields.ho_name.value != ''}
{html_options options=$fields.ho_name.options selected=$fields.ho_name.value}
{else}
{html_options options=$fields.ho_name.options selected=$fields.ho_name.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="note">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NOTE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_NOTE' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="note"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.note.value)}
{assign var="value" value=$fields.note.default_value }
{else}
{assign var="value" value=$fields.note.value }
{/if}
<textarea  id='{$fields.note.name}' name='{$fields.note.name}'
    rows="4"
    cols="60"
    title='' tabindex="0" 
     >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="lead_status">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LEAD_STATUS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_LEAD_STATUS' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="lead_status"  >
{counter name="panelFieldCount" print=false}

<select name="{$fields.lead_status.name}"
id="{$fields.lead_status.name}"
title=''              
>
{if isset($fields.lead_status.value) && $fields.lead_status.value != ''}
{html_options options=$fields.lead_status.options selected=$fields.lead_status.value}
{else}
{html_options options=$fields.lead_status.options selected=$fields.lead_status.default}
{/if}
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="MKT_day_shared_BU">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MKT_DAY_SHARED_FOR_BU">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_MKT_DAY_SHARED_FOR_BU' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetime" field="MKT_day_shared_BU"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.MKT_day_shared_BU.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.MKT_day_shared_BU.name}" id="{$fields.MKT_day_shared_BU.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.MKT_day_shared_BU.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.MKT_day_shared_BU.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.MKT_day_shared_BU.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="day_ro_modified_sale_stage">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DAY_RO_MODIFIED_SALE_STAGE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DAY_RO_MODIFIED_SALE_STAGE' module='Leads'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="day_ro_modified_sale_stage"  >
{counter name="panelFieldCount"  print=false}
<div class="row">
<div class="col-xs-12">
<p>{$fields.day_ro_modified_sale_stage.value}</p>
</div>
</div>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="">
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>
</div>
</div>

<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<input 
title="Save" accesskey="a" class="button primary" onclick="
var _form = document.getElementById('EditView'); 
_form.action.value='Save'; 
if(check_form('EditView'))
SUGAR.ajaxUI.submitForm(_form);
return false;" type="submit" name="button" value="Save" id="SAVE"/>
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Leads'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Leads", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
<script type="text/javascript" src="include/SugarEmailAddress/SugarEmailAddress.js"></script>
<script type="text/javascript">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>
<!-- End Meta-Data Javascript -->
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>
{literal}
<script type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        $('#EditView_tabs div.panel-content div.panel').hide();
        $('#EditView_tabs div.panel-content div.panel.tab-panel-' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^tab-content-(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    </script>
{/literal}{literal}
<script type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Ngày tạo' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Ngày chỉnh sửa' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'salutation', 'enum', false,'{/literal}{sugar_translate label='LBL_SALUTATION' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'first_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_FIRST_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'last_name', 'varchar', true,'{/literal}{sugar_translate label='LBL_LAST_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'full_name', 'fullname', false,'{/literal}{sugar_translate label='LBL_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'title', 'varchar', false,'{/literal}{sugar_translate label='LBL_TITLE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'photo', 'image', false,'{/literal}{sugar_translate label='LBL_PHOTO' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'department', 'varchar', false,'{/literal}{sugar_translate label='LBL_DEPARTMENT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'do_not_call', 'bool', false,'{/literal}{sugar_translate label='LBL_DO_NOT_CALL' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'phone_home', 'phone', false,'{/literal}{sugar_translate label='LBL_HOME_PHONE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'email', 'email', false,'{/literal}{sugar_translate label='LBL_ANY_EMAIL' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'phone_mobile', 'phone', false,'{/literal}{sugar_translate label='LBL_MOBILE_PHONE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'phone_work', 'phone', false,'{/literal}{sugar_translate label='LBL_OFFICE_PHONE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'phone_other', 'phone', false,'{/literal}{sugar_translate label='LBL_OTHER_PHONE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'phone_fax', 'phone', false,'{/literal}{sugar_translate label='LBL_FAX_PHONE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'email1', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'email2', 'varchar', false,'{/literal}{sugar_translate label='LBL_OTHER_EMAIL_ADDRESS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'invalid_email', 'bool', false,'{/literal}{sugar_translate label='LBL_INVALID_EMAIL' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'email_opt_out', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_OPT_OUT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'lawful_basis', 'multienum', false,'{/literal}{sugar_translate label='LBL_LAWFUL_BASIS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'date_reviewed', 'date', false,'{/literal}{sugar_translate label='LBL_DATE_REVIEWED' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'lawful_basis_source', 'enum', false,'{/literal}{sugar_translate label='LBL_LAWFUL_BASIS_SOURCE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET_2' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET_3' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_CITY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STATE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_POSTALCODE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_COUNTRY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET_2' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET_3' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_CITY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STATE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_POSTALCODE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_COUNTRY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'assistant', 'varchar', false,'{/literal}{sugar_translate label='LBL_ASSISTANT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'assistant_phone', 'phone', false,'{/literal}{sugar_translate label='LBL_ASSISTANT_PHONE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'email_addresses_non_primary', 'email', false,'{/literal}{sugar_translate label='LBL_EMAIL_NON_PRIMARY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'converted', 'bool', false,'{/literal}{sugar_translate label='LBL_CONVERTED' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'refered_by', 'varchar', false,'{/literal}{sugar_translate label='LBL_REFERED_BY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'lead_source', 'enum', false,'{/literal}{sugar_translate label='LBL_LEAD_SOURCE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'lead_source_description', 'text', false,'{/literal}{sugar_translate label='LBL_LEAD_SOURCE_DESCRIPTION' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'status', 'enum', false,'{/literal}{sugar_translate label='LBL_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'status_description', 'text', false,'{/literal}{sugar_translate label='LBL_STATUS_DESCRIPTION' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'reports_to_id', 'id', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO_ID' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'report_to_name', 'relate', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'account_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'account_description', 'text', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_DESCRIPTION' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'contact_id', 'id', false,'{/literal}{sugar_translate label='LBL_CONTACT_ID' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'account_id', 'id', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_ID' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'opportunity_id', 'id', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_ID' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'opportunity_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'opportunity_amount', 'varchar', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_AMOUNT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'campaign_id', 'id', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_ID' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'campaign_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'c_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'm_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_name', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'webtolead_email1', 'email', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'webtolead_email2', 'email', false,'{/literal}{sugar_translate label='LBL_OTHER_EMAIL_ADDRESS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'webtolead_email_opt_out', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_OPT_OUT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'webtolead_invalid_email', 'bool', false,'{/literal}{sugar_translate label='LBL_INVALID_EMAIL' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'birthdate', 'date', false,'{/literal}{sugar_translate label='LBL_BIRTHDATE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'portal_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_PORTAL_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'portal_app', 'varchar', false,'{/literal}{sugar_translate label='LBL_PORTAL_APP' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'website', 'url', false,'{/literal}{sugar_translate label='LBL_WEBSITE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'e_invite_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_CONT_INVITE_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'event_status_name', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_INVITE_STATUS_EVENT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'event_invite_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_INVITE_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'e_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_CONT_ACCEPT_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'event_accept_status', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS_EVENT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'event_status_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'day_has_phone_number', 'date', false,'{/literal}{sugar_translate label='LBL_DAY_HAS_PHONE_NUMBER' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'month_has_phone_number', 'varchar', false,'{/literal}{sugar_translate label='LBL_MONTH_HAS_PHONE_NUMBER' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'year_has_phone_number', 'varchar', false,'{/literal}{sugar_translate label='LBL_YEAR_HAS_PHONE_NUMBER' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'successful_trading_day', 'date', false,'{/literal}{sugar_translate label='LBL_SUCCESSFUL_TRADING_DAY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'successful_trading_month', 'varchar', false,'{/literal}{sugar_translate label='LBL_SUCCESSFUL_TRADING_MONTH' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'data_sources', 'enum', false,'{/literal}{sugar_translate label='LBL_DATA_SOURCES' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'ro_name', 'enum', false,'{/literal}{sugar_translate label='LBL_RO_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'ho_name', 'enum', false,'{/literal}{sugar_translate label='LBL_HO_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'owned_branch', 'enum', false,'{/literal}{sugar_translate label='LBL_OWNED_BRANCH' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'receiving_branch', 'enum', false,'{/literal}{sugar_translate label='LBL_RECEIVING_BRANCH' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'facebook_or_zalo_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_FACEBOOK_OR_ZALO_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'facebook_url', 'varchar', false,'{/literal}{sugar_translate label='LBL_FACEBOOK_URL' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'phone_number_primary', 'varchar', true,'{/literal}{sugar_translate label='LBL_PHONE_NUMBER_PRIMARY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'phone_number_extra', 'varchar', false,'{/literal}{sugar_translate label='LBL_PHONE_NUMBER_EXTRA' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'citizen_identification', 'varchar', false,'{/literal}{sugar_translate label='LBL_CITIZEN_IDENTIFICATION' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'birthday', 'date', false,'{/literal}{sugar_translate label='LBL_BIRTHDAY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'contact_date', 'date', false,'{/literal}{sugar_translate label='LBL_CONTACT_DATE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'MKT_day_shared_BU_date', 'date', false,'MKT day shared for BU' );
addToValidate('EditView', 'day_shared_RO_date', 'date', false,'Day shared for RO' );
addToValidate('EditView', 'is_record', 'bool', false,'{/literal}{sugar_translate label='LBL_IS_RECORD' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'citizen_identification_issuance_date', 'date', false,'{/literal}{sugar_translate label='LBL_CITIZEN_IDENTIFICATION_ISSUANCE_DATE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'citizen_identification_issuance_place', 'varchar', false,'{/literal}{sugar_translate label='LBL_CITIZEN_IDENTIFICATION_ISSUANCE_PLACE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'address_follow_citizen_identification', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_FOLLOW_CITIZEN_IDENTIFICATION' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'district_customer_live', 'varchar', false,'{/literal}{sugar_translate label='LBL_DISTRICT_CUSTOMER_LIVE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'career', 'varchar', false,'{/literal}{sugar_translate label='LBL_CAREER' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'service', 'enum', false,'{/literal}{sugar_translate label='LBL_SERVICE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'fee', 'double', false,'{/literal}{sugar_translate label='LBL_FEE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'real_fee', 'double', false,'{/literal}{sugar_translate label='LBL_REAL_FEE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'card_bark_type', 'enum', false,'{/literal}{sugar_translate label='LBL_TYPE_CARD_BANK' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'bank', 'enum', false,'{/literal}{sugar_translate label='LBL_BANK' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'payment_day', 'int', false,'{/literal}{sugar_translate label='LBL_PAYMENT_DAY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'transaction_amount', 'double', false,'{/literal}{sugar_translate label='LBL_TRANSACTION_AMOUNT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'real_transaction_amount', 'double', false,'{/literal}{sugar_translate label='LBL_REAL_TRANSACTION_AMOUNT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'note', 'text', false,'{/literal}{sugar_translate label='LBL_NOTE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'sale_stage', 'enum', false,'{/literal}{sugar_translate label='LBL_SALE_STAGE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'lead_status', 'enum', false,'{/literal}{sugar_translate label='LBL_LEAD_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'day_ro_modified_sale_stage', 'date', false,'{/literal}{sugar_translate label='LBL_DAY_RO_MODIFIED_SALE_STAGE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'jjwg_maps_lng_c', 'float', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_LNG' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'jjwg_maps_lat_c', 'float', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_LAT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'jjwg_maps_geocode_status_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_GEOCODE_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'jjwg_maps_address_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_ADDRESS' module='Leads' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Leads' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Leads' for_js=true}{literal}', 'assigned_user_id' );
</script>{/literal}
