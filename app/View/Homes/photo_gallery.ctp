<div class="body-wrapper">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12">

<div class="portfolio-items">
    <?php
    $counter = 0;
    /** @var Array $image_paths */
    foreach($image_paths as $img_path):?>
        <!-- Portfolio Item -->
        <div class="thumb-label-item seo">
            <div class="img-overlay thumb-label-item-img">
                <?php echo $this -> Html -> image('club-images/' . $img_path, array(
                    'id' => 'img-' . $counter
                ));?>
                <div class="item-img-overlay">
                    <a class="portfolio-zoom fa fa-plus" href=''
                       data-rel="prettyPhoto[portfolio]" title="College Of Charleston" id='<?php echo "pop-up-img-" . $counter?>'></a>
                    <div class="item_img_overlay_content">
                        <h3 class="thumb-label-item-title">
                            <a href="#"> College Of Charleston </a>
                        </h3>
                    </div>

                </div>
            </div>

            <script>
                var a = document.getElementById('<?php echo "pop-up-img-" . $counter?>');
                a.href = document.getElementById('<?php echo "img-" . $counter?>').src;
            </script>

        </div>
        <!-- //Portfolio Item// -->

    <?php
        $counter++;
        endforeach;
    ?>
</div>
</div>
</div>
</div>
</div>
