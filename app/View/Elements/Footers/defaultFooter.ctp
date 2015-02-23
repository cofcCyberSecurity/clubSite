<?php
/**
 * Created by PhpStorm.
 * User: millerfanning
 * Date: 11/24/14
 * Time: 1:21 AM
 */
?>

<footer>
    <div class="footer">

        <div class="container">
            <div class="footer-wrapper">
                <div class="row">


                    <!-- Footer Col. -->
                    <div class="col-md-4 col-sm-4 footer-col">
                        <div class="footer-content">
                            <div class="footer-content-logo">
                                <?php echo $this->Html->image('CofC-Logos/cofc-logo-2014.png', array('alt' => '', 'url' => array(
                                    'action' => '/'
                                ),
                                'width' => '200', 'height' => '50')); ?>
                            </div>
                            <div class="footer-content-text">
                                <p>Something Funny.</p>
                                <p>Something Funnier.</p>
                            </div>
                        </div>
                    </div>
                    <!-- //Footer Col.// -->


                    <!-- Footer Col. -->
                    <div class="col-md-4 col-sm-4 footer-col">
                        <a class="twitter-timeline" href="https://twitter.com/cofc_cyber" data-widget-id="558389399453696000">Tweets by @cofc_cyber</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>
                    <!-- //Footer Col.// -->


                    <!-- Footer Col. -->
                    <div class="col-md-4 col-sm-4 footer-col">
                        <div class="footer-title">
                            Links
                        </div>
                        <div class="footer-content">
                            <ul class="footer-category-list">
                                <li>
                                    <a href="http://www.cs.cofc.edu/blog/" target="_blank">Blog</a>
                                </li>
                                <li>
                                    <a href="http://instagram.com/cs_cofc" target="_blank">Instagram</a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/CSatCofC" target="_blank">Facebook</a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/groups?home=&gid=3683136" target="_blank">Linkedin</a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/csatcofc" target="_blank">Twitter</a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/user/csatcofc" target="_blank">Youtube </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- //Footer Col.// -->


                </div>
            </div>

        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 center-text">
                        <div class="copyright-text">&copy; 2014 Cyber Security Club | <a href="http://www.cofc.edu" target="_blank">College Of Charleston</a></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>

<?php

echo $this->Html->script('_jq');
echo $this->Html->script('_jquery.placeholder');


echo $this->Html->script('activeaxon_menu');
echo $this->Html->script('animationEnigne');
echo $this->Html->script('bootstrap.min');
echo $this->Html->script('ie-fixes');
echo $this->Html->script('jq.appear');
echo $this->Html->script('jquery.base64');
echo $this->Html->script('jquery.carouFredSel-6.2.1-packed');
echo $this->Html->script('jquery.cycle');
echo $this->Html->script('jquery.cycle2.carousel');
echo $this->Html->script('jquery.easing.1.3');
echo $this->Html->script('jquery.easytabs');
echo $this->Html->script('jquery.infinitescroll');
echo $this->Html->script('jquery.isotope');
echo $this->Html->script('jquery.prettyPhoto');
echo $this->Html->script('jQuery.scrollPoint');
echo $this->Html->script('jquery.themepunch.plugins.min');
echo $this->Html->script('jquery.themepunch.revolution');
echo $this->Html->script('jquery.tipsy');
echo $this->Html->script('jquery.validate');
echo $this->Html->script('jQuery.XDomainRequest');
echo $this->Html->script('kanzi');
echo $this->Html->script('retina');

?>