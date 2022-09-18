
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

    
//         let data = {
//             "email": email,
//             "username": username,
//             "password": password
//         }

    
//          fetch("http://localhost/twitter-clone-project/send.php", {
//             method: "POST",
//             body: new URLSearchParams(data)
//         })
//         .then(respone => respone.json())
//         .then(data => console.log(data))
    
// 



    
  
  
      
     const formData = new FormData()
     formData.append("username",username)
     formData.append("email",email)
     formData.append("password",password)
     
     console.log(formData)
      fetch('http://localhost/twitter-clone-project/signup.php', {
          method: 'POST',
          body:formData
      })
      .then(response =>{
          // response.json() 
          console.log(response)})
         
    

  

}
signUp.addEventListener('click',store)

  