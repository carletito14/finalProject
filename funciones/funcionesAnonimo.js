function validarContraseña() {
   var pass = document.getElementById('pass').value;
   var pass1 = document.getElementById('pass1').value;

   if (pass === pass1) {
      alert('perfecto')
   } else {
      alert('mal');
   }
}


function myFunction() {
   alert("Debes iniciar sesión para poder comprar/alquilar un libro");
   window.location.href = ".."

}

function controlcookies() {
   // si variable no existe se crea (al clicar en Aceptar)
   localStorage.controlcookie = (localStorage.controlcookie || 0);

   localStorage.controlcookie++; // incrementamos cuenta de la cookie
   cookie1.style.display = 'none'; // Esconde la política de cookies
}
if (localStorage.controlcookie > 0) {
   document.getElementById('cookie1').style.bottom = '-50px';
}