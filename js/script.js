jQuery(".dropdown-about-us a").hover(function(){
    jQuery(".sub-menu li").css("padding-top", "20px");
    jQuery(".sub-menu li").css("padding-bottom", "10px");
    jQuery(".dropdown-about-us ul").slideDown("slow");
    jQuery(".dropdown-about-us ul").css("z-index", "9999");
});

jQuery(".dropdown-about-us").mouseleave(function(){
    jQuery(".sub-menu").slideUp("slow");
});

jQuery(".dropdown-products a").hover(function(){
    jQuery(".sub-menu li").css("padding-top", "20px");
    jQuery(".sub-menu li").css("padding-bottom", "10px");
    jQuery(".dropdown-products ul").slideDown("slow");
    jQuery(".dropdown-products ul").css("z-index", "9999");
});

jQuery(".dropdown-products").mouseleave(function(){
    jQuery(".sub-menu").slideUp("slow");
});

jQuery(document).ready(function () {
   jQuery("#message-form").submit(function (event){
       var formData = {

       }


   });
});