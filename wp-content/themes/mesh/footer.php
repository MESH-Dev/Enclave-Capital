</main>
</div><!-- #page -->

<footer class="site-footer <?php if( is_page_template('templates/homepage-fullscreen.php') ) { echo "footer-fullscreen"; } ?>">

	<div class="container">
		<div class="row">
			<div class="four columns">

				<div class="footer_nav">
					<h3>Additional Pages</h3>
					<?php if (has_nav_menu('footer_nav')){
						$defaults = array(
										'theme_location'  => 'footer_nav',
										'menu'            => 'main_nav',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu-footer',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => ''
									); wp_nav_menu( $defaults );
					}?>
					</div>
				</div>

				<div class="four columns">
					<div class="left">
						<p>Address: 19 W 44th Street,</br>  Suite 1700 New York, NY 10036</p>
						<p>Phone: 646-454-8600</p>
					</div>
				</div>
				<div class="four columns">
					<div class="right">
						<p>Copyright <?php echo date('Y'); ?>
						<p>Designed by <a href="http://meshfresh.com" target="_blank">MESH</a></p>
					</div>
				</div>
			</div><!-- End of Footer -->
		</div> <!-- end row -->
	</div> <!-- end container -->

</footer>



<?php wp_footer(); ?>

</body>
</html>
