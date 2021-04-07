$('#formLogin').submit(function(e) {
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());
    if (usuario.length == "" || password.length == "") {
        Swal.fire({
            type: 'warning',
            title: ' Debe ingresar Usuario y/o Password',
        });
        return false;

    } else {
        $.ajax({
            url: "./bd/login.php",
            type: "POST",
            datatype: "json",
            data: {
                usuario: usuario,
                password: password
            },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        type: "error",
                        title: "Usuario y/o contraseña incorrecta",
                    });
                } else {
                    Swal.fire({
                        type: "success",
                        title: "Conexion exitosa!",
                        confirmButtonColor: "#3885d6",
                        confirmButtonText: "Ingresar"
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "index.php";

                        }
                    })
                }
            }
        });
    }
});