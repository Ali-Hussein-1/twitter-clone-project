

function getResponse() {
    fetch("http://localhost/twitter-clone-project/retrieve.php")
    .then((res) => res.json())
    .then(data => {
        console.log(data)
        
    })
}
window.addEventListener('load', function () {
    getResponse()
})
