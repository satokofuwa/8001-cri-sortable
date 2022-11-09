<?php wp_footer(); ?>

<footer class="footer">
 <div class="footer__inner">
  <ul class="footer__inner-navi">
   <li><a href="<?php echo get_permalink(0); ?>">PHILOSOPHY</a></li>
   <li><a href="<?php echo get_permalink(0); ?>">NEWS</a></li>
   <li><a href="<?php echo get_permalink(0); ?>">MENU</a></li>
   <li><a href="<?php echo get_permalink(0); ?>">CONTACT</a></li>
  </ul>
  <div class="footer__inner-sns">
   <ul>
    <li>
     <a href="#">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sns01.png" alt="">
     </a>
    </li>
    <li>
     <a href="#">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sns02.png" alt="">
     </a>
    </li>
   </ul>
   <div class="copyright">© 2022 CRI Inc</div>
  </div>
 </div>
</footer>

</body>
</html>