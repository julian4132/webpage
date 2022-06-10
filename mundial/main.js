$(document).ready(function() {
    $.ajax({
        url: "isLoggedIn.php",
        method: "post",
        data: {
        }, 
        success: function() {
            $(".login-bt").hide();
        },
        error: function() {
            $(".my-acc").hide();
        }

    });
});
