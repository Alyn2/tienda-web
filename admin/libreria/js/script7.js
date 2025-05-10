function agregarAnuncio() {
    var titulo = document.getElementById('titulo').value;
    var contenido = document.getElementById('contenido').value;

    if (titulo === '' || contenido === '') {
        alert('Por favor, complete todos los campos antes de publicar el anuncio.');
    } else {
        window.location.href = "../contenido/anunciop.html";
    }
}