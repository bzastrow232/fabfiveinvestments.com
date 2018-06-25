
<?php /**  Include Header **/ ?>
<?php get_header(); ?>

    <main role="main">

      <div class="container-fluid">
        <div class = "row">
          <?php /**  POSTS **/ ?>
          <div class = "col-md-12">

          <?php /**  Check if there are posts **/ ?>
          <?php if(have_posts()) : ?>

            <?php /**  Loop through if there are existing posts **/ ?>
            <?php while(have_posts()) : the_post(); ?>

            <div class="card card-posts">
              <div class="card-body">

                <?php /**  Output post title **/ ?>
                <h2 class="card-title">
                    <?php the_title(); ?>
                </h2>

                  <p class="card-text card-text-posts">
                    <?php the_content(); ?>
                  </p>
                  
              </div>
            </div></br>
            <?php /**  End of checking for posts loop **/ ?>
            <?php endwhile; ?>

            <?php /**  If no posts are found **/ ?>
          <?php else : ?>
            
            <p><?php __('No Page Found'); ?></p>

            <?php /**  End if statement **/ ?>
          <?php endif; ?>

          </div>
          <?php /** END posts **/ ?>

          <?php /**  Widgets **/ ?>
          
<?php /**  Include footer **/ ?>
<?php get_footer(); ?>

