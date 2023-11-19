function toggleSubMenu(submenuId) {
    var submenu = document.getElementById(submenuId);
    if (submenu.style.display === "none" || getComputedStyle(submenu).display === "none") {
        submenu.style.display = "block";
    } else {
        submenu.style.display = "none";
    }
}
