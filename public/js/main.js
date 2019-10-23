$(function () {
    var parent = $(".shuffle");
    var divs = parent.children();
    while (divs.length) {
        parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
    }
});


$('.shuffle input').on('change', function () {
    if ($('input[name=word]:checked', '.shuffle').val() == 'correct') {
        $('.message').append(
            "<p id='true'> Bravo ! Raspuns Corect </p>"
        )
    } else
        $('.message').append(
            "<p id='wrong'> Gresit !  </p>"
        )
});

$(".nav-item a").on("click", function () {
    $(".nav-item").find(".active").removeClass("active");
    $(this).parent().addClass("active");
});
