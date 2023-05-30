const btnPrimo = document.querySelector('#primo');
const mensaje = document.querySelector('#mensaje');
let inputDato = document.querySelector('#dato');



btnPrimo.addEventListener('click',operacion);

function operacion()
{
    let valor = inputDato.value;
    let cont=0;
    console.log(valor);
    console.log('diste click');

    for(let i=0; i<=valor; i++)
    {
        if(valor%i === 0)  
            cont++;
    }
    if(cont===2)
    {
        console.log("ES MI PRIMO");
        mensaje.textContent = "ES MI PRIMO";
        mensaje.classList.remove('noprimo');
        mensaje.classList.add('primo');
        return;
    }
    console.log("NO ES MI PRIMO");
    mensaje.textContent = "NO ES MI PRIMO";
    mensaje.classList.remove('primo');
    mensaje.classList.add('noprimo');
}