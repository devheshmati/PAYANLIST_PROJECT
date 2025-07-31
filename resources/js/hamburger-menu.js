const hamburgerToggleBtn = document.querySelector("#hamburger-toggle-button"); // get hamburger button
const mobileMenu = document.querySelector("#hamburger-menu"); // get menu
const hamburgerCloseBtn = document.querySelector("#hamburger-close-button");

hamburgerToggleBtn.addEventListener("click", (e) => {
    mobileMenu.classList.remove("translate-x-[-200%]");
});

hamburgerCloseBtn.addEventListener("click", (e) => {
    mobileMenu.classList.add("translate-x-[-200%]");
});
