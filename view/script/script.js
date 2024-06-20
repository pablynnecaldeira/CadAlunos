const modal = document.getElementById("myModal");
const btn = document.getElementById("openModal");
const btnCadastro = document.querySelector('#btnCadastro')
const excluirOpenModal = document.querySelectorAll('#excluirOpenModal')
const modalExcluir = document.getElementById("modalExcluir");
const closeModalBtn = document.getElementById("closeModal");

let id;

excluirOpenModal.forEach((btn) =>{
    btn?.addEventListener('click', (e) => {
        id = e.currentTarget.attributes['data-id'].value
        modal.style.display = "block";
    })
})
 
btn?.addEventListener("click", (e) => {
  modal.style.display = "block";
});

btnCadastro?.addEventListener("click", () => {
  document.getElementById("formCadastro").submit();
});

closeModalBtn?.addEventListener("click", () => {
  modal.style.display = "none";
});

modalExcluir?.addEventListener("click", () => {
    window.location.href = `../../controller/index.php?acao=deletar&id=${id}`
});

window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});
