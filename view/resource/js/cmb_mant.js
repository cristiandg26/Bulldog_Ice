$(document).ready(function () {

    $('#selectarea').change(function () {
        recargarLista();
    })

    $('#selectsolicitante').change(function () {
        cargardatossolicitante();
    })

    $('#TipoEquipo').change(function () {
        var op = $('#TipoEquipo').val();
        switch (op) {
            case '1':
                ocultar_equipos();
                mostrar_pc();
                break;

            case '2':
                ocultar_equipos();
                mostrar_imp();
                break;

            case '3':
                ocultar_equipos();
                mostrar_swt();
                break;
        }

    })

    $("#NombreEquipo").focusout(function () {
        var op = $('#NombreEquipo').val();
        if (op.length > 0) {
            $.post("controlador/peticiones_ajax.php", {
                funcion: 6,
                host: op
            }, function (data) {
                $('#caract').html(data);
            })
        }
    });

    $('#selectestmat').change(function () {
        cargar_sub_est();
    })

    $("#text_dx").keyup(function () {
        var n = $("#text_dx").val().length;
        if (n > 3) {
            var text_dx = $('#text_dx').val();
            var genero = $('#genero').val();
            recargarDx(text_dx, genero);
        } else {
            limpiarDx();
        }

    });


    $("#DxPrincipal").focusout(function () {
        var dx = $("#DxPrincipal").val();
        if (dx.length > 0) {
            ConsultarDxPrin(dx);
        } else {
            $('#DxPrincipal_text').val('------------------------------------------------------------------------------------------');

        }
    });

    $("#DxRelacionado").focusout(function () {
        var dx = $("#DxRelacionado").val();
        if (dx.length > 0) {
            ConsultarDxRela(dx);
        } else {
            $('#DxRelacionado_text').val('------------------------------------------------------------------------------------------');

        }
    });

    $('#FechaInicial').change(function () {
        var dias = CalcularDias();
        ValidarDias(dias);
    })

    $('#FechaFinal').focusout(function () {
        var dias = CalcularDias();
        ValidarDias(dias);
    })

    $('#TipoAfiliado').change(function () {
        var op = $('#TipoAfiliado').val();
        $("#TipoUsuario").empty();
        
        switch (op) {
            case 'Contributivo':
                $("#TipoUsuario").append("<option selected disabled value=''>Seleccione</option>");
                $("#TipoUsuario").append("<option value='Cotizante'>Cotizante</option>");
                $("#TipoUsuario").append("<option value='Beneficiario'>Beneficiario</option>");
                break;

            case 'Subsidiado':
                $("#TipoUsuario").append("<option selected disabled value=''>Seleccione</option>");
                $("#TipoUsuario").append("<option value='Cabeza de Familia'>Cabeza de Familia</option>");
                $("#TipoUsuario").append("<option value='Beneficiario'>Beneficiario</option>");
                break;

            case 'No aplica':
                $("#TipoUsuario").append("<option selected value='No aplica'>No aplica</option>");
                break;
        }

    })
})


function recargarLista() {
    $.post("controlador/peticiones_ajax.php", {
        funcion: 1,
        area: $('#selectarea').val()
    }, function (data) {
        $('#pcs').html(data);
    })
}

function cargardatossolicitante() {
    $.post("controlador/peticiones_ajax.php", {
        funcion: 2,
        solicitante: $('#selectsolicitante').val()
    }, function (data) {
        $('#datossolicitante').html(data);
    })
}

function cargarpc(ruta) {
    $.post("controlador/peticiones_ajax.php", {
        funcion: ruta,
        solicitante: 0
    }, function (data) {
        $('#caract').html(data);
    })
}


function ocultar_equipos() {
    $('#caract-pc').hide();
    $("#TipoPC").removeAttr("required");
    $("#TipoProc").removeAttr("required");
    $("#TipoRAM").removeAttr("required");
    $("#CantidadHDD").removeAttr("required");
    $("#CapacidadHDD").removeAttr("required");
    $("#ActivoFijo").removeAttr("required");

    $('#caract-imp').hide();
    $("#TipoImpresora").removeAttr("required");
    $("#CapMensual").removeAttr("required");

    $('#caract-swt').hide();
    $("#TipoCapa").removeAttr("required");
    $("#VerFirmware").removeAttr("required");
    $("#CantFuentes").removeAttr("required");
    $("#CantETH").removeAttr("required");
    $("#VelETH").removeAttr("required");
    $("#CantFO").removeAttr("required");
    $("#VelFO").removeAttr("required");
    $("#ArcConfig").removeAttr("required");
    $("#Usuario").removeAttr("required");
    $("#Contr").removeAttr("required");
}


