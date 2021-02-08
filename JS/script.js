/*Dropdown menu toggle*/
$(document).ready(function() {
  $("#btn").click (function() {
    // используйте здесь дополнительные прверки
    // при каких условия данный клик будет срабатывать
    // например, размер экрана, viewport'a, ориентация
    // или что то другое
    $(".child").slideToggle(500);
  });
});
/*Menu icon toggle*/
$(document).ready(function() {
  $(".menu-trigger").click(function() {
    // используйте здесь дополнительные прверки
    // при каких условия данный клик будет срабатывать
    // например, размер экрана, viewport'a, ориентация
    // или что то другое
    $(".parent").slideToggle(500);
  });
  $(window).resize(function() {
      if ($(window).width() > 870 ){
        $('.parent').removeAttr('style');
      }
  });
});

/*Arrow animation*/
$(document).ready(function(){
	$(".nav__link.arr").click(function(){
		$(".arrow").toggleClass("arrow-active");
	});
});
