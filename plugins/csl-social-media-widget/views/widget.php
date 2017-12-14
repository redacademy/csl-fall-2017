<!-- This file is used to markup the public-facing widget. -->
<?php if( strlen( trim( $facebook ) ) > 0     ):?>
<div class="social-media-container">
  <a href=" <?php echo $facebook; ?>" class="facebook-handler"><?php echo '<i class="fa fa-facebook-square" aria-hidden="true"></i>' ?></a>
  <p>Facebook</p>
</div>
<?php endif;?>

<?php if( strlen( trim( $twitter ) ) > 0     ):?>
<div class="social-media-container">
    <a href="<?php echo $twitter; ?>" class="twitter-handler"><?php echo '<i class="fa fa-twitter" aria-hidden="true"></i>' ?></a>
    <p>Twitter</p>
</div>
<?php endif;?>

<?php if( strlen( trim( $instagram ) ) > 0     ):?>
<div class="social-media-container">
    <a href= "<?php echo $instagram; ?>" class="instagram-handler"><?php echo '<i class="fa fa-instagram" aria-hidden="true"></i>' ?></a>
    <p>Instagram</p>
</div>
<?php endif;?>

