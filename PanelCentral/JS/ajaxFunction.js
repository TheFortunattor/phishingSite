function cargar()
{
    var destino = document.getElementById("destino").Value;
    var parametro={
        "destino": destino,
        "pagina": global
    }
    
    $.ajax({
        url: './PHP/Enviar.php',
        type: 'post',
        data: parametro
        });
}