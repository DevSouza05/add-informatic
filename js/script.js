document.querySelector('.menu-toggle').addEventListener('click', function(){
    const navMenu = document.querySelector('header nav ul');
    navMenu.classList.toggle('active');
})