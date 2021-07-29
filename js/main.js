$(document).ready(function(){
    
    $(".opener").click(function(){
        var val=$(this).attr("target");
        $("#"+val).toggleClass("open");
    });
    
});
