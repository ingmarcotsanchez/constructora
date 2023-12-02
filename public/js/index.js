function init(){
    $("#cliente_form").on("submit",function(e){
        guardaryeditar(e);	
    });
}

function guardaryeditar(e){
    console.log("prueba");
    e.preventDefault();
    var formData = new FormData($("#cliente_form")[0]);
    $.ajax({
        url: "/constructora/controller/cliente.php?opc=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data){
            console.log(data);
            $('#cliente_data').DataTable().ajax.reload();

            Swal.fire({
                title: 'Correcto!',
                text: 'Se Registro Correctamente',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            })
        }
    });
}

$(document).ready(function(){
    $('#cli_mensaje').summernote({
        height: 200,
        lang: "es-ES",
        callbacks: {
            onPaste: function (e) {
                console.log("Text detect...");
            }
        },
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
        ]
    });
    $('#cli_mensaje').summernote({
        height: 200,
        lang: "es-ES"
    });
    $('#cli_mensaje').summernote('disable');
    $('#cliente_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"/constructora/controller/cliente.php?opc=listar",
            type:"post"
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 15,
        "order": [[ 0, "desc" ]],
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
    });

});

function editar(cli_id){
    $.post("./../controller/cliente.php?opc=mostrar",{cli_id:cli_id},function (data){
        data = JSON.parse(data);
        console.log(data);
        $('#cli_id').val(data.cli_id);
        $('#cli_nombre').val(data.cli_nombre);
        $('#cli_correo').val(data.cli_correo);
        $('#cli_telef').val(data.cli_telef);
        $('#cli_asunto').val(data.cli_asunto);
        $('#cli_mensaje').val(data.cli_mensaje);
        $('#est').val(data.est);
    });
    $('#titulo_modal').html('Editar Cliente');
    $('#modalcrearClientes').modal('show');
}

init();