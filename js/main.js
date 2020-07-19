window.onload = function() {
    startUnhide();
}

window.onscroll = function() {checkScroll()};

var button = document.getElementById('readmore');
$('#readmore').hover(
    function(){ $(this).addClass('hover') },
    function(){ $(this).removeClass('hover') }
)
jQuery(document).ready(function() {
    var fullheight = 0;

    function calcHeight() {
        fullheight = jQuery(window).height() - jQuery(".nav").outerHeight();
        jQuery(".hero").height(fullheight);
    }

    //calcHeight();

    jQuery(window).resize(function() {
        //calcHeight();
    })

    $(document).on('click', '.navlink', function(){
      $(this).addClass('active').siblings().removeClass('active');
    })

})


function redirect(string) {
    window.location.href = "http://" + string;
}


function jump(string) {
    var button = document.getElementById('readmore');

    //button.classList.add('hidden');
    window.location.hash = string;
}

function checkScroll() {
    var button = document.getElementById('readmore');
    var goback = document.getElementById('goback');
    if (window.scrollY==0) {
        button.classList.remove('hidden');
        goback.classList.add('hidden');
    } else if (window.scrollY > 0) {
        button.classList.add('hidden');
        setTimeout(() => { goback.classList.remove('hidden'); }, 1000);
    } else if (window.scrollY == 300) {
        alert("you're at the bottom of the page");
    }
}

function startUnhide() {
    var button = document.getElementById('readmore');

    if (window.scrollY > 0) {
        return
    } else {
        button.classList.add('slow');
        setTimeout(() => { button.classList.remove('hidden'); }, 500);
        setTimeout(() => { button.classList.add('down'); }, 1500);
        setTimeout(() => { button.classList.remove('down'); }, 2500);
        setTimeout(() => { button.classList.remove('slow'); }, 3500);
    }
}