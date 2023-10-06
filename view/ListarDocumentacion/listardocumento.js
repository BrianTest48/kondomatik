var tabla;

$(document).ready(function () {
    //console.log("prueba");
    tabla = $('#listardocumento_data').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        "searching": false,
        "columnDefs": [
            {
                "targets": [0], // Índice de la columna que deseas ocultar (en este caso, la tercera columna)
                "visible": false, // Hacer la columna invisible
                "searchable": false // No permitir que la columna sea buscada
            }
        ],
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'copyHtml5',
            'pdf'
        ],
        "ajax": {
            url: '../../controller/RegistroDocuControlador.php?op=listar',
            type: "get",
            dataType: "json",
            error: function (e) {
                console.log(e.responseText);
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 10,
        "order": [[0, "asc"]],
        "language": {
            "sProcessing": "Procesando....",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousand": ",",
            "sLoadingRecords": "Cargando....",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Ultimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior",
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendete",
                "sSortDescending": ": Activar para ordenar la columna de manera descendete",
            }
        }
    }).dataTable();



});

function vista(valor) {
    // console.log(valor);
    $('#mdltitulo').html('Vista previa');

    $.ajax({
        type: 'POST',
        url: '../../controller/RegistroDocuControlador.php?op=mostrar',
        data: { IdGestionDocumento: valor },
        dataType: 'JSON',
        success: function (data) {
                        console.log(data);
                        var pdfDiv = document.getElementById("pdfViewer");
                        //var pdfUrl = "http://localhost/kondomatik/Docs/GD004/Print%20de%20Modulos%20Kondomatik.pdf"; 
                        var pdfUrl = "../../Docs/"+data.id_generator+"/"+ data.Des_RutaDocumento; 
            console.log(pdfUrl);
                        var embed = document.createElement("embed");
                        embed.src = pdfUrl;
                        embed.width = "100%";
                        embed.height = "100%";
                        pdfDiv.innerHTML = "";
                        pdfDiv.appendChild(embed);

            // var pdfUrl = "../../Docs/"+data.id_generator+"/"+ data.Des_RutaDocumento; 

            // $


        },
        error: function (error) {
            console.log(error);
        }
    });
    $('#modaldocumentacion').modal('show');

}

function edit(valor) {
    window.open("../RegistrarDocumentacion/index.php?id=" + valor, "_self");
}

function eliminar(valor) {
    swal.fire({
        title: "Gestion Documento",
        text: "Desea eliminar el registro?",
        icon: "error",
        showCancelButton: true,
        confirmButtonText: 'Si',
        cancelButtonText: 'No',
        reverseButtons: true

    }).then((result) => {
        if (result.isConfirmed) {

            $.post("../../controller/RegistroDocuControlador.php?op=eliminar", { IdGestionDocumento: valor }, function (data) {
                $('#listardocumento_data').DataTable().ajax.reload();
            });

            $('#listardocumento_data').DataTable().ajax.reload();

            swal.fire(
                'Eliminado  !',
                'El registro se elimino correctamente.',
                'success'
            )
        }
    }
    )
}

