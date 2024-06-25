document.addEventListener('DOMContentLoaded', function () {
    const navToggler = document.querySelector('.navbar-toggler');
    const navMenu = document.querySelector('#navbarNavAltMarkup');

    // Toggle menu
    navToggler.addEventListener('click', function () {
        navMenu.classList.toggle('show');
    });

    // Change navbar color on scroll
    var navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', function () {
        navbar.classList.toggle('navbar-scrolled', window.scrollY > 120);
    });
});

        // Menghapus animasi bounce setelah selesai
        document.addEventListener('DOMContentLoaded', function () {
            let inputSearch = document.querySelector('.form-control');

            inputSearch.addEventListener('focus', function () {
                this.classList.add('bounce-animation');
            });

            inputSearch.addEventListener('animationend', function () {
                this.classList.remove('bounce-animation');
            });
        });


AOS.init({
    once: true
});

// document.addEventListener("DOMContentLoaded", function() {
//     var navItems = document.querySelectorAll('.nav-link');

//     navItems.forEach(function(item) {
//         item.addEventListener('click', function() {
//             navItems.forEach(function(navItem) {
//                 navItem.classList.remove('active');
//             });
//             this.classList.add('active');
//         });
//     });
// });
