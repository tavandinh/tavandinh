$(document).ready(function(){
    var a = $("#image_list img");
    //preload images
    $("#image_list img").each(function(){
        var swappedImage = new Image();
        swappedImage.src = $(this).attr("href");
    });
    //set up event handlers for links
    $("#image_list img").click(function(evt){
        //swap image
        var imageURL = $(this).attr("src");
        $("#image").attr("src",imageURL);

        //swap caption
        var caption = $(this).attr("title");
        $("#caption").text(caption);
        //cancel the default action of the link
        evt.preventDefault(); //jQuery method that 's cross-browse compatible
    });//end click

    //move focus to first thumbnail
    $("li:first-child a:first-child").focus();

});//end ready