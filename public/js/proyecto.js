function init(){
    $("#proyecto_form").on("submit",function(e){
        guardaryeditar(e);	
    });
}

function guardaryeditar(e){
    //console.log("prueba");
    e.preventDefault();
    var formData = new FormData($("#proyecto_form")[0]);
    $.ajax({
        url: "/constructora/controller/proyecto.php?opc=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data){
            $('#proyecto_data').DataTable().ajax.reload();
            $('#modalcrearProyectos').modal('hide');
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
   
    $('#proyecto_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"/constructora/controller/proyecto.php?opc=listar",
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
    //$('#proyecto_form')[0].reset();
    $('#modalcrearProyectos').modal('show');
}

function editar(pro_id){
    $.post("./../controller/proyecto.php?opc=mostrar",{pro_id:pro_id},function (data){
        data = JSON.parse(data);
        console.log(data);
        $('#pro_id').val(data.pro_id);
        $('#pro_logo').val(data.pro_logo);
        $('#pro_nombre').val(data.pro_nombre);
        $('#pro_ciudad').val(data.pro_ciudad);
        $('#pro_casas').val(data.pro_casas);
        $('#pro_piscinas').val(data.pro_piscinas);
        $('#pro_parques').val(data.pro_parques);
        $('#pro_tipo').val(data.pro_tipo);
        $('#pro_imagen').val(data.pro_imagen);
        $('#pro_precio').val(data.pro_precio);
    });
    $('#titulo_modal').html('Editar Proyecto');
    $('#modalcrearProyectos').modal('show');
}

function eliminar(pro_id){
    Swal.fire({
        title: 'Eliminar!',
        text: 'Desea eleminar el Registro?',
        icon: 'error',
        showCancelButton: true,
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Cancelar',
    }).then((result)=>{
        if(result.value){
            $.post("/constructora/controller/proyecto.php?opc=eliminar",{pro_id:pro_id},function (data){
                $('#proyecto_data').DataTable().ajax.reload();
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

function pro_act(pro_id){
    $.post("/constructora/controller/proyecto.php?opc=activo",{pro_id:pro_id},function (data){
        $('#proyecto_data').DataTable().ajax.reload();
    });
}

function pro_ina(pro_id){
    $.post("/constructora/controller/proyecto.php?opc=inactivo",{pro_id:pro_id},function (data){
        $('#proyecto_data').DataTable().ajax.reload();
    });
}


init();