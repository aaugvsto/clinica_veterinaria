txtpass = document.getElementById('user')
txtuser = document.getElementById('pass')
function login(){
    if(txtpass.value == "" || txtuser.value == ""){
        alert('[ERRO!] \nInsira seus dados de login!')
    }
}

