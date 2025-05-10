function iniciarsesion() {
  
    var txtco = document.getElementById("txtco").value;
    var password = document.getElementById("password").value;
    
    if (txtco === "" || password === "") {
        alert("Por favor, complete todos los campos antes de iniciar sesión.");
    } else {
       // window.location.href = "../contenido/administrador.html";
    }
}