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

</body>
</html>
