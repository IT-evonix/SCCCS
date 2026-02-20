// Stickey header start
  const header = document.querySelector(".page-header");
  const toggleClass = "is-sticky";
  window.addEventListener("scroll", () => {
      const currentScroll = window.scrollY;
      if (currentScroll > 50) {
          header.classList.add(toggleClass);
      } else {
          header.classList.remove(toggleClass);
      }
  });
// Sticky Header End

// Header Menu Start
    (function ($) {
        var size;

        //SMALLER HEADER WHEN SCROLL PAGE
        function smallerMenu() {
            var sc = $(window).scrollTop();
            if (sc > 40) {
                $("#header-sroll").addClass("small");
            } else {
                $("#header-sroll").removeClass("small");
            }
        }
        // VERIFY WINDOW SIZE
        function windowSize() {
            size = $(document).width();
            if (size >= 991) {
                $("body").removeClass("open-menu");
                $(".hamburger-menu .bar").removeClass("animate");
            }
        }
        // ESC BUTTON ACTION
        $(document).keyup(function (e) {
            if (e.keyCode == 27) {
                $(".bar").removeClass("animate");
                $("body").removeClass("open-menu");
                $(
                    "header .desk-menu .menu-container .menu .menu-item-has-children a ul"
                ).each(function (index) {
                    $(this).removeClass("open-sub");
                });
            }
        });

        $("#cd-primary-nav > li").hover(function () {
            $whidt_item = $(this).width();
            $whidt_item = $whidt_item - 8;

            $prevEl = $(this).prev("li");
            $preWidth = $(this).prev("li").width();
            var pos = $(this).position();
            pos = pos.left + 4;
            $("header .desk-menu .menu-container .menu>li.line").css({
                width: $whidt_item,
                left: pos,
                opacity: 1
            });
        });

        // ANIMATE HAMBURGER MENU
        $(".hamburger-menu").on("click", function () {
            $(".hamburger-menu .bar").toggleClass("animate");
            if ($("body").hasClass("open-menu")) {
                $("body").removeClass("open-menu");
            } else {
                $("body").toggleClass("open-menu");
            }
        });

        $("header .desk-menu .menu-container .menu .menu-item-has-children ul").each(
            function (index) {
                $(this).append('<li class="back"><a href="#">Back</a></li>');
            }
        );

        // RESPONSIVE MENU NAVIGATION
        $("header .desk-menu .menu-container .menu .menu-item-has-children > a").on(
            "click",
            function (e) {
                e.preventDefault();
                if (size <= 991) {
                    $(this).next("ul").addClass("open-sub");
                }
            }
        );

        // CLICK FUNCTION BACK MENU RESPONSIVE
        $(
            "header .desk-menu .menu-container .menu .menu-item-has-children ul .back"
        ).on("click", function (e) {
            e.preventDefault();
            $(this).parent("ul").removeClass("open-sub");
        });

        $("body .over-menu").on("click", function () {
            $("body").removeClass("open-menu");
            $(".bar").removeClass("animate");
        });

        $(document).ready(function () {
            windowSize();
        });

        $(window).scroll(function () {
            smallerMenu();
        });

        $(window).resize(function () {
            windowSize();
        });
    })(jQuery);
// Header Menu End

// Hero Banner Start
$('.hero_slider_inner').owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    nav: false,
    autoplay: true,
    autoplayTimeout: 3000,          // continuous sliding (very important)
    responsive: {
        0: { items: 1 },
        600: { items: 1 },
        991: { items: 1 },
        1200: { items: 1 }
    }
});


// Hero Banner End

// Future Roadmap Inner Start
$('.future_roadmap_inner').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    margin: 15,              // gap between cards
    autoplay: true,
    autoplayTimeout: 5500,
    smartSpeed: 500,
    autoplayHoverPause: true, 
    responsive: {
        0: {
            items: 1,

        },
        500: {
            items: 2,

        },
        768: {
            items: 3,

        },
        992: {
            items: 3,

        },
        1200: {
            items: 5,
        }
    }
});
// Future Roadmap Inner End


// National and Internatinal Logos
document.addEventListener("DOMContentLoaded", function () {
    let hash = window.location.hash;

    if (hash) {
        let tabButton = document.querySelector(`[data-bs-target="${hash}"]`);
        if (tabButton) {
            let tab = new bootstrap.Tab(tabButton);
            tab.show();
        }
    }
});
// National and Internatinal Logos




// Read More Read Less Start
$('.moreless-button').click(function() {
  $('.moretext').slideToggle();
  if ($('.moreless-button').text() == "Read more") {
    $(this).text("Read less")
  } else {
    $(this).text("Read more")
  }
});
// Read More Read Less End




// Collaboration Start
document.addEventListener("DOMContentLoaded", function () {
    const params = new URLSearchParams(window.location.search);
    const tab = params.get("tab");

    if (tab) {
        const triggerEl = document.querySelector(
            `button[data-bs-target="#${tab}"]`
        );

        if (triggerEl) {
            new bootstrap.Tab(triggerEl).show();
        }
    }
});
// Collaboration End





// Biodiversity Start
// Sidebar submenu toggle
  const sidebar = document.querySelector(".sidebar");
  const mobileToggle = document.getElementById("mobileSidebarToggle");

  // Open/close sidebar on mobile
  mobileToggle.addEventListener("click", () => {
    sidebar.classList.toggle("active");
  });

  // Smooth scroll for links
  const navLinks = document.querySelectorAll(".sidebar a[href^='#']");
  navLinks.forEach(link => {
    link.addEventListener("click", function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      target.scrollIntoView({ behavior: "smooth" });

      // Close sidebar on mobile after click
      if(window.innerWidth < 991) {
        sidebar.classList.remove("active");
      }
    });
  });

  // Active menu on scroll
  const sections = document.querySelectorAll("section[id]");
  window.addEventListener("scroll", () => {
    let current = "";
    sections.forEach(section => {
      const sectionTop = section.offsetTop - 120;
      if (pageYOffset >= sectionTop) current = section.getAttribute("id");
    });

    navLinks.forEach(link => {
      link.classList.remove("active");
      if(link.getAttribute("href") === "#" + current) link.classList.add("active");
    });
  });
// Biodiversity End
