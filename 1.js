$('#formDatos').submit(function(e) {
    e.preventDefault();
    var txtNombre = $.trim($("#txtNombre").val());
    var txtJustificacion = $.trim($("#txtJustificacion").val());
    var txtObjetivo = $.trim($("#txtObjetivo").val());
    var txtEspecifico = $.trim($("#txtEspecifico").val());
    var cmbSector = $.trim($("#cmbSector").val());
    var txtTipo = $.trim($("#txtTipo").val());
    var cmbArticulacion = $.trim($("#cmbArticulacion").val());

    if (txtNombre.length == "" || txtJustificacion == "" || txtObjetivo == "" || txtEspecifico == "" ||
        cmbSector == "" || txtTipo == "" || cmbArticulacion == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campos Vacios',


        });

        return false;


    } else {
        $.ajax({
            url: "conexion/guardar.php",
            type: "POST",
            datatype: "json",
            data: {

                txtNombre: txtNombre,
                txtJustificacion: txtJustificacion,
                txtObjetivo: txtObjetivo,
                txtEspecifico: txtEspecifico,
                cmbSector: cmbSector,
                txtTipo: txtTipo,
                cmbArticulacion: cmbArticulacion



            },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        type: "error",
                        title: "Error datos faltantes",
                    });
                } else {
                    Swal.fire({
                        icon: "success",
                        type: "success",
                        title: "Datos correctos",
                        confirmButtonColor: "#3885d6",
                        confirmButtonText: "Enviar Datos"
                    }).then((result) => {
                        if (result.value) {

                            window.location.href = "buttons.php";
                        }
                    })
                }
            }


        });
    }









});

$('#formDatos1').submit(function(e) {
    e.preventDefault();

    var componente = $.trim($("#componente").val());
    var subcomponentes = $.trim($("#subcomponentes").val());
    var subcomponentes1 = $.trim($("#subcomponentes1").val());
    var subcomponentes2 = $.trim($("#subcomponentes2").val());

    if (componente.length == "" || subcomponentes.length == "" || subcomponentes1.length == "" || subcomponentes2.length == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campos Vacios',


        });

        return false;


    } else {
        $.ajax({
            url: "conexion/guardar5.php",
            type: "POST",
            datatype: "json",
            data: {
                componente: componente,
                subcomponentes: subcomponentes,
                subcomponentes1: subcomponentes1,
                subcomponentes2: subcomponentes2
            },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        type: "error",
                        title: "Error datos faltantes",
                    });
                } else {
                    Swal.fire({
                        icon: "success",
                        type: "success",
                        title: "Datos correctos",
                        confirmButtonColor: "#3885d6",
                        confirmButtonText: "Enviar Datos"
                    }).then((result) => {
                        if (result.value) {

                            window.location.href = "buttons.php";
                        }
                    })
                }
            }


        });
    }


});


$('#formDatos2').submit(function(e) {
    e.preventDefault();

    var producto = $.trim($("#producto").val());
    var subproductos = $.trim($("#subproductos").val());
    var subproductos1 = $.trim($("#subproductos1").val());
    var subproductos2 = $.trim($("#subproductos2").val());

    if (producto.length == "" || subproductos.length == "" || subproductos1.length == "" || subproductos2 == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campos Vacios',


        });

        return false;


    } else {
        $.ajax({
            url: "conexion/guardar6.php",
            type: "POST",
            datatype: "json",
            data: {
                producto: producto,
                subproductos: subproductos,
                subproductos1: subproductos1,
                subproductos2: subproductos2
            },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        type: "error",
                        title: "Error datos faltantes",
                    });
                } else {
                    Swal.fire({
                        icon: "success",
                        type: "success",
                        title: "Datos correctos",
                        confirmButtonColor: "#3885d6",
                        confirmButtonText: "Enviar Datos"
                    }).then((result) => {
                        if (result.value) {

                            window.location.href = "buttons.php";
                        }
                    })
                }
            }


        });
    }


});

$('#formDatos3').submit(function(e) {
    e.preventDefault();

    var actividad = $.trim($("#actividad").val());
    var subactividades = $.trim($("#subactividades").val());
    var subactividades1 = $.trim($("#subactividades1").val());
    var subactividades2 = $.trim($("#subactividades2").val());

    if (actividad.length == "" || subactividades.length == "" || subactividades1.length == "" || subactividades2 == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campos Vacios',


        });

        return false;


    } else {
        $.ajax({
            url: "conexion/guardar7.php",
            type: "POST",
            datatype: "json",
            data: {
                actividad: actividad,
                subactividades: subactividades,
                subactividades1: subactividades1,
                subactividades2: subactividades2
            },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        type: "error",
                        title: "Error datos faltantes",
                    });
                } else {
                    Swal.fire({
                        icon: "success",
                        type: "success",
                        title: "Datos correctos",
                        confirmButtonColor: "#3885d6",
                        confirmButtonText: "Enviar Datos"
                    }).then((result) => {
                        if (result.value) {

                            window.location.href = "buttons.php";
                        }
                    })
                }
            }


        });
    }


});

