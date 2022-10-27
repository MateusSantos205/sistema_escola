// ES6+
// const cria uma função
const validaLogin = () =>{
    // cria a variavel
    // $ dollar simboliza o JQuery /// .val captura o valor
    // let email = $('#email').val()
    // let senha = $('#senha').val()
    // exibe mensagem no console / usado para debug / verificação de erro / ver valor da variavel
    // console.log(email)
    // console.log(senha)

    // captura dados do input do formulario html / obs: o fomrulario tem que ter um id e os input tem quer ter name
    let dados = new FormData($('#form-login')[0])

    // request
    // fetch é uma função, que precisa de uma caminho ex:backend... / 
    const result = fetch('backend/validaLogin.php',{
        method: 'POST',
        // dados = a variavel em LET 
        body : dados
    })

}