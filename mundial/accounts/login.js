$( document ).ready(function() {

    $("#submit").click(function (e) {
        e.preventDefault();
        let user = $('#email').val();
        let pass = $('#psw').val();

        $.ajax({
            url: "login.php",
            method: "post",
            data: {
                'email': user,
                'psw': pass
            },
            success: function(data) {
                let json = JSON.parse(data)
                if(json['success'] == true) {
                    //aca hay que poner el codigo javascript para que se oculte
                    //el login y signup (ya inicio sesion), y armar tipo una barra con 
                    //mas opciones y para cerrar sesion.
                    window.location.replace("../index.php");
                    //$('.login-bt').hide();
                    //$('.my-acc').show();
                    //login successful
                } else {
                    console.log("error");
                    if(json['error'] == "1") {
                        // incorrect password
                        console.log("1");
                        alert("La contraseña es incorrecta");

                    }
                    if(json['error'] == 2) {
                        console.log("2");
                        alert("El usuario es invalido.");
                        // invalid user
                    }
                }
            },
            error: function(data) {
            }
        });

    });
});
