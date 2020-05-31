$(document).ready(function(){
    var today = new Date();
    var year = today.getFullYear();
    $("#year").text(year);

    //preload images
    $("#image_list img").each(function(){
        var swappedImage = new Image();
        swappedImage.src = $(this).attr("href");
    });

    //load first image from list
    var  firstImage = $("#image_list img:first-child");
    $("#image_alt").text(firstImage.attr("alt"));
    $("#image img").attr("src",firstImage.attr("src"));
    $("#image img").attr("alt",firstImage.attr("alt"));

    //set up event handlers for links
    $("#image_list img").click(function(evt){
        //swap image
        var imageURL = $(this).attr("src");
        $("#image img").attr("src",imageURL);

        //swap img alt
        var image_alt = $(this).attr("alt");
        $("#image_alt").text(image_alt);
        //cancel the default action of the link
        evt.preventDefault(); //jQuery method that 's cross-browse compatible
    });//end click

});//end ready
