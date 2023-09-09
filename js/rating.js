$.fn.stars = function() {
    return $(this).each(function() {
        const rating = $(this).data("rating");
        const numStars = $(this).data("numStars");
        const fullStar = '<i class="fas fa-circle " style="color:#28a745"></i>'.repeat(Math.floor(rating));
        const halfStar = (rating%1!== 0) ? '<i class="fas fa-adjust " style="color:#28a745"></i>': '';
        const noStar = '<i class="far fa-circle " style="color:#28a745"></i>'.repeat(Math.floor(numStars-rating));
        $(this).html(`${fullStar}${halfStar}${noStar}`);
    });
}



