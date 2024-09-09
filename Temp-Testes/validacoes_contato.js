$(document).ready(function(){
    $('#form_categoria').submit(function(event){
        let email = $('#email').val()
        let telefone = $('#telefone').val()

        if(email == ''){
            alert('Campo obrigatório!')
            event.preventDefault();
        }
        
        if(telefone == ''){
            alert('Campo obrigatório!')
            event.preventDefault();
        }
        
    });
});