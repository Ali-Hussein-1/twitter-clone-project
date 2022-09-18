// let signIn = document.getElementById("sign-in");
let signUp = document.getElementById("sign-up-btn")

//Storing users email and password


function store()
{
    let email = document.getElementById("email-address").value
    let password = document.getElementById("password").value
    let username= document.getElementById("Username").value
    localStorage.setItem('email',email)
    localStorage.setItem('password', password)
    localStorage.setItem('username', username)
   
}



// function checkLogin()
// {
    
//     //get  data from localstorage
//     let emailStored = localStorage.getItem('email')
//     let passwordStored = localStorage.getItem('password')
//     console.log(emailStored)

//     //data entered from user
//     let emailInput = document.querySelector('.check-email').value
//     let passwordInput = document.querySelector('.check-password').value

//     if(emailInput == emailStored)
//     {
//         console.log("success")
       
    
    
//     }
//     if(passwordInput == passwordStored)
//     {
//         console.log("success")
//     }
   
// }

signUp.addEventListener('click',store)
