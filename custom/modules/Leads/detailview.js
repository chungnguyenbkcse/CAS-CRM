$(document).ready(function () {

    var lead_status_id = $("#lead_status_id").val();
    var fullname = $("#lead_fullname").val();
    console.log('hello')
    var ro_name_val = $("#ro_name_val").val();
   

    $.ajax({
        url: "index.php?module=Leads&entryPoint=get_ro_detail",
        data: { ro_id: ro_name_val },
        success: function (data) {
            console.log(data);
            $("[field='ro_name']").html(data)
        },
        dataType: 'html'
    });
    
    $(".module-title-text").html(fullname)
    $.ajax({
        url: "index.php?module=Leads&entryPoint=lead_status_detail",
        data: { id: lead_status_id },
        success: function (data) {
            console.log(data);
            $("[field='lead_status']").html(data);
        },
        dataType: 'html'
    });

    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    var role = getCookie("role");

    var transaction_amount = $("#transaction_amount").text();
    $("#transaction_amount").html(transaction_amount.split(".")[0])
    var real_transaction_amount = $("#real_transaction_amount").text();
    $("#real_transaction_amount").html(real_transaction_amount.split(".")[0]);
    var lead_id = $("#lead_id").val();
    $.ajax({
        url: "index.php?module=Leads&entryPoint=get_card_number_lead",
        data: {lead_id: lead_id},
        success: function (data) {
            let x = JSON.parse(data)
            let res = ""
            x.map((ele, idx) => {
                res = res + `
                    <div class="row">
                        <p>${ele}</p>
                    </div>
                `
            })
            $("[field='ho_name']").html(res)
        }
    });
})