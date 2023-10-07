var tabla;
var editar = 0;

function init() {
    $("#document_form").on("submit", function (e) {
        guardaryeditar(e);
    });
}

function guardaryeditar(e) {
    console.log('La función guardaryeditar se está ejecutando.');

    e.preventDefault();
    var formData = new FormData($("#document_form")[0]);

    // Imprime el objeto FormData en la consola para depuración
    for (var pair of formData.entries()) {
        //console.log(pair[0]+ ', ' + pair[1]); 
    }

    $.ajax({
        url: "../../controller/RegistroDocuControlador.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
            console.log('Llamada AJAX exitosa:', datos);
            $('#document_form')[0].reset();
            // Mostrar un mensaje de éxito, si es necesario
            swal.fire(
                'Registro',
                'Se registró correctamente.',
                'success'
            );
        },
        error: function (xhr, status, error) {
            console.error('Error en la llamada AJAX:', status, error);
            // Puedes mostrar un mensaje de error o realizar alguna acción adicional aquí
            swal.fire(
                'Error',
                'Hubo un problema al procesar la solicitud. Por favor, inténtalo de nuevo.',
                'error'
            );
        }
    });
}


// Inicializar la función cuando el documento esté listo
$(document).ready(function () {
    $("#document_form").on("submit", function (e) {
        guardaryeditar(e);
    });

    $.post("../../controller/TipoDocumentoControlador.php?op=combo", function (data) {
        $("#IdTipDocumentoGestion").html(data);
    });


    var id = getParameterByName('id');
    if (id == "") {
        //nuev registro
        $('.cbx_estado').hide();
        let fecha_act = moment().tz('America/Lima').format("YYYY-MM-DD");
        console.log(fecha_act);

        $('#Fec_Registro').val(fecha_act);

        $.ajax({
            type: 'POST',
            url: '../../controller/RegistroDocuControlador.php?op=mostrar_ultimo',
            dataType: 'JSON',
            success: function (data) {
                //console.log(data);
                var cod = data.id_generator;
                var numero = parseInt(cod.substring(2));
                numero++;
                var nuevoNumero = ("000000" + numero).slice(-6);

                $('#IdGestionDocumento').val("GD" + nuevoNumero);
            },
            error: function (error) {
                console.log(error);
            }
        });
    } else {
        //editar registro
        $('.cbx_estado').show();
        $.ajax({
            type: 'POST',
            url: '../../controller/RegistroDocuControlador.php?op=mostrar',
            data: { IdGestionDocumento: id },
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                let fecha = moment(data.Fec_Registro).format("YYYY-MM-DD");
                $('#id_doc_gestion').val(data.IdGestionDocumento);
                $('#Fec_Registro').val(fecha);
                $('#IdGestionDocumento').val(data.id_generator);
                $('#IdTipDocumentoGestion').val(data.IdTipDocumentoGestion).trigger('change');
                $('#Des_NombreDocumento').val(data.Des_NombreDocumento);
                $('#Des_Detalle').val(data.Des_Detalle);
                $('#Estado').val(data.Flg_Estado).trigger('change');
            },
            error: function (error) {
                console.log(error);
            }
        })
    }



});

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}


function editar(IdGestionDocumento) {
    $('#mdltitulo').html('Editar Registro');
    /*$.post("../../controller/productocontrolador.php?op=mostrar", { IdGestionDocumento: IdGestionDocumento }, function (data) {
        data = JSON.parse(data);
        $('#IdGestionDocumento').val(data.IdGestionDocumento);
        $('#IdTipDocumentoGestion').val(data.IdTipDocumentoGestion);
        $('#Des_Detalle').val(data.Des_Detalle).trigger('change');
        $('#Fec_Registro').val(data.Fec_Registro);
        $('#Des_RutaDocumento').val(data.Des_RutaDocumento);
        $('#Des_NombreDocumento').val(data.Des_NombreDocumento);
        $('#Flg_Busqueda').val(data.Flg_Busqueda);
        $('#Flg_Estado').val(data.Flg_Estado);
    });*/


}

function eliminar(IdGestionDocumento) {
    swal.fire({
        title: "CRUD",
        text: "Desea eliminar el registro?",
        icon: "error",
        showCancelButton: true,
        confirmButtonText: 'Si',
        cancelButtonText: 'No',
        reverseButtons: true

    }).then((result) => {
        if (result.isConfirmed) {
            $.post("../../controller/RegistroDocuControlador.php?op=eliminar", { IdGestionDocumento: IdGestionDocumento }, function (data) {
                $('#documento_data').DataTable().ajax.reload();
            });

            $('#documento_data').DataTable().ajax.reload();

        }
    });
}

$(document).on("click", "#btnGuardar", function () {

});

function Limpiar() {
    window.open("../ListarDocumentacion/index.php", "_self");
}

init();
