
let signUp = document.getElementById("sign-up-btn")

//Storing users email and password
store=function()
{
    // get the email pass and username entred by user
    let email = document.getElementById("email-address").value
    let password = document.getElementById("password").value
    let username= document.getElementById("Username").value
    //store it in local storge
    localStorage.setItem('email',email)
    localStorage.setItem('password', password)
    localStorage.setItem('username', username)

    const formData = new FormData()
    formData.append("username",username)
    formData.append("email",email)
    formData.append("password",password)
     //fetch the data into database 
     console.log(formData)
      fetch('http://localhost/twitter-clone-project/send.php', {
          method: 'POST',
          body:formData
      })
      .then(response =>{
           response.json() 
          console.log(response)})
}

signUp.addEventListener('click',store)

  