const escapes = document.getElementById("escape")
const error = document.getElementById("offerror")
function turNoff(){
    escapes.addEventListener("click",function(){
          error.classList.add("hide")
    })
}
turNoff()