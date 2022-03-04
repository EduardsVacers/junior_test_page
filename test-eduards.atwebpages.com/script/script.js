$(document).ready(function() {
  $.ProductType = {
      '0' : $([]),
    'DVD' : $('#dvd_field'),
    'Book' : $('#book_field'),
    'Furniture' : $('#furniture_field1, #furniture_field2, #furniture_field3')
  };

  $.each($.ProductType, function() { this.hide(); });
  
  $('#productType').change(function() {
    // hide all
    $.each($.ProductType, function() { this.hide(); });
    // show current
    $.ProductType[$(this).val()].show();
  });
});

$(document).ready(function(){
  $('#product_form').submit(function(e){
    //check if empty
    $('input[type="text"]').each  (function(){
    if(!$(this).val() && $(this).is(":visible")){
        $(this).addClass("empty");
    } else{
        $(this).removeClass("empty");
    }
    });
    if($('#productType').val() == '0'){
      $('#productType').addClass("empty");
    }else{
      $('#productType').removeClass("empty");
    }
    
    //check if corect data

    var intRegex = /^\d+$/;
    var floatRegex = /^((\d+(\.\d *)?)|((\d*\.)?\d+))$/;
    
    if(floatRegex.test($('#price').val())){
      $('#price').removeClass('error');
    }else{
      $('#price').addClass('error');
    }
    if(!intRegex.test($('#size').val()) && $('#size').is(":visible")){
      $('#size').addClass('error');
    }else{
      $('#size').removeClass('error');
    }
    if(!intRegex.test($('#weight').val()) && $('#weight').is(":visible")){
      $('#weight').addClass('error');
    }else{
      $('#weight').removeClass('error');
    }
    if(!intRegex.test($('#height').val()) && $('#height').is(":visible")){
      $('#height').addClass('error');
    }else{
      $('#height').removeClass('error');
    }
    if(!intRegex.test($('#lenght').val()) && $('#lenght').is(":visible")){
      $('#lenght').addClass('error');
    }else{
      $('#lenght').removeClass('error');
    }
    if(!intRegex.test($('#width').val()) && $('#width').is(":visible")){
      $('#width').addClass('error');
    }else{
      $('#width').removeClass('error');
    }

    //if there are errors dont allow to submit
    if($('#product_form input[type="text"]').hasClass('empty')){
      alert("Please, submit required data");
      e.preventDefault();
    }
    if($('#product_form input[type="text"]').hasClass('error')){
      alert("Please, provide the data of indicated type");
      e.preventDefault();
    }
    if($('#productType').hasClass('empty')){
      alert("Please, select a product type");
      e.preventDefault();
    }
  });
});
