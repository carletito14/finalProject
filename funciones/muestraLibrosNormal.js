addEventListener('load', cargar)
var pagina = 0
var boton = 0

function cargar() {
    document.getElementById('muestraLibros').innerHTML = ""
    document.getElementById('paginacion').innerHTML = ""
    //recoger la id

    var id = document.getElementById('muestraLibros')


    var xhttp = new XMLHttpRequest()
    xhttp.addEventListener('readystatechange', function () {

            if (this.readyState == 4 && this.status == 200) {
                var datos = JSON.parse(this.responseText)
                datos.forEach(element => {
                    var div = document.createElement('div')
                    div.classList.add('centrado')
                    div.classList.add('col-sm')
                    div.classList.add('mb-2')
                    div.classList.add('mt-2')

                    var card = document.createElement('div')
                    card.classList.add('card')
                    card.style.width = '13rem'

                    var img = document.createElement('img')
                    img.src = '../imagenes/' + element.codigo + '.jpg' //para cambiar imagenees de libro
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
                    a.classList.add('btn')
                    a.classList.add('btn-primary')
                    a.innerHTML = 'Saber más'
                    a.href = "../controlador/libroDetalles.php?codigo=" + element.codigo; //enviamos el libro a otra página donde se recogerán sus parámetros.

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
    xhttp.send("num= " + pagina)

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

                var div2 = document.createElement('div')
                div.className = "pagHijo"
                for (let i = 0; i < cantidad; i++) {

                    var a = document.createElement('button')
                    a.innerHTML = i + 1
                    a.value = i * 8
                    a.name = "paginas"
                    a.className = ""
                    if (i != boton) {
                        //LAS DEMAS PAGINAS
                        a.className = "hijoPag btn btn-info mt-3 mb-3"
                    } else {
                        //ESTE ES LA PÁGINA SELECCIONADA
                        a.className = "hijoPag btn btn-outline-info"

                    }

                    div.appendChild(a)
                    div2.appendChild(div)
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

function cambiarPagina(a) {
    pagina = parseInt(a.target.value)
    boton = parseInt(a.target.innerHTML) - 1
    cargar()
}