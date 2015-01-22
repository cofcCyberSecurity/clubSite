<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="call-us top-bar-block">
                    <i class="icon-phone"></i>
                    <span>
                        Call us at 843-953-6905
                    </span>
                </div>
                <div class="mail-us top-bar-block">
                    <i class="icon-email"></i>
                    <span>
                        E-mail: cybersecurityclub@cofc.edu
                    </span>
                </div>

            </div>
            <div class="col-sm-5">

                <!-- Search Box -->
                <div class="searchbox">
                    <form action="#" method="get">
                        <input type="text" class="searchbox-inputtext" id="searchbox-inputtext" name="s" placeholder="Search.."/>
                        <label class="searchbox-icon" for="searchbox-inputtext"></label>
                        <input type="submit" class="searchbox-submit" value="Search"/>
                    </form>
                </div>
                <!-- //Search Box// -->
                <div class="social-icons">
                    <ul>
                        <li>
                            <a href="#" target="_blank" class="social-media-icon facebook-icon" data-original-title="facebook">facebook</a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="social-media-icon twitter-icon" data-original-title="twitter">twitter</a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="social-media-icon googleplus-icon" data-original-title="googleplus">googleplus</a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="social-media-icon pininterest-icon" data-original-title="pininterest">pininterest</a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="social-media-icon dribble-icon" data-original-title="dribble">dribble</a>
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
            <?php echo $this->Html->image('CofC-Logos/cofc-logo.jpeg',
                array(
                'alt' => 'College Of Charleston',
                'url' => array(
                    'action' => '/'
                    ),
                'width' => '137',
                'height' => '40'
                )
            ); ?>
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
                        array('escape' => false));
                    ?>
                </li>
                <li>
                    <a href="#">
                        <span class="label-nav">
                            Team Members
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
                    <?php
                    echo $this->Html->link(
                        "<span class='label-nav'>Contact</span>",
                         array('controller' => '', 'action' => 'contact'),
                         array('escape' => false));
                    ?>
                </li>
                <li>
                    <a href="#">
                        <span class="label-nav">
                            About
                        </span>
                    </a>
                </li>
            </ul>

        </nav>

        <!-- Mobile Nav. Container -->
        <ul class="mobile-nav">
            <li class="responsive-searchbox">
                <!-- Responsive Nave -->
                <form action="#" method="get">
                    <input type="text" class="searchbox-inputtext" id="searchbox-inputtext-mobile" name="s" />
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
