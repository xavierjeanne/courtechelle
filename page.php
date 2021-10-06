<?php get_header(); ?>
    <div class="row m-3" id="description">
        <h2 class="w-100">Découvrir la Courtéchelle</h2>
    </div>
    <div class="row m-3" id="videos">
        <h2 class="w-100 text-right">Videos</h2>
    </div>
    <div class="row m-3" id="concert">
        <h2>Date de concert</h2>
    </div>
    <div class="row m-3" id="gallery">
        <h2 class="w-100 text-right">Galerie de photos</h2>
    </div>
    <div class="row m-3" id="contact">
        <h2 class="w-100">Me contacter</h2>
        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact"]');?>
    </div>
<?php get_footer(); ?>
