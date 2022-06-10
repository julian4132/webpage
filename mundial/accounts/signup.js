$( document ).ready(function() {

    $("#submit").click(function (e) {
        e.preventDefault();
        console.log("ready");
        let user = $('#email').val();
        let pass = $('#psw').val();
        let rpt = $('#psw-repeat').val();

        $.ajax({
            url: "signup.php",
            method: "post",
            data: {
                'email': user,
                'psw': pass,
                'psw-repeat': rpt
            },
            success: function(data) {
                // sin esta linea el js llora por formatos
                let json = JSON.parse(data)
                if(json['success'] == true) {
                    //aca hay que poner el codigo javascript para que se oculte
                    //el login y signup (ya inicio sesion), y armar tipo una barra con 
                    //mas opciones y para cerrar sesion.
                    window.location.replace("../index.php");
                    $(document).ready(function() {
//                        $('.login-bt').hide();
 //                       $('.my-acc').show();

                    });
                    //login successful
                } else {
                    if(json['error'] == 'different passwords') {
                        alert('Las contraseñas no coinciden.');
                    }
                    if(json['error'] == 'mail already used') {
                        alert('El correo electronico ya está en uso.');
                    }
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
