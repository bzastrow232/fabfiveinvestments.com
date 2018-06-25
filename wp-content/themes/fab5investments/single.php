
<?php /** Include Header **/ ?>
<?php get_header(); ?>

    <main role="main">

      <div class="container-fluid">
        <div class = "row">
          <?php /** POSTS **/ ?>
          <div class = "col-md-12">

          <?php /** Check if there are posts **/ ?>
          <?php if(have_posts()) : ?>

            <?php /** Loop through if there are existing posts **/ ?>
            <?php while(have_posts()) : the_post(); ?>

              <?php get_template_part('content',get_post_format()); ?>

            <?php /** End of checking for posts loop **/ ?>
            <?php endwhile; ?>

            <?php /** If no posts are found **/ ?>
          <?php else : ?>
            <p><?php __('No Posts Found'); ?></p>

            <?php /**  End if statement **/ ?>
          <?php endif; ?>

          </div>
          <?php /** END posts **/ ?>

          
<?php /** Include footer **/ ?>
<?php get_footer(); ?>

