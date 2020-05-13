function myFunction() {
   alert("Debes iniciar sesión para poder alquilar un libro");
}

function validarContraseña(){
   var pass = document.getElementById('pass').value;
   var pass1 = document.getElementById('pass1').value;

   if (pass === pass1) {
      alert('perfecto')
   }else{
      alert('mal');
   }
}