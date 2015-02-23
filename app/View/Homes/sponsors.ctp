<div class="container">
    <div class="space-sep80"></div>


    <div class="row">
        <div class="col-md-12 col-sm-12 animated" data-animtype="fadeInDown"
             data-animrepeat="0"
             data-speed="1s"
             data-delay="0.2s">
            <h2 class="h2-section-title">Our Sponsors </h2>
            <ul class="section-clients">
                <?php
                /** @var Array $image_paths */
                foreach($image_paths as $img_path): ?>
                    <li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.2s">
                        <?php echo $this -> Html -> image('sponsor-images/' . $img_path, array(
                            'class' => 'img-responsive client-image'
                        ));?>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>
<div class="testimonial-big">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12" >
                <div class="testimonial-big-text animated" data-animtype="fadeInRight"
                     data-animrepeat="1"
                     data-speed="1s"
                     data-delay="0s">
                        Thank you to all the businesses and individuals who have and continue to support the CofC Cybersecurity Club.
                </div>
            </div>
        </div>
    </div>
</div>