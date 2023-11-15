
'use strict'

const carruselGrande = document.querySelector( '.carrusel-principal');
const punto = document.querySelectorAll('.punto');

punto.forEach((cadaPunto, i)=>{
    punto[i].addEventListener('click',()=>{
        let posicion = i;
        let operacion = posicion * -25;
        carruselGrande.style.transform = `translateX(${operacion}%)`
        punto.forEach((cadaPunto, i)=>{
            punto[i].classList.remove('activo');
        })
        punto[i].classList.add('activo');
    })
})

const botonMenu = document.querySelector('.hamburguesa img');
const listaMenu = document.querySelector('.menu ul');
botonMenu.addEventListener('click',()=>{
    listaMenu.classList.toggle('aparece');
})