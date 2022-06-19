$( document ).ready(function() {

    $("#submit").click(function (e) {
        e.preventDefault();
        console.log("ready");
        let user = $('#email').val();
        let old = $('#oldpsw').val();
        let pass = $('#psw').val();
        let rpt = $('#psw-repeat').val();
        console.log(user);
        console.log(old);
        console.log(pass);
        console.log(rpt);

        $.ajax({
            url: "editProfile.php",
            method: "post",
            data: {
                'email': user,
                'oldpsw': old,
                'psw': pass,
                'psw-repeat': rpt
            },
            success: function(data) {
                let json = JSON.parse(data)
                console.log(data);
                if(json['success'] == true) {
                    //aca hay que poner el codigo javascript para que se oculte
                    //el login y signup (ya inicio sesion), y armar tipo una barra con 
                    //mas opciones y para cerrar sesion.
                    window.location.replace("./emailSentEdit.html");
                    //$('.login-bt').hide();
                    //$('.my-acc').show();
                    //login successful
                } else {
                    if(json['error'] = 'incorrect password') {
                        alert('Contraseña incorrecta');
                    }
                    if(json['error'] = 'invalid mail') {
                        alert('Correo invalido');
                    }
                    if(json['error'] = 'invalid user') {
                        alert('El ususario no existe');
                    }
                    if(json['error'] = 'no password match') {
                        alert('Las contraseñas no coinciden');
                    }
                    if(json['error'] = 'mail already used') {
                        alert('El correo ya está en uso');
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
