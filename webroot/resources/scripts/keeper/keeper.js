$(document).ready(function(){
    $('.js-user-link').on('click', function(e){
        e.preventDefault();
        $('.js-user-menu').addClass('active');
    });

    $(document).on('click', function(e){
        if (!$(e.target).closest('.js-user-link').length && !$(e.target).closest('.js-user-menu').length) {
            $('.js-user-menu').removeClass('active');
        }
    });


    var wWidth = $(window).width();

    if(wWidth <= 1370) {
        $('html').addClass('narrow-page');
    }


    $('.js-page-menu').on('click', function(e){
        e.preventDefault();

        $('html').toggleClass('menu-open')
    })

    $('.js-sort-link').on('click', function(e){
        e.preventDefault();

        var list = $(this).closest('.js-sort-block').find('.sort-list')
        var listheight = list.height() + 43;

        list.height(0);
        list.width(0)

        $(this).closest('.js-sort-block').addClass('open-sort');
        list.animate({
            width: "205px",
            height: "" + listheight + 'px'
        }, 500, function() {
            // Animation complete.
        });
    })

    $(document).on('click', function(e){
        if (!$(e.target).closest('.js-sort-link').length) {
            $('.js-sort-block').removeClass('open-sort');
            $('.sort-list').width(0);
        }


    });
})

$(window).resize(function(){
    var wWidth = $(window).width();

    if(wWidth <= 1370) {
        $('html').addClass('narrow-page');
    } else {
        $('html').removeClass('narrow-page');
    }
})

