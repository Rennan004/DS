 $(document).ready(function(){
    $('#btn-menu').click(function(e){
      e.preventDefault()
      $('#menu').toggle('slow')
    })

    //Criar uma função para monitorar os cliques nos links

    $('a').click(function(e){
      e.preventDefault()
      //Capturar qual é a pagina que deseja abrir

      let url = $(this).attr('href')
      
      if(url == 'home'){
         $('#'+url).show()
         $('#about').hide()
         $('#action').hide()
         $('#contact').hide()
      }
      else if(url == 'about'){
       $('#'+url).show()
       $('#home').hide()
       $('#action').hide()
       $('#contact').hide()
      }
      else if(url == 'action'){
       $('#'+url).show()
       $('#home').hide()
       $('#about').hide()
       $('#contact').hide()
      }
      else if(url == 'contact'){
       $('#'+url).show()
       $('#home').hide()
       $('#action').hide()
       $('#about').hide()
      }

      

    })

 
 })
