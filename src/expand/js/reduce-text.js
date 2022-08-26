$('body *:not(#footer-container *):not(#header-container *)').css('font-size', function() {  
    return (parseInt($(this).css('font-size')) * 0.95);
});