$(document).ready(function() {
    $.ajax({
        url: "isLoggedIn.php",
        method: "get",
        success: function(data) {
            if(data == "true") {
                $("#login-bt").hide();

            } else {
                $("#my-acc").hide();
            }
        },
        error: function() {
            console.log("error");
        }

    });
});

