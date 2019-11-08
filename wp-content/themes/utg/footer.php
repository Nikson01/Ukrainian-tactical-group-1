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
$('.discount-products-gallery').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow: '<button type="button"><span class="icon-arrow-prev"></span></button>',
  nextArrow: '<button type="button"><span class="icon-arrow"></span></button>'
});
$('.reviews-slick').slick({
  infinite: true,
  slidesToShow: 3,
  speed: 1200,
  dots: true,
  slidesToScroll: 3,
  prevArrow: '<button type="button"><span class="icon-arrow-prev"></span></button>',
  nextArrow: '<button type="button"><span class="icon-arrow"></span></button>'
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
