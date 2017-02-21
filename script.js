$(".slider .content-slides").width($(".slider .content-slides").children().size() * $(".slider .content-slides").width());


function slideStart()
{
    curPage = ((index) % $(".slider .content-slides").children().size()) + 1;
    $(".slider .content-slides").animate({
        "left": -($(".slider .content-slides li:nth-child(" + curPage + ")").position().left)
    });
    $(".slider .content-pagination li").removeClass("active-marker");
    $(".slider .content-pagination li:nth-child(" + curPage + ")").addClass("active-marker");
    index++;
}

$(document).ready(function(){

    index = 0;
    islider = setInterval("slideStart()", 2500);

    $(".slider .content-pagination li a").click(function(){
        index = $(this).attr("href");
        clearInterval(islider);
        slideStart();
        islider = setInterval("slideStart()", 2500);
        return false;
    });

	$('ul.topnav li:not(:first-child) a').click(function(){
	  $('ul.topnav').toggleClass('responsive');
	});

	$(document).on("scroll", onScroll);

    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        if($(this).hasClass('active')){
            $('a').each(function () {
                $(this).removeClass('active');
            })
        }
        $(this).addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('nav a[href*=#]:not([href=#])').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('nav ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}
