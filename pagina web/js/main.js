// PRODUCTOS
const productos = [
    // Abrigos
    {
        id: "abrigo-01",
        titulo: "Abrigo 01",
        imagen: "./img/abrigos/01.jpg",
        categoria: {
            nombre: "Abrigos",
            id: "abrigos"
        },
        precio: 1000
    },
    {
        id: "abrigo-02",
        titulo: "Abrigo 02",
        imagen: "./img/abrigos/02.jpg",
        categoria: {
            nombre: "Abrigos",
            id: "abrigos"
        },
        precio: 1000
    },
    {
        id: "abrigo-03",
        titulo: "Abrigo 03",
        imagen: "./img/abrigos/03.jpg",
        categoria: {
            nombre: "Abrigos",
            id: "abrigos"
        },
        precio: 1000
    },
    {
        id: "abrigo-04",
        titulo: "Abrigo 04",
        imagen: "./img/abrigos/04.jpg",
        categoria: {
            nombre: "Abrigos",
            id: "abrigos"
        },
        precio: 1000
    },
    {
        id: "abrigo-05",
        titulo: "Abrigo 05",
        imagen: "./img/abrigos/05.jpg",
        categoria: {
            nombre: "Abrigos",
            id: "abrigos"
        },
        precio: 1000
    },
    // Camisetas
    {
        id: "camiseta-01",
        titulo: "Camiseta 01",
        imagen: "./img/camisetas/01.jpg",
        categoria: {
            nombre: "Camisetas",
            id: "camisetas"
        },
        precio: 1000
    },
    {
        id: "camiseta-02",
        titulo: "Camiseta 02",
        imagen: "./img/camisetas/02.jpg",
        categoria: {
            nombre: "Camisetas",
            id: "camisetas"
        },
        precio: 1000
    },
    {
        id: "camiseta-03",
        titulo: "Camiseta 03",
        imagen: "./img/camisetas/03.jpg",
        categoria: {
            nombre: "Camisetas",
            id: "camisetas"
        },
        precio: 1000
    },
    {
        id: "camiseta-04",
        titulo: "Camiseta 04",
        imagen: "./img/camisetas/04.jpg",
        categoria: {
            nombre: "Camisetas",
            id: "camisetas"
        },
        precio: 1000
    },
    {
        id: "camiseta-05",
        titulo: "Camiseta 05",
        imagen: "./img/camisetas/05.jpg",
        categoria: {
            nombre: "Camisetas",
            id: "camisetas"
        },
        precio: 1000
    },
    {
        id: "camiseta-06",
        titulo: "Camiseta 06",
        imagen: "./img/camisetas/06.jpg",
        categoria: {
            nombre: "Camisetas",
            id: "camisetas"
        },
        precio: 1000
    },
    {
        id: "camiseta-07",
        titulo: "Camiseta 07",
        imagen: "./img/camisetas/07.jpg",
        categoria: {
            nombre: "Camisetas",
            id: "camisetas"
        },
        precio: 1000
    },
    {
        id: "camiseta-08",
        titulo: "Camiseta 08",
        imagen: "./img/camisetas/08.jpg",
        categoria: {
            nombre: "Camisetas",
            id: "camisetas"
        },
        precio: 1000
    },
     //Ofertas
     {
        id:"ofertas-01",
        titulo: "Conjunto de 2 piezas",
        imagen: "./img/ofertas/01.jpg",
        categoria:{
            nombre:" Ofertas",
            id: "ofertas",
        },
        precio: 150
     },
     {
        id:"ofertas-02",
        titulo: "Vestido Verde Lechuga",
        imagen: "./img/ofertas/02.jpg",
        categoria:{
            nombre:" Ofertas",
            id: "ofertas",
        },
        precio: 50
     },
     {
        id:"ofertas-03",
        titulo: "CropTop Celeste",
        imagen: "./img/ofertas/03.jpg",
        categoria:{
            nombre:" Ofertas",
            id: "ofertas",
        },
        precio: 30
     },
     {
        id:"ofertas-04",
        titulo: "Chaqueta Rosa",
        imagen: "./img/ofertas/04.jpg",
        categoria:{
            nombre:" Ofertas",
            id: "ofertas",
        },
        precio: 80
     },
     {
        id:"ofertas-05",
        titulo: "Pantalona Lila",
        imagen: "./img/ofertas/05.jpg",
        categoria:{
            nombre:" Ofertas",
            id: "ofertas",
        },
        precio: 60
     },
     {
        id:"ofertas-06",
        titulo: "Pantalona Negro",
        imagen: "./img/ofertas/06.jpg",
        categoria:{
            nombre:" Ofertas",
            id: "ofertas",
        },
        precio: 60
     },
     {
        id:"ofertas-07",
        titulo: "Corset",
        imagen: "./img/ofertas/07.jpg",
        categoria:{
            nombre:" Ofertas",
            id: "ofertas",
        },
        precio: 70
     },
     {
        id:"ofertas-08",
        titulo: "Vestido negro manga corta",
        imagen: "./img/ofertas/08.jpg",
        categoria:{
            nombre:" Ofertas",
            id: "ofertas",
        },
        precio: 80
     },
    
    // Pantalones
    {
        id: "pantalon-01",
        titulo: "Pantalón 01",
        imagen: "./img/pantalones/01.jpg",
        categoria: {
            nombre: "Pantalones",
            id: "pantalones"
        },
        precio: 1000
    },
    {
        id: "pantalon-02",
        titulo: "Pantalón 02",
        imagen: "./img/pantalones/02.jpg",
        categoria: {
            nombre: "Pantalones",
            id: "pantalones"
        },
        precio: 1000
    },
    {
        id: "pantalon-03",
        titulo: "Pantalón 03",
        imagen: "./img/pantalones/03.jpg",
        categoria: {
            nombre: "Pantalones",
            id: "pantalones"
        },
        precio: 1000
    },
    {
        id: "pantalon-04",
        titulo: "Pantalón 04",
        imagen: "./img/pantalones/04.jpg",
        categoria: {
            nombre: "Pantalones",
            id: "pantalones"
        },
        precio: 1000
    },
    {
        id: "pantalon-05",
        titulo: "Pantalón 05",
        imagen: "./img/pantalones/05.jpg",
        categoria: {
            nombre: "Pantalones",
            id: "pantalones"
        },
        precio: 1000
    }
    //Vestidos
    {
        id: "Vestidos-01",
        titulo: "Vestido Negro",
        imagen: "./img/vestido/01.jpg",
        categoria: {
            nombre: "Vestidos",
            id: "vestidos"
        },
        precio: 250
    },
    {
        id: "Vestidos-02",
        titulo: "Vestido rojo",
        imagen: "./img/vestidos/02.jpg",
        categoria: {
            nombre: "Vestidos",
            id: "vestidos"
        },
        precio: 250
    },
    {
        id: "Vestidos-03",
        titulo: "Vestido Negro manga larga",
        imagen: "./img/vestidos/03.jpg",
        categoria: {
            nombre: "Vestidos",
            id: "vestidos"
        },
        precio: 350
    },
    {
        id: "Vestidos-04",
        titulo: "Vestido Blanco",
        imagen: "./img/vestidos/03.jpg",
        categoria: {
            nombre: "Vestidos",
            id: "vestidos"
        },
        precio: 250
    },
    {
        id: "Vestidos-05",
        titulo: "Vestido Plomo",
        imagen: "./img/vestidos/05.jpg",
        categoria: {
            nombre: "Vestidos",
            id: "vestidos"
        },
        precio: 100
    },
    {
        id: "Vestidos-06",
        titulo: "Vestido Rojo Vino",
        imagen: "./img/vestidos/06.jpg",
        categoria: {
            nombre: "Vestidos",
            id: "vestidos"
        },
        precio: 150
    },
    {
        id: "Vestidos-07",
        titulo: "Vestido Palo de Rosa",
        imagen: "./img/vestidos/07.jpg",
        categoria: {
            nombre: "Vestidos",
            id: "vestidos"
        },
        precio: 250
    },
];

const contenedorProductos = document.querySelector("#contenedor-productos")

function cargarProductos()
{

    productos.forEach(producto => {
        const div = document.createElement("div");
        div.classList.add("producto");
        div.innerHTML=`
        <img class ="producto-imagen"src="${producto.imagen}"alt="${producto.titulo}">
        <div class="producto-detalles">
             <h3 class="producto-titulo">${producto.titulo}</h3>
            <p class="producto-precio">BS${producto.precio}</p>
            <button class="producto-agregar" id="${producto.id}">Agregar</button>
    </div>
    `;

    contenedorProductos.append(div);
    })

}

cargarProductos();