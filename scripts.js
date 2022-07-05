function check_fixed_menu() {
    if($(document).scrollTop() > 0) {
        $('.header_menu').addClass('header_menu_fixed');
    } else {
        $('.header_menu').removeClass('header_menu_fixed');
    }    
}
function update_flickplate_height() {
    if ( $('.container').width() == 748 )
        $('.fullplate').css('height', '345px');
    else if ( $('.container').width() == 300 )
        $('.fullplate').css('height', '285px');
    else
        $('.fullplate').css('height', '570px');    
}
$(document).ready(function() {
	
    $('.flicker-example').flicker({
        dot_navigation: false
    });    
    check_fixed_menu();
    $('#header_menu_id').slicknav();    
	$('.header_spacing').css('height', $('#header').outerHeight() + 'px');
    //$('.fullplate').css('height', ($(window).height() - $('#header').outerHeight()) + 'px');
    var w, gut_w;
    if ( $('.container').width() == 748 ) {
        w = 300;
        gut_w = 15; }
        else {
            w = 400; 
            gut_w = 40;
        }
    $("#stalac_cont").gridalicious({
        gutter: gut_w,
        width: w,
        animate: true,
        animationOptions: {
                speed: 150,
                duration: 500,
                complete: onComplete
        },
    }); 
    function onComplete(data) {
    }    
    $("#home_cont").on("mouseenter", "#stalac_cont .stalac_box", function(event){
        $(this).find('.stalac_box_hover').css('display','block');
    }).on("mouseleave", "#stalac_cont .stalac_box", function(event){
        $(this).find('.stalac_box_hover').css('display','none');
    });          
    update_flickplate_height();
        $('.header_menu li').hover(
            function () {
                $('ul:first', this).css('display','block');
     
            }, 
            function () {
                $('ul:first', this).css('display','none');         
            }
        );               			
    $(".scroller").on("click",function(){
        //$(".webplate-content").animate({scrollTop:d},1e3,"easeInOutCubic");
        $("html, body").animate({ scrollTop: $('.fullplate').outerHeight() }, "slow");
        //alert('test');
    });         
});
$(window).load(function() {
	$('.header_spacing').css('height', $('#header').outerHeight() + 'px');
    //$('.fullplate').css('height', ($(window).height() - $('#header').outerHeight()) + 'px');
    update_flickplate_height();
    
    check_fixed_menu();
});
$(window).scroll(function() {
    $('.header_spacing').css('height', $('#header').outerHeight() + 'px');
    //console.log( $(document).scrollTop() ); //get scroll distance from top
    check_fixed_menu();
});
$(window).resize(function() {
    $('.header_spacing').css('height', $('#header').outerHeight() + 'px');
    check_fixed_menu();
});