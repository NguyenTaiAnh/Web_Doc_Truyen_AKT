

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

document.addEventListener('DOMContentLoaded', function () {
    Typed.new('.type', {
        strings: ["Đọc Truyện Không Hay Xóa Web Truyện"],
        stringsElement: null,
        // typing speed
        typeSpeed: 60,
        // time before typing starts
        startDelay: 600,
        // backspacing speed
        backSpeed: 20,
        // time before backspacing
        backDelay: 500,
        // loop
        loop: true,
        // false = infinite
        loopCount: 5,
        // show cursor
        showCursor: false,
        // character for cursor
        cursorChar: "|",
        // attribute to type (null == text)
        attr: null,
        // either html or text
        contentType: 'html',
    });
});