function mostrar_pc() {
    $('#caract-pc').show();
    $("#TipoPC").prop("required", true);
    $("#TipoProc").prop("required", true);
    $("#TipoRAM").prop("required", true);
    $("#CantidadHDD").prop("required", true);
    $("#CapacidadHDD").prop("required", true);
    $("#ActivoFijo").prop("required", true);
}

function mostrar_imp() {
    $('#caract-imp').show();
    $("#TipoImpresora").prop("required", true);
    $("#CapMensual").prop("required", true);
}

function mostrar_swt() {
    $('#caract-swt').show();
    $("#TipoCapa").prop("required", true);
    $("#VerFirmware").prop("required", true);
    $("#CantFuentes").prop("required", true);
    $("#CantETH").prop("required", true);
    $("#VelETH").prop("required", true);
    $("#CantFO").prop("required", true);
    $("#VelFO").prop("required", true);
    $("#ArcConfig").prop("required", true);
    $("#Usuario").prop("required", true);
    $("#Contr").prop("required", true);
}

function cargar_sub_est() {
    $.post("controlador/peticiones_ajax.php", {
        funcion: 7,
        est_mat: $('#selectestmat').val()
    }, function (data) {
        $('#subestmat').html(data);
    })
}

function myFunction() {
    var op = $('#selectsubestmat').val();
    if (op == "1") {
        $("#imgfirm").prop("required", true);
        $("#imgfirm").prop("disabled", false);
        $("#selectsolicitante").prop("disabled", false);
    } else {
        $("#imgfirm").removeAttr("required");
        $("#imgfirm").prop("disabled", true);
        $("#selectsolicitante").prop("disabled", true);
    }
}

function recargarDx(text_dx, genero) {
    $.post("controlador/peticiones_ajax.php", {
        funcion: 8,
        text_dx: text_dx,
        genero: genero
    }, function (data) {
        $('#RespuestaDX').html(data);
    })
}

function limpiarDx() {
    $.post("controlador/peticiones_ajax.php", {
        funcion: 9
    }, function (data) {
        $('#RespuestaDX').html(data);
    })
}

function SeleccionDX(dx) {
    var codigo_dx = $('#codigo_dx').val();
    if (codigo_dx == "1") {
        $('#DxPrincipal').val(dx);
        ConsultarDxPrin(dx);
    } else {
        $('#DxRelacionado').val(dx);
        ConsultarDxRela(dx);
    }
}

function ConsultarDxPrin(dx) {
    var genero = $('#genero').val();
    $.post("controlador/peticiones_ajax.php", {
        funcion: 10,
        text_dx: dx,
        genero: genero
    }, function (data) {
        $('#divDxPrincipal').html(data);
    })
}


function ConsultarDxRela(dx) {
    var genero = $('#genero').val();
    $.post("controlador/peticiones_ajax.php", {
        funcion: 11,
        text_dx: dx,
        genero: genero
    }, function (data) {
        $('#divDxRelacionado').html(data);
    })
}

function CalcularDias() {
    var f1 = $('#FechaInicial').val();
    var f2 = $('#FechaFinal').val();
    let fecha1 = new Date(f1);
    let fecha2 = new Date(f2);
    let diferencia = fecha2.getTime() - fecha1.getTime();
    let diasDeDiferencia = diferencia / 1000 / 60 / 60 / 24;
    diasDeDiferencia = diasDeDiferencia + 1;
    $('#dias').val(diasDeDiferencia);
    return diasDeDiferencia;
}

function ValidarDias(dias) {
    if (dias < 1) {
        $('#FechaFinal').val('');
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Fecha inicial superior a la fecha final de la incapacidad',
            showConfirmButton: false,
            timer: 1500
        })
    } else {
        ValidarPeriodoIncapacidad()
    }
}


function ValidarPeriodoIncapacidad() {
    var FechaInicial = $('#FechaInicial').val();
    var FechaFinal = $('#FechaFinal').val();
    var Tipodoc = $('#Tipodoc').val();
    var NumeroDocumento = $('#NumeroDocumento').val();
    $.post("controlador/peticiones_ajax.php", {
        funcion: 12,
        FechaInicial: FechaInicial,
        FechaFinal: FechaFinal,
        Tipodoc: Tipodoc,
        NumeroDocumento: NumeroDocumento
    }, function (data) {
        $('#div_FechasAjax').html(data);
    })
}
