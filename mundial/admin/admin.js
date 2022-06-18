$(document).ready(function () {
    $('#ban').click(function () {
        let mail = $('#ban').attr('class');
        $.ajax({
            url: "ban.php",
            method: "post",
            data: {

            },
            success: function(data) {

            },
            error: function(data) {

            }

        });

    });

    $('#unban').click(function () {
        let mail = $('#unban').attr('class');

    });
});
