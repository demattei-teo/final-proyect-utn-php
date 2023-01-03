/*MENU RESPONSIVO*/

function showMenu() {
    let nav = document.querySelector(".botonera_principal").classList.toggle('displayBlock');
    let buttonClose = document.querySelector(".button__close").classList.toggle('displayBlock');
    let buttonMenu = document.querySelector(".button__menu").classList.toggle('displayNone');
}


const containerButton = document.getElementById("container__buttons").addEventListener("click",showMenu);

    