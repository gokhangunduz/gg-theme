const btn = document.getElementById("theme-toggle");
const root = document.documentElement;

const setTheme = (t) => {
  root.dataset.theme = t;
  btn.innerHTML =
    t === "dark"
      ? '<i class="text-2xl ri-sun-line"></i>'
      : '<i class="text-2xl ri-moon-line"></i>';
  localStorage.theme = t;
};

let theme = localStorage.theme || "dark";
setTheme(theme);

btn.onclick = () => setTheme((theme = theme === "dark" ? "light" : "dark"));
