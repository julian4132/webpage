$(document).ready(function () {
    $('#submit').click(function (e) {
        //te deja en la misma pantalla
        e.preventDefault();
        let mail = $('#correo').html();
        let razon = $('#razon').val();
        $.ajax({
            url: "doBan.php",
            method: "post",
            data: {
                'email': mail,
                'razon': razon
            },
            success: function(data) {
                let json = JSON.parse(data);
                if(json['success'] == true) {
                    alert(json['msg'])
                    window.location.replace('./admin.php');

                }

            },
            error: function(data) {
                console.log("err");
                console.log(data);

            }
        });
    });
});
