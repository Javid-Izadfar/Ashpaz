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
  })

}( jQuery ));
