// Data Table
// $(document).ready(function () {
//   $('#example').DataTable();
// });
// blogslider start
$('.blogslid').slick({
  dots: true,
  arrows: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// blogslider end

// product slider jas start

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});
// product slider jas end

// simple slick slider start
$(".regular").slick({
  dots: true,
  infinite: true,
  speed: 300,
  autoplay: true,
  slidesToShow: 3,
  slidesToScroll: 3
});

// simple slick slider end

// wow animation js 

$(function () {
  new WOW().init();
});


// responsive menu js 

$(function () {
  $('#menu').slicknav();
});



// slick slider in tabs js start

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


$(document).ready(function () {
  $('.tabcontent.active').css('display', 'block');
});
// slick slider in tabs js end


// dropdown
$(function () {
  $("li.dropdown > a").on("click", function (event) {
    event.preventDefault();
    $(this).toggleClass("selected");
    $(this).parent().find("ul").first().toggle(300);

    $(this).parent().siblings().find("ul").hide(200);

    //Hide menu when clicked outside
    $(this)
      .parent()
      .find("ul")
      .parent()
      .mouseleave(function () {
        var thisUI = $(this);
        $("html").click(function () {
          thisUI.children(".dropdown-menu").hide();
          thisUI.children("a").removeClass("selected");

          $("html").unbind("click");
        });
      });
  });
});

// dropdown
// Qasim Modal Js
$(function () {
  $(".md-trigger").on("click", function () {
    $(".md-modal").addClass("md-show");
  });

  $(".md-close").on("click", function () {
    $(".md-modal").removeClass("md-show");
  });
});

// ====================================== JS GET N POST REQUEST ======================================
function AjaxRequest(url, data) {
  var res;
  $.ajax({
    url: url,
    data: data,
    async: false,
    error: function () {
      console.log("error");
    },
    dataType: "json",
    success: function (data) {
      res = data;
    },
    type: "POST",
  });
  return res;
}

function AjaxRequest_get(url, data) {
  var res;
  $.ajax({
    url: url,
    data: data,
    async: false,
    type: "GET",
    dataType: "json",
    success: function (data) {
      res = data;
    },
    error: function () {
      console.log("error");
    },
  });
  return res;
}
// ============================================================================
