const menuBtn = document.querySelector(".menu-btn");
const menuBtnBurger = document.querySelector(".menu-btn__burger");
const siteHeaderContainter = document.querySelector(".header__container");
const siteHeaderMenu = document.querySelector(".header__menu");

let isMenuOpen = false;

menuBtn.addEventListener("click", openMenu);

function openMenu() {
  if (isMenuOpen) {
    menuBtnBurger.classList.remove("open");
    siteHeaderContainter.classList.remove("open");
    siteHeaderMenu.classList.remove("open");
  } else {
    menuBtnBurger.classList.add("open");
    siteHeaderContainter.classList.add("open");
    siteHeaderMenu.classList.add("open");
  }

  isMenuOpen = !isMenuOpen;
}
