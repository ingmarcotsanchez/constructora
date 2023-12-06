function init(){
    $("#contact_form").on("submit",function(e){
        //console.log("hola");
        guardar(e);	
    });
}
$(document).ready(function() {

});
function guardar(e){
    console.log("prueba");
    e.preventDefault();
    var formData = new FormData($("#contact_form")[0]);
    console.log(formData);
    $.ajax({
        url: "/constructora/controller/cliente.php?opc=guardarCliente",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data){
            if (data==1){

                $.post("/constructora/controller/cliente.php?opc=emailBienvenida",{cli_correo : $("#cli_correo").val()},function(data){
                    console.log(data);
                });
                window.location.reload()
                Swal.fire({
                    icon: 'success',
                    title: 'Constructores e Ingenieros',
                    text : 'Gracias por suscribirte!',
                    showConfirmButton: false,
                    timer: 2000
                    
                })

                $("#cli_correo").val('');
            }else{
                window.location.reload()
                Swal.fire({
                    icon: 'error',
                    title: 'Constructores e Ingenieros',
                    text : 'Correo ya suscrito!',
                    showConfirmButton: false,
                    timer: 5000
                })
            }
        }
    });

}

init();