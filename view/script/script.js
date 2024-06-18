const modal = document.getElementById("myModal");
const btn = document.getElementById("openModal");
const closeModalBtn = document.querySelector(".closeModal");

btn.addEventListener("click", () => {
    modal.style.display = "block";
});

closeModalBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});
