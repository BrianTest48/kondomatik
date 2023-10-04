var tabla;

$(document).ready(function(){
    console.log("prueba");
 tabla=$('#listardocumento_data').dataTable({
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
        url: '../../controller/RegistroDocucontrolador.php?op=listar',
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
