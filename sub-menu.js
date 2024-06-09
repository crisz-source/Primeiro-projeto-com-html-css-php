document.addEventListener("DOMContentLoaded", function() {
    var toggleSubMenu = document.getElementById("toggleSubMenu");
    var subMenu = document.querySelector(".submenu");
  
    toggleSubMenu.addEventListener("click", function(event) {
      event.preventDefault(); // Prevenir o comportamento padrão do link
      if (subMenu.style.display === "block") {
        subMenu.style.display = "none";
      } else {
        subMenu.style.display = "block";
      }
    });
  });