<div class="card card-posts">
  <div class="card-body">

    <?php /** Output post title **/ ?>
        <h2 class="card-title">
          <a href = "<?php the_permalink(); ?>">
            <div class ="post-thumb">
              <?php the_post_thumbnail(); ?>
            </div>
          </a>
        </h2>
        <?php if(is_single()) : ?>
            <?php the_content(); ?>
        <?php else :  ?>
        <a class = "excerpt" href = "<?php the_permalink(); ?>">
          <?php the_excerpt(); ?>
        </a>
        <?php endif; ?>
  </div>
</div></br>