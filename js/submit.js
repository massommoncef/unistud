
document.addEventListener("DOMContentLoaded", function() {
    const loginButton = document.querySelector("footer.signin-butt-submit button");
    const popBox = document.querySelector(".pop-box");
    const signinText=document.querySelector(".signin-text-submit");
    const loginButt=document.querySelector(".signin-butt-submit");
    const exit=document.querySelector(".exit img");

    loginButton.addEventListener("click", function() {
        popBox.style.display = "flex"; // Utilise 'flex' puisque .pop-box utilise display: flex
        signinText.style.display = "none";
        loginButt.style.display = "none";
    });

    exit.addEventListener("click",function(){
        popBox.style.display = "none"; // Utilise 'flex' puisque .pop-box utilise display: flex
        signinText.style.display = "flex";
        loginButt.style.display = "flex";
    });
    
});