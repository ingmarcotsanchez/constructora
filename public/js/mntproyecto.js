function init(){
    $("#mntproyecto_form").on("submit",function(e){
        guardaryeditar(e);	
    });
}

function guardaryeditar(e){
    //console.log("prueba");
    e.preventDefault();
    var formData = new FormData($("#mntproyecto_form")[0]);
    $.ajax({
        url: "/constructora/controller/mntproyectos.php?opc=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data){
            $('#mntproyecto_data').DataTable().ajax.reload();
            $('#modalcrearMntProyectos').modal('hide');
            Swal.fire({
                title: 'Correcto!',
                text: 'Se Registro Correctamente',
                icon: 'success',
                confirmButtonText: 'Aceptar',
                timer: 2000
            })
        }
    });
}
$(document).ready(function(){
    $('#pro_id').select2({
        dropdownParent: $("#modalcrearMntProyecto")
    });

    select_proyecto();

    $('#mpro_descripcion').summernote({
        height: 400,
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

    $('#mpro_descripcion').summernote({
        height: 400,
        lang: "es-ES"
    });  

    $('#mpro_descripcion');


    $('#mntproyecto_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"/constructora/controller/mntproyectos.php?opc=listar",
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

function nuevo(){
    $('#titulo_modal').html('Nuevo Proyecto');
    $('#mntproyecto_form')[0].reset();
    $('#modalcrearMntProyectos').modal('show');
}

function editar(mpro_id){
    $.post("./../controller/mntproyecto.php?opc=mostrar",{mpro_id:mpro_id},function (data){
        data = JSON.parse(data);
        console.log(data);
        $('#mpro_id').val(data.mpro_id);
        $('#mpro_video').val(data.mpro_video);
        $('#pro_id').val(data.pro_id).trigger('change');;
        $('#mpro_descripcion').val(data.mpro_descripcion);
        $('#mpro_privada').val(data.mpro_privada);
        $('#mpro_const').val(data.mpro_const);
        $('#mpro_alcobas').val(data.mpro_alcobas);
        $('#mpro_bannos').val(data.mpro_bannos);
        $('#mpro_imagen1').val(data.mpro_imagen1);
        $('#mpro_imagen2').val(data.mpro_imagen2);
        $('#mpro_imagen3').val(data.mpro_imagen3);
        $('#mpro_imagen4').val(data.mpro_imagen4);
        $('#mpro_imagen5').val(data.mpro_imagen5);
        $('#mpro_imagen6').val(data.mpro_imagen6);
        $('#mpro_imagen7').val(data.mpro_imagen7);
        $('#mpro_imagen8').val(data.mpro_imagen8);
        $('#mpro_imagen9').val(data.mpro_imagen9);
        $('#mpro_imagen10').val(data.mpro_imagen10);
    });
    $('#titulo_modal').html('Editar Proyecto');
    $('#modalcrearMntProyectos').modal('show');
}

function eliminar(mpro_id){
    Swal.fire({
        title: 'Eliminar!',
        text: 'Desea eleminar el Registro?',
        icon: 'error',
        showCancelButton: true,
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
    }).then((result)=>{
        if(result.value){
            $.post("/constructora/controller/mntproyecto.php?opc=eliminar",{mpro_id:mpro_id},function (data){
                $('#mntproyecto_data').DataTable().ajax.reload();
                Swal.fire({
                    title: 'Correcto!',
                    text: 'Se Elimino Correctamente',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                })
            }); 
        }
    });
}

function mpro_act(mpro_id){
    $.post("/constructora/controller/mntproyecto.php?opc=activo",{mpro_id:mpro_id},function (data){
        $('#mntproyecto_data').DataTable().ajax.reload();
    });
}

function mpro_ina(mpro_id){
    $.post("/constructora/controller/mntproyecto.php?opc=inactivo",{mpro_id:mpro_id},function (data){
        $('#mntproyecto_data').DataTable().ajax.reload();
    });
}

function select_proyecto(){
    $.post("/constructora/controller/proyecto.php?opc=combo",function (data){
        $('#pro_id').html(data);
    });
}
init();