<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage wptest3
 * @since wptest3 1.0
 */
?>
<footer class="footer bottom-footer-block">

		<?php wp_footer(); ?>
            <div class="container">
                <div class="footer-logo clear">
                    <div class="col-md-4 col-sm-5 right-box-rey">
                        <img alt="Peligrim INC" src="/wp-content/themes/wptest3/images/footer-logo.png">
                    </div>

                    <ul class="social col-md-8  text-right">
                        <li><a href="http://www.facebook.com/pilgrimconsulting" class="facebook" target="_blanc"></a></li>
                        <li><a href="http://www.twitter.com/pilgriminc" class="twitter" target="_blanc"></a></li>
                        <li><a href="http://www.google.com/+Pilgrimconsulting" class="google" target="_blanc"></a></li>
                        <li><a href="http://www.linkedin.com/company/pilgrim-consulting-inc" target="_blanc"class="in"></a></li>
                    </ul>
                </div>
                <div class="footer-copyright col-md-12">
                    <div class="copyright">Copyright 2014 Pilgrim Consulting, Inc. All Rights Reserved</div>
                    <ul class="copyright-menu">
                        <li><a href="/terms-of-service">Terms of Service</a></li>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </footer>

</body>
</html>