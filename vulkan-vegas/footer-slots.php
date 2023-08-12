
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/more-nav.js"></script>
<script>
      jQuery(document).ready(function ($) {

        $("#owl-slider").owlCarousel ({
            navigation: true,
            dots: true,
            nav: true,
            navText: ["<img class='arrow-prev' src='<?php echo get_template_directory_uri() ?>/images/arrow.svg' alt='Arrow prev'>", "<img class='arrow-next' src='<?php echo get_template_directory_uri() ?>/images/arrow.svg' alt='Arrow next'>"],
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 1, 
            animateOut: false, 
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false
        });

        $("#owl-categories").owlCarousel ({
            navigation: false,
            dots: false,
            nav: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 10, 
            animateOut: false, 
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            responsiveClass:true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            responsive: {
                0: {
                    items: 1,
                },
                426: {
                    items: 2,
                },
                481: {
                    items: 3,
                },
                600: {
                    items: 4,
                },
                700: {
                    items: 5,
                },
                861: {
                    items: 6,
                },
                961: {
                    items: 7,
                },
                1090: {
                    items: 8,
                },
                1201: {
                    items: 9,
                },
                1360: {
                    items: 10,
                }
            }
        });

        $("#owl-wins").owlCarousel ({
            navigation: false,
            dots: false,
            nav: false,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 8, 
            animateOut: false, 
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            responsiveClass:true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            responsive: {
                0: {
                    items: 1,
                },
                500: {
                    items: 2,
                },
                710: {
                    items: 3,
                },
                905: {
                    items: 4,
                },
                1153: {
                    items: 5,
                },
                1361: {
                    items: 6,
                },
                1441: {
                    items: 7,
                },
                1601: {
                    items: 8,
                }
            }
        });

        $('.slots-sidebar-btn').on('click', function() {
  			$('.slots-sidebar').toggleClass('hide');
            $('.slots-sidebar-icon').toggleClass('hide');
            return false;
		});

        $('.menu-mobile-button').on('click', function() {
  			  $('.mobile-menu').addClass('active');
		    });

        $('.close-icon').on('click', function() {
            $('.mobile-menu').removeClass('active');
        });

        $('.contact-form-sign-fields-item').click(function () {
            $(this).addClass('visit');
        });

        $(document).on("click", function(event){
          if($('.contact-form-sign-fields-item') !== event.target && !$('.contact-form-sign-fields-item').has(event.target).length){
            $('.contact-form-sign-fields-item').removeClass('visit');
          }            
        });

        $('#more-nav').moreNav();

        $(".language-block").click(function () {
            $("#languages").slideToggle(300);
            return false;
        });

        $(".slots-block-title-dropdown-link").click(function () {
            $(".dropdown-block").slideToggle(300);
            return false;
        });

        $(".mobile-lang").click(function () {
            $("#mobilelang").slideToggle(300);
            return false;
        });
        $('.mobile-lang').click(function () {
            $('.mobile-lang-icon').toggleClass('active');
        });

        $('.open-btn').click(function(){
            $(this).hide();
            $('.close-btn').show();
            $('.main-text-block').addClass('all-text');
        });

        $('.close-btn').click(function(){
            $(this).hide();
            $('.open-btn').show();
            $('.main-text-block').removeClass('all-text');
        });

        function getTimeRemaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }

        $('.landing-slots-header-demo-play').on('click', function() {
          $('.landing-slots-header-demo-back').removeClass('play');
          $('.landing-slots-header-demo-block').addClass('play');
          $('.landing-slots-header-demo-full').addClass('play');
		    });

        function initializeClock(id, endtime) {
            var clock = document.getElementById(id);
            var daysSpan = clock.querySelector('.days');
            var hoursSpan = clock.querySelector('.hours');
            var minutesSpan = clock.querySelector('.minutes');
            var secondsSpan = clock.querySelector('.seconds');

            function updateClock() {
                var t = getTimeRemaining(endtime);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                clearInterval(timeinterval);
                }
            }

            updateClock();
            var timeinterval = setInterval(updateClock, 1000);
        }

        var deadline = new Date(Date.parse(new Date()) + 11 * 24 * 60 * 60 * 1000);
        initializeClock('countdown', deadline);

        document.querySelector('.ikon-full').addEventListener('click', function(){
          if(document.documentElement.webkitRequestFullscreen) {
            document.querySelector('.demo-iframe').webkitRequestFullscreen();
          }
          else{
            document.documentElement.mozRequestFullScreen();
          }
        });


      });
    </script>
</body>
</html>
