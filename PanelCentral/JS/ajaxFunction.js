function cargar()
{
    var destino = document.getElementById("destino").Value;
    var parametro={
        "destino": destino,
        "pagina": global
    }
    
    $.ajax({
        url: '../PHP/Enviar.php',
        type: 'POST',
        data: parametro
        });
}