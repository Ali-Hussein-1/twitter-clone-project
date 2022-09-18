



const twTxtContent = document.getElementById("text-content")
const addTweet = document.getElementById("btn")
const tweets = document.getElementById("show")
let newTweetContent = document.createElement("div")

addTweet.onclick = (e) => {
    console.log("dd")
  e.preventDefault()
  newTweetContent.classList.add("new-content")
  const content=twTxtContent.value
  newTweetContent.innerHTML = `
  
 <div class="tweet">
          
            <div class="tweet-detail">
              <div class="user">
                <span>NorbertB</span>
                <span>@NBMenyhart</span>
                <span >. 4h</span>
              </div>
                <div>${content}</div>
              </div>
`
  twTxtContent.value = ""
  tweets.appendChild(newTweetContent)
}


let btn=document.getElementById("btn-clicked")

getResponse=function()
{
   

    console.log("hello")
     const tweet=document.getElementById("text-content").value
     const formData = new FormData()
     formData.append("text",tweet)
    
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

btn.addEventListener('click',getResponse)

