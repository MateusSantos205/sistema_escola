const validaLogin = () => {
    // Captura todo o formulário e ciar um formData
    let dados = new FormData($("#form-login")[0]);
  
    // envio e recebimento de dados
    const result = fetch('backend/validaLogin.php',{
      method: 'POST',
      body: dados
    })
    .then((response)=>response.json())
    .then((result)=>{
      // Aqui é tratado o retorno ao front

      if(result.retorno == 'erro'){
        Swal.fire({
          icon: 'error',
          title: 'Atenção...',
          text: result.mensagem
        })
      }else{
        window.location = "admin/"
      }
      
      
    })
  };
  // Final da função de add usuário