<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Formation
 * @since Formation 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer_container">
    <div class="section group">
    
	<div class="col span_1_of_3">
    <?php if ( is_active_sidebar( 'left_column' ) && dynamic_sidebar('left_column') ) : else : ?>
         <div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'Formation') . '</h4>'; ?>
            <?php echo '<p>' . __('This left column is widget ready! Add one in the admin panel.', 'Formation') . '</p>'; ?>
            </div>     
	<?php endif; ?>  
		</div>
        
	<div class="col span_1_of_3">
	<?php if ( is_active_sidebar( 'center_column' ) && dynamic_sidebar('center_column') ) : else : ?>
         <div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'Formation') . '</h4>'; ?>
            <?php echo '<p>' . __('This center column is widget ready! Add one in the admin panel.', 'Formation') . '</p>'; ?>
            </div>     
	<?php endif; ?> 

	</div>
    
	<div class="col span_1_of_3">
	<?php if ( is_active_sidebar( 'right_column' ) && dynamic_sidebar('right_column') ) : else : ?>
         <div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'Formation') . '</h4>'; ?>
            <?php echo '<p>' . __('This right column is widget ready! Add one in the admin panel.', 'Formation') . '</p>'; ?>
            </div>     
	<?php endif; ?> 
	</div>
	</div>
        </div><!-- footer container -->
        <div class="site-info">
			<a href="spectr.dp.ua" title="">(С)2014 Kovalenko&co</a>
			spectr.dp.ua
			<a href="spectr.dp.ua" title=""></a>
			<a href="spect.dp.ua" title=" днепропетровск">днепропетровск</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
    <a href="#top" id="smoothup"></a>
</div><!-- #page .hfeed .site -->
</div><!-- end of wrapper -->
<?php wp_footer(); ?>

</body>
</html>
