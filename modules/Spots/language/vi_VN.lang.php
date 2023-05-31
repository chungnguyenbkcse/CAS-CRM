<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
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

$mod_strings = array(
    'LBL_ASSIGNED_TO_ID' => 'Tên người dùng được chỉ định',
    'LBL_ASSIGNED_TO_NAME' => 'Giao cho',
    'LBL_SECURITYGROUPS' => 'Nhóm bảo mật',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Nhóm bảo mật',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Ngày tạo',
    'LBL_DATE_MODIFIED' => 'Ngày sửa',
    'LBL_MODIFIED' => 'Được sửa bởi',
    'LBL_MODIFIED_NAME' => 'Chỉnh sửa bởi Tên',
    'LBL_CREATED' => 'Được tạo bởi',
    'LBL_DESCRIPTION' => 'Mô tả',
    'LBL_DELETED' => 'Đã xóa',
    'LBL_NAME' => 'Tên',
    'LBL_CREATED_USER' => 'Tạo bởi người dùng',
    'LBL_MODIFIED_USER' => 'Sửa bởi người dùng',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_EDIT_BUTTON' => 'Sửa',
    'LBL_REMOVE' => 'Xóa bỏ',
    'LBL_LIST_FORM_TITLE' => 'Danh sách xoay vòng',
    'LBL_MODULE_NAME' => 'Xoay vòng',
    'LBL_MODULE_TITLE' => 'Xoay vòng',
    'LBL_HOMEPAGE_TITLE' => 'Xoay vòng của tôi',
    'LNK_NEW_RECORD' => 'Tạo Xoay vòng',
    'LNK_LIST' => 'Xem Xoay vòng',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm Xoay vòng',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Xem lịch sử',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Các hoạt động',
    'LBL_NEW_FORM_TITLE' => 'Xoay vòng mới',
    'LBL_CONFIG' => 'Cấu hình',
    'LBL_TYPE' => 'Khu vực dành cho phân tích',
    'LNK_SPOT_LIST' => 'Xem điểm',
    'LNK_SPOT_CREATE' => 'Tạo điểm',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Cấu hình',

    'LBL_AN_UNSUPPORTED_DB' => 'Xin lỗi, mật điểm đang hiện được cấu hình chỉ cho MySQL và MS SQL',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Tên',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Loại tài khoản',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Ngành công nghiệp',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Quốc gia thanh toán',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Đã chỉ định cho người dùng',
    'LBL_AN_LEADS_STATUS' => 'Tình trạng',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Nguồn đầu mối',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Tên Chiến dịch',
    'LBL_AN_LEADS_YEAR' => 'Năm',
    'LBL_AN_LEADS_QUARTER' => 'Quý',
    'LBL_AN_LEADS_MONTH' => 'Tháng',
    'LBL_AN_LEADS_WEEK' => 'Tuần',
    'LBL_AN_LEADS_DAY' => 'Ngày',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Tên Cơ hội',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Đã chỉ định cho người dùng',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'Loại Cơ hội',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Nguồn đầu mối',
    'LBL_AN_SALES_AMOUNT' => 'Trị giá',
    'LBL_AN_SALES_STAGE' => 'Giai đoạn bán hàng',
    'LBL_AN_SALES_PROBABILITY' => 'Xác suất',
    'LBL_AN_SALES_DATE' => 'Ngày Bán hàng',
    'LBL_AN_SALES_QUARTER' => 'Bán hàng quý',
    'LBL_AN_SALES_MONTH' => 'Bán hàng tháng',
    'LBL_AN_SALES_WEEK' => 'Bán hàng tuần',
    'LBL_AN_SALES_DAY' => 'Bán hàng ngày',
    'LBL_AN_SALES_YEAR' => 'Bán hàng năm',
    'LBL_AN_SALES_CAMPAIGN' => 'Chiến dịch',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_AN_SERVICE_STATE' => 'Tình trạng',
    'LBL_AN_SERVICE_STATUS' => 'Tình trạng',
    'LBL_AN_SERVICE_PRIORITY' => 'Ưu tiên',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Ngày tạo',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Tuần tạo',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Tháng tạo',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Quý tạo',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Năm tạo',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Tên liên lạc',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Đã chỉ định cho người dùng',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Loại',
    'LBL_AN_ACTIVITIES_NAME' => 'Tên',
    'LBL_AN_ACTIVITIES_STATUS' => 'Tình trạng',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Đã chỉ định cho người dùng',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Tình trạng',
    'LBL_AN_MARKETING_TYPE' => 'Loại',
    'LBL_AN_MARKETING_BUDGET' => 'Ngân sách',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Chi phí Dự kiến',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Dự kiến doanh thu',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Tên Cơ hội',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Trị giá Cơ hội',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Giai đoạn cơ hội bán hàng',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Cơ hội được gán cho',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Tên tài khoản',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Tên Chiến dịch',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Ngày Hoạt động',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Loại hình hoạt động',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Kiểu liên quan',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'ID liên quan',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Tên Cơ hội',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Kiểu cơ hội',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Cơ hội nguồn đầu mối',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Giai đoạn cơ hội bán hàng',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Tên liên lạc',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Tên khoản mục',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Kiểu mục',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Danh mục mặt hàng',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Mục Số lượng',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Mục danh sách giá',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Giá bán hàng',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Chi phí giá',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Mục giá chiết khấu',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Số tiền giảm giá',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Mục Tổng số',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Tổng số',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Đã chỉ định cho người dùng',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Ngày tạo',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Tạo ngày ra',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Tuần tạo ra',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Tháng tạo ra',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Quý tạo ra',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Năm tạo ra',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Lỗi khi xác định nhãn cho vùng xoay vòng',
);
