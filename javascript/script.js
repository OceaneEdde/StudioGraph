document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const mainMenu = document.querySelector('.menu ul');

    menuToggle.addEventListener('click', function() {
        mainMenu.classList.toggle('show');
        menuToggle.classList.toggle('hide'); // Ajoute ou supprime la classe hide
    });
});
