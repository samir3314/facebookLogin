const input = document.querySelector(".pass");
const toggle = document.querySelector(".toggle");

toggle.addEventListener("click",() => {
    if(input.type === "password"){
        input.type = "text";
        toggle.classList.replace("fa-eye", "fa-eye-slash");
    }
    else{
        input.type = "password";
        toggle.classList.replace("fa-eye-slash", "fa-eye");
    }
})