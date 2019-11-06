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
  slidesToScroll: 1
});
$('.reviews-slick').slick({
  infinite: true,
  slidesToShow: 3,
  dots: true,
  slidesToScroll: 3
});
</script>
</body>
</html>
