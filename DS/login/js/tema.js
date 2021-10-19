$(document).ready(function(){

    $('a').addClass('text-white')
  
    $('.btn-light').click(function(e){
      e.preventDefault()
  
      $('.jumbotron').removeClass('bg-rennan')
      $('.jumbotron').removeClass('bg-dark')
  
      $('.jumbotron').addClass('bg-light')
      $('a').addClass('text-dark')
    })
  
      $('.btn-dark').click(function(e){
      e.preventDefault()
  
      $('.jumbotron').removeClass('bg-rennan')
      $('.jumbotron').removeClass('bg-light')
      $('a').removeClass('text-dark')
  
      $('.jumbotron').addClass('bg-dark')
         $('a').addClass('text-white')
    })
  
       $('.btn-primary').click(function(e){
      e.preventDefault()
  
      $('.jumbotron').removeClass('bg-dark')
      $('.jumbotron').removeClass('bg-light')
      $('a').removeClass('text-dark')
  
      $('.jumbotron').addClass('bg-rennan')
           $('a').addClass('text-white')
    })
  })