/*
 * Custom JS
 */

// if the child menu is hovered, the parent should be highlighted as well
function highlightParent() {
    $('.dropdown-menu').hover(
        function() {
            $(this).parent().addClass('active');
        },
        function() {
            $(this).parent().removeClass('active');
        });
}

// if sidebar exists add .col-sm-9 on .user-content otherwise remove it
function scmSidebar() {
    var sidebar = $('.scm-sidebar');
    var userContent = $('.user-content');
    if (sidebar.length) {
        userContent.addClass('col-sm-9')
    } else {
        userContent.removeClass('col-sm-9')
    }
    getSidebar();
}

function getSidebar() {

    var sidebar = $('.scm-sidebar');
    var target = $('.user-post h2');
    target.each(function(index, element) {
        var text = $(this).text();
        /*get the text => make it lowercase => replace space with - => replace & with and
        and wrap it in a variable called text  */
        var modifiedText = $(this).text().toLowerCase().replace(/ /g, '-').replace(/&/i, 'and');
        // add each h2 with an id with its own modified text
        $(this).attr('id', modifiedText);
        // dynamically insert a sidebar menu based on h2 classes in user post
        sidebar.find('nav > ul').append('<li class="col-xs-12"><a href="#' + modifiedText + '"> ' + text + '</a></li>');
    });

}


// not being used atm
function niceScroll() {
    $('#parent').bind('mousewheel', function(e) {
        if (!(e.originalEvent.wheelDelta == 120)) {
            var top = parseInt($("#child").css("top"));
            $("#child").css("top", (top - 100) + "px");
            top = parseInt($("#child").css("top"));
            if (top <= -500) {
                setTimeout(function() {
                    $("#child").css("top", "-500px");
                }, 100);
            }
        } else {
            var top = parseInt($("#child").css("top"));

            $("#child").css("top", (top + 100) + "px");
            top = parseInt($("#child").css("top"));
            if (top >= 0) {
                setTimeout(function() {
                    $("#child").css("top", "0");
                }, 100);
            }
        }
    });
}

function smoothScroll() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
}

function megamenuMobile() {
    var windowWidth = $(window).width();
    if (windowWidth < 768) {
        $('.navbar-nav li a').click(function() {
            $(this).parent().find('.dropdown-menu').toggleClass('on');
        });
    }
}

$(document).ready(function() {

    FastClick.attach(document.body);
    
    highlightParent();
    scmSidebar(); // dynamically insert sidebar menu
    smoothScroll(); // enable smooth scrolling when clicked
    megamenuMobile();

});
