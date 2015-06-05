$(document).ready(function(){
  $('form').submit(function(){
    $.post($(this).attr('action'),
           $(this).serialize(), 
           function(res) {
              $("table tbody").html(res);
          });
    return false;
  });
})