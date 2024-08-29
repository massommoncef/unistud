

document.addEventListener("DOMContentLoaded", function() {
    const loginButton = document.querySelector("footer.signin-butt button");
    const popBox = document.querySelector(".pop-box");
    const signinText = document.querySelector(".signin-text-submit");
    const loginButt = document.querySelector(".signin-butt");
    const exitButton = document.querySelector(".exit img");
    const registerLink = document.querySelector("#register");

    loginButton.addEventListener("click", function() {
        popBox.style.display = "flex";
        signinText.style.display = "none";
        loginButt.style.display = "none";
    });

    exitButton.addEventListener("click", function() {
        popBox.style.display = "none";
        signinText.style.display = "flex";
        loginButt.style.display = "flex";
    });

    // part of retour botton in registration 

    const retourButton = document.querySelector(".retour");
    retourButton.addEventListener("click", function() {
        location.href("../html/home.php");    });

});


// document.addEventListener("DOMContentLoaded", function() {
//     const loginButton = document.querySelector("footer.signin-butt button");
//     const popBox = document.querySelector(".pop-box");
//     const signinText=document.querySelector(".signin-text-submit");
//     const loginButt=document.querySelector(".signin-butt");
//     const exit=document.querySelector(".exit img");
//     const register=document.querySelector("#regster");


//     //cette ligne pour eviter le lancemenent du popup box of login when we click on register
//         register.addEventListener("click",()=>{
//             condition=true;
//         });
    

//     loginButton.addEventListener("click", function() {
//         // if(condition){
//             // popBox.style.display = "none"; 
//             // signinText.style.display = "none";
//             // loginButt.style.display = "none";
//         // }else{
//             popBox.style.display = "flex"; 
//             signinText.style.display = "none";
//             loginButt.style.display = "none";
//         // }
        
//     });
//         //
//     exit.addEventListener("click",function(){
//         popBox.style.display = "none"; // Utilise 'flex' puisque .pop-box utilise display: flex
//         signinText.style.display = "flex";
//         loginButt.style.display = "flex";
//     });




    
// });