$('#formDatos4').submit(function(e) {
    e.preventDefault();

    var componente1 = $.trim($("#componente1").val());
    var subcomponentes5 = $.trim($("#subcomponentes5").val());
    var subcomponentes3 = $.trim($("#subcomponentes3").val());
    var subcomponentes4 = $.trim($("#subcomponentes4").val());

    if (componente1.length == "" || subcomponentes5.length == "" || subcomponentes3.length == "" || subcomponentes4.length == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campos Vacios',


        });

        return false;


    } else {
        $.ajax({
            url: "conexion/guardar8.php",
            type: "POST",
            datatype: "json",
            data: {
                componente1: componente1,
                subcomponentes5: subcomponentes5,
                subcomponentes3: subcomponentes3,
                subcomponentes4: subcomponentes4
            },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        type: "error",
                        title: "Error datos faltantes",
                    });
                } else {
                    Swal.fire({
                        icon: "success",
                        type: "success",
                        title: "Datos correctos",
                        confirmButtonColor: "#3885d6",
                        confirmButtonText: "Enviar Datos"
                    }).then((result) => {
                        if (result.value) {

                            window.location.href = "buttons.php";
                        }
                    })
                }
            }


        });
    }


});


$('#formDatos5').submit(function(e) {
    e.preventDefault();

    var producto1 = $.trim($("#producto1").val());
    var subproductos4 = $.trim($("#subproductos4").val());
    var subproductos5 = $.trim($("#subproductos5").val());
    var subproductos6 = $.trim($("#subproductos6").val());

    if (producto1.length == "" || subproductos4.length == "" || subproductos5.length == "" || subproductos6.length == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campos Vacios',


        });

        return false;


    } else {
        $.ajax({
            url: "conexion/guardar9.php",
            type: "POST",
            datatype: "json",
            data: {
                producto1: producto1,
                subproductos4: subproductos4,
                subproductos5: subproductos5,
                subproductos6: subproductos6
            },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        type: "error",
                        title: "Error datos faltantes",
                    });
                } else {
                    Swal.fire({
                        icon: "success",
                        type: "success",
                        title: "Datos correctos",
                        confirmButtonColor: "#3885d6",
                        confirmButtonText: "Enviar Datos"
                    }).then((result) => {
                        if (result.value) {

                            window.location.href = "buttons.php";
                        }
                    })
                }
            }


        });
    }


});



$('#formDatos6').submit(function(e) {
    e.preventDefault();

    var actividad1 = $.trim($("#actividad1").val());
    var subactividades4 = $.trim($("#subactividades4").val());
    var subactividades5 = $.trim($("#subactividades5").val());
    var subactividades6 = $.trim($("#subactividades6").val());

    if (actividad1.length == "" || subactividades4.length == "" || subactividades5.length == "" || subactividades6.length == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campos Vacios',


        });

        return false;


    } else {
        $.ajax({
            url: "conexion/guardar10.php",
            type: "POST",
            datatype: "json",
            data: {
                actividad1: actividad1,
                subactividades4: subactividades4,
                subactividades5: subactividades5,
                subactividades6: subactividades6
            },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        type: "error",
                        title: "Error datos faltantes",
                    });
                } else {
                    Swal.fire({
                        icon: "success",
                        type: "success",
                        title: "Datos correctos",
                        confirmButtonColor: "#3885d6",
                        confirmButtonText: "Enviar Datos"
                    }).then((result) => {
                        if (result.value) {

                            window.location.href = "buttons.php";
                        }
                    })
                }
            }


        });
    }


});


$('#formDatos7').submit(function(e) {
    e.preventDefault();

    var componente2 = $.trim($("#componente2").val());
    var subcomponentes6 = $.trim($("#subcomponentes6").val());
    var subcomponentes7 = $.trim($("#subcomponentes7").val());
    var subcomponentes8 = $.trim($("#subcomponentes8").val());

    if (componente2.length == "" || subcomponentes6.length == "" || subcomponentes7.length == "" || subcomponentes8.length == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campos Vacios',


        });

        return false;


    } else {
        $.ajax({
            url: "conexion/guardar11.php",
            type: "POST",
            datatype: "json",
            data: {
                componente2: componente2,
                subcomponentes6: subcomponentes6,
                subcomponentes7: subcomponentes7,
                subcomponentes8: subcomponentes8
            },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        type: "error",
                        title: "Error datos faltantes",
                    });
                } else {
                    Swal.fire({
                        icon: "success",
                        type: "success",
                        title: "Datos correctos",
                        confirmButtonColor: "#3885d6",
                        confirmButtonText: "Enviar Datos"
                    }).then((result) => {
                        if (result.value) {

                            window.location.href = "buttons.php";
                        }
                    })
                }
            }


        });
    }


});


