

window.addEventListener('DOMContentLoaded', (event) => {
    document.querySelector('.menu-style').onmouseenter = function () {
        document.querySelector('.dropdown-menu2').classList.add('show')
    }

    document.querySelector('.menu-style').onmouseleave = function () {
        document.querySelector('.dropdown-menu2').classList.remove('show')
    }

    document.querySelector('.dropdown-menu2').onmouseenter = function () {
        this.classList.add('show')
    }

    document.querySelector('.dropdown-menu2').onmouseleave = function () {
        this.classList.remove('show')
    }
});

