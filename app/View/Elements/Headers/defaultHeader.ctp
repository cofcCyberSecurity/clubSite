<meta charset="utf-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

<title>
    <?php echo $this->fetch('title'); ?>
</title>

<!--[if lt IE 9]>
    <!-- CSS Customization -->
<?php echo $this->Html->script('ie-fixes'); ?>
<?php echo $this -> Html -> css('ie-fixes');?>
<![endif]-->

<meta name="description" content="CofC Cyber Security Club">

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--- This should placed first off all other scripts -->
<?php echo $this -> Html -> css('revolution_settings');?>
<?php echo $this -> Html -> css('bootstrap');?>
<?php echo $this -> Html -> css('font-awesome');?>
<?php echo $this -> Html -> css('axfont');?>
<?php echo $this -> Html -> css('tipsy');?>
<?php echo $this -> Html -> css('prettyPhoto');?>
<?php echo $this -> Html -> css('isotop_animation');?>
<?php echo $this -> Html -> css('animate');?>

<?php echo $this -> Html -> css('style');?>
<?php echo $this -> Html -> css('responsive');?>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<?php echo $this->Html->script('respond'); ?>
<![endif]-->
<?php echo $this -> Html -> css('color-chooser');?>