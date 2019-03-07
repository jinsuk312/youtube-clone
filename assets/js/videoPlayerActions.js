function likeVideo(button, videoId) {
    $.post("ajax/likeVideo.php", {videoId: videoId})
    .done(function(data) {
        
        var likeButton = $(button);
        var dislikeButton = $(button).siblings(".dislikeButton");

        likeButton.addClass("active");
        dislikeButton.removeClass("active");

        var result = JSON.parse(data);
        updateLikesValue(likeButton.find(".text"), result.likes);
        updateLikesValue(dislikeButton.find(".text"), result.dislikes);
        // if they unliked it
        if(result.likes < 0){
            likeButton.removeClass("active");
            // first img, incase of future use
            likeButton.find("img:first").attr("src", "assets/images/icons/thumb-up.png");
        }
        else{
            likeButton.find("img:first").attr("src", "assets/images/icons/thumb-up-active.png");

        }
        // always make the dislike button regular in case of above
        dislikeButton.find("img:first").attr("src", "assets/images/icons/thumb-down.png");

    });
}


function dislikeVideo(button, videoId) {
    $.post("ajax/dislikeVideo.php", { videoId: videoId })
        .done(function (data) {

            var dislikeButton = $(button);
            var likeButton = $(button).siblings(".likeButton");

            dislikeButton.addClass("active");
            likeButton.removeClass("active");

            var result = JSON.parse(data);
            updateLikesValue(likeButton.find(".text"), result.likes);
            updateLikesValue(dislikeButton.find(".text"), result.dislikes);
            // if they unliked it
            if (result.dislikes < 0) {
                dislikeButton.removeClass("active");
                // first img, incase of future use
                dislikeButton.find("img:first").attr("src", "assets/images/icons/thumb-down.png");
            }
            else {
                dislikeButton.find("img:first").attr("src", "assets/images/icons/thumb-down-active.png");

            }
            // always make the dislike button regular in case of above
            likeButton.find("img:first").attr("src", "assets/images/icons/thumb-up.png");

        });
}

function updateLikesValue(element, num) {
    var likesCountVal = element.text() || 0;
    element.text(parseInt(likesCountVal) + parseInt(num));
}