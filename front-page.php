<?php get_header(); ?>

<!-- START CONTENT -->
<!-- query for front page -->
    <?php
        $args = array(
            'pagename' => 'home 2',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="dreams">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
<!-- query for quote -->
    <?php
        $args = array(
            'pagename' => 'home 2/quote',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="dreams">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
<!-- query for video -->
    <?php
        $args = array(
            'pagename' => 'home 2/video',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="dreams">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
<!-- Start of tab section -->
<a class="anchor" id="about"></a>
<div class="dreams">
<div class="container">
  <ul class="nav nav-pills nav-justified nav-custom">
    <li class="active pill-one"><a data-toggle="pill" href="#about2">ABOUT</a></li>
    <li class="pill-two"><a data-toggle="pill" href="#history">HISTORY</a></li>
    <li class="pill-three"><a href="#book">BOOK US</a></li>
  </ul>

  <div class="tab-content">
    <div id="about2" class="tab-pane fade in active">
      <!-- query for about --><p>
        <?php
            $args = array(
                'pagename' => 'home 2/about',);
            $query = new WP_Query($args);
        ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </p>
    </div>
    <div id="history" class="tab-pane fade">
      <!-- query for history --><p>
        <?php
            $args = array(
                'pagename' => 'home 2/history-2',);
            $query = new WP_Query($args);
        ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </p>
    </div>
  </div>
</div>
</div>

    
<!-- query for dreams -->
<a class="anchor" id="dreams"></a>
    <?php
        $args = array(
            'pagename' => 'home 2/dreams',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="dreams">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>  

<!-- query for testimonials -->
<div class="strike-testimonials">testimonials</div>
    <?php
        $args = array(
            'pagename' => 'home 2/testimonials',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="dreams">  
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

<!-- query for book us -->
<a class="anchor" id="book"></a>
<div class="strike-book">book us</div>
    <?php
        $args = array(
            'pagename' => 'home 2/book-tay-val-2',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="dreams">  
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

<!-- query for events -->
<a class="anchor" id="events"></a>
<div class="strike-calendar">calendar</div>
    <?php
        $args = array(
            'pagename' => 'home 2/events',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="dreams">  
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
<!-- query for contact -->
<a class="anchor" id="contact"></a>
<div class="strike-contact">contact</div>
    <?php
        $args = array(
            'pagename' => 'home 2/contact',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="dreams">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
<!-- query for sponsors -->
    <?php
        $args = array(
            'pagename' => 'home 2/sponsors',);
        $query = new WP_Query($args);
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="dreams">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
<!-- END CONTENT -->

<?php get_footer(); ?>