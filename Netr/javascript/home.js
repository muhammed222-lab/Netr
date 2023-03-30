let scrollNav = document.querySelector('.posts .scrollNav')
let navText = scrollNav.querySelector('.nav-text')

let navLink = document.querySelectorAll('.nav-text a')

let scrollPin = document.querySelector('.scroll-line .child');

navLink.forEach(links => {
          links.addEventListener('click', (e)=>{
                    let evt = e.target.id;
                    if(evt == "home"){
                              scrollPin.style.marginLeft = "35px";
                              
                    }
                    if(evt == "msg"){
                              scrollPin.style.marginLeft = "110px";
                              
                    }
                    if(evt == "profile"){
                              scrollPin.style.marginLeft = "190px";
                              
                              
                    }
          })
});
let postBox = document.querySelector('.post-wrapper')
setInterval(() => {
         let xhr = new XMLHttpRequest()
          xhr.open('GET', 'php/home.php', true)
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
