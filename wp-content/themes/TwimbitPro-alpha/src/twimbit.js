//     $(window).on('load', function() {
//         /*! Fades in page on load */
//         $("body").fadeIn(300);
//         //$('body').fadeIn(1000);
//     });
document.addEventListener("DOMContentLoaded", function() {
    // 		window.oncontextmenu = function(event) {
    //             event.preventDefault();
    //             event.stopPropagation();
    //             return false;
    //         };
    var prevScrollpos = window.pageYOffset;
    // console.log(prevScrollpos);
    // console.log(window.screenTop + window.innerHeight);
    // console.log(document.body.scrollHeight);
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (window.pageYOffset > 50 && prevScrollpos < currentScrollPos) {
            /* Hide header and footer */
            document.querySelector(".ampstart-headerbar").style.top = "-70px";
            document.querySelector("#colophon").style.bottom = "-70px";
        } else if (prevScrollpos > currentScrollPos) {
            // show header and footer
            document.querySelector(".ampstart-headerbar").style.top = "0";
            document.querySelector("#colophon").style.bottom = "0";
        }
        prevScrollpos = currentScrollPos;
    }
});

// Add active class to the current button (highlight it)
// var header = document.querySelector(".list-reset");
// var btns = header.getElementsByClassName("tool");
// for (var i = 0; i < btns.length; i++) {
//     btns[i].addEventListener("click", function() {
//         var current = document.getElementsByClassName("active-nav");
//         current[0].className = current[0].className.replace(" active-nav", "");
//         this.className += " active-nav";
//         //console.log($(this).parent().index());
//         localStorage.setItem('active-item', document.location.toString());
//     });
// }