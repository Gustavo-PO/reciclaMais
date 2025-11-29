const formLogin = document.querySelector(".card");
const formRegister = document.querySelector(".cardCriar");

document.getElementById("btnMostrarRegister").addEventListener("click", () => {
    formLogin.classList.remove("ativo");
    formRegister.classList.add("ativo");
});

document.getElementById("btnMostrarLogin").addEventListener("click", () => {
    formRegister.classList.remove("ativo");
    formLogin.classList.add("ativo");
});
