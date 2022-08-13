/*Existen 3 var(global), let(local) y const*/
/*Si tengo una constante no se podra reasignar luego*/
const btn_signup = document.querySelector("#signup-btn");
const btn_signin = document.querySelector("#signin-btn");
const container = document.querySelector(".all-container");
 
btn_signup.addEventListener("click", () => { 
    container.classList.add("sign-up-mode")
});

btn_signin.addEventListener("click", () => {
    container.classList.remove("sign-up-mode")
});