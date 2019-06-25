window.onload = function () {
    const toggler = document.querySelector('.menuToggler');
    const menu = document.querySelector('.menu');

    /*
     * Toggles on and off the 'active' class on the menu
     * and the toggler button.
     */

    if (toggler) {
        toggler.addEventListener('click', () => {
            toggler.classList.toggle('active');
            menu.classList.toggle('active');
        })
    }
}

