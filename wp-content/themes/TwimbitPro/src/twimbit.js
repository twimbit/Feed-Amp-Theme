// NProgress.inc();

// document.onreadystatechange = function() {
//   let state = document.readyState;
//   if (state == "complete") {
//     NProgress.done();
//   }
// };

/* Swiper left and right  gestures*/
function swipedetect(el, callback) {
  var touchsurface = el,
    swipedir,
    startX,
    startY,
    distX,
    distY,
    threshold = 150, //required min distance traveled to be considered swipe
    restraint = 100, // maximum distance allowed at the same time in perpendicular direction
    allowedTime = 300, // maximum time allowed to travel that distance
    elapsedTime,
    startTime,
    handleswipe = callback || function(swipedir) {};

  touchsurface.addEventListener(
    "touchstart",
    function(e) {
      var touchobj = e.changedTouches[0];
      swipedir = "none";
      dist = 0;
      startX = touchobj.pageX;
      startY = touchobj.pageY;
      startTime = new Date().getTime(); // record time when finger first makes contact with surface
    },
    false
  );

  touchsurface.addEventListener(
    "touchend",
    function(e) {
      var touchobj = e.changedTouches[0];
      distX = touchobj.pageX - startX; // get horizontal dist traveled by finger while in contact with surface
      distY = touchobj.pageY - startY; // get vertical dist traveled by finger while in contact with surface
      elapsedTime = new Date().getTime() - startTime; // get time elapsed
      if (elapsedTime <= allowedTime) {
        // first condition for awipe met
        if (Math.abs(distX) >= threshold && Math.abs(distY) <= restraint) {
          // 2nd condition for horizontal swipe met
          swipedir = distX < 0 ? "left" : "right"; // if dist traveled is negative, it indicates left swipe
        } else if (
          Math.abs(distY) >= threshold &&
          Math.abs(distX) <= restraint
        ) {
          // 2nd condition for vertical swipe met
          swipedir = distY < 0 ? "up" : "down"; // if dist traveled is negative, it indicates up swipe
        }
      }
      handleswipe(swipedir);
    },
    false
  );
}

document.addEventListener("DOMContentLoaded", function() {
  /* hide header and footer */
  var prevScrollpos = window.pageYOffset;
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
  };

  /* Explore and feed switching */
  // feed button
  header_nav = document.querySelectorAll(".feed-selector-class");
  for (var i = 0; i < header_nav.length; i++) {
    header_nav[i].addEventListener(
      "click",
      function() {
        document.querySelector("#explore-nav").classList.remove("active-nav");
        document.querySelector("#feed-nav").className += " active-nav";

        document.querySelector("#feed-button").className += " active-nav";
        document
          .querySelector("#explore-button")
          .classList.remove("active-nav");
      },
      false
    );
  }

  // explore button
  header_explore = document.querySelectorAll(".explore-selector-class");
  for (var i = 0; i < header_explore.length; i++) {
    header_explore[i].addEventListener(
      "click",
      function() {
        if (!(window.location.pathname == "localhost/wordpress")) {
          // window.location.href = "/wordpress";
        }
        document.querySelector("#explore-nav").className += " active-nav";
        document.querySelector("#feed-nav").classList.remove("active-nav");

        document.querySelector("#explore-button").className += " active-nav";
        document.querySelector("#feed-button").classList.remove("active-nav");
      },
      false
    );
  }
});

/* Active class for filter */
function toggler(evt, postType) {
  // Declare all variables
  var i, tablinks;

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(postType).style.display = "block";
  evt.currentTarget.className += " active";
}
