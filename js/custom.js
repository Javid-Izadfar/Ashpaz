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

  $('#isChefSwitchLabel').click(function(){
    if($('#isChef').prop('checked')){
      $('#cater').parent().fadeIn();
    } else {
      $('#cater').parent().fadeOut();
    }
  })

}( jQuery ));
