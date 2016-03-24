<?php get_header(); ?>

<main id="main" class="site-main">

 	 <div class="container home interior" id="home">
		<div class="content">
			<div class="">

				<h1 class="bc"><?php echo the_title(); ?></h1>

				<?php while (have_rows('home_panel')) : the_row(); 
					$home_panel_icon = get_sub_field('hp_icon');
					$home_panel_icon_URL = $home_panel_icon['url'];
					$home_panel_callout = get_sub_field('hp_callout');
					$home_panel_statement = get_sub_field('hp_statement');

				?>
				<?php if ($home_panel_callout != '' && $home_panel_statement != ''){ ?>
				<?php if ($home_panel_icon != ''){ ?>
				<img src="<?php echo $home_panel_icon_URL ?>" />
				<?php } ?>
				<h2><?php echo $home_panel_callout ?></h2>
				<div class="separator" aria-hidden="true">
              		<div class="line"></div>
            	</div>

   				<p><?php echo $home_panel_statement; ?></p>

   				<?php while(have_rows ('hp_int_link')) : the_row();

   					$hp_int_text = get_sub_field('hp_btn_int_text');
   					$hp_int_link = get_sub_field('hp_btn_int_link');
   				?>

   				<?php if ($hp_int_link != '' && $hp_int_text != ''){ ?>

   				<div class="button sm">
                <a href="<?php echo $hp_int_link; ?>" class='btn'>
                  <?php echo $hp_int_text ?>
                </a>
              </div>

   				<?php } ?>
   				 <?php endwhile; ?>
   				<?php } ?>

           		 <?php endwhile; ?>

            	<!-- <p>This may be the text for this page... Enclave Capital enables non-U.S. banks and brokerages to gain access to the largest capital market in the world under U.S. laws and regulations through Rule 15a-6, exempting foreign businesses from the SEC’s otherwise mandatory broker-dealer registration process.</p> -->
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					
					<div class="the_content">
						<?php the_content(); ?>
					</div>

				<?php endwhile; ?>
			</div> <!-- end columns -->

		</div><!-- end row -->
	</div><!-- end container home-->
	<?php //$rows = get_field('second_panel'); var_dump($rows);?>

	<?php if ( have_rows('second_panel')) : 
			while(have_rows('second_panel')) : the_row();

	?>
	<div class="container" id="second">
		<div class="row">
			<div class="">

				
					<?php //if (have_rows('spi_banner')) :
							while (have_rows('spi_banner')) : the_row();

							//variables
							$spi_banner_image = get_sub_field('spi_banner_image');
							$spi_banner_image_URL = $spi_banner_image['sizes']['short-banner'];
							$spi_bot = get_sub_field('spi_banner_text');
							//var_dump($spi_banner_image);

							endwhile;
					?>
					<?php if ($spi_banner_image != '' && $spi_bot != ''){ ?>
					<div class="panel_banner" style="background-image:url('<?php echo $spi_banner_image_URL; ?>')" >
		            	<div class="banner_overlay_color"></div>
			              <div class="banner_overlay_text">
			                <div class="content">
			                  <h2>
			                    <?php echo $spi_bot ?>
			                  <h2>
			                </div>
			              </div> 
		            	</div>
		       		</div>

		       		<?php } ?>

	       			<? //endwhile; endif; ?>

	       			<?php //if (have_rows('spI_columns')) :
	       					while(have_rows('spI_columns')) : the_row();

	       					//variables
	       					$spi_rc = get_sub_field('spi_rc');
	  				// 		$spi_lc_image = get_sub_field('spi_lc_image');
							// $spi_lc_image_URL = $spi_lc_image['url'];
							// $spi_lc_image_ALT = $spi_lc_image['alt'];
							// $spi_lc_title = get_sub_field('spi_lc_title');
							// $spi_lc_statement = get_sub_field('spi_lc_statement');
							// echo $spi_lc_title;

							while(have_rows('spi_lc')) : the_row();

							$spi_lc_image = get_sub_field('spi_lc_image');
							$spi_lc_image_URL = $spi_lc_image['url'];
							$spi_lc_image_ALT = $spi_lc_image['alt'];
							$spi_lc_title = get_sub_field('spi_lc_title');
							$spi_lc_statement = get_sub_field('spi_lc_statement');
							//var_dump($spi_lc);
							endwhile;

	       					endwhile;

							
	       			?>

	       			<?php if ($spi_rc != '' && $spi_lc_title != '' ){ //&& $spi_lc_title != ''?>
	       			<div class="spi_columns">
            			<div class="row">

            				<div class="eight columns first">
            					<div class="content">
            						<?php echo $spi_rc; ?>
            					</div>
            				</div> <!-- end eight columns -->

            				<?php if ($spi_lc_title != ''){ ?>
            				<div class="four columns second">
            					<div class="content">
            					
            						
            						<img src="<?php echo $spi_lc_image_URL; ?>" alt="<?php $spi_lc_image_ALT; ?>">
            						<h3><?php echo $spi_lc_title; ?></h3>
            						<p><?php echo $spi_lc_statement; ?></p>

            					
            					</div>
            				</div><!-- end four columns -->
            				<?php } ?>
            			</div> <!-- end row -->
            			
            		</div> <!-- end spi_columns -->

            		<? } ?>



				

			<!-- </div>  --><!-- end columns -->

		</div><!-- end row -->
	</div><!-- end container 2nd panel-->

	<? endwhile; endif; //end second panel?>
	<div class="container" id="tpi_grid">
		<div class="row">
	<?php if (have_rows('tpi_grid')) :

				$tpig_ctr = 0;

				while (have_rows('tpi_grid')) : the_row();

				//variables
				$tpig_ctr++;
				$tpi_g_title = get_sub_field('tpi_g_title');
				$tpi_g_image = get_sub_field('tpi_g_image');
				$tpi_g_image_URL = $tpi_g_image['url'];
				$tpi_g_image_alt = $tpi_g_image['alt'];
				$tpi_g_desc = get_sub_field('tpi_g_statement');
				//var_dump($tpi_g_image);
		?>

		<?php if ($tpi_g_title != '' && $tpi_g_desc != '' ) {?>
	
		

			<article class="grid_block-<?php echo $tpig_ctr; ?> four columns">
				<div class="content">
					<h3><?php echo $tpi_g_title ?></h3>
					<img src="<?php echo $tpi_g_image_URL; ?>" alt="<?php echo $tpi_g_image_ALT; ?>">
					<p><?php echo $tpi_g_desc ?></p>
				</div>
			</article>

		
		<!-- </div> -->
	

	<?php } ?>

	<? endwhile; endif; ?>
	</div></div><!-- end grid  -->

	<?php if (have_rows('ctci_panel')) :
			while (have_rows('ctci_panel')) : the_row();

			//variables 
			$ctci_callout = get_sub_field('ctci_callout');

		?>

		<?php if ($ctci_callout != '') { ?>
	<div class="container" id="connect">
		

		<h2><?php echo $ctci_callout ?><h2>

			<?php if (have_rows('ctci_button')) :
					while (have_rows('ctci_button')) : the_row();

					//variables
					$ctci_b_text = get_sub_field('ctci_b_text');
					$ctc_b_link = get_sub_field('ctc_b_link');
			?>

		 	<div class="button sm">
                <a href="<?php echo $ctc_b_link; ?>" class='btn'>
                  <?php echo $ctci_b_text; ?>
                </a>
              </div>

			<?php endwhile; endif; ?>

		
	</div>
	<?php } ?>
	<?php endwhile; endif; ?>
</main><!-- End of Content -->

<?php get_footer(); ?>
