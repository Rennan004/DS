//Leitura completa do nosso documento HTML
$(document).ready(function(){

    //Monitorar todos os cliques em cima do elemento "a" do nosso documento HTML
     
    $('a').click(function(e){
      e.preventDefault()

    //Criar uma variavel local que receba o atributo href do link
    let page = $(this).attr('href')

    $('.modal-title').empty()
    $('.modal-body').empty()


    //Verificar qual conteudo eu devo carregar
    switch(page){
      //Se for para abrir a pagina sobre mim...
      case 'sobre': 
       $('.modal-title').append('Sobre mim')
       $('.modal-body').append(`Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur repudiandae tenetur autem nostrum iure maxime cum rem eligendi et similique beatae id, dolores, exercitationem architecto? Ipsa incidunt veniam dolor accusantium?`)
       $('#modal-info').modal('show')
      break
      case 'projetos': 
      $('.modal-title').append('Nossos projetos')
      $('.modal-body').append(`Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur repudiandae tenetur autem nostrum iure maxime cum rem eligendi et similique beatae id, dolores, exercitationem architecto? Ipsa incidunt veniam dolor accusantium?`)
      $('#modal-info').modal('show')
      break
      case 'clientes': 
      $('.modal-title').append('Nossos clientes')
      $('.modal-body').append(`Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur repudiandae tenetur autem nostrum iure maxime cum rem eligendi et similique beatae id, dolores, exercitationem architecto? Ipsa incidunt veniam dolor accusantium?`)
      $('#modal-info').modal('show')
      break
      case 'contatos': 
      $('.modal-title').append('Nossos contatos')
      $('.modal-body').append(`Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur repudiandae tenetur autem nostrum iure maxime cum rem eligendi et similique beatae id, dolores, exercitationem architecto? Ipsa incidunt veniam dolor accusantium?`)
      $('#modal-info').modal('show')
      break
      default: alert('Link não encontrado')
    } 

    })

 })