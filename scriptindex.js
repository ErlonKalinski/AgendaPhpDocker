var contatos = []
console.log(contatos.length)




function BotaoConfirma(){
        const contato = {
            nome: document.getElementById('nomex').value,
            numero: document.getElementById('numx').value,
            endereco: document.getElementById('enderecox').value,
            email: document.getElementById('emailx').value
    }
    contatos.push(contato)
    console.log(contatos)
    location.reload()
    }


function EsconderDiv(div){
    var display = document.getElementById(div).style.display
    if(display == "none")
        document.getElementById(div).style.display = 'block'
    else
        document.getElementById(div).style.display = 'none'
}


function ApagarObjeto(id){
    contatos.splice(id, 1)
    location.reload()
}

function ButtonEdit(){
    const contato = {
        nome: document.getElementById('nomex').value,
        numero: document.getElementById('numx').value,
        endereco: document.getElementById('enderecox').value,
        email: document.getElementById('emailx').value
}
    var id = document.getElementById('idEdit').value
    contatos.splice(id, 1, contato)
    console.log(contatos)
    console.log(contatos.indexOf(contato))
    localStorage.setItem("contato", JSON.stringify(contatos)) 
    console.log(contatos)
    location.reload()
}

function EditObject(nome, numero, endereco, email, id){
    var inputName = document.getElementById('nomex')
    var inputNum = document.getElementById('numx')
    var inputAdress= document.getElementById('enderecox')
    var inputEmail= document.getElementById('emailx')
    var inputId= document.getElementById('idEdit')
    console.log(id)
    inputName.value = nome
    inputNum.value = numero
    inputAdress.value = endereco
    inputEmail.value = email
    inputId.value = id
}
/*
function popup(){
    window.
}
*/