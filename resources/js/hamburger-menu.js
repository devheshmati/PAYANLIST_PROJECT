const hamburgerToggleBtn = document.querySelector("#hamburger-toggle-button"); // get hamburger button
const mobileMenu = document.querySelector("#hamburger-menu"); // get menu
const hamburgerCloseBtn = document.querySelector("#hamburger-close-button");

if (hamburgerToggleBtn) {
    hamburgerToggleBtn.addEventListener("click", (e) => {
        mobileMenu.classList.remove("translate-x-[-200%]");
    });
}

if (hamburgerCloseBtn) {
    hamburgerCloseBtn.addEventListener("click", (e) => {
        mobileMenu.classList.add("translate-x-[-200%]");
    });
}
