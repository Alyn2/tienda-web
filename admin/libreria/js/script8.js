function registrate() {
    var txtnom = document.getElementById("nombre").value;
    var tipd = document.getElementById("tdoc").value;
    var txtnr = document.getElementById("ndoc").value;
    var txtdir = document.getElementById("direc").value;
    var txtciu = document.getElementById("ciud").value;
    var txttel = document.getElementById("telef").value;
    var txtco = document.getElementById("correo").value;
    var password = document.getElementById("contra").value;
    
    if (
        txtnom === "" ||
        tipd === "" ||
        txtnr === "" ||
        txtdir === "" ||
        txtciu === "" ||
        txttel === "" ||
        txtco === "" ||
        password === ""
    ) {
        alert("Por favor, complete todos los campos antes de registrarse.");
    } else {
        alert("BIENVENID@");
       // window.location.href = "../contenido/iniciar sesion.html";
    }
}