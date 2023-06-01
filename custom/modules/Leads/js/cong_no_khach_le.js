$(document).ready(function () {
    var childDiv = $('<div class="row">', { id: 'congno' });
    childDiv.html(`
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
        <h3 style='color: red;'>Số lượng giao dịch:</h3>
    </div>
    <div class="col-md-4">
        <h3 style='color: red;'>Số tiền giao dich:</h3>
    </div>
    <div class="col-md-2">
    </div>
    `);
    
    $('.moduleTitle').append(childDiv);


    var newHTML = `
    <div id="actionMenuSidebar" class="actionMenuSidebar">
        <ul>
            <h2 class="recent_h3">Hành động</h2>
            <li class="actionmenulinks" role="presentation">
                <a href="index.php?module=Leads&action=cong_no_khach_le&return_module=Leads&return_action=DetailView" data-action-name="List">
                    <div class="side-bar-action-icon">
                        <span class="suitepicon suitepicon-action-list"></span>
                    </div>
                    <div class="actionmenulink">Danh sách công nợ phải trả (tạm ứng) của khách hàng</div>
                </a>
            </li>                                                                                                                        
            <li class="actionmenulinks" role="presentation">
                <a href="index.php?module=Leads&action=cong_no_khach_le&return_module=Leads&return_action=DetailView" data-action-name="List">
                    <div class="side-bar-action-icon">
                        <span class="suitepicon suitepicon-action-list"></span>
                    </div>
                    <div class="actionmenulink">Danh sách công nợ phải thu của khách hàng</div>
                </a>
            </li>                                                                                                                              
        </ul>                                                                                                     
    </div>
    `;
  
    $('#actionMenuSidebar').html(newHTML);
})