$( ".collapsible-div-button" ).on( "click", function() {
    if($(this).hasClass("opened"))
    {
        $(this).removeClass("opened");
    }
    
    else
    {
        $(this).addClass("opened");
    }
    
});