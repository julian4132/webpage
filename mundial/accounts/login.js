$( document ).ready(function() {

    $("#submit").click(function (e) {
        e.preventDefault();
        let user = $('#email').val();
        let pass = $('#psw').val();

        //bloquea el botón cuando se hace click
        var element = document.getElementById("submit");
        element.classList.add("loading-button");
        element.setAttribute("disabled", true);

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
                    // succesfuly logged in
                    window.location.replace("../index.php");
                } else {
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
                    if(json['error'] == 3) {
                        console.log("3");
                        alert("El usuario esta baneado.");
                    }
                }
            },
            complete: function(){
                //desbloquea el botón cuando recibe respuesta
                element.classList.remove("loading-button");
                element.setAttribute("disabled", false);
            },
            error: function(data) {
                console.log(data);
            }
        });

    });
});
