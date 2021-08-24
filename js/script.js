function cadastro(){
    var user = prompt('Usuário:')
    var pass = prompt('Senha:')

    if(user == "adm-master" && pass == 'adm789'){
      window.location.href = "cadastro.php"
    }else{
      alert("[ERRO] Dados de login Inválidos")
      window.location.href = "index.php"
    }
  }
  
  