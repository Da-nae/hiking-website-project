const button = document.querySelector('#button-menu');
const menu = document.querySelector('#mobile-menu-2');

button.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});

const buttonUser = document.querySelector('#user-menu-button');
const menuUser = document.querySelector('#user-dropdown');

buttonUser.addEventListener('click', () => {
    menuUser.classList.toggle('hidden');
});