

/*
$(document).ready(function() {
  
  var url = $('iframe').attr('src')
 // url = url+'?rel=0&autoplay=1&enablejsapi=1';
  url = url+'?enablejsapi=1';
  $('iframe').attr('src', url);
  
});

function change_video(el){
    $("#video").attr("src",$(el).attr("href")+'?autoplay=1');
    return false;   
}
*/



function click_show_menu(el){
    $(el).parent().find('ul').stop().slideToggle();
    return false;
}

$(function() {
	
    //menu mobile
    $(".show_menu").click(function(event) {
      $(this).parents("#menu_mobile").find('.menu_hidden').stop().slideToggle("slow");
      return false;
    });
    //
    $(".icon_show").click(function(event) {
      $child = $(this).parent().find('>ul');
      $hide = $child.css("display");
      if($hide=="none"){
        $(this).addClass('icon_show2');
        $child.stop().slideDown();
      }else{
        $(this).removeClass('icon_show2');
        $child.stop().slideUp();
      }
      
      return false;
    });
	
	
	 // Menu Right portfolio
    $('#menu_top ul li .menu_duan ul li ul').each(function(){
      var max = 5
      if ($(this).find("li.mn_custom_sub").length > max) {
        $(this)
          .find('li:gt('+max+')')
          .hide()
          .end()
          .append(
            $('<li class="mn_custom_sub"><a href="javascript:void(0);">'+read_more+'...</a></li>').mouseover( function(){
              $(this).siblings(':hidden').show().end().remove();
            })
        );
      }
    });
	
});
