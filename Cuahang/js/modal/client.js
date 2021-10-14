  const namee = document.getElementById("name")
  const formClient = document.querySelectorAll(".form-Client")
  const phonee = document.getElementById("phone")   
  const btn  = document.getElementById("btn1")
  const note = document.querySelectorAll(".notee")
  btn.addEventListener("click",showClient)

  function showClient(){
      console.log("thanh cong")
      const nameValue  = namee.value.trim()
      const phoneValue = phonee.value.trim()
     
      console.log(formClient.length)    
     
    
        if(nameValue === ""){
             formClient[0].classList.add("falsee")
             formClient[0].classList.remove("truee")
             note[0].innerHTML = "Vui Lòng Nhập Họ & Tên"

        }else{
            formClient[0].classList.remove("falsee")
            formClient[0].classList.add("truee")
        }
         if (phoneValue === ""){
            formClient[1].classList.remove("truee")  
            formClient[1].classList.add("falsee")
            note[1].innerHTML = "Vui Lòng Nhập Phone"
        } else{
            formClient[1].classList.remove("falsee")
            formClient[1].classList.add("truee")
        }
      
  


  }


