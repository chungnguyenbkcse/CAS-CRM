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
    'DEFAULT_CHARSET' => 'UTF-8',
    'LBL_DISABLED_TITLE' => 'Vô hiệu hóa cài đặt SuiteCRM',
    'LBL_DISABLED_TITLE_2' => 'Cài đặt SuiteCRM đã bị vô hiệu',
    'LBL_DISABLED_DESCRIPTION' => 'Trình cài đặt đã được chạy một lần. Là một biện pháp an toàn, nó đã bị vô hiệu hóa từ chạy lần thứ hai. Nếu bạn chắc chắn muốn chạy lại, hãy chuyển đến tệp config.php của bạn và tìm (hoặc thêm) một biến được gọi là \'installer_locked\' và đặt nó là \'false\'. Dòng nên giống như sau:',
    'LBL_DISABLED_DESCRIPTION_2' => 'Sau khi thay đổi này đã được thực hiện, bạn có thể nhấp vào nút "Bắt đầu" dưới đây để bắt đầu cài đặt của bạn. <i> Sau khi quá trình cài đặt hoàn tất, bạn sẽ muốn thay đổi giá trị cho \'installer_locked\' thành \'true\'.</i>',
    'LBL_DISABLED_HELP_1' => 'Để được trợ giúp cài đặt, vui lòng truy cập SuiteCRM',
    'LBL_DISABLED_HELP_2' => 'diễn đàn hỗ trợ',

    'LBL_REG_TITLE' => 'Đăng ký',
    'LBL_REG_CONF_1' => 'Vui lòng dành một chút thời gian để đăng ký với SuiteCRM. Bằng cách cho chúng tôi biết một chút về cách công ty của bạn lên kế hoạch sử dụng SuiteCRM, chúng tôi có thể đảm bảo chúng tôi luôn cung cấp đúng sản phẩm cho nhu cầu kinh doanh của bạn.',
    'LBL_REG_CONF_2' => 'Tên và địa chỉ email của bạn là những trường bắt buộc chỉ để đăng ký. Tất cả các lĩnh vực khác là tùy chọn, nhưng rất hữu ích. Chúng tôi không bán, thuê, chia sẻ, hoặc phân phối các thông tin thu thập được ở đây cho bên thứ ba.',
    'LBL_REG_CONF_3' => 'Cảm ơn bạn đã đăng ký. Nhấn vào nút Hoàn thành để đăng nhập vào SuiteCRM. Bạn sẽ cần phải đăng nhập lần đầu tiên sử dụng tên người dùng "admin" và mật khẩu bạn đã nhập trong bước 2.',


    'ERR_ADMIN_PASS_BLANK' => 'Mật khẩu quản trị SuiteCRM không được để trống.',
    'ERR_CHECKSYS_CALL_TIME' => 'Cho phép gọi vượt thời gian tham chiếu là Tắt (vui lòng kích hoạt trong php.ini)',
    'ERR_CHECKSYS_CURL' => 'Không tìm thấy: Lịch trình SuiteCRM sẽ chạy với tính năng hạn chế.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => 'Cảnh báo: $memory_limit (thiết lập này ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M hoặc lớn hơn tập tin php.ini)',
    'ERR_CHECKSYS_NO_SESSIONS' => 'Thất bại để viết và đọc các biến phiên làm việc. Không thể để tiến hành cài đặt.',
    'ERR_CHECKSYS_NOT_VALID_DIR' => 'Không phải là một Danh mục hợp lệ',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Cảnh báo: Không thể ghi',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Phiên bản PHP không hợp lệ được cài đặt: ( ver',
    'ERR_CHECKSYS_PHP_UNSUPPORTED' => 'Không hỗ trợ phiên bản PHP được cài đặt: ( ver',
    'ERR_CHECKSYS_SAFE_MODE' => 'Chế độ an toàn đang Bật (xin vui lòng vô hiệu hóa trong php.ini)',
    'ERR_DB_ADMIN' => 'Tên người dùng quản trị cơ sở dữ liệu và/hoặc mật khẩu không hợp lệ (Lỗi ',
    'ERR_DB_EXISTS_NOT' => 'Cơ sở dữ liệu được chỉ định không tồn tại.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Cơ sở dữ liệu đã tồn tại với dữ liệu cấu hình. Để chạy một cài đặt với cơ sở dữ liệu đã chọn, hãy chạy lại cài đặt và chọn: "Thả và tạo lại các bảng SuiteCRM hiện có?" Để nâng cấp, sử dụng Thuật sỹ Nâng cấp trong Bảng điều khiển dành cho Quản trị viên. Vui lòng đọc tài liệu nâng cấp tại <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">đây</a>.',
    'ERR_DB_EXISTS' => 'Tên cơ sở dữ liệu đã tồn tại - không thể tạo một tên khác có cùng tên với dữ liệu đã có.',
    'ERR_DB_HOSTNAME' => 'Tên máy chủ không được để trống.',
    'ERR_DB_INVALID' => 'Đã chọn kiểu cơ sở dữ liệu không hợp lệ.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Tên người dùng và/hoặc mật khẩu cơ sở dữ liệu SuiteCRM không hợp lệ (Lỗi ',
    'ERR_DB_MYSQL_VERSION1' => 'Phiên bản MySQL ',
    'ERR_DB_MYSQL_VERSION2' => ' thì không được hỗ trợ. Chỉ hỗ trợ MySQL 4.1.x trở lên.',
    'ERR_DB_NAME' => 'Cơ sở dữ liệu tên không được để trống.',
    'ERR_DB_NAME2' => "Tên cơ sở dữ liệu không chứa một ' \\', '/', hoặc '.'",
    'ERR_DB_PASSWORD' => 'Mật khẩu cho SuiteCRM không khớp.',
    'ERR_DB_PRIV_USER' => 'Tên người dùng quản trị cơ sở dữ liệu là bắt buộc.',
    'ERR_DB_USER_EXISTS' => 'Tên người dùng cho SuiteCRM đã tồn tại - không thể tạo một tên khác có cùng tên.',
    'ERR_DB_USER' => 'Tên người dùng cho SuiteCRM không được để trống.',
    'ERR_DBCONF_VALIDATION' => 'Xin vui lòng sửa chữa các lỗi sau đây trước khi tiếp tục:',
    'ERR_ERROR_GENERAL' => 'Đã xảy ra những lỗi sau:',
    'ERR_LICENSE_MISSING' => 'Thiếu trường bắt buộc',
    'ERR_LICENSE_NOT_FOUND' => 'Không tìm thấy file Giấy Phép!',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Danh mục gốc được cung cấp không phải là một Danh mục hợp lệ.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Danh mục gốc được cung cấp không phải là một Danh mục có thể ghi được.',
    'ERR_LOG_DIRECTORY_REQUIRED' => 'Thư mục đăng nhập là cần thiết nếu bạn muốn chỉ định của riêng bạn.',
    'ERR_NO_DIRECT_SCRIPT' => 'Không thể xử lý trực tiếp tập lệnh.',
    'ERR_PASSWORD_MISMATCH' => 'Mật khẩu cho SuiteCRM admin không khớp.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Không thể ghi vào <span class=stop> config.php</span> file.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Bạn có thể tiếp tục cài đặt này bằng cách tạo tệp config.php theo cách thủ công và dán các thông tin cấu hình dưới đây vào tệp config.php. Tuy nhiên, bạn <strong>phải</strong> tạo tệp config.php trước khi tiếp tục bước tiếp theo.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Bạn có nhớ để tạo tập tin config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Cảnh báo: Không thể ghi vào tệp config.php. Hãy đảm bảo rằng nó tồn tại.',
    'ERR_PERFORM_HTACCESS_1' => 'Không thể ghi vào ',
    'ERR_PERFORM_HTACCESS_2' => ' file.',
    'ERR_PERFORM_HTACCESS_3' => 'Nếu bạn muốn an toàn tập tin của bạn khỏi bị có thể truy cập thông qua trình duyệt, tạo một tập tin htaccess trong Danh mục gốc của bạn với các dòng:',
    'ERR_PERFORM_NO_TCPIP' => '<b> Chúng tôi không thể tự phát hiện kết nối internet.</b> Khi bạn có kết nối, vui lòng truy cập <a href=\\"http://www.suitecrm.com\\"> http: //www.suitecrm. com</a>để đăng ký với SuiteCRM. Bằng cách cho chúng tôi biết một chút về cách công ty của bạn lên kế hoạch sử dụng SuiteCRM, chúng tôi có thể đảm bảo chúng tôi luôn cung cấp đúng ứng dụng cho nhu cầu kinh doanh của bạn.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Danh mục phiên làm việc được cung cấp không phải là một Danh mục hợp lệ.',
    'ERR_SESSION_DIRECTORY' => 'Danh mục phiên được cung cấp không phải là một Danh mục có thể ghi được.',
    'ERR_SESSION_PATH' => 'Đường dẫn phiên làm việc là cần thiết nếu bạn muốn chỉ định cho riêng bạn.',
    'ERR_SI_NO_CONFIG' => 'Bạn không bao gồm config_si.php trong tài liệu gốc, hoặc bạn đã không xác định $sugar_config_si trong config.php',
    'ERR_SITE_GUID' => 'ID Ứng dụng là cần thiết nếu bạn muốn chỉ định cho riêng bạn.',
    'ERR_URL_BLANK' => 'URL không được để trống.',
    'LBL_BACK' => 'Quay lại',
    'LBL_CHECKSYS_1' => 'Để cài đặt SuiteCRM của bạn để hoạt động đúng, hãy đảm bảo tất cả các hệ thống kiểm tra các mục được liệt kê dưới đây có màu xanh lá cây. Nếu bất kỳ có màu đỏ, vui lòng thực hiện các bước cần thiết để khắc phục chúng.',
    'LBL_CHECKSYS_CACHE' => 'Danh mục Cache có thể ghi được',
    'LBL_CHECKSYS_CALL_TIME' => 'PHP cho phép gọi vượt thời gian tham chiếu được Bật',
    'LBL_CHECKSYS_COMPONENT' => 'Thành phần',
    'LBL_CHECKSYS_CONFIG' => 'Có thể ghi tập tin cấu hình SuiteCRM (config.php)',
    'LBL_CHECKSYS_CURL' => 'thư viện cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Có thể ghi các danh mục tuỳ chỉnh',
    'LBL_CHECKSYS_DATA' => 'Danh mục dữ liệu có thể ghi',
    'LBL_CHECKSYS_MEM_OK' => 'OK (không có giới hạn)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Không giới hạn)',
    'LBL_CHECKSYS_MEM' => 'Giới hạn bộ nhớ PHP >= ',
    'LBL_CHECKSYS_MODULE' => 'Các Module có thể sinh ra các danh mục con và File',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Không có sẵn',
    'LBL_CHECKSYS_OK' => 'Ok',
    'LBL_CHECKSYS_PHP_INI' => '<b>Lưu ý:</b> Tập tin cấu hình php của bạn (php.ini) được đặt tại:',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'Phiên bản PHP',
    'LBL_CHECKSYS_RECHECK' => 'Kiểm tra lại',
    'LBL_CHECKSYS_SAFE_MODE' => 'Chế độ An toàn của PHP đã Tắt',
    'LBL_CHECKSYS_SESSION' => 'Đường dẫn lưu các phiên có thể ghi (',
    'LBL_CHECKSYS_STATUS' => 'Tình trạng',
    'LBL_CHECKSYS_TITLE' => 'Kiểm tra chấp nhận Hệ thống',
    'LBL_CHECKSYS_XML' => 'XML Parsing',
    'LBL_CLOSE' => 'Đóng',
    'LBL_CONFIRM_BE_CREATED' => 'đã được tạo',
    'LBL_CONFIRM_DB_TYPE' => 'Loại hình cơ sở dữ liệu',
    'LBL_CONFIRM_DIRECTIONS' => 'Vui lòng xác nhận cài đặt dưới đây. Nếu bạn muốn thay đổi bất kỳ giá trị nào, hãy nhấp vào "Quay lại" để chỉnh sửa. Nếu không, nhấp "Tiếp theo" để bắt đầu cài đặt.',
    'LBL_CONFIRM_LICENSE_TITLE' => 'Thông tin Giấy phép',
    'LBL_CONFIRM_NOT' => 'not',
    'LBL_CONFIRM_TITLE' => 'Xác nhận thiết đặt',
    'LBL_CONFIRM_WILL' => 'sẽ',
    'LBL_DBCONF_CREATE_DB' => 'Tạo cơ sở dữ liệu',
    'LBL_DBCONF_CREATE_USER' => 'Tạo Người dùng',
    'LBL_DBCONF_DB_DROP_CREATE_WARN' => 'Chú ý: Tất cả dữ liệu SuiteCRM sẽ bị xóa<br>nếu hộp này được chọn.',
    'LBL_DBCONF_DB_DROP_CREATE' => 'Thả và tạo lại các bảng SuiteCRM hiện tại?',
    'LBL_DBCONF_DB_NAME' => 'Tên cơ sở dữ liệu',
    'LBL_DBCONF_DB_PASSWORD' => 'Mật khẩu cơ sở dữ liệu',
    'LBL_DBCONF_DB_PASSWORD2' => 'Nhập lại Mật khẩu cơ sở dữ liệu',
    'LBL_DBCONF_DB_USER' => 'Tên đăng nhập cơ sở dữ liệu',
    'LBL_DBCONF_DEMO_DATA' => 'Thêm vào cơ sở dữ liệu với dữ liệu Demo?',
    'LBL_DBCONF_HOST_NAME' => 'Tên máy chủ',
    'LBL_DBCONF_INSTRUCTIONS' => 'Vui lòng nhập thông tin cấu hình cơ sở dữ liệu của bạn dưới đây. Nếu bạn không chắc chắn về những gì để điền vào, chúng tôi khuyên bạn nên sử dụng các giá trị mặc định.',
    'LBL_DBCONF_MB_DEMO_DATA' => 'Sử dụng văn bản multi-byte trong dữ liệu Demo?',
    'LBL_DBCONF_PRIV_PASS' => 'Mật khẩu Người sử dụng cơ sở dữ liệu được ưu tiên',
    'LBL_DBCONF_PRIV_USER_2' => 'Tài khoản cơ sở dữ liệu ở trên là một người dùng có đặc quyền?',
    'LBL_DBCONF_PRIV_USER_DIRECTIONS' => 'Người dùng cơ sở dữ liệu đặc quyền này phải có quyền hợp lệ để tạo ra một cơ sở dữ liệu, thả/tạo các bảng, và tạo một người dùng. Người dùng cơ sở dữ liệu đặc quyền này sẽ chỉ được sử dụng để thực hiện các tác vụ này khi cần thiết trong quá trình cài đặt. Bạn cũng có thể sử dụng cùng một người dùng cơ sở dữ liệu như trên nếu người dùng đó có đủ đặc quyền.',
    'LBL_DBCONF_PRIV_USER' => 'Tên đăng nhập cơ sở dữ liệu được ưu tiên',
    'LBL_DBCONF_TITLE' => 'Cấu hình Cơ sỡ dữ liệu',
    'LBL_HELP' => 'Giúp đỡ',
    'LBL_LICENSE_ACCEPTANCE' => 'Chấp nhận giấy phép',
    'LBL_LICENSE_DIRECTIONS' => 'Nếu bạn có thông tin giấy phép của mình, vui lòng nhập nó vào các trường dưới đây.',
    'LBL_LICENSE_DOWNLOAD_KEY' => 'Tải xuống Key',
    'LBL_LICENSE_EXPIRY' => 'Ngày hết hạn',
    'LBL_LICENSE_I_ACCEPT' => 'Đồng ý',
    'LBL_LICENSE_NUM_USERS' => 'Số người dùng',
    'LBL_LICENSE_OC_DIRECTIONS' => 'Vui lòng nhập số khách hàng mua ngoại tuyến đã đặt hàng.',
    'LBL_LICENSE_OC_NUM' => 'Số Giấy phép Khách hàng Ngoại tuyến',
    'LBL_LICENSE_OC' => 'Giấy phép Khách hàng Ngoại tuyến',
    'LBL_LICENSE_PRINTABLE' => ' Chế độ xem có thể in ',
    'LBL_LICENSE_TITLE' => 'Thông tin Giấy phép',
    'LBL_LICENSE_TITLE_2' => 'Giấy phép SuiteCRM',
    'LBL_LICENSE_USERS' => 'Cấp phép cho người dùng',
    'LBL_MYSQL' => 'MySQL',
    'LBL_NEXT' => 'Tiếp theo',
    'LBL_NO' => 'Không',
    'LBL_ORACLE' => 'Oracle',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Cài đặt mật khẩu quản trị trang web',
    'LBL_PERFORM_AUDIT_TABLE' => 'bảng kiểm toán / ',
    'LBL_PERFORM_CONFIG_PHP' => 'Đang tạo file cấu hình SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => 'Đang tạo cơ sỡ dữ liệu ',
    'LBL_PERFORM_CREATE_DB_2' => ' trên ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Tạo tên người dùng và mật khẩu cơ sở dữ liệu...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Tạo dữ liệu SuiteCRM mặc định',
    'LBL_PERFORM_CREATE_LOCALHOST' => 'Tạo tên người dùng và mật khẩu cơ sở dữ liệu cho localhost...',
    'LBL_PERFORM_CREATE_RELATIONSHIPS' => 'Đang tạo các bảng quan hệ trong SuiteCRM',
    'LBL_PERFORM_CREATING' => 'đang tạo / ',
    'LBL_PERFORM_DEFAULT_REPORTS' => 'Đang tạo các báo cáo mặc định',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Đang tạo Lịch công việc mặc định',
    'LBL_PERFORM_DEFAULT_SETTINGS' => 'Chèn cài đặt mặc định',
    'LBL_PERFORM_DEFAULT_USERS' => 'Đang tạo người dùng mặc định',
    'LBL_PERFORM_DEMO_DATA' => 'Đưa vào các bảng cơ sở dữ liệu với dữ liệu demo (điều này có thể mất một ít thời gian)...',
    'LBL_PERFORM_DONE' => 'done<br>',
    'LBL_PERFORM_DROPPING' => 'đang thả ',
    'LBL_PERFORM_FINISH' => 'Kết thúc',
    'LBL_PERFORM_LICENSE_SETTINGS' => 'Đang cập nhật thông tin giấy phép',
    'LBL_PERFORM_OUTRO_1' => 'Cài đặt của SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' bây giờ là hoàn tất.',
    'LBL_PERFORM_OUTRO_3' => 'Tổng thời gian: ',
    'LBL_PERFORM_OUTRO_4' => ' giây.',
    'LBL_PERFORM_OUTRO_5' => 'Gần đúng bộ nhớ sử dụng: ',
    'LBL_PERFORM_OUTRO_6' => ' bytes.',
    'LBL_PERFORM_OUTRO_7' => 'Hệ thống của bạn đã được cài đặt và cấu hình để sử dụng.',
    'LBL_PERFORM_REL_META' => 'thẻ mối quan hệ ... ',
    'LBL_PERFORM_SUCCESS' => 'Thành công!',
    'LBL_PERFORM_TABLES' => 'Tạo các bảng ứng dụng SuiteCRM, các bảng kiểm toán và quan hệ của các dữ liệu...',
    'LBL_PERFORM_TITLE' => 'Thực hiện cài đặt',
    'LBL_PRINT' => 'In',
    'LBL_REQUIRED' => '* Trường bắt buộc',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Nhập lại mật khẩu SuiteCRM <em>Quản trị viên</em>',
    'LBL_SITECFG_ADMIN_PASS_WARN' => 'Chú ý: Điều này sẽ ghi đè mật khẩu quản trị của bất kỳ cài đặt trước.',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM Mật khẩu<em>Quản trị viên</em>',
    'LBL_SITECFG_APP_ID' => 'ID Ứng dụng',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Ghi đè ID ứng dụng tự động tạo để ngăn các phiên từ một trường hợp của SuiteCRM không được sử dụng trên một cá thể khác. Nếu bạn có một bộ cài đặt SuiteCRM, tất cả chúng đều phải chia sẻ cùng một ID ứng dụng.',
    'LBL_SITECFG_CUSTOM_ID' => 'Cung cấp ID ứng dụng của riêng bạn',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Ghi đè lên thư mục mặc định nơi đăng nhập của SuiteCRM. Không có vấn đề nơi tập tin đăng nhập cư trú, truy cập vào nó thông qua trình duyệt sẽ bị hạn chế thông qua một chuyển hướng .htaccess.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Sử dụng tùy chỉnh Danh mục Log',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Cung cấp một thư mục an toàn để lưu trữ thông tin phiên làm việc của SuiteCRM để ngăn không cho dữ liệu phiên làm việc bị đánh cắp trên máy chủ chia sẻ.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Sử dụng tùy chỉnh Danh mục phiên làm việc cho SuiteCRM',
    'LBL_SITECFG_DIRECTIONS' => 'Vui lòng nhập thông tin cấu hình trang web của bạn dưới đây. Nếu bạn không chắc chắn về các trường, chúng tôi khuyên bạn nên sử dụng các giá trị mặc định.',
    'LBL_SITECFG_FIX_ERRORS' => 'Xin vui lòng sửa chữa các lỗi sau đây trước khi tiếp tục:',
    'LBL_SITECFG_LOG_DIR' => 'Danh mục Log',
    'LBL_SITECFG_SESSION_PATH' => 'Đường dẫn đến thư mục phiên làm việc <br>(phải ghi được)',
    'LBL_SITECFG_SITE_SECURITY' => 'Bảo mật nâng cao trang web',
    'LBL_SITECFG_SUGAR_UP_DIRECTIONS' => 'Khi được kích hoạt, hệ thống của bạn sẽ định kỳ gửi các số liệu thống kê nặc danh của SuiteCRM về cài đặt của bạn để giúp chúng tôi hiểu về các mẫu sử dụng và cải tiến sản phẩm. Đổi lại cho thông tin này, quản trị viên sẽ nhận được thông báo cập nhật khi có phiên bản hoặc cập nhật mới.',
    'LBL_SITECFG_SUGAR_UP' => 'Bật chức năng nâng cấp SuiteCRM?',
    'LBL_SITECFG_SUGAR_UPDATES' => 'Cập Nhật cấu hình SuiteCRM',
    'LBL_SITECFG_TITLE' => 'Cấu hình trang web',
    'LBL_SITECFG_URL' => 'Phiên bản URL của SuiteCRM',
    'LBL_SITECFG_USE_DEFAULTS' => 'Sử dụng mặc định?',
    'LBL_START' => 'bắt đầu',
    'LBL_STEP' => 'Bước',
    'LBL_TITLE_WELCOME' => 'Chào mừng đến với SuiteCRM ',
    'LBL_WELCOME_1' => 'Trình cài đặt này tạo ra các bảng cơ sở dữ liệu SuiteCRM và đặt các biến cấu hình mà bạn cần để bắt đầu. Toàn bộ quá trình sẽ mất khoảng mười phút.',
    'LBL_WELCOME_2' => 'Để được trợ giúp cài đặt, vui lòng truy cập <a href="https://suitecrm.com/suitecrm/forum/suite-forum" target="_blank"> diễn đàn hỗ trợ </a> của SuiteCRM.',
    'LBL_WELCOME_CHOOSE_LANGUAGE' => 'Chọn ngôn ngữ của bạn',
    'LBL_WELCOME_SETUP_WIZARD' => 'Cài đặt Wizard',
    'LBL_WELCOME_TITLE_WELCOME' => 'Chào mừng đến với SuiteCRM ',
    'LBL_WELCOME_TITLE' => 'Cài đặt SuiteCRM Wizard',
    'LBL_WIZARD_TITLE' => 'Cài đặt SuiteCRM Wizard: Bước ',
    'LBL_YES' => 'Có',
);
