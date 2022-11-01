$( document ).ready(function() {
    $('#cpf').inputmask('999.999.999-99')
    $('#telefone').inputmask('(99)99999-9999')
    $('#cep').inputmask('99999-999')
});


const consultaCep=()=>{
    let cep = $("#cep").val()

    // replace para tirar o _ e o - da mascara
    cep = cep.replaceAll ("_", "").replaceAll ("-", "")

    // verifica se o cep foi preenchido com todos os numeros
    if(cep.length < 9){
            Swal.fire({
                icon: 'error',
                title: 'Atenção...',
                text: 'Cep invalido!'
        })
        $('#cep').focus()
        return
    }

    // realiza requisiçao da API cep
    const result = fetch(`http://viacep.com.br/ws/${cep}/json/`)
    .then((response) => response.json())
    .then((result)=>{

        if(result.erro){
            Swal.fire({
                icon: 'error',
                title: 'Atenção...',
                text: 'Cep não encontrado!'
              })
        }else{
            // retorno da requisição 
            $('#rua').val(result.lagradouro)
            $('#bairro').val(result.bairro)
            $('#cidade').val(result.localidade)
            $('#estado').val(result.uf)

            // coloca o focus do usuario no campo numero

            $('#numero').focus()
        }  

    })

}

const addProfessor=()=>{
    
}