function validarDados()
{
    //Resgatar dados
    var nome = document.getElementById("nome");
    var email = document.getElementById("email");
    var idade = document.getElementById("idade");
    
    var flag = true;
    var msg = "";
    
    if(nome.value ==="" || nome.value.length < 255){
        msg += "Preencha o campo nome corretamente";
        nome.focus();
        flag = false;
    }
    
    var filtro_mail = /^.+@.+\..{2,3}$/;
    if(!filtro_mail.test(email.value)|| email.value===""){
        msg += "Preencha o campo email corretamente";
        email.focus();
        flag = false;
    }
      
    if(idade.value ==="" ||!IsNum(idade.value.length)){
        msg += "Preencha o campo email corretamente";
        idade.focus();
        flag = false;
    }
    
    function IsNum(v)

    {
       var ValidChars = "0123456789";
       var IsNumber=true;
       var Char;


       for (i = 0; i < v.length && IsNumber === true; i++) 
       { 
          Char = v.charAt(i); 
          if (ValidChars.indexOf(Char) === -1) 
          {
             IsNumber = false;
          }
      }
       return IsNumber;

    }

    
    if(flag === true)
        {
            return true;
        }
    //Converter o valor para caixa baixa
    /*email.value = email.value.toLowerCase();
    
    var flag = true;
    var msg = "";
    
    //Definir Regras de validação
    var regraNome = /^[A-Z a-z á-ú] {3,30}$/;
    var regraIdade = /^[0-9] {1,3}$/;
    var regraEmail = /^[a-z0-9_.-]+@[a-z0-9_.-]+\.[a-z]{2,4}$/;
    */
    //Se nome não estiver de acordo
   /* if(!nome.value.match(regraNome))
        {
            msg += "Preencha o campo nome corretamente<br />";
            flag = false;
        }
        
    if(!email.value.match(regraEmail))
    {
            msg += "Preencha o campo email corretamente<br />";
            flag = false;
    }
        
    if(!idade.value.match(regraIdade))
        {
            msg += "Preencha o campo idade corretamente<br />";
            flag = false;
        }else if(idade.value <= 0 || idade.value > 120)
            {
                msg += "Idade deve ser de entre 1 a 120 <br />";
                flag = false;
            }
    
    
    if(flag === true)
        {
            return true;
        }else
        {
            document.getElementById("resp").innerHTML =msg;
            return false;
        }
    
    
    */
}