</main>
</div><!-- #page -->

<footer class="site-footer <?php if( is_page_template('templates/homepage-fullscreen.php') ) { echo "footer-fullscreen"; } ?>">

	<div class="container">
		<div class="row">
			<!-- <div class="four columns">

				<div class="footer_nav">
					<h3>Additional Pages</h3>
					<?php //if (has_nav_menu('footer_nav')){
						//$defaults = array(
										// 'theme_location'  => 'footer_nav',
										// 'menu'            => 'main_nav',
										// 'container'       => false,
										// 'container_class' => '',
										// 'container_id'    => '',
										// 'menu_class'      => 'menu-footer',
										// 'menu_id'         => '',
										// 'echo'            => true,
										// 'fallback_cb'     => 'wp_page_menu',
										// 'before'          => '',
										// 'after'           => '',
										// 'link_before'     => '',
										// 'link_after'      => '',
										// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										// 'depth'           => 0,
										// 'walker'          => ''
									// ); wp_nav_menu( $defaults );
					//}?>
					</div>
				</div> -->

				<div class="ten columns">
					<div class="address">
						<p class="label">Address:</p>
						<p>19 W 44th Street,<br />  Suite 1700 <br />New York, NY 10036</p>
					</div>
					<div class="phone">
						<p class="label">Phone:</p>
						<p> US +1 646-454-8600</p>
					</div>
				</div>
				<div class="two columns">
					
						<div class="copyright">
							<p><img src="<?php echo get_template_directory_uri('/')?>/img/footer_logo_sm.png" alt="Enclave Capital logo"><span>Copyright <?php echo date('Y'); ?></span></p>
							<p>All rights reserved<br>
							Site design <a href="http://meshfresh.com" target="_blank" aria-label="External link, opens in new window">MESH</a></p>
						</div>
					
				</div>
			<!-- </div> --><!-- End of Footer -->
		</div> <!-- end row -->
	</div> <!-- end container -->

</footer>



<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66206223-5', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
