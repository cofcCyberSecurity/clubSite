<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="mail-us top-bar-block">
                    <i class="icon-email"></i>
                    <span>
                        E-mail: cybersecurityclub@cofc.edu
                    </span>
                </div>

            </div>
            <div class="col-sm-5">
                <div class="social-icons">
                    <ul>
                        <li>
                            <a href="https://www.youtube.com/user/csatcofc" target="_blank" class="social-media-icon youtube-icon" data-original-title="youtube">youtube</a>
                        </li>
                        <li>
                            <a href="https://twitter.com/csatcofc" target="_blank" class="social-media-icon twitter-icon" data-original-title="twitter">twitter</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/CSatCofC" target="_blank" class="social-media-icon facebook-icon" data-original-title="facebook">facebook</a>
                        </li>
                        <li>
                            <a href="http://instagram.com/cs_cofc" target="_blank" class="social-media-icon instagram-icon" data-original-title="instagram">instagram</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<header id="header">
<div class="container">

<div class="row header">

    <!-- Logo -->
    <div class="col-xs-2 logo">
<!--            --><?php //echo $this->Html->image('CofC-Logos/cofc-logo.jpeg',
//                array(
//                'alt' => 'College Of Charleston',
//                'url' => array(
//                    'controller' => '/',
//                    'action' => 'index'
//                    ),
//                'width' => '137',
//                'height' => '40'
//                )
//            ); ?>
    </div>
    <!-- //Logo// -->


    <!-- Navigation File -->
    <div class="col-md-10">

        <!-- Mobile Button Menu -->
        <div class="mobile-menu-button">
            <i class="fa fa-list-ul"></i>
        </div>
        <!-- //Mobile Button Menu// -->

        <nav>
            <ul class="navigation">
                <li>
                    <?php
                    echo $this->Html->link(
                        "<span class='label-nav'>Home</span>",
                        array('controller' => '', 'action' => '/'),
                        array('escape' => false, 'div' => false));
                    ?>
                </li>
                <li>
                    <a href="#">
                        <span class="label-nav">
                            News
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="label-nav">
                            Blog
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="label-nav">
                            Sponsorship
                        </span>
                    </a>
                </li>
                <li>
                    <?php
                    echo $this->Html->link(
                        "<span class='label-nav'>Photo Gallery</span>",
                        array('controller' => '', 'action' => 'photo_gallery'),
                        array('escape' => false));
                    ?>
                </li>
                <li>
                    <?php
                    echo $this->Html->link(
                        "<span class='label-nav'>Contact</span>",
                         array('controller' => '', 'action' => 'contact'),
                         array('escape' => false));
                    ?>
                </li>
                <li>
                    <?php
                    echo $this->Html->link(
                    "<span class='label-nav'>Login</span>",
                    array('controller' => 'users', 'action' => 'login'),
                    array('escape' => false));
                    ?>
                </li>
            </ul>

        </nav>

        <!-- Mobile Nav. Container -->
        <ul class="mobile-nav">
            <li class="responsive-searchbox">
                <!-- Responsive Nave -->
                <form action="#" method="get">
                    <button class="icon-search"></button>
                </form>
                <!-- //Responsive Nave// -->
            </li>
        </ul>
        <!-- //Mobile Nav. Container// -->
    </div>
    <!-- Nav -->

</div>

</div>
</header>
<!-- //Header// -->
