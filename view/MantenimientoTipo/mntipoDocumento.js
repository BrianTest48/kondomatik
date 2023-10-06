var tabla;

function init(){
   $("#tipodocumento_form").on("submit",function(e){
       guardaryeditar(e);
   });
}

$(document).ready(function(){
    $('#cbx_estado').hide();
 tabla=$('#documento_data').dataTable({
   "aProcessing": true,
   "aServerSide": true,
   dom: 'Bfrtip',
   buttons: [ 
               'copyHtml5',
               'excelHtml5',
               'csvHtml5',
               'copyHtml5',
               'pdf'              
            ],
    "ajax":{
        url: '../../controller/TipoDocumentoControlador.php?op=listar',
        type : "get",
        dataType : "json",
        error: function(e){
            console.log(e.responseText);
        }
    },
    "bDestroy": true,
    "responsive": true,
    "bInfo": true,
    "iDisplayLength": 10,
    "order": [[ 0, "asc" ]],
    "language": {
        "sProcessing":    "Procesando....",
        "sLengthMenu":    "Monstrar _MENU_ registros",
        "sZeroRecords":   "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Monstrando un total de _TOTAL_ registros",   
        "sInfoEmpty":      "Monstrando un total de 0 registros", 
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousand":   ",",
        "sLoadingRecords": "Cargando....",
        "oPaginate": {
            "sFirst":     "Primero",
            "sLast":      "Ultimo",
            "sNext":      "Siguiente",
            "sPrevious":  "Anterior",
        },
        "oAria": {
          "sSortAscending": ": Activar para ordenar la columna de manera ascendete",
          "sSortDescending": ": Activar para ordenar la columna de manera descendete",
        }
    }
    }).dataTable();

});

function guardaryeditar(e){
   
    e.preventDefault();
    var formData = new FormData($("#tipodocumento_form")[0]);

    $.ajax({
        url: "../../controller/TipoDocumentoControlador.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){

            $('#tipodocumento_form')[0].reset();
            $('#tipodocumantenimiento').modal('hide');
            $('#documento_data').DataTable().ajax.reload();

            swal.fire(
                'Registro',
                'Se registro correctamente.',
                'success'
            ) 
        },

        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

function editar(IdTipDocumentoGestion){

    console.log(IdTipDocumentoGestion);
    $('#tipodocutitulo').html('Editar Registro');
    $('#cbx_estado').show();

    $.post("../../controller/TipoDocumentoControlador.php?op=mostrar",{IdTipDocumentoGestion:IdTipDocumentoGestion},function(data){
        data = JSON.parse(data);
        $('#IdTipDocumentoGestion').val(data.IdTipDocumentoGestion);
        $('#Nom_TipoDocumentoGestion').val(data.Nom_TipoDocumentoGestion);
        $('#Estado').val(data.Estado).trigger('change');
        console.log(data);
    });

    $('#tipodocumantenimiento').modal('show');
}

function eliminar(IdTipDocumentoGestion){
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
        
        $.post("../../controller/TipoDocumentoControlador.php?op=eliminar",{IdTipDocumentoGestion:IdTipDocumentoGestion},function (data) {
            $('#documento_data').DataTable().ajax.reload();
        });

        $('#documento_data').DataTable().ajax.reload();

        swal.fire(
                'Eliminado  !',
                'El registro se elimino correctamente.',
                'success'
        )
        }
    }
    )
}
   

$(document).on("click","#btnnuevotipo", function(){
    $('#tipodocutitulo').html('Nuevo Registro');
    $('#IdTipDocumentoGestion').val("");
    $('#tipodocumento_form')[0].reset();
    $('#tipodocumantenimiento').modal('show');

    $('#cbx_estado').hide();



});

$(document).on("click","#btnclose", function(){
    $('#tipodocumantenimiento').modal('hide');
});

init();

