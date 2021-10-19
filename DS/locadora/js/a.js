 $(document).ready(function(){
     $('#like').click(function(e){
         e.preventDefault()
         let number = $('#number').attr('data-number')
         number = parseInt(number) + 1

            $('span').html(number)       
     })
 })
 