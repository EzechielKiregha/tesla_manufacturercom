function openNav() {
    document.getElementById("myNav").classList.toggle("menu_width");
    document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
}

$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

function openForm() {
    document.getElementById("login").classList.toggle("menu_width");
    document.querySelector(".btn").classList.toggle("menu_btn-style");
}

function closeForm() {
    document.getElementById("login").classList.remove("menu_width");
    document.querySelector(".btn").classList.remove("menu_btn-style");
}
