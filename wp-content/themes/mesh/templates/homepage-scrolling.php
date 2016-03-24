<?php /*
* Template Name: Homepage - Scrolling
*/

get_header(); ?>

<main id="main" class="site-main">

  <div class="container home" id="home" >

    <?php if (have_rows('greeting_panel')) :
              while (have_rows('greeting_panel')) : the_row();  

              //variables  
              $hp_background = get_sub_field('hp_background');
              $hp_background_URL = $hp_background['url'];
              //var_dump($hp_background_URL);

        ?>

    <div class="content" style="background-image:url('<?php echo $hp_background_URL; ?>')">
      <div class=""><!-- twelve columns -->
        

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


        <ul class="home_icons">
        <?php while (have_rows('greeting_icons')) : the_row(); 

          $hp_g_icon = get_sub_field('hp_g_icon');
          $hp_g_icon_URL = $hp_g_icon['url'];
          $hp_g_icon_ALT = $hp_g_icon['alt'];
        ?>

        <?php if($hp_g_icon != ''){ ?>
            <li><img src="<?php echo $hp_g_icon_URL; ?>" alt="<?php echo $hp_g_icon_ALT; ?>"> </li>
        <?php } ?>
        
      <?php endwhile; ?>
    </ul>
          <?php if (have_rows('greeting_button')) :
                while (have_rows('greeting_button')) : the_row(); 

                //variables
                $gb_text = get_sub_field('gb_text');
                $gb_link = get_sub_field('gb_link');  

          ?>
              <div class="button sm">
                <a href="<?php echo $gb_link ?>" class='btn'>
                  <?php echo $gb_text?>
                </a>
              </div>

          <?php endwhile; endif; ?>

        <?php endwhile; endif; ?>

        <div class="down">
          <a href="#services">
            <img class="down_arrow" alt="Click here to proceed to the next panel of the webpage" src="<?php echo get_template_directory_uri('/')?>/img/down_arrow.png">
          </a>
        </div>

      </div> <!-- end columns -->
    </div> <!-- end content -->

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
              <div class="banner_overlay_color" aria-hidden="true"></div>
              <div class="banner_overlay_text">
                <div class="content">
                  <h2>
                    <?php echo $sp_bot ?>
                  </h2>
                </div>
              </div> 
            </div>

            <?php $ctr_sp++; endwhile; endif; ?>

            <div class="separator" aria-hidden="true">
              <div class="line"></div>
            </div>
            <div class="row">
            <div class="container grid eh">
              
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
                  $sp_grid_link = get_sub_field('sp_grid_link');

                  // if($grid_ctr <= 3){
                  //   $border_class = 'border-bottom';
                  // }
            ?>

            <?php if ($sp_grid_link != '') { ?>

            <a href="<?php echo $sp_grid_link; ?>">

            <?php } ?>

            <article class="grid_block-<?php echo $grid_ctr; ?> <?php if($grid_ctr <= 3){echo $border_class; }?> four columns">
              <div class="content">
                <img src="<?php echo $grid_image_url ?>" alt="<?php $grid_image_alt ?>">
                <h3><?php echo $sp_grid_title; ?></h3>
                <p><?php echo $sp_grid_text; ?></p>

                 <?php if ($sp_grid_link != '') { ?>
                   <div class="read-more">
                    Read more
                  </div>
                <?php } ?>

              </div>
            </article>

            <?php if ($sp_grid_link != '') { ?>

            </a>

            <?php } ?>


            <?php endwhile;

            if($grid_ctr <= 3){
                    $border_class = 'border-bottom';
                  }

             endif; ?>
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
              <div class="banner_overlay_color" aria-hidden="true"></div>
              <div class="banner_overlay_text">
                <div class="content">
                  <h2>
                    <?php echo $rp_bot ?>
                  </h2>
                </div>
              </div> 
            </div>

          <?php endwhile; endif; ?>

          <div class="rp_columns eh">
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
     <div class="separator" aria-hidden="true">
              <div class="line"></div>
            </div>
  </div> <!-- end container -->
   <div class="container" id="clients">

    <div class="row">
      <div class="content"><!-- twelve columns -->

        <?php if (have_rows('clients_panel')) : 
              while(have_rows('clients_panel')) : the_row();

              //variables
              $clp_map_image = get_sub_field('clp_map_image');
              $clp_map_image_URL = $clp_map_image['url'];
              $clp_map_image_ALT = $clp_map_image['alt'];
              $clp_title = get_sub_field('clp_title');
              $clp_text = get_sub_field('clp_statement');


        ?>

           <!--  <div class="separator" aria-hidden="true">
              <div class="line"></div>
            </div> -->

          <h2><?php echo $clp_title; ?></h2>
         

         
       
          <p><?php echo $clp_text; ?></p>

           <?php if (have_rows('clp_button')) :
                while (have_rows('clp_button')) : the_row();
                  $clp_bt = get_sub_field('clpb_text');
                  $clp_bl = get_sub_field('clpb_link');

                  if($clp_bt != ''){ ?>
          <div class="button sm">
                <a href="<?php echo $clp_bl; ?>" class='btn'>
                  <?php echo $clp_bt; ?>
                </a>
              </div>
          <?php } ?>

           <?php endwhile; endif; ?>

        <?php endwhile; endif; ?>

      </div> <!-- end columns -->
    </div> <!-- end row -->

  </div> <!-- end container -->
   <div class="container" id="management">

    <div class="row">
      <div class=""><!-- twelve columns -->

        <?php //if (have_rows('management_panel')) :
              //while (have_rows('management_panel')) : the_row() 

        ?>

         <?php if (have_rows('mp_banner')) :
                while (have_rows('mp_banner')) : the_row();

                //variables
                $mp_banner_image = get_sub_field('mp_banner_image');
                $mp_banner_url = $mp_banner_image['sizes']['short-banner'];
                $mp_bot = get_sub_field('mp_bot');
          ?>

          <div class="panel_banner" style="background-image:url('<?php echo $mp_banner_url; ?>')" >
              <div class="banner_overlay_color" aria-hidden="true"></div>
              <div class="banner_overlay_text">
                <div class="content">
                  <h2>
                    <?php echo $mp_bot ?>
                  </h2>
                </div>
              </div> 
            </div>

          <?php endwhile; endif; ?>

          <div class="separator" aria-hidden="true">
              <div class="line"></div>
            </div>

          <div class="row">
            <div class="container grid eh">

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
                //var_dump('$mp_grid_desc');
          ?>

            <?php if(!empty ($mp_grid_bio_link)){ ?>
              <a href="<?php echo $mp_grid_bio_link ?>">

            <?php } ?>


            <article class="grid_block-<?php echo $mp_ctr; ?> six columns">
              <div class="content">
                <div class="portrait">
                  <img src="<?php echo $mp_grid_image_URL; ?>" alt="<?php $mp_grid_image_ALT; ?>">
                </div>
                <h3 class="name"><?php echo $mp_grid_name; ?></h3>
                <h4 class="title"><?php echo $mp_grid_title; ?></h4>
                <p><?php echo $mp_grid_desc; ?></p>
                <div class="read-more">
                  
                    <?php if (!empty ($mp_grid_bio_link)){ ?>
                    Read bio
                    <span class="sr-only">about <?php echo $mp_grid_name; ?></span>
                    <?php } ?>

                </div>
              </div>
            </article>

            <?php if(!empty ($mp_grid_bio_link)){ ?>
              </a>

            <?php } ?>


          <?php endwhile; endif; ?>
        </div>
      </div>
        <?php //endwhile; endif; ?>

      </div> <!-- end columns -->
    </div> <!-- end row -->

  </div> <!-- end container -->
   <div class="container" id="contact">

    <div class="row">
      <div class="content"><!-- twelve columns -->

        <?php //if (have_rows('contact_panel')) :
              //while (have_rows('contact_panel')) : the_row();

              //variables
              $ctcp_callout = get_field('ctcp_callout');
              $ctcb_link = get_sub_field('ctcp_link');
        ?>

        <h2><?php echo $ctcp_callout ?></h2>

              <div class="button lg">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact" class='btn'>
                  Contact
                </a>
              </div>

        <?php //endwhile; endif ?>

      </div> <!-- end columns -->
    </div> <!-- end row -->

  </div> <!-- end container -->

<!-- </main> --><!-- #main -->

<?php get_footer(); ?>
