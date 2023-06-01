$(document).ready(function () {

    var newHTML = `
    <div id="actionMenuSidebar" class="actionMenuSidebar">
        <ul>
            <h2 class="recent_h3">Hành động</h2>
            <li class="actionmenulinks" role="presentation">
                <a href="index.php?module=Leads&action=EditView&return_module=Leads&return_action=DetailView" data-action-name="List">
                    <div class="side-bar-action-icon">
                        <span class="suitepicon suitepicon-action-create"></span>
                    </div>
                    <div class="actionmenulink">Create</div>
                </a>
            </li>                                                                                                                        
            <li class="actionmenulinks" role="presentation">
                <a href="index.php?module=Leads&action=index&return_module=Leads&return_action=DetailView" data-action-name="List">
                    <div class="side-bar-action-icon">
                        <span class="suitepicon suitepicon-action-list"></span>
                    </div>
                    <div class="actionmenulink">Leads</div>
                </a>
            </li>                                                                                                                              
        </ul>                                                                                                     
    </div>
    `;
  
    $('#actionMenuSidebar').html(newHTML);
})