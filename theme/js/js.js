(function ($) {

  $(window).load(function(){
    var btn = $('.btn a'),
      popup = $('.popup'),
      $back = $('.back-popup');

    btn.on('click', function(e){
      e.preventDefault();

      popup.show();
      $back.show();
    });

    $back.on('click', function(){
      popup.hide();
      $back.hide();
    })
  })

})(jQuery);

