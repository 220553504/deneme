var container = document.querySelector(".container");
var sideMenu = document.querySelector(".side-menu");

var startY = 0; // Menüyü sabitlemek istediğiniz başlangıç yüksekliği
var stopHeight = 1380; // Menüyü durdurmak istediğiniz yükseklik (örnek olarak 500 piksel)

window.addEventListener("scroll", function() {
    var scrollPosition = window.scrollY;

    if (scrollPosition >= startY && scrollPosition <= stopHeight) {
        sideMenu.style.position = "fixed";
        sideMenu.style.top = "160px"; // Menünün sayfanın üstünden 20 piksel mesafede olmasını isteyebilirsiniz
    } else if (scrollPosition < startY) {
        sideMenu.style.position = "relative";
        sideMenu.style.top = "0";
    } else if (scrollPosition > stopHeight) {
        sideMenu.style.position = "absolute";
        sideMenu.style.top = (stopHeight - startY) + "px";
    }
});











