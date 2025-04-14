document.addEventListener("DOMContentLoaded", () => {
  const styles = {
    default: ["ri-file-copy-line", "text-light-400", "border-light-400"],
    success: ["ri-check-line", "text-green-500", "border-green-500"],
  };

  document.querySelectorAll("pre > code").forEach((code) => {
    const btn = document.createElement("i");
    btn.classList.add(
      ...styles.default,
      "absolute",
      "top-3",
      "right-3",
      "text-md",
      "border",
      "rounded",
      "py-0.5",
      "px-1.5",
      "cursor-pointer",
      "transition-all",
      "duration-200"
    );

    btn.onclick = () => {
      navigator.clipboard.writeText(code.innerText).then(() => {
        styles.default.forEach((cls, i) =>
          btn.classList.replace(cls, styles.success[i])
        );
        setTimeout(() => {
          styles.success.forEach((cls, i) =>
            btn.classList.replace(cls, styles.default[i])
          );
        }, 2000);
      });
    };

    code.parentElement.classList.add("relative");
    code.parentElement.appendChild(btn);
  });
});