$('#formDatos8').submit(function(e) {
    e.preventDefault();

    var producto2 = $.trim($("#producto2").val());
    var subproductos7 = $.trim($("#subproductos7").val());
    var subproductos8 = $.trim($("#subproductos8").val());
    var subproductos9 = $.trim($("#subproductos9").val());

    if (producto2.length == "" || subproductos7.length == "" || subproductos8.length == "" || subproductos9.length == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campos Vacios',


        });

        return false;


    } else {
        $.ajax({
            url: "conexion/guardar12.php",
            type: "POST",
            datatype: "json",
            data: {
                producto2: producto2,
                subproductos7: subproductos7,
                subproductos8: subproductos8,
                subproductos9: subproductos9
            },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        type: "error",
                        title: "Error datos faltantes",
                    });
                } else {
                    Swal.fire({
                        icon: "success",
                        type: "success",
                        title: "Datos correctos",
                        confirmButtonColor: "#3885d6",
                        confirmButtonText: "Enviar Datos"
                    }).then((result) => {
                        if (result.value) {

                            window.location.href = "buttons.php";
                        }
                    })
                }
            }


        });
    }


});


$('#formDatos9').submit(function(e) {
    e.preventDefault();

    var actividad2 = $.trim($("#actividad2").val());
    var subactividades7 = $.trim($("#subactividades7").val());
    var subactividades8 = $.trim($("#subactividades8").val());
    var subactividades9 = $.trim($("#subactividades9").val());

    if (actividad2.length == "" || subactividades7.length == "" || subactividades8.length == "" || subactividades9.length == "") {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Campos Vacios',


        });

        return false;


    } else {
        $.ajax({
            url: "conexion/guardar13.php",
            type: "POST",
            datatype: "json",
            data: {
                actividad2: actividad2,
                subactividades7: subactividades7,
                subactividades8: subactividades8,
                subactividades9: subactividades9
            },
            success: function(data) {
                if (data == "null") {
                    Swal.fire({
                        type: "error",
                        title: "Error datos faltantes",
                    });
                } else {
                    Swal.fire({
                        icon: "success",
                        type: "success",
                        title: "Datos correctos",
                        confirmButtonColor: "#3885d6",
                        confirmButtonText: "Enviar Datos"
                    }).then((result) => {
                        if (result.value) {

                            window.location.href = "buttons.php";
                        }
                    })
                }
            }


        });
    }


});







$(document).ready(function() {
    $('#btnguardar').click(function() {
        var datos = $('#frmajax').serialize();
        $.ajax({
            type: "POST",
            url: "conexion/guardar.php",
            data: datos,
            success: function(r) {
                if (r == 1) {
                    alert("agregado con exito");
                } else {
                    alert("Fallo el server");
                }
            }
        });

        return false;
    });
});

//Boton de agregar-->

$("#add-campo").click(function() {
    $("#formulario2").append('<form id="formulario2"> <div class="card-body"> <div class="row g-3"> <div class="col"> <label>Componente</label> <input type="text" class="form-control" placeholder="First name" aria-label="First name"> <br> <br> <!-- Button trigger modal --> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa fa-plus-square" aria-hidden="true" ></i> </button ><!-- Modal --> <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div> <div class="modal-body"> ... </div> <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button> </div> </div> </div> </div> </div> <div class="col"> <label>Producto</label> <input type="text" class="form-control" placeholder="Last name" aria-label="Last name"> <br> <br> <!-- Button trigger modal --> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa fa-plus-square" aria-hidden="true"></i> </button> <!-- Modal -->  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">  <div class="modal-dialog">  <div class="modal-content">   <div class="modal-header">  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div> <div class="modal-body">  ...  </div>   <div class="modal-footer">  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>  <button type="button" class="btn btn-primary">Save changes</button>   </div> </div>  </div> </div>  </div>  <div class="col"> <label>Actividades</label> <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">  <br> <br>  <!-- Button trigger modal -->   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">  <i class="fa fa-plus-square" aria-hidden="true"></i> </button>  <!-- Modal --> <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">    <div class="modal-dialog">  <div class="modal-content"> <div class="modal-header">  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>  <div class="modal-body"> ...   </div> <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>   <button type="button" class="btn btn-primary">Save changes</button> </div> </div>  </div> </div> </div> </div> </div>   </div> ');



});