<?php 
/* Footer 
**********/
?>
         
        </div> <?php /**  End row **/ ?>
      </div> <?php /** End container **/ ?>
    </main> <?php /** End Main **/ ?>

   <?php /** Start Footer **/ ?>
   <footer class="container-fluid">
    <p class = "footer-copyright">
      Copyright © <?php echo date("Y"); ?> - <?php echo site_url(); ?></br></br>
      <span><a href="<?php echo the_permalink()."privacy-policy"; ?>">Privacy Policy</a></span> |
      <span><a href="<?php echo the_permalink()."disclaimer"; ?>">Disclaimer</a></span> |
      <span><a href="<?php echo the_permalink()."terms-and-conditions" ?>">Terms & Conditions</a></span>
    </p>
  </footer>

    <?php /** WP_Footer **/ ?>
    <?php wp_footer(); ?>
  </body>
</html>

<?php if(is_single()) : 
//Hide featured image ?>
<style> .card-title { display: none; } </style>
<?php endif; ?>
