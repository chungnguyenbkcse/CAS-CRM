$(document).ready(function () {
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    console.log("HELLO1")

    var role = getCookie("role");

    setInterval(function () {
        $.ajax({
            url: "index.php?module=Leads&entryPoint=handle_check_time",
            data: { },
            success: function (data) {
                console.log(data)
                if (data != "") {
                    if (role === "MKT" || role === "SUPER_MKT") {
                        alert(`Tồn tại Data vượt quá thời gian tác động`)
                    }
                    else {
                        alert(`Vượt quá thời gian tác động ${data}`)
                    }
                    location.reload();
                }
            }
        });
        console.log("HELLO")
    }, 1000);
})