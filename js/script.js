const menuBtn = document.querySelector(".menu-btn");
const menu = document.querySelector(".menu ul");

menuBtn.addEventListener("click", function () {
    menu.classList.toggle("active");
});

// Fechar o menu ao clicar em um link
document.querySelectorAll('.menu ul li a').forEach(item => {
    item.addEventListener('click', () => {
        menu.classList.remove('active');
    });
});