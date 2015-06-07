$(document).ready(function(){
  $("form").submit(function(){
    $.post($(this).attr('action'), $(this).serialize(), 
           function(res) {
             $("#partial").html(res);
           });
    return false;     
  })

  $(document).on("click", "li", function(){
    var page_number = $(this).html();
    $("#number").attr("value", page_number);
    $.post($('form').attr('action'), $('form').serialize(), 
             function(res) {
              console.log(res);
              $("#partial").html(res);
          });
    return false;
  })
})
