const menuBtn = document.querySelector(".menu-btn");
console.log(menuBtn)
const menuNav = document.querySelector(".menu nav ul");
console.log(menuNav)

menuBtn.addEventListener("click", ()=> {
    menuNav.classList.toggle("active");

    console.log("mostrou")
})