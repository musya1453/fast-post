(function ($) {

 $(window).load(function(){
   var $btn = $('.post-wrapper .load-more');

   if(!$btn) return;

   $(window).bind('scroll', function(){

     if  ($(window).scrollTop() == $(document).height() - $(window).height())
     {
      $btn.click();
     }
   })
 })

})(jQuery);

