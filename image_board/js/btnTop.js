document.addEventListener("DOMContentLoaded", () => {
  const btnTop = document.querySelector("#btnTop");
  btnTop.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});
