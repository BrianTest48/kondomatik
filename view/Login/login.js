function init() {
    $('#loginform').on("submit", function (e) {
        Ingresar(e);
    });
}
function Ingresar(e) {
    //window.open("index.html");
    e.preventDefault();
    //location.href = "inicio.html";
    var usu_alias = $('#usuario').val();
    var usu_pass = $('#clave').val();
    console.log(usu_alias);
    $.post("../../controller/usuariocontrolador.php?op=ingresar",{ alias : usu_alias, clave : usu_pass},function (data) {
        console.log(data);
        
        if(data == 0){
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Las credenciales no coinciden',
                showConfirmButton: true,
                //timer:1500
            });

        }else{
            //window.open('http://localhost/Perfitec/view/Inicio/','_self');
            window.location.href="../Inicio/index.php";
        }

    });
}

init();