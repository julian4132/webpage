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
                    //aca hay que poner el codigo javascript para que se oculte
                    //el login y signup (ya inicio sesion), y armar tipo una barra con 
                    //mas opciones y para cerrar sesion.
                    window.location.replace("../index.php");
                    //$('.login-bt').hide();
                    //$('.my-acc').show();
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
