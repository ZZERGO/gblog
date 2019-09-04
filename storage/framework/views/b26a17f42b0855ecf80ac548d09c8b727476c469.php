
    <footer id="footer" class="color color-primary ">
        <!-- Контейнер футера
        <div class="container">
            <div class="row">
                <div class="footer-ribbon">
                    <span>Быстрые ссылки</span>
                </div>
                <div class="col-md-3">
                    <div class="newsletter">
                        <h4>Newsletter</h4>
                        <p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>

                        <div class="alert alert-success hidden" id="newsletterSuccess">
                            <strong>Success!</strong> You've been added to our email list.
                        </div>

                        <div class="alert alert-danger hidden" id="newsletterError"></div>

                        <form id="newsletterForm" action="<?php echo e(asset('php/newsletter-subscribe.php')); ?>" method="POST">
                            <div class="input-group">
                                <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Go!</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Latest Tweets</h4>
                    <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "", "count": 2}'>
                        <p>Please wait...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-details">
                        <h4>Contact Us</h4>
                        <ul class="contact">
                            <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
                            <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
                            <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <h4>Follow Us</h4>
                    <ul class="social-icons">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        -->

        <div class="footer-copyright">
            <div class="container">
                <div class="row"></div>
                <div class="row">
                    <div class="col-md-1">
                        <a href="index.html" class="logo">
                            <img alt="Porto Website Template" class="img-responsive" src="<?php echo e(asset('img/logo-footer.png')); ?>">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <p>© Copyright 2015. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-4">
                        <nav id="sub-menu">
                            <ul>
                                <li><a href="page-faq.html">FAQ's</a></li>
                                <li><a href="sitemap.html">Sitemap</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>





<!-- Vendor -->
<script src="<?php echo e(asset('vendor/jquery/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery.appear/jquery.appear.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery.easing/jquery.easing.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery-cookie/jquery-cookie.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/common/common.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery.validation/jquery.validation.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery.stellar/jquery.stellar.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery.gmap/jquery.gmap.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/jquery.lazyload/jquery.lazyload.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/isotope/jquery.isotope.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/owl.carousel/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/magnific-popup/jquery.magnific-popup.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/vide/vide.js')); ?>"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo e(asset('js/theme.js')); ?>"></script>

<!-- Current Page Vendor and Views -->
<script src="<?php echo e(asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/circle-flip-slideshow/js/jquery.flipshow.js')); ?>"></script>
<script src="<?php echo e(asset('js/views/view.home.js')); ?>"></script>

<!-- Theme Custom -->
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo e(asset('js/theme.init.js')); ?>"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12345678-1', 'auto');
    ga('send', 'pageview');
</script>
 -->

</body>
</html>
