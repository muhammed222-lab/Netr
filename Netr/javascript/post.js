const form = document.querySelector('.post form')
const continueBtn = form.querySelector('.button input')
const errorText = form.querySelector('.error-txt')

form.onsubmit = (e)=>{
          e.preventDefault()
}

continueBtn.onclick = ()=>{
          // let do ajax connection
          let xhr = new XMLHttpRequest()
          xhr.open('POST', 'php/post.php', true)
          xhr.onload = ()=>{
                    if(xhr.readyState === XMLHttpRequest.DONE){
                              if(xhr.status === 200){
                              let data = xhr.response;
                              if(data == "done"){
                                 location.href = "home.php";
                              }
                              else{
                                        errorText.textContent = data;
                                        errorText.style.display = "block";   
                              }
                              }
                              
                    }
                    
          }
          // sending form data
          let formData = new FormData(form)
          xhr.send(formData)
}