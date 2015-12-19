<?php /*
* Template Name: Homepage - Scrolling
*/

get_header(); ?>

<main id="main" class="site-main" role="main">

  <div class="container home" id="home">

    <div class="content">
      <div class=""><!-- twelve columns -->
        <?php if (have_rows('greeting_panel')) :
              while (have_rows('greeting_panel')) : the_row();        
        ?>

        <div class="greeting">
          <h1>
            <?php echo get_sub_field('greeting') ?>
          </h1>
        </div>
        <div class="greeting_para">
          <p>
            <?php echo get_sub_field('greeting_paragraph') ?>
          </p>
        </div>

          <?php if (have_rows('greeting_button')) :
                while (have_rows('greeting_button')) : the_row(); 

                //variables
                $gb_text = get_sub_field('gb_text');
                $gb_link = get_sub_field('gb_link');  

          ?>
              <div class="button sm">
                <a href="<?php echo $gb_link ?>" class='btn'>
                  Contact
                </a>
              </div>

          <?php endwhile; endif; ?>

        <?php endwhile; endif; ?>

        <div class="down">
          <a href="#services">
            <img class="down_arrow" src="<?php echo get_template_directory_uri('/')?>/img/down_arrow.png">
          </a>
        </div>

      </div> <!-- end columns -->
    </div> <!-- end row -->

  </div> <!-- end container -->
   <div class="container" id="services">

    <div class="row">
      <div class=""><!-- twelve columns -->

        <?php if (have_rows('services_panel')) : 
              while(have_rows('services_panel')) : the_row();

              //variables

        ?>

            <?php //Banner loop
                  if (have_rows('sp_banner')):

                  $ctr_sp = 0;

                  while (have_rows('sp_banner')) : the_row();

                  //variables
                  $sp_banner_image = get_sub_field('sp_banner_image');
                  $sp_banner_url = $sp_banner_image['sizes']['short-banner'];
                  $sp_bot = get_sub_field('sp_bot');  //the text
                  //var_dump($sp_banner_url);
            ?>

            <div class="panel_banner" style="background-image:url('<?php echo $sp_banner_url; ?>')" >
              <div class="banner_overlay_color"></div>
              <div class="banner_overlay_text">
                <div class="content">
                  <h2>
                    <?php echo $sp_bot ?>
                  <h2>
                </div>
              </div> 
            </div>

            <?php $ctr_sp++; endwhile; endif; ?>

            <div class="separator" aria-hidden="true">
              <div class="line"></div>
            </div>
            <div class="row">
            <div class="container grid">
              
            <?php //Services grid loop

                  if (have_rows('sp_grid')):

                    $grid_ctr = 0;

                  while (have_rows('sp_grid')) : the_row();
                  //variables

                  $grid_ctr++;
                  //print_r($grid_ctr);
                  $grid_image = get_sub_field('sp_grid_image');
                  // $grid_image_url = $grid_image['sizes']['block'];
                  $grid_image_url = $grid_image['url'];
                  $grid_image_alt = $grid_image['alt'];
                  $sp_grid_title = get_sub_field('sp_grid_title');
                  $sp_grid_text = get_sub_field('sp_grid_statement');
            ?>

            <article class="grid_block-<?php echo $grid_ctr; ?> four columns">
              <div class="content">
                <img src="<?php echo $grid_image_url ?>" alt="<?php $grid_image_alt ?>">
                <h3><?php echo $sp_grid_title; ?></h3>
                <p><?php echo $sp_grid_text; ?></p>
              </div>
            </article>

            <?php endwhile; endif; ?>
              </div><!-- end row -->
            </div><!-- end container grid -->

        <? endwhile; endif; ?>

      </div> <!-- end columns -->
    </div> <!-- end row -->

  </div> <!-- end container -->
   <div class="container" id="regulations">

    <div class="row">
      <div class=""><!-- twelve columns -->

        <?php if (have_rows('regulations_panel')) :
              while (have_rows('regulations_panel')) : the_row();

              $rp_rc_content = get_sub_field('rp_rc_content');
        ?>

          <?php if (have_rows('rp_banner')) :
                while (have_rows('rp_banner')) : the_row();

                //variables
                $rp_banner_image = get_sub_field('rp_banner_image');
                $rp_banner_url = $rp_banner_image['sizes']['short-banner'];
                $rp_bot = get_sub_field('rp_bot');
                
          ?>

          <div class="panel_banner" style="background-image:url('<?php echo $rp_banner_url; ?>')" >
              <div class="banner_overlay_color"></div>
              <div class="banner_overlay_text">
                <div class="content">
                  <h2>
                    <?php echo $rp_bot ?>
                  <h2>
                </div>
              </div> 
            </div>

          <?php endwhile; endif; ?>

          <div class="rp_columns">
            <div class="row">

              <div class="four columns first">
              <div class="content">
            <?php if(have_rows('left_column')) :
                  while (have_rows('left_column')) : the_row();

                  //variables
                  $rp_lc_image = get_sub_field('rp_lc_image');
                  $rp_lc_image_url = $rp_lc_image['url'];
                  $rp_lc_image_alt = $rp_lc_image['alt'];
                  $rp_lc_title = get_sub_field('rp_lc_title');
                  $rp_lc_content = get_sub_field('rp_lc_content_paragraph');

            ?>

              <img src="<?php echo $rp_lc_image_url ?>" alt="<?php echo $rp_lc_image_alt; ?>">

              <h3><?php echo $rp_lc_title; ?></h3>
              <p><?php echo $rp_lc_content ?></p>

              <?php endwhile; endif; ?>
              </div> <!-- end four columns first -->
            </div> <!-- end content -->

            <div class="eight columns second">
              <div class="content">
             

              
                <?php echo $rp_rc_content; ?>
                
              
              </div> <!-- end content -->
            </div> <!-- end eight columns second -->


       
        </div> <!-- end row -->




      </div><!-- end rp columns -->

       <?php if (have_rows('rp_button')) :
                while (have_rows('rp_button')) : the_row(); 

                //variables
                $rb_text = get_sub_field('rp_button_text');
                $rb_link = get_sub_field('rp_button_link');  

          ?>
              <div class="button sm">
                <a href="<?php echo $rb_link ?>" class='btn'>
                  <?php echo $rb_text; ?>
                </a>
              </div>

          <?php endwhile; endif; ?>

