//NO LO USO PORQUE HE ADAPTADO OTRO PARA OPTIMIZAR.
/*
addEventListener('load', cargar)


function cargar() {

    //recoger la id
    var id = document.getElementById('muestraLibros')


    var xhttp = new XMLHttpRequest()
    xhttp.addEventListener('readystatechange', function () {

            if (this.readyState == 4 && this.status == 200) {
                var datos = JSON.parse(this.responseText)
                console.log(datos)
                datos.forEach(element => {
                    var div = document.createElement('div')
                    div.classList.add('col-sm')

                    var card = document.createElement('div')
                    card.classList.add('card')
                    card.style.width = '13rem'

                    var img = document.createElement('img')
                    img.src = '../imagenes/Biblioteca.png' //para cambiar imagenees de libro
                    img.classList.add('card-img-top')

                    var div2 = document.createElement('div')
                    div2.classList.add('card-body')

                    var p = document.createElement('p')
                    p.classList.add('card-text')
                    p.innerHTML = element.autor;

                    var p2 = document.createElement('p')
                    p2.classList.add('card-text')
                    p2.innerHTML = element.nombre;


                    var a = document.createElement('a')
                    //a.classList.add('btn')
                    //a.classList.add('btn-primary')
                 //   a.innerHTML = 'Saber más'
                   // a.href = "#" 

                    div2.appendChild(p)
                    div2.appendChild(p2)
                    div2.appendChild(a)
                    card.appendChild(img)

                    card.appendChild(div2)

                    div.appendChild(card)

                    id.appendChild(div) //esto es para mostar los libros

                });




            }

        }

    )


    xhttp.open('POST', '../controlador/librosByNum.php', true)
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    xhttp.send("num= 0")

    paginacion()
}


function paginacion() {

    var pag = document.getElementById('paginacion')

    var xhttp2 = new XMLHttpRequest()
    xhttp2.addEventListener('readystatechange', function () {

            if (this.readyState == 4 && this.status == 200) {
                var cantidad = this.responseText



                cantidad = parseInt(cantidad);
                var div = document.createElement('div')
                for (let i = 0; i < cantidad; i++) {
                    var div2 = document.createElement('div')
                    var a = document.createElement('button')
                    a.innerHTML = i+1
                    a.name = "paginas"

                    div2.appendChild(a)
                    div.appendChild(div2)

                }

                
                pag.appendChild(div)
                var paginasClick = document.getElementsByName('paginas')
                for (let i = 0; i < paginasClick.length; i++) {
                    paginasClick[i].addEventListener('click', cambiarPagina, false)
                }
            }

        }

    )


    xhttp2.open('GET', '../controlador/librosByNum2.php', true)
    xhttp2.send()
}

function cambiarPagina(a){
console.log(a.target.innerHTML)
//hACER AJAX QUE ENVIE 2 NUMEROS 
}*/