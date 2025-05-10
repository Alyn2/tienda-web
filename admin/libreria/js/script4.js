function registrate() {
    window.location.href = "registrate.html";
}

function iniciarsesion() {


    var txtco = document.getElementById("txtco").value;
    var password = document.getElementById("password").value;
    window.location.href = "iniciar sesion.html";
    
    if (txtco === "" || password === "") {
        alert("Por favor, complete todos los campos antes de iniciar sesión.");
        window.location.href = "../../principal.html";
    } else {
        //window.location.href = "../../principal.html";
        
        //alert("Usuario registrado");
    }
} 

function bloquearusuario() {
    
    var txtco = document.getElementById("txtco").value;
    
    if (txtco === "") {
        alert("Por favor, complete todos los campos antes de bloquear al usuario.");
    } else {
       
        alert("El usuario ha sido bloqueado exitosamente.");
    }
}
function soyadministrador() {
    window.location.href = "../contenido/iniciar sesion admi.html";
}