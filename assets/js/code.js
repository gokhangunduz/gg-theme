document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll("pre > code").forEach((codeBlock) => {
    const icon = document.createElement("i");
    icon.classList.add(
      "ri-file-copy-line",
      "absolute",
      "top-3",
      "right-3",
      "text-lg",
      "border",
      "rounded",
      "text-light-400",
      "border-light-400",
      "py-0.5",
      "px-1.5",
      "cursor-pointer",
      "transition-all",
      "duration-500"
    );

    icon.onclick = () => {
      navigator.clipboard.writeText(codeBlock.innerText).then(() => {
        icon.classList.replace("ri-file-copy-line", "ri-check-line");
        icon.classList.add("text-green-500");

        setTimeout(() => {
          icon.classList.replace("ri-check-line", "ri-file-copy-line");
          icon.classList.remove("text-green-500");
        }, 2000);
      });
    };

    const pre = codeBlock.parentElement;

    pre.classList.add("relative");

    pre.appendChild(icon);
  });
});
