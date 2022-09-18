const signIn = document.getElementById("sign-in");
const signUp = document.getElementById("sign-up");
const check=False
const error = document.getElementById("error")

register=function(){
    window.location.href='http://localhost/twitter-clone-project/register/sign-up.html'
}
checkLogin=function()
{
    
    //get  data from localstorage
    let userStored = localStorage.getItem('username')
    let passwordStored = localStorage.getItem('password')
    

    //data entered from user
    let userInput = document.getElementById('check-user').value
    let passwordInput = document.getElementById('check-password').value
    //checking if user is logged in 
    if(userInput == userStored && passwordInput == passwordStored) 
    {
        window.location.href='http://localhost/twitter-clone-project/'
    }
    else{
        error.innerHTML="invalied username or password"
    }
    
   
}

signIn.addEventListener('click',checkLogin)
signUp.addEventListener('click',register)
