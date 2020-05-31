$(document).ready(function () {
    $('#image_rollovers img').each(function () {
        // get old and new urls
        var oldURL = $(this).attr('src');
        var newURL = $(this).attr('id');

        // reload images
        var rolloverImage = new Image();
        console.log(newURL);
        rolloverImage.src = newURL;

        // set up event handlers
        $(this).hover(function () {
            $(this).attr('src', newURL);
        }, function () {
            $(this).attr('src', oldURL);
        });
    });
});