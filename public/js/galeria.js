function init(){
    $("#galeria_form").on("submit",function(e){
        guardaryeditar(e);	
    });
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#galeria_form")[0]);
    $.ajax({
        url: "/constructora/controller/galeria.php?opc=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data){
            console.log(data);
            $('#galeria_data').DataTable().ajax.reload();
            $('#modalcrearGaleria').modal('hide');
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
    $('#galeria_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"/constructora/controller/galeria.php?opc=listar",
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
    $('#titulo_modal').html('Nueva Imagen');
    $('#galeria_form')[0].reset();
    $('#modalcrearGaleria').modal('show');
}

function editar(gal_id){
    $.post("/constructora/controller/galeria.php?opc=mostrar",{gal_id:gal_id},function (data){
        data = JSON.parse(data);
        //console.log(data);
        $('#gal_id').val(data.gal_id);
        $('#gal_imagen').val(data.gal_imagen);
    });
    $('#titulo_modal').html('Editar Rol');
    $('#modalcrearGaleria').modal('show');
}

function eliminar(gal_id){
    Swal.fire({
        title: 'Eliminar!',
        text: 'Desea eleminar el Registro?',
        icon: 'error',
        showCancelButton: true,
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
    }).then((result)=>{
        if(result.value){
            $.post("/constructora/controller/galeria.php?opc=eliminar",{gal_id:gal_id},function (data){
                $('#galeria_data').DataTable().ajax.reload();
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

function gal_act(gal_id){
    $.post("/constructora/controller/galeria.php?opc=activo",{gal_id:gal_id},function (data){
        $('#galeria_data').DataTable().ajax.reload();
    });
}

function gal_ina(gal_id){
    $.post("/constructora/controller/galeria.php?opc=inactivo",{gal_id:gal_id},function (data){
        $('#galeria_data').DataTable().ajax.reload();
    });
}


init();
