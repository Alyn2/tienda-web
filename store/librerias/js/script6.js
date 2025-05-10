var formaPagoSelect = document.getElementById("forma_pago");
var datosTarjetaDiv = document.getElementById("datos_tarjeta");

formaPagoSelect.addEventListener("change", function() {
    if (this.value === "tarjeta") {
        datosTarjetaDiv.style.display = "block";
    } else {
        datosTarjetaDiv.style.display = "guardar datos.html";
    }
});
