<?php

$facebookLink = esc_attr( get_option('facebook_link') );


?>

<?php wp_footer(); ?>
<footer>
  <div class="footer-whole-container">
      <div class="socialmedia-container">
        <a href="<?php echo $facebookLink; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
      </div>
      <div class="copyright-container">
        <p>
          &copy; Oakham Farm 2020. Website By <a href="https://www.lucyisobel.co.uk/" target="_blank"><span class="green">Lucy Isobel </span></a>
        </p>
      </div>

    </div>


</footer>
</body>
</html>
