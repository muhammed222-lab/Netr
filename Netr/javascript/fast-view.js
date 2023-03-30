let postBox = document.querySelector('.reel-flex')
setInterval(() => {
         let xhr = new XMLHttpRequest()
          xhr.open('GET', 'php/fast-view.php', true)
          xhr.onload = ()=>{
                    if(xhr.readyState === XMLHttpRequest.DONE){
                              if(xhr.status === 200){
                              let data = xhr.response;
                              postBox.innerHTML = data;
                              }
                    }
                    
          } 
          xhr.send()    
}, 500);
