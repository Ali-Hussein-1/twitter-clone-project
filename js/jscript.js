// const myForm= document.getElementById("contactForm")
// myForm.addEventListener('submit',function(e){
//     e.preventDefault() //prevent the page form reloading or navigating when submit the form 
//     const formData =new FormData(this)// collection of key value pairs of the form it self, store data inside formData object 
//    // set the content of the request to the top 
//     fetch('http://localhost/assignment/startbootstrap-freelancer-gh-pages/contact-retrieve-data/send.php', {
//         method: 'post',
//         body:formData
//     })
//     .then (function (response){
//         return response.text()
//         console.log(text)
//     })

// })






// const myForm= document.getElementById("contactForm")
// const fullname= document.getElementById("name")
// const email = document.getElementById("email")
// const phone = document.getElementById("phone")
// const message = document.getElementById("message")

// myForm.addEventListener('submit',sendData)

// function sendData(e){
//     e.preventDefault() //prevent the page form reloading or navigating when submit the form 
//     var searchparams = new URLSearchParams({"fullname":fullname,"email":email,"phone":phone,"message":message})

//     fetch('send.php', {
//         method: 'POST',
//         body:searchparams
//     })
//     .then(response=> response.json())
//     .then()
// }





// const btnEl = document.getElementById('submit-btn')
// const fullnameEl= document.getElementById("name")
// const emailEl = document.getElementById("email")
// const phonenumberEl = document.getElementById("phone")
// const textareaEl = document.getElementById("message")

// btnEl.addEventListener('click', (e) => {
//     e.preventDefault()
// let url = "http://localhost/form/send.php";
// let parameters = {
//     method: 'POST',
//     body: new URLSearchParams({
//         fullname: fullnameEl.value,
//         email: emailEl.value,
//         phonenumber: phonenumberEl.value,
//         message: textareaEl.value
//     })
// }
// fetch(url, parameters)
//     .then(respone => respone.json())
//     .then(data => console.log(data));


// })

let img1 = document.getElementById("img1")
let img2 = document.getElementById("img2")

console.log("any")
if(img1.src == img2.src)
{
    console.log("sucess")
}
