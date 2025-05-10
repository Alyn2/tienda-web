function agregarArticulo() {
    var nombre = document.getElementById('nombre').value;
    var descripcion = document.getElementById('descripcion').value;
    var precio = document.getElementById('precio').value;
    var foto = document.getElementById('foto').value;
    var colores = document.getElementById('colores').value;
    var tallas = document.getElementById('tallas').value;
    var metodos_pago = document.getElementById('metodos_pago').value;
    var codigo = document.getElementById('codigo').value;

    if (nombre === '' || descripcion === '' || precio === '' || foto === '' || colores === '' || tallas === '' || metodos_pago === '' || codigo === '') {
        alert('Por favor, complete todos los campos antes de agregar el artículo.');
    } else {
       // window.location.href = "../contenido/articulog.html";
    }
}