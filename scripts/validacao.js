var nome = document.getElementById('nome')
var cpf = document.getElementById('cpf')
var idade = document.getElementById('idade')
var valor = document.getElementById('valor')

var btn = document.getElementById('submit')

function validate(){


    if(nome.value == '' || cpf.value == '' || idade.value == '' || valor.value == ''){
        alert('Por favor, preencha o formulário por completo!')
        btn.type = 'reset'
    }
    else{
        btn.type = 'submit'
    } 

}

