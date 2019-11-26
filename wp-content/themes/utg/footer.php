<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package utg
 */

?>

	
    </div> <!-- END MAIN -->
    
	<footer class="footer">
		
	</footer>
</div>

<?php wp_footer(); ?>


<script>
    $(".menuContainer").hover(function(){
        $("body").toggleClass("active");
    })
</script>
<script>

    $(document).ready(function() {
    $(".seo-text__right_btn-show").click(function() {
        var $this = $(this);
        $(".seo-text__right_hide-text").slideToggle(500);

        $this.toggleClass("expanded");

        // if ($this.hasClass("expanded")) {
        //     $this.html("Свернуть");
        // } else {
        //     $this.html("Развернуть");
        // }
    });
});

$('.discount-products-gallery').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  prevArrow: '<button type="button"><span class="icon-arrow-prev"></span></button>',
  nextArrow: '<button type="button"><span class="icon-arrow"></span></button>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 720,
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
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$('.reviews-slick').slick({
  infinite: true,
  slidesToShow: 3,
  speed: 1200,
  dots: true,
  slidesToScroll: 3,
  prevArrow: '<button type="button"><span class="icon-arrow-prev"></span></button>',
  nextArrow: '<button type="button"><span class="icon-arrow"></span></button>',
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
      breakpoint: 720,
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
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.top-slider-block').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear', 
  prevArrow: '<button type="button"><span class="icon-arrow-prev"></span></button>',
  nextArrow: '<button type="button"><span class="icon-arrow"></span></button>'
});
</script>
</body>
</html>
