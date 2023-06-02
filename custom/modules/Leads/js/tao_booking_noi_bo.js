$(document).ready(function () {
    var childDiv = $('<div class="row">', { id: 'congno' });
    childDiv.html(`
    <div class="col-md-3">
        <h3 style='color: red;'>Tiền booking:</h3>
    </div>
    <div class="col-md-3">
        <h3 style='color: red;'>Đã giao dịch:</h3>
    </div>
    <div class="col-md-3">
        <h3 style='color: red;'>Đã hủy:</h3>
    </div>
    <div class="col-md-3">
        <h3 style='color: red;'>Còn lại:</h3>
    </div>
    `);
    
    $('.moduleTitle').append(childDiv);
})