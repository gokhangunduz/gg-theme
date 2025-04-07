document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const menu = document.getElementById("menu");
  const overlay = document.getElementById("menu-overlay");

  if (menuToggle && menu && overlay) {
    menuToggle.addEventListener("click", () => {
      menu.classList.remove("hidden");
      overlay.classList.remove("hidden");
    });

    overlay.addEventListener("click", () => {
      menu.classList.add("hidden");
      overlay.classList.add("hidden");
    });
  }
});
