// Add custom js here
(function( $ ) {

  $('.navside.dynamic-navside').navside({
    toggleSpeed : 220
  }); // activate navside

  $('.joqd.input').each(function(){
    $(this).input({
      openLabelColor: 'red',
      openInputColor: 'red'
    });
  })

  $('select').each(function(){
  	$(this).select({
      normalClasses: 'joqd red-text red-text-hover grey-lighten-3-hover',
      activeClasses: 'joqd red-text red-text-hover grey-lighten-2 grey-lighten-2-hover'
    });
  })

  $('#isChefSwitchLabel').click(function(){
    if($('#isChef').prop('checked')){
      $('#cater').parent().css('visibility', 'visible');
    } else {
      $('#cater').parent().css('visibility', 'hidden');
    }
  });

  $('#selectFood input[type=checkbox]').on('click', function() {
    if($(this).is(':checked')){
      $(this).parents('tr').find('input[type=number]').val(1).prop('disabled', false).toggleClass('grey-lighten-1-border red-lighten-1-border');
    } else {
      $(this).parents('tr').find('input[type=number]').val('').prop('disabled', true).toggleClass('red-lighten-1-border grey-lighten-1-border');
    }
  })

  $('#selectFood input[type=number]').bind('keyup mouseup', function () {
    if ($(this).val() == 0) {
      $(this).val('').prop('disabled', true).toggleClass('red-lighten-1-border grey-lighten-1-border');
      $(this).parents('tr').find('input[type=checkbox]').prop( "checked", false )
    }
  });


}( jQuery ));
