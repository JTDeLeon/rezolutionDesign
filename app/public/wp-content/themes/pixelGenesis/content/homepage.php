<?php /**
 * Template Name: Homepage
 * 
 * Pixel&Papers
 * 
 *
 * @author     Jonathan Deleon <Jondeleon856@gmail.com> & Clay Skougard <>
 */

 ?>

<?php 
function customEnqueue() {
  $build_dir = '/content/build';
  wp_enqueue_style( 'customWideStyles', get_stylesheet_directory_uri() . $build_dir . '/css/style.min.css', array(), '20190402' );
  wp_enqueue_script('pixelApp', get_stylesheet_directory_uri() . $build_dir . '/js/scripts.min.js', [], '20190626', true);
}
add_action( 'wp_enqueue_scripts', 'customEnqueue' );
?>

 <?php 
 //Genesis Template Styles
    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/style.css', null, null, 'all');

wp_head();
 ?>
 
<body class="home" >
    <div id="page" class="hfeed site">
        <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">

<!-- Begin Page Build Below -->

<section class="section-00">
    
<?php include 'partials/header.php' ?>
    
        <div class="one-column">
            <p class="headline">Web Designs, <br>Ecommerce, <br>Maintenance & SEO</p>
            <p class="headline-descr">If your website isn't optimized for your unique business requirements, you're leaving money on the table.</p>
            <div class="button-container">
                <img class="work-button" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-work-button.png">
            </div>
        </div>
</section>
                
<section class="section-01">
    <div class="one-column">
        <div class="circle-1">
            <img class="shopper" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-circle-shopper.png">
        </div>
        <div class="wp-container">
            <img class="wordpress" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-wordpress.png">
        </div>
        <div class="circle-2">
            <img class="merch" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-circle-merch.png">
        </div>
        <div class="circle-3">
            <img class="three-circles" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-three-dots.png">
        </div>
        <div class="s-container">
            <img class="shopify" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-shopify.png">
        </div>
        <div class="woo-container">
            <img class="woo" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-woo.png">
        </div>
        <div class="mag-container">
            <img class="magento" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-magento.png">
        </div>
        <div class="circle-4">
            <img class="three-circles" src="http://rezolution.local/wp-content/themes/pixelGenesis/content/build/image-min/section-01-mobile-circle-iPad.png">
        </div>
    </div>
</section>
                
<section class="section-02">
    <div class="one-column">
        <p class="services">OUR SERVICES</p>
        
        <p class="web">Website Design</p>
        <ul class="logo-1">
            <li>The Digital front door of your business, our team is equipped to make it stand out professionally</li>
        
        </ul>
        
        
    </div>
</section>

<hr>
<?php include 'partials/footer.php' ?>
<!-- End of Page Build -->
                
            </div>
        </div>
    </div>
</body>
<?php 
//This must be here at the end of the document
wp_footer();
?>