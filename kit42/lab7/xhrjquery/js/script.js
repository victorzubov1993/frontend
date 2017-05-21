$(function(){
  $('#my_form').on('submit', function(e){
    e.preventDefault();
    var $that = $(this),
        formData = $that.serializeArray();
        // ИЛИ
        // formData = $that.serialize();
    $.ajax({
      url: $that.attr('action'),
      type: $that.attr('method'),
      data: {form_data: formData},
      dataType: 'json',
      success: function(json){
        if(json){
          $that.replaceWith(json);
        }
      }
    });
  });
});
