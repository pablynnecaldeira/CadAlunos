const modal = document.getElementById("myModal");
const btn = document.getElementById("openModal");
const modalCadastro = document.getElementById("modalCadastro");
const modalAtualizar = document.getElementById("modalAtualizar");
const closeModalBtn = document.querySelector(".closeModal");

btn.addEventListener("click", (e) => {
  modal.style.display = "block";
});

closeModalBtn?.addEventListener("click", (e) => {
  modal.style.display = "none";
});

modalCadastro?.addEventListener("click", () => {
  document.getElementById("formCadastro").submit();
});

modalAtualizar?.addEventListener("click", () => {
  document.getElementById("formUpdate").submit();
});

window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});
