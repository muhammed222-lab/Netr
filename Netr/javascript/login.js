const form = document.querySelector('.login form')
const continueBtn = form.querySelector('.button input')
const errorText = form.querySelector('.error-txt')

form.onsubmit = (e)=>{
          e.preventDefault()
}

continueBtn.onclick = ()=>{
          // let do ajax connection
          let xhr = new XMLHttpRequest()
          xhr.open('POST', 'php/login.php', true)
          xhr.onload = ()=>{
                    if(xhr.readyState === XMLHttpRequest.DONE){
                              if(xhr.status === 200){
                              let data = xhr.response;
                              // console.log(data)
                              if(data == "success"){
                                 location.href = "user.php"
                              }else{
                                        errorText.style.display = "block";
                                        errorText.textContent = data;
                                        
                                       
                              }
                              }
                    }
                    
          }
          // sending form data
          let formData = new FormData(form)
          xhr.send(formData)
}