<?php endwhile; endif; ?>

      </div> <!-- end columns -->

    </div> <!-- end row -->

  </div> <!-- end container -->
   <div class="container" id="clients">

    <div class="row">
      <div class=""><!-- twelve columns -->

        <?php if (have_rows('clients_panel')) : 
              while(have_rows('clients_panel')) : the_row();

              //variables
              $clp_map_image = get_sub_field('clp_map_image');
              $clp_map_image_URL = $clp_map_image['url'];
              $clp_map_image_ALT = $clp_map_image['alt'];
              $clp_title = get_sub_field('clp_title');
              $clp_text = get_sub_field('clp_statement');

        ?>
          <h2><?php echo $clp_title; ?></h2>
          <img class="map" src="<?php echo $clp_map_image_URL; ?>" alt="<?php $clp_map_image_ALT; ?>">
          <p><?php echo $clp_text; ?></p>


        <?php endwhile; endif; ?>

      </div> <!-- end columns -->
    </div> <!-- end row -->

  </div> <!-- end container -->
   <div class="container" id="management">

    <div class="row">
      <div class=""><!-- twelve columns -->

        <?php if (have_rows('management_panel')) :
              while (have_rows('management_panel')) : the_row() 

        ?>

         <?php if (have_rows('mp_banner')) :
                while (have_rows('mp_banner')) : the_row();

                //variables
                $mp_banner_image = get_sub_field('mp_banner_image');
                $mp_banner_url = $mp_banner_image['sizes']['short-banner'];
                $mp_bot = get_sub_field('mp_bot');
          ?>

          <div class="panel_banner" style="background-image:url('<?php echo $mp_banner_url; ?>')" >
              <div class="banner_overlay_color"></div>
              <div class="banner_overlay_text">
                <div class="content">
                  <h2>
                    <?php echo $mp_bot ?>
                  <h2>
                </div>
              </div> 
            </div>

          <?php endwhile; endif; ?>

          <div class="separator" aria-hidden="true">
              <div class="line"></div>
            </div>

          <div class="row">
            <div class="container grid">

          <?php if (have_rows('mp_grid')) :

                //Counter
                $mp_ctr = 0;

                while (have_rows('mp_grid')) : the_row();

                //variables
                $mp_ctr++;
                $mp_grid_image = get_sub_field('mp_mg_partner_image');
                $mp_grid_image_URL = $mp_grid_image['sizes']['block'];
                $mp_grid_image_ALT = $mp_grid_image['alt'];
                $mp_grid_name = get_sub_field('mp_mg_name');
                $mp_grid_title = get_sub_field('mp_mg_title');
                $mp_grid_desc = get_sub_field('mp_mg_description');
                $mp_grid_bio_link = get_sub_field('mp_mg_link');
          ?>

            <article class="grid_block-<?php echo $mp_ctr; ?> four columns">
              <div class="content">
                <div class="portrait">
                  <img src="<?php echo $mp_grid_image_URL; ?>" alt="<?php $mp_grid_image_ALT; ?>">
                </div>
                <h3 class="name"><?php echo $mp_grid_name; ?></h3>
                <h4 class="title"><?php echo $mp_grid_title; ?></h4>
                <p><?php echo $mp_grid_desc; ?></p>
                <div class="read-more">
                  <a href="<?php echo $mp_grid_bio_link ?>">
                    Read more 
                    <span aria-hidden="true">&raquo;&raquo;</span>
                    <span class="sr-only">about <?php echo $mp_grid_name; ?></span>
                  </a>
                </div>
              </div>
            </article>

          <?php endwhile; endif; ?>
        </div>
      </div>
        <?php endwhile; endif; ?>

      </div> <!-- end columns -->
    </div> <!-- end row -->

  </div> <!-- end container -->
   <div class="container" id="contact">

    <div class="row">
      <div class="content"><!-- twelve columns -->

        <?php if (have_rows('contact_panel')) :
              while (have_rows('contact_panel')) : the_row();

              //variables
              $ctcp_callout = get_sub_field('ctcp_callout');
              $ctcb_link = get_sub_field('ctcp_link');
        ?>

        <h2><?php echo $ctcp_callout ?></h2>

              <div class="button lg">
                <a href="<?php echo $ctcb_link ?>" class='btn'>
                  Contact
                </a>
              </div>

        <?php endwhile; endif ?>

      </div> <!-- end columns -->
    </div> <!-- end row -->

  </div> <!-- end container -->

<!-- </main> --><!-- #main -->

<?php get_footer(); ?>
