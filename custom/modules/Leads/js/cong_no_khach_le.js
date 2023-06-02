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


})