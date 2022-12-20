const button = document.querySelector('#button-menu');
const menu = document.querySelector('#mobile-menu-2');

button.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});

