
let password_input = document.getElementById('password')
let the_pws_click = document.getElementById('hide_show_pass')
the_pws_click.addEventListener('click', ()=>{

 if(password_input.type  == "password"){
          password_input.type  = "text"
          the_pws_click.innerText = 'Hide'
 }else{

            password_input.type  = "password";
            the_pws_click.innerText = 'Show'
          
          
 }
})


