$( document ).ready(function() {

    $("#submit").click(function (e) {
        e.preventDefault();
        console.log("ready");
        let user = $('#email').val();
        let pass = $('#psw').val();
        console.log(user);

        $.ajax({
            url: "login.php",
            method: "post",
            data: {
                'email': user,
                'psw': pass
            },
            success: function(data) {
                let json = JSON.parse(data)
                console.log(data);
                if(json['success'] == true) {
                    window.location.replace("../index.php");
                    //login successful
                } else {
                    // login failed
                }
            },
            error: function(data) {
                console.log("error");
                console.log(data);
            }
        });

    });
